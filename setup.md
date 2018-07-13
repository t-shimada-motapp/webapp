## データベースの作成

```
> create database homestead;
> create user 'homestead'@'localhost' identified by 'secret';
> grant all on homestead.* to homestead@localhost;
> flush privileges;
```

