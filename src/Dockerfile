# Dockerfile to build the favicon.ico file.
#
# Usage:
#   $ docker build --no-cache -t build:local .
#   $ docker run --rm -it -v "$(pwd)":/src build:local
FROM php:cli-alpine

RUN \
    apk add --update --no-cache \
    gzip \
    zlib-dev \
    libpng-dev \
    && \
    docker-php-ext-install gd

WORKDIR /src

ENTRYPOINT [ "php", "index.php" ]
