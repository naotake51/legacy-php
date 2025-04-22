
## セットアップ

```bash
docker composer up
```

以下のコンテナが起動します。

|コンテナ名|役割|
|---|---|
|web|ApacheとPHPがインストールされいるWebサーバー|
|db|MySQLがインストールされているDBサーバー|
|phpmyadmin|PhpMyAdminがインストールされている。開発時にMySQL DBを操作するためのUIを提供する（ http://localhost:8081/ ）|

## コマンド（Makefile）

### MySQLコマンド

```bash
make mysql COMMAND="<command>"
```

例

```bash
make mysql COMMAND="CREATE TABLE samples (id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(255) NOT NULL);"
```

### Composerコマンド

```bash
make composer COMMAND="<command>"
```

例

```bash
make composer COMMAND="install"
```
