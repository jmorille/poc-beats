Prometheus PHP stack exporter
================================

## Description
La stack PHP est constitué:
* Serveur Apache 2.4.6
* Serveur FPM 

Le monitoring est assuré par:
* Apache : <https://github.com/Lusitaniae/apache_exporter/releases>
* PHP-FPM : <https://github.com/bakins/php-fpm-exporter/releases>

## Run

```bash
 ./php-fpm-exporter.linux.amd64 --fastcgi="tcp://127.0.0.1:9000/status"
```
 