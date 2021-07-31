# Create Blank and Transparent `favicon.ico` (16x16px)

Run the [index.php](index.php) locally or via Docker.

```shellsession
$ # Run locally (Requires zlib and GD extension)
$ php index.php
...
```

```shellsession
$ # Build image
$ docker build -t build:local .
...
$ # Create favicon.ico image under ./bin
$ docker run --rm -it -v "$(pwd)":/src build:local
...
```
