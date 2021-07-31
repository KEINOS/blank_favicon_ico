<?php
// ============================================================================
//   Sample index.php (parser) file for the build-in PHP server.
// ============================================================================

// ----------------------------------------------------------------------------
//  Constants
// ----------------------------------------------------------------------------
// gzip compressed base64 encoded favicon.ico
define(
    "FAVICON_BASE64_GZIP",
    'H4sIAAAAAAAAA2NgYARCAQEGIKnAkMHCwCDGwMCgAcRAIaAIRBwX+P///ygexaN4xGIGijAASeibMX4EAAA='
);

// ----------------------------------------------------------------------------
//  Favicon.ico
// ----------------------------------------------------------------------------

// If the request is for a favicon.ico file, send it and exit.
if (isRequestFaviconIco()) {
    echoFaviconAndExit();
}

// ----------------------------------------------------------------------------
//  Main
// ----------------------------------------------------------------------------

// Do something
echo file_get_contents(__DIR__ . '/hello.html');

// ----------------------------------------------------------------------------
//  Functions
// ----------------------------------------------------------------------------

// echoFaviconAndExit
//
// Send favicon.ico and exit if the request is for it. If the client supports
// gzip compression then sends the gzipped favicon.ico file.
function echoFaviconAndExit()
{
    // Send the favicon.ico content type.
    // We use "image/vnd.microsoft.icon" insted of "image/x-icon". Since it is
    // preferable to use MIME type defined in IANA.
    // https://en.wikipedia.org/wiki/Favicon#Standardization
    header('Content-Type: image/vnd.microsoft.icon');

    // Use browser cache for less traffic (604800sec = 1week)
    header('Cache-Control: public, max-age=604800, immutable');

    // Detect if the client supports gzip compressed transfer from the request
    // header.
    if (strpos(filter_input(INPUT_SERVER, 'HTTP_ACCEPT_ENCODING'), 'gzip') !== false) {
        $bin_favicon_gzip = base64_decode(FAVICON_BASE64_GZIP);

        // Send gzip header and the binary
        header('Content-Encoding: gzip');
        header('Content-Length: ' . strlen($bin_favicon_gzip));

        echo $bin_favicon_gzip;
    } else {
        // Print the raw image if the client does not support gzip
        $bin_favicon_raw = gzdecode(base64_decode(FAVICON_BASE64_GZIP));

        header('Content-Length: ' . strlen($bin_favicon_raw));

        echo $bin_favicon_raw;
    }

    exit(0);
}

function isRequestFaviconIco()
{
    if (isset($_SERVER['REQUEST_URI']) && ($_SERVER['REQUEST_URI'] === '/favicon.ico')) {
        return true;
    }

    return false;
}
