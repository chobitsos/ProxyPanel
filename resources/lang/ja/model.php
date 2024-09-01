<?php

declare(strict_types=1);

return [
    'aff' => [
        'amount' => '注文金額',
        'commission' => 'コミッション',
        'created_at' => '注文日',
        'invitee' => '購入者',
        'updated_at' => '処理日',
    ],
    'article' => [
        'attribute' => '記事',
        'category' => 'カテゴリー',
        'created_at' => '公開日',
        'language' => '言語',
        'logo' => 'カバー',
        'updated_at' => '更新日',
    ],
    'common' => [
        'description' => '説明',
        'extend' => '拡張情報',
        'level' => 'レベル',
        'sort' => 'ソート',
        'type' => 'タイプ',
    ],
    'country' => [
        'code' => '国コード',
        'icon' => '国旗',
        'name' => '国名',
    ],
    'coupon' => [
        'attribute' => 'クーポン',
        'groups' => 'グループ制限',
        'levels' => 'レベル制限',
        'logo' => 'ロゴ',
        'minimum' => '最低利用額',
        'name' => '名前',
        'newbie' => '新規ユーザー専用',
        'num' => '数量',
        'priority' => '優先度',
        'services_blacklist' => 'ブラックリスト商品',
        'services_whitelist' => 'ホワイトリスト商品',
        'sn' => 'コード',
        'usable_times' => '使用制限',
        'used' => '個人制限',
        'users_blacklist' => 'ブラックリストユーザー',
        'users_whitelist' => 'ホワイトリストユーザー',
        'value' => '価値',
    ],
    'goods' => [
        'attribute' => '商品',
        'available_date' => '有効期間',
        'category' => 'カテゴリー',
        'color' => '色',
        'hot' => 'ベストセラー',
        'info' => 'カスタム情報',
        'invite_num' => 'ボーナス招待数',
        'limit_num' => '購入制限',
        'logo' => 'ロゴ',
        'name' => '名前',
        'period' => 'リセットサイクル',
        'price' => '価格',
        'renew' => 'データ更新価格',
        'traffic' => 'データ許容量',
        'user_limit' => 'ユーザー速度制限',
    ],
    'ip' => [
        'info' => '位置情報',
        'network_type' => 'ネットワークタイプ',
    ],
    'node' => [
        'attribute' => 'ノード',
        'client_limit' => 'クライアント制限',
        'country' => '国',
        'data_consume' => 'データ消費',
        'data_rate' => 'データ比率',
        'ddns' => 'DDNS',
        'detection' => 'ブロック検出',
        'display' => '表示とサブスクリプション',
        'domain' => 'ドメイン',
        'id' => 'ノードID',
        'ipv4' => 'IPv4アドレス',
        'ipv6' => 'IPv6アドレス',
        'label' => 'ラベル',
        'method' => '暗号化方式',
        'name' => '名前',
        'next_renewal_date' => '次回更新日',
        'obfs' => '難読化',
        'obfs_param' => '難読化パラメータ',
        'online_user' => 'オンラインユーザー',
        'protocol' => 'プロトコル',
        'protocol_param' => 'プロトコルパラメータ',
        'push_port' => 'プッシュポート',
        'relay_port' => 'リレーポート',
        'renewal_cost' => '請求額',
        'service_port' => 'サービスポート',
        'single' => 'シングルポート',
        'single_passwd' => 'シングルポートパスワード',
        'static' => 'ステータス',
        'subscription_term' => '契約期間',
        'traffic_limit' => '速度制限',
        'transfer' => 'リレー',
        'udp' => 'UDP',
        'v2_alter_id' => '代替ID',
        'v2_cover' => 'カバー',
        'v2_host' => 'ホスト',
        'v2_net' => 'ネットワーク',
        'v2_path' => 'パスまたはキー',
        'v2_sni' => 'SNI',
        'v2_tls' => 'TLS',
        'v2_tls_provider' => 'TLS設定',
    ],
    'node_auth' => [
        'attribute' => 'ノード認証',
        'key' => '通信キー<small>ノード用</small>',
        'secret' => 'リバースキー',
    ],
    'node_cert' => [
        'attribute' => '証明書',
        'domain' => 'ドメイン',
        'expired_date' => '有効期限',
        'issuer' => '発行者',
        'key' => 'キー',
        'pem' => '証明書',
        'signed_date' => '発行日',
    ],
    'notification' => [
        'address' => '受信者',
        'created_at' => '送信日',
        'status' => 'ステータス',
    ],
    'oauth' => [
        'identifier' => '識別子',
        'type' => 'チャンネル',
    ],
    'order' => [
        'attribute' => '注文',
        'id' => '注文ID',
        'original_price' => '元の価格',
        'pay_way' => '支払い方法',
        'price' => '支払金額',
        'status' => 'ステータス',
    ],
    'permission' => [
        'attribute' => '権限',
        'description' => '説明',
        'name' => 'ルート名',
    ],
    'referral' => [
        'amount' => '金額',
        'created_at' => '申請日',
        'id' => '申請ID',
        'user' => '申請者',
    ],
    'role' => [
        'attribute' => '役割',
        'name' => '名前',
        'permissions' => '権限',
    ],
    'rule' => [
        'attribute' => 'ルール',
        'name' => '説明',
        'pattern' => '値',
    ],
    'rule_group' => [
        'attribute' => 'ルールグループ',
        'name' => '名前',
        'rules' => 'ルール',
        'type' => 'タイプ',
    ],
    'subscribe' => [
        'ban_desc' => '禁止理由',
        'ban_time' => '禁止時間',
        'code' => 'サブスクリプションコード',
        'req_header' => 'リクエストヘッダー',
        'req_ip' => 'リクエストIP',
        'req_times' => 'リクエスト回数',
        'updated_at' => '最終リクエスト時間',
    ],
    'user' => [
        'account_status' => 'アカウントステータス',
        'attribute' => 'ユーザー',
        'created_date' => '登録日',
        'credit' => '残高',
        'expired_date' => '有効期限',
        'id' => 'ユーザーID',
        'invite_num' => '利用可能な招待数',
        'inviter' => '招待者',
        'nickname' => 'ニックネーム',
        'password' => 'パスワード',
        'port' => 'ポート',
        'proxy_method' => '暗号化方式',
        'proxy_obfs' => '難読化',
        'proxy_passwd' => 'プロキシパスワード',
        'proxy_protocol' => 'プロトコル',
        'proxy_status' => 'プロキシステータス',
        'qq' => 'QQ',
        'remark' => '備考',
        'reset_date' => 'データリセット日',
        'role' => '権限',
        'service' => 'プロキシサービス',
        'speed_limit' => '速度制限',
        'traffic_used' => '使用済みデータ',
        'usable_traffic' => '利用可能なデータ',
        'username' => 'ユーザー名',
        'uuid' => 'VMess UUID',
        'wechat' => 'WeChat',
    ],
    'user_credit' => [
        'after' => '変更後の残高',
        'amount' => '変更金額',
        'before' => '変更前の残高',
        'created_at' => '変更日時',
    ],
    'user_data_modify' => [
        'after' => '変更後のデータ',
        'before' => '変更前のデータ',
        'created_at' => '変更日時',
    ],
    'user_group' => [
        'attribute' => 'ユーザーグループ',
        'name' => 'グループ名',
        'nodes' => 'ノード',
    ],
    'user_traffic' => [
        'download' => 'ダウンロード',
        'log_time' => '記録時間',
        'total' => '合計',
        'upload' => 'アップロード',
    ],
];
