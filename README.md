Docker LAMP example
==========================

This repository contains a LAMP stack built using Docker

## Bringing up the services
 
You can start an `Apache Server`, `MariaDB` and `phpMyAdmin` by executing:
```bash
> docker-compose up -d
```
The `Apache Server` is reachable on port `80` and `phpMyAdmin` on `8890`.

For stopping the services simply:
```bash
> docker-compose stop
```
