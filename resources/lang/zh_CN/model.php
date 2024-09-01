<?php

declare(strict_types=1);

return [
    'aff' => [
        'amount' => '消费金额',
        'commission' => '返利',
        'created_at' => '下单时间',
        'invitee' => '消费者',
        'updated_at' => '处理时间',
    ],
    'article' => [
        'attribute' => '文章',
        'category' => '分类',
        'created_at' => '发布时间',
        'language' => '语言',
        'logo' => '封面',
        'updated_at' => '更新时间',
    ],
    'common' => [
        'description' => '描述',
        'extend' => '扩展信息',
        'level' => '等级',
        'sort' => '排序',
        'type' => '类型',
    ],
    'country' => [
        'code' => '国家/地区代码',
        'icon' => '国旗',
        'name' => '国家/地区名称',
    ],
    'coupon' => [
        'attribute' => '卡券',
        'groups' => '分组限制',
        'levels' => '等级限制',
        'logo' => '图片',
        'minimum' => '满减条件',
        'name' => '名称',
        'newbie' => '新用户专享',
        'num' => '数量',
        'priority' => '权重',
        'services_blacklist' => '禁用商品',
        'services_whitelist' => '适用商品',
        'sn' => '卡号',
        'usable_times' => '使用次数',
        'used' => '个人限制',
        'users_blacklist' => '禁止用户',
        'users_whitelist' => '允许用户',
        'value' => '面值',
    ],
    'goods' => [
        'attribute' => '商品',
        'available_date' => '有效期',
        'category' => '分类',
        'color' => '颜色',
        'hot' => '热销',
        'info' => '自定义信息',
        'invite_num' => '赠送邀请码名额',
        'limit_num' => '限购数量',
        'logo' => '商品图片',
        'name' => '名称',
        'period' => '周期',
        'price' => '售价',
        'renew' => '流量重置价格',
        'traffic' => '流量',
        'user_limit' => '用户限速',
    ],
    'ip' => [
        'info' => '归属地',
        'network_type' => '网络类型',
    ],
    'node' => [
        'attribute' => '节点',
        'client_limit' => '设备限制',
        'country' => '国家/地区',
        'data_consume' => '产生流量',
        'data_rate' => '流量计算系数',
        'ddns' => 'DDNS',
        'detection' => '阻断检测',
        'display' => '显示与订阅',
        'domain' => '域名',
        'id' => '节点 ID',
        'ipv4' => 'IPv4 地址',
        'ipv6' => 'IPv6 地址',
        'label' => '标签',
        'method' => '加密方式',
        'name' => '名称',
        'next_renewal_date' => '下次续费日期',
        'obfs' => '混淆',
        'obfs_param' => '混淆参数',
        'online_user' => '在线人数',
        'protocol' => '协议',
        'protocol_param' => '协议参数',
        'push_port' => '推送端口',
        'relay_port' => '中转端口',
        'renewal_cost' => '续费金额',
        'service_port' => '服务端口',
        'single' => '单端口',
        'single_passwd' => '单端口密码',
        'static' => '存活状态',
        'subscription_term' => '订阅周期',
        'traffic_limit' => '限速',
        'transfer' => '中继',
        'udp' => 'UDP',
        'v2_alter_id' => '额外 ID',
        'v2_cover' => '伪装类型',
        'v2_host' => '伪装域名',
        'v2_net' => '传输方式',
        'v2_path' => '路径或密钥',
        'v2_sni' => 'SNI',
        'v2_tls' => 'TLS连接',
        'v2_tls_provider' => 'TLS 配置',
    ],
    'node_auth' => [
        'attribute' => '节点授权',
        'key' => '通信密钥<small>节点用</small>',
        'secret' => '反向密钥',
    ],
    'node_cert' => [
        'attribute' => '证书',
        'domain' => '域名',
        'expired_date' => '终止时间',
        'issuer' => '签发机构',
        'key' => '密钥',
        'pem' => '证书',
        'signed_date' => '颁发时间',
    ],
    'notification' => [
        'address' => '收件地址',
        'created_at' => '投递时间',
        'status' => '状态',
    ],
    'oauth' => [
        'identifier' => '标识',
        'type' => '渠道',
    ],
    'order' => [
        'attribute' => '订单',
        'id' => '订单号',
        'original_price' => '原价',
        'pay_way' => '支付方式',
        'price' => '实付',
        'status' => '状态',
    ],
    'permission' => [
        'attribute' => '权限',
        'description' => '描述',
        'name' => '路由名称',
    ],
    'referral' => [
        'amount' => '申请金额',
        'created_at' => '申请时间',
        'id' => '申请单号',
        'user' => '申请账号',
    ],
    'role' => [
        'attribute' => '角色',
        'name' => '名称',
        'permissions' => '权限',
    ],
    'rule' => [
        'attribute' => '规则',
        'name' => '描述',
        'pattern' => '匹配值',
    ],
    'rule_group' => [
        'attribute' => '规则组',
        'name' => '名称',
        'rules' => '规则',
        'type' => '模式',
    ],
    'subscribe' => [
        'ban_desc' => '封禁原因',
        'ban_time' => '封禁时间',
        'code' => '订阅码',
        'req_header' => '请求头',
        'req_ip' => '请求IP',
        'req_times' => '请求次数',
        'updated_at' => '最后请求时间',
    ],
    'user' => [
        'account_status' => '账号状态',
        'attribute' => '用户',
        'created_date' => '注册时间',
        'credit' => '余额',
        'expired_date' => '过期时间',
        'id' => '用户ID',
        'invite_num' => '可用邀请名额',
        'inviter' => '邀请人',
        'nickname' => '昵称',
        'password' => '密码',
        'port' => '端口',
        'proxy_method' => '加密方式',
        'proxy_obfs' => '混淆方式',
        'proxy_passwd' => '代理密码',
        'proxy_protocol' => '代理协议',
        'proxy_status' => '代理状态',
        'qq' => 'QQ',
        'remark' => '备注',
        'reset_date' => '流量重置日',
        'role' => '用户角色',
        'service' => '代理服务',
        'speed_limit' => '速度限制',
        'traffic_used' => '已用流量',
        'usable_traffic' => '可用流量',
        'username' => '用户名',
        'uuid' => 'VMess UUID',
        'wechat' => '微信',
    ],
    'user_credit' => [
        'after' => '变更后余额',
        'amount' => '变更金额',
        'before' => '变更前余额',
        'created_at' => '变更时间',
    ],
    'user_data_modify' => [
        'after' => '变更后流量',
        'before' => '变更前流量',
        'created_at' => '变更时间',
    ],
    'user_group' => [
        'attribute' => '用户组',
        'name' => '名称',
        'nodes' => '节点',
    ],
    'user_traffic' => [
        'download' => '下载流量',
        'log_time' => '记录时间',
        'total' => '总流量',
        'upload' => '上传流量',
    ],
];
