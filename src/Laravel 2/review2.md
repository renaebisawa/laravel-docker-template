# Laravel Lesson レビュー②

## Todo編集機能

### @method('PUT')を記述した行に何が出力されているか
<input type="hidden" name="_method" value="PUT">が再生される

### findメソッドの引数に指定しているIDは何のIDか
App\Todo

### findメソッドで実行しているSQLは何か
select * from `todos` where `todos`.`id` = ? and `todos`.`deleted_at` is null limit 1

### findメソッドで取得できる値は何か
7 のレコードを取得

### saveメソッドは何を基準にINSERTとUPDATEを切り替えているのか
save メソッドは、Eloquentモデルのインスタンスが新しいレコードか既存のレコードかによって、INSERT か UPDATE の処理を自動的に切り替える

## Todo論理削除

### traitとclassの違いとは
クラスの継承とは異なり1つのクラスに複数のトレイトを追加することができる
トレイト自体はインスタンス化できない

### traitを使用するメリットとは
複数のクラス間でコードを共通化・再利用することが可能

## その他

### TodoControllerクラスのコンストラクタはどのタイミングで実行されるか
　ddを使用して確認しましたが、どこのタイミングかは読み取れませんでした

### RequestクラスからFormRequestクラスに変更した理由
FormRequestクラスを継承したTodoRequestクラスを作成するため

### $errorsのhasメソッドの引数・返り値は何か
引数はcontent、返り値:はtrue（エラーがある場合）または false（エラーがない場合）

### $errorsのfirstメソッドの引数・返り値は何か
引数はcontent、返り値はstring または null

### フレームワークとは何か
システム開発で頻繁に使用する機能をまとめたもの

### MVCはどういったアーキテクチャか
開発効率を高めるために作られたアーキテクチャ
再利用性・可読性を優れ、保守性を高めてくれる
MVCごとに役割が分担されており、役割を理解することが重要である
Model（モデル）: データとビジネスロジックを管理する。
View（ビュー）: ユーザーに情報を表示する。
Controller（コントローラー）: ユーザーの入力を処理し、モデルとビューを調整する。

### ORMとは何か、またLaravelが使用しているORMは何か
ORMはClassとテーブルを紐付けSQL文を意識することなくテーブル操作が可能になるためのもの
LaravelのORMはEloquentと呼ばれる

### composer.json, composer.lockとは何か
composer.json→プロジェクトの依存関係やメタデータを定義するファイル
composer.lock→実際にインストールされた依存関係とそのバージョンを記録するファイル

### composerでインストールしたパッケージ（ライブラリ）はどのディレクトリに格納されるのか
vendor ディレクトリに格納される