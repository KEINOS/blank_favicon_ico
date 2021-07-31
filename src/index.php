<?php

require_once('php_ico.php.inc');

// Create 16 x 16 px transparent image
$res_image = imagecreatetruecolor(16, 16);
imagealphablending($res_image, false);
$color_bg = imagecolorallocatealpha($res_image,255,255,255,127);
imagefilledrectangle($res_image,0,0,16,16,$color_bg);
imagefill($res_image, 0, 0, $color_bg);
imagealphablending($res_image,true);

// PNG image to ICO format
$ico_lib = new PHP_ICO();
$ico_lib->_add_image_data($res_image);
$bin_ico = $ico_lib->_get_ico_data();

// Export raw ICO data to file
echo '- Export favicon.ico to ./bin', PHP_EOL;
$name_file_ico = 'favicon.ico';
$path_file_ico = "./bin/${name_file_ico}";

if (file_put_contents($path_file_ico, $bin_ico) === false )
    exit('Error: Cannot write to file '.$path_file_ico);

$hash_file = hash_file("sha256", $path_file_ico);
echo "  Hash SHA-256: ${hash_file}", PHP_EOL;

// Encode to base64 the raw binary ICO data
echo '- RAW Image Base64 Encoded:', PHP_EOL;
echo base64_encode($bin_ico), PHP_EOL;

// Compress the raw binary ICO data with gzencode and encode to base64
$str_compressed   = gzencode($bin_ico);
$base64_gzenc_ico = base64_encode($str_compressed);
echo '- Compressed Image Base64 Encoded:', PHP_EOL;
echo $base64_gzenc_ico, PHP_EOL;

// Verify if the compressed data is smaller than the raw data
$str_compressed = base64_decode($base64_gzenc_ico);
$bin_ico_test   = gzdecode($str_compressed);
echo '- Validation Check: ', ($bin_ico === $bin_ico_test) ? 'SAME IMAGE' : 'IMAGE NOT MATCH', PHP_EOL;

// The image size of the raw binary ICO data
echo '- Image Size (Byte): ' . strlen($bin_ico), PHP_EOL;
