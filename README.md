[[日本語ドキュメント](https://qiita.com/KEINOS/items/2f23518990b3f971a0ab)]

# Blank and Transparent favicon.ico

It's all about **blank and transparent `favicon.ico` in 16x16px size**.

Use them to avoid 404 error such as `Failed to load resource: the server responded with a status of 404 (Not Found)`.

To see how it was created see [src](./src).

## Download

```bash
curl -sSL https://git.io/blankfavicon16x16 -o favicon.ico
```

```bash
wget https://git.io/blankfavicon16x16 -O favicon.ico
```

- [https://git.io/blankfavicon16x16](https://git.io/blankfavicon16x16)
  - It's an alias of: [https://raw.githubusercontent.com/KEINOS/blank_favicon_ico/main/src/bin/favicon.ico](https://raw.githubusercontent.com/KEINOS/blank_favicon_ico/main/src/bin/favicon.ico)
  - File hash (SHA-256): `d045cf18c23cc401f923184e59dec507650203c196e6a90feb2ec6523c66af2a`

  ```shellsession
  $ sha256sum favicon.ico
  d045cf18c23cc401f923184e59dec507650203c196e6a90feb2ec6523c66af2a  favicon.ico
  ```

## Base64 Encoded

```text
AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAA==
```

## Embedd HTML5

```html
<head>
  <link rel="icon" type="image/vnd.microsoft.icon" href="data:;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAP//AAD//wAA//8AAA==" />
</head>
```

## `gzip`ped Base64 Encoded

```text
H4sIAAAAAAAAA2NgYARCAQEGIKnAkMHCwCDGwMCgAcRAIaAIRBwX+P///ygexaN4xGIGijAASeibMX4EAAA=
```

## Decode Sample (PHP)

```php
// Gzip compressed & Base64 encoded string
$base64_favicon = 'H4sIAAAAAAAAA2NgYARCAQEGIKnAkMHCwCDGwMCgAc'
                . 'RAIaAIRBwX+P///ygexaN4xGIGijAASeibMX4EAAA=';

// Decode and extract
$str_compressed = base64_decode($base64_favicon);
$bin_image = gzdecode($str_compressed);

// Print
header('Content-Type: image/vnd.microsoft.icon');
header('Content-Length: ' . strlen($bin_image));
echo $bin_image;
```

## Parser Script Sample

```php
php -S localhost:8080 router.php
```

- [./sample/router.php](./sample/router.php)
