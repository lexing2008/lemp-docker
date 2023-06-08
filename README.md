# lemp-docker

### Настройка 
#### 1. Нужно добавить в /etc/hosts

```
127.0.0.1   seatos.local
127.0.0.1   img.seatos.local
```

```
sudo nano /etc/hosts
```
#### 2. Добавить папку /tms и в нее спуллить репозиторий
либо скопировать папку tms.example  в tms. 

tms.example содержит простой пример сайта

#### 3. Скопировать .env.example в .env и настроить .env
```
cp .env.example .env
```
```
nano .env
```
#### 4. Imgproxy
В .env  есть настройки доступа imgproxy к хранилищу S3. Если их оставить такими как они были в .env.example то ничего плохого не произойдет, просто imgproxy не будет иметь доступа к S3.  

Imgproxy не поднимится, если нет папки в tms/cache/storage/public

Пример URL доступа к локальному файлу
http://img.seatos.local/0/fit/500/500/ce/1/plain/local:///1.jpg

При этом локальный файл размещен тут: tms/cache/storage/public
