# Laravel Lesson レビュー①

## Todo一覧機能

### Todoモデルのallメソッドで実行しているSQLは何か
SELECT * FROM todos;

### Todoモデルのallメソッドの返り値は何か
Illuminate\Database\Eloquent\Model;

### 配列の代わりにCollectionクラスを使用するメリットは
コードの簡潔さ、柔軟なデータ操作、チェーンメソッドの使用など

### view関数の第1・第2引数の指定と何をしているか
'todo.index、todos' => $todos

### index.blade.phpの$todos・$todoに代入されているものは何か
Todo インスタンスが代入されている

## Todo作成機能

### Requestクラスのallメソッドは何をしているか
GETやPOSTのデータを配列として取得

### fillメソッドは何をしているか
引数に指定した連想配列を一括代入

### $fillableは何のために設定しているか
一括代入には脆弱性があるため$fillableを定義して代入できる項目に制限をかける必要がある

### saveメソッドで実行しているSQLは何か
INSERT INTO SQL文を実行

### redirect()->route()は何をしているか
redirect()->route('ルート名')とすることでリダイレクトさせることができる

## その他

### テーブル構成をマイグレーションファイルで管理するメリット

### マイグレーションファイルのup()、down()は何のコマンドを実行した時に呼び出されるのか
upメソッドを実行するためには、php artisan migrateコマンドを実行
downメソッドを実行するためには、rollbackコマンドを実行

### Seederクラスの役割は何か
データベースにテストデータや初期データを登録すること

### route関数の引数・返り値・使用するメリット
URLの保守性、一貫性、セキュリティ、動的パラメータの自動処理

### @extends・@section・@yieldの関係性とbladeを分割するメリット
コードの再利用、保守性の向上、一貫性の確保、テストやデバッグの効率化、柔軟性の向上

### @csrfは何のための記述か
CSRF攻撃からフォームを保護するため

### {{ }}とは何の省略系か
エスケープ処理付きの変数出力