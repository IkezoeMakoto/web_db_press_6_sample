# web_db_press_6_sample

## 環境構築

```shell script
# 初回だけsetupで.envを作成
$ make setup
# 以降はupで環境が立ち上がります
$ make up
```

環境が立ち上がれば `localhost` でphpinfoの画面が確認できます。

### .envのカスタマイズ
ローカルの80番ポートがすでに使用している場合は下記項目を編集して任意のポートにしてください。

```.env
HTTP_PORT=80
```
