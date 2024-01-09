Start php web server:

```
php -S 127.0.0.1:8080 
```

Run mysql docker image

```
docker run --name news_db -e MYSQL_ROOT_PASSWORD=password -e MYSQL_USER=username -e MYSQL_PASSWORD=password -p 3306:3306 -d mysql
```

Add test articles
```
docker exec -ti news_db bash;

create database news_db;
use news_db;

create table article (id int auto_increment, title varchar(255), primary key (id));

insert into article (title) values ("First article");
insert into article (title) values ("Second article");
```
