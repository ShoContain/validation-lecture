1. ライブラリーをインストール
    - `composer install`
2. 今回はmysqlではなくsqliteを使用するので`database`フォルダ直下に`database.sqlite`という名前のファイルを作成してください。
3. .env.exampleを作成。
    - macの方
        - `cp .env.example .env`
    - windowsの方
        - `copy .env.example .env`
4. Applicationキーを生成。
    - `php artisan key:generate`
5. migrationの実行とテストデータ作成
    - `php artisan migrate --seed`
6. ローカルサーバー立ち上げ
    - `php artisan serve`