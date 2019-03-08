テストデータ生成
```angular2html
php artisan migrate:fresh --seed
```
ユーザーのパスワードは、全員secret  


apiの仕様書は、
public/docs/public/docs/index.html

ちなみに、仕様書の更新コマンドは
```angular2html
php artisan apidoc:generate
```

店情報をDBに格納するコマンド(cron用)
```
php artisan make:shopinfo
```
・上記のコマンドを５分ごとに回す、スケジュール追加
　https://readouble.com/laravel/5.7/ja/scheduling.html
　この辺を参考に、cronをgaeに追加してもらえるとありがたいです。
　これを回さないと、おすすめのデータが適当になります

・プレゼン用データのみをリロードするコマンド
```
php artisan reload:presentation
```
・デモ機用データのみをリロードするコマンド
```
php artisan reload:demo
```


### APIリファレンス

<https://laravelv2-dot-eventer-1543384121468.appspot.com/docs/index.html>
