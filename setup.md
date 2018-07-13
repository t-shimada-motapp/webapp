## データベースの作成

```
> create database homestead;
> create user 'homestead'@'localhost' identified by 'secret';
> grant all on homestead.* to homestead@localhost;
> flush privileges;
```

## git clone の後にすること

ライブラリ等のインストール
```
$ composer install
```

環境設定ファイルの作成とアプリケーションキーの作成
```
$ cp .env.example .env
$ php artisan key:generate
```

DBの作成
```
$ php artisan migrate
```

Admin-LTEのインストール
```
$ cd public
$ bower install admin-lte
```
