nginx-php7.2
==========
Build image
-----------

```bash
git clone https://github.com/Basermc/proyecto_final_devops.git
cd proyecto_final_devops

````

Run on container
-------------`
```bash
sudo make run
```

install monitoring-stack
-------------`
```bash
cd ./monitoring-stack
docker-compose up -d --build
```