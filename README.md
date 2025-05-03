# 標準リポジトリ

このリポジトリは、社内の新規プロジェクト用の「標準リポジトリ」としてgithubにてテンプレートリポジトリとして設定されています。

環境構築の省力化や抜け漏れを防ぐために作られており、新規作成時の手順が全て実行された状態のリポジトリとなります。

以下の手順に従ってリポジトリ新規作成から初期設定を行ってください。

<br>

## 前提条件

#### 作成するプロジェクトのバージョンについて
- **Laravelのバージョン**: 11
- **PHPのバージョン**: 8.2以上9未満（デフォルトは8.3）

#### ローカル環境について
- Docker Desktopをインストール済みであること

<br>

## 新規プロジェクト作成手順

1. **リポジトリを作成する**
   1. リポジトリ作成画面で、テンプレートリポジトリとして、「Repository template」に `standard-repository` を指定する。
   2. ※「Include all branches」にはチェックを入れない（マルチオースあり版などの派生ブランチが出来る可能性があるため）
   3. ※デフォルトブランチは `develop` に設定されています。
2. **リポジトリをクローンする**
   1. git clone `https://github.com/forsisters/{リポジトリ名}.git` && cd `{リポジトリ名}`
3. **PHPのバージョンを指定する（8.3以外を使用する場合のみ）**
   1. `docker-compose.yml`の`laravel.test`コンテナの2箇所を指定のバージョンに書き換える
   2. `.github/workflows/larastan.yml` `.github/workflows/php-cs-fixer.yml`の2つのファイルの`php-version`を書き換える
4. **環境構築をする**
   1. `make ini-setup PHP_VERSION=83`（PHP_VERSIONには適切にバージョンを指定）コマンドにて環境構築が実行される
5. **環境構築完了**
   1. `http://localhost/`でアクセスできる
6. **コミットとプッシュ**
   1. 環境構築にて差分がでた場合は「初期設定完了」というコミットを作成してプッシュする

<br>

## 2人目以降の環境構築手順（clone手順）
1. いつもどおりクローンする
2. `make clone-setup PHP_VERSION=83`（PHP_VERSIONには適切にバージョンを指定）コマンドにて環境構築が実行される

<br>

## その他説明
1. こちらのREADME.mdはプロジェクト作成後は各プロジェクトのREADME.mdとして使用してください
2. larastanとphp-cs-fixerの実行コマンド（Makefileに定義してあります）
   1. `make larastan`
   2. `make fixer`
3. mainブランチについて
   1. mainは必要に応じて（本番環境構築時など）developから作成してください
4. phpmyadminへのアクセス
   1. `http://localhost:8080/`
5. デバッグバーの設定ファイルを出す場合
   1. `sail artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"`
6. このリポジトリの中身について
   1. 基本的には「[Laravelリポジトリ新規作成から初期設定までのマニュアル.md](https://github.com/forsisters/minsys-dev-standard/blob/main/Laravel%E3%83%AA%E3%83%9D%E3%82%B8%E3%83%88%E3%83%AA%E6%96%B0%E8%A6%8F%E4%BD%9C%E6%88%90%E3%81%8B%E3%82%89%E5%88%9D%E6%9C%9F%E8%A8%AD%E5%AE%9A%E3%81%BE%E3%81%A7%E3%81%AE%E3%83%9E%E3%83%8B%E3%83%A5%E3%82%A2%E3%83%AB.md)」の手順で作成されています
7. メジャーアップデートに関して
   1. laravelの次のバージョン（12）が出たときに対応方法を考えます
