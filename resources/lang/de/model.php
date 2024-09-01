<?php

declare(strict_types=1);

return [
    'aff' => [
        'amount' => 'Bestellbetrag',
        'commission' => 'Provision',
        'created_at' => 'Bestellt am',
        'invitee' => 'Käufer',
        'updated_at' => 'Bearbeitet am',
    ],
    'article' => [
        'attribute' => 'Artikel',
        'category' => 'Kategorie',
        'created_at' => 'Veröffentlicht am',
        'language' => 'Sprache',
        'logo' => 'Cover',
        'updated_at' => 'Aktualisiert am',
    ],
    'common' => [
        'description' => 'Beschreibung',
        'extend' => 'Erweiterte Informationen',
        'level' => 'Stufe',
        'sort' => 'Sortieren',
        'type' => 'Typ',
    ],
    'country' => [
        'code' => 'Ländercode',
        'icon' => 'Flagge',
        'name' => 'Ländername',
    ],
    'coupon' => [
        'attribute' => 'Gutschein',
        'groups' => 'Gruppenbeschränkung',
        'levels' => 'Stufenbeschränkung',
        'logo' => 'Logo',
        'minimum' => 'Mindestbestellwert',
        'name' => 'Name',
        'newbie' => 'Nur für neue Benutzer',
        'num' => 'Anzahl',
        'priority' => 'Priorität',
        'services_blacklist' => 'Blacklist-Produkte',
        'services_whitelist' => 'Whitelist-Produkte',
        'sn' => 'Code',
        'usable_times' => 'Verwendungsbeschränkung',
        'used' => 'Persönliche Begrenzung',
        'users_blacklist' => 'Blacklist-Benutzer',
        'users_whitelist' => 'Whitelist-Benutzer',
        'value' => 'Wert',
    ],
    'goods' => [
        'attribute' => 'Produkt',
        'available_date' => 'Gültigkeitszeitraum',
        'category' => 'Kategorie',
        'color' => 'Farbe',
        'hot' => 'Bestseller',
        'info' => 'Benutzerdefinierte Informationen',
        'invite_num' => 'Bonus-Einladungen',
        'limit_num' => 'Kaufbegrenzung',
        'logo' => 'Logo',
        'name' => 'Name',
        'period' => 'Reset-Zyklus',
        'price' => 'Preis',
        'renew' => 'Datenverlängerungspreis',
        'traffic' => 'Datenvolumen',
        'user_limit' => 'Benutzergeschwindigkeitsbegrenzung',
    ],
    'ip' => [
        'info' => 'Standort',
        'network_type' => 'Netzwerktyp',
    ],
    'node' => [
        'attribute' => 'Knoten',
        'client_limit' => 'Gerätebegrenzung',
        'country' => 'Land',
        'data_consume' => 'Datenverbrauch',
        'data_rate' => 'Datenrate',
        'ddns' => 'DDNS',
        'detection' => 'Blockierungserkennung',
        'display' => 'Anzeige & Abonnement',
        'domain' => 'Domain',
        'id' => 'Knoten-ID',
        'ipv4' => 'IPv4',
        'ipv6' => 'IPv6',
        'label' => 'Label',
        'method' => 'Verschlüsselung',
        'name' => 'Name',
        'next_renewal_date' => 'Nächstes Verlängerungsdatum',
        'obfs' => 'Obfs',
        'obfs_param' => 'Obfs-Parameter',
        'online_user' => 'Online-Benutzer',
        'protocol' => 'Protokoll',
        'protocol_param' => 'Protokollparameter',
        'push_port' => 'Push-Port',
        'relay_port' => 'Relay-Port',
        'renewal_cost' => 'Rechnungsbetrag',
        'service_port' => 'Service-Port',
        'single' => 'Einzelport',
        'single_passwd' => '[Einzel] Passwort',
        'static' => 'Status',
        'subscription_term' => 'Abonnementdauer',
        'traffic_limit' => 'Geschwindigkeitsbegrenzung',
        'transfer' => 'Relay',
        'udp' => 'UDP',
        'v2_alter_id' => 'Alter ID',
        'v2_cover' => 'Cover',
        'v2_host' => 'Host',
        'v2_net' => 'Netzwerk',
        'v2_path' => 'Pfad | Schlüssel',
        'v2_sni' => 'SNI',
        'v2_tls' => 'TLS',
        'v2_tls_provider' => 'TLS-Konfiguration',
    ],
    'node_auth' => [
        'attribute' => 'Knotenauthentifizierung',
        'key' => 'Schlüssel <small>für Knoten</small>',
        'secret' => 'Rückwärtsschlüssel',
    ],
    'node_cert' => [
        'attribute' => 'Domain-Zertifikat',
        'domain' => 'Domain',
        'expired_date' => 'Ablaufdatum',
        'issuer' => 'Aussteller',
        'key' => 'Schlüssel',
        'pem' => 'PEM',
        'signed_date' => 'Ausstellungsdatum',
    ],
    'notification' => [
        'address' => 'Empfänger',
        'created_at' => 'Gesendet am',
        'status' => 'Status',
    ],
    'oauth' => [
        'identifier' => 'Kennung',
        'type' => 'Kanal',
    ],
    'order' => [
        'attribute' => 'Bestellung',
        'id' => 'Bestellnummer',
        'original_price' => 'Originalpreis',
        'pay_way' => 'Zahlungsmethode',
        'price' => 'Tatsächlicher Preis',
        'status' => 'Status',
    ],
    'permission' => [
        'attribute' => 'Berechtigung',
        'description' => 'Beschreibung',
        'name' => 'Routenname',
    ],
    'referral' => [
        'amount' => 'Betrag',
        'created_at' => 'Beantragt am',
        'id' => 'Antragsnummer',
        'user' => 'Antragsteller',
    ],
    'role' => [
        'attribute' => 'Rolle',
        'name' => 'Name',
        'permissions' => 'Berechtigungen',
    ],
    'rule' => [
        'attribute' => 'Regel',
        'name' => 'Beschreibung',
        'pattern' => 'Wert',
    ],
    'rule_group' => [
        'attribute' => 'Regelgruppe',
        'name' => 'Name',
        'rules' => 'Regeln',
        'type' => 'Typ',
    ],
    'subscribe' => [
        'ban_desc' => 'Sperrgrund',
        'ban_time' => 'Sperrzeit',
        'code' => 'Abonnementcode',
        'req_header' => 'Anfrage-Header',
        'req_ip' => 'Anfrage-IP',
        'req_times' => 'Anfragenanzahl',
        'updated_at' => 'Letzte Anfrage',
    ],
    'user' => [
        'account_status' => 'Kontostatus',
        'attribute' => 'Benutzer',
        'created_date' => 'Registrierungsdatum',
        'credit' => 'Guthaben',
        'expired_date' => 'Ablaufdatum',
        'id' => 'Benutzer-ID',
        'invite_num' => 'Verfügbare Einladungen',
        'inviter' => 'Einlader',
        'nickname' => 'Spitzname',
        'password' => 'Passwort',
        'port' => 'Port',
        'proxy_method' => 'Verschlüsselung',
        'proxy_obfs' => 'Verschleierung',
        'proxy_passwd' => 'Proxy-Passwort',
        'proxy_protocol' => 'Protokoll',
        'proxy_status' => 'Proxy-Status',
        'qq' => 'QQ',
        'remark' => 'Bemerkung',
        'reset_date' => 'Datenrückstellungsdatum',
        'role' => 'Rolle',
        'service' => 'Proxy-Dienst',
        'speed_limit' => 'Geschwindigkeitsbegrenzung',
        'traffic_used' => 'Verwendete Daten',
        'usable_traffic' => 'Verfügbare Daten',
        'username' => 'Benutzername',
        'uuid' => 'VMess UUID',
        'wechat' => 'WeChat',
    ],
    'user_credit' => [
        'after' => 'Nachher',
        'amount' => 'Betrag',
        'before' => 'Vorher',
        'created_at' => 'Geändert am',
    ],
    'user_data_modify' => [
        'after' => 'Nachher',
        'before' => 'Vorher',
        'created_at' => 'Geändert am',
    ],
    'user_group' => [
        'attribute' => 'Benutzergruppe',
        'name' => 'Gruppenname',
        'nodes' => 'Knoten',
    ],
    'user_traffic' => [
        'download' => 'Download',
        'log_time' => 'Protokolliert am',
        'total' => 'Gesamt',
        'upload' => 'Upload',
    ],
];
