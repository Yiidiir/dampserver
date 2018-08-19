# Dampserver
Docker Apache MySQL PHP

## Usage

1. ``git clone`` & ``cd`` to this repository:
``git clone https://github.com/Yiidiir/dampserver.git && cd dampserver``

2. Update ``.docker/php-apache/httpd.conf``,``.docker/php-apache/php.ini`` & ``.docker/php-apache/php.ext.txt`` 

<<<<<<< HEAD
**NOTE:** php.ext.txt does not support extensions that depend on other libs requiring apt-get yet, you might need to run ``docker exec -it [CONTAINER ID] bash`` and run appropriate commands if needed.
=======
** php.ext.txt should contain the list of php extensions to be installed by ``docker-php-ext-install``;  yet, it does not support extensions that depend on other libs requiring apt-get, you might need to run ``docker exec -it [CONTAINER ID] bash`` and run appropriate commands if needed**

3. Docker-compose build
```
docker-compose build
```

4. RUN
```
docker-compose run -d
```

### TODO:
- [ ] Better/Flexible php extensions management
- [ ] Mount MySQL my.cnf
- [ ] ENV file