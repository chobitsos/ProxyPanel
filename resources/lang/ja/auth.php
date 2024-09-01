<?php

declare(strict_types=1);

return [
    'accept_term' => '私は読んで同意しました',
    'active' => [
        'attribute' => 'アクティベート',
        'error' => [
            'activated' => 'アカウントは既にアクティベートされています、再度アクティベートする必要はありません',
            'disable' => 'アカウントのアクティベートは無効です、直接ログインできます！',
            'throttle' => 'アクティベートリクエストの制限に達しました、後でもう一度お試しください。ご質問がある場合は:emailに連絡してください。',
        ],
        'promotion' => 'アカウントがまだアクティベートされていません、まず「:action」を行ってください！',
        'sent' => 'アクティベートリンクがメールに送信されましたので、受信トレイ（スパムフォルダも含む）を確認してください。',
    ],
    'aup' => '使用許諾ポリシー',
    'captcha' => [
        'attribute' => 'キャプチャ',
        'error' => [
            'failed' => 'キャプチャの検証に失敗しました、再試行してください',
            'timeout' => 'キャプチャの有効期限が切れました、再読み込みして再試行してください。',
        ],
        'required' => 'キャプチャを完了してください！',
        'sent' => 'キャプチャがメールに送信されましたので、受信トレイ（スパムフォルダも含む）を確認してください。',
    ],
    'email' => [
        'error' => [
            'banned' => '使用しているメールプロバイダーはブロックされています、他のメールを使用してください。',
            'invalid' => 'サポートされていないメールです。',
        ],
    ],
    'error' => [
        'account_baned' => 'アカウントが禁止されています！',
        'login_error' => 'ログインエラーが発生しました、後でもう一度お試しください！',
        'login_failed' => 'ログインに失敗しました、ユーザー名とパスワードを確認してください！',
        'not_found_user' => 'アカウントが見つかりません、他のログイン方法を試してください。',
        'repeat_request' => 'リクエストを繰り返さないでください、再読み込みして再試行してください。',
        'url_timeout' => 'リンクの有効期限が切れました、再度リクエストしてください。',
    ],
    'failed' => '無効な資格情報です。',
    'invite' => [
        'get' => '招待コードを取得',
        'not_required' => '招待コードは不要です、直接登録できます！',
        'unavailable' => '無効な招待コードです、再試行してください。',
    ],
    'login' => 'ログイン',
    'logout' => 'ログアウト',
    'maintenance' => 'メンテナンス',
    'maintenance_tip' => 'メンテナンス中',
    'oauth' => [
        'login_failed' => 'サードパーティのログインに失敗しました！',
        'register' => 'クイック登録',
        'registered' => '既に登録されています、直接ログインしてください。',
    ],
    'one-click_login' => 'ソーシャルログイン',
    'optional' => 'オプション',
    'password' => [
        'forget' => 'パスワードを忘れた方はこちら',
        'new' => '新しいパスワードを入力',
        'original' => '現在のパスワード',
        'reset' => [
            'attribute' => 'パスワードの再設定',
            'error' => [
                'demo' => 'デモモードでは管理者パスワードを変更できません。',
                'disabled' => 'パスワードリセットは無効です、サポートが必要な場合は:emailに連絡してください。',
                'same' => '新しいパスワードは古いパスワードと同じにできません、再入力してください。',
                'throttle' => '24時間以内に:time回しかパスワードをリセットできません、頻繁な操作は避けてください。',
                'wrong' => 'パスワードが間違っています、再試行してください。',
            ],
            'sent' => 'リセットリンクがメールに送信されましたので、受信トレイ（スパムフォルダも含む）を確認してください。',
            'success' => '新しいパスワードが正常にリセットされました、ログインできます。',
        ],
    ],
    'register' => [
        'attribute' => 'サインアップ',
        'code' => '登録コード',
        'error' => [
            'disable' => '申し訳ありませんが、現在新規ユーザーの受付を停止しています。',
            'throttle' => 'アンチボットシステムが作動しました！頻繁な提出は避けてください。',
        ],
        'failed' => '登録に失敗しました、後でもう一度お試しください。',
        'promotion' => 'アカウントをお持ちでない方は、まず',
    ],
    'remember_me' => 'ログイン状態を保持する',
    'request' => 'リクエスト',
    'throttle' => '試行回数が多すぎます、:seconds秒後にもう一度お試しください。',
    'tos' => '利用規約',
];
