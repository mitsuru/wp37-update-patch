# WP37 update patch

## これは何？
WordPress3.7で発生する、自動アップデートの問題を回避します。

## 何をしてるの？
自動アップデート用のapiの接続する際、curlではSSLの接続がうまくいかないため、curlを一時的に無効にしてsoketのトランスポートにフォールバックさせています。

## Install
1. put this plugin under wp-content/plugins.
2. enable this plugin.
