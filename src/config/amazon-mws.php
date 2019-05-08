<?php

return [
	'store' => [
		'store1' => [
			'merchantId' => '',
			'marketplaceId' => '',
			'keyId' => '',
			'secretKey' => '',
            'authToken' => '',
			'amazonServiceUrl' => 'https://mws-eu.amazonservices.com/',
            /** Optional settings for SOCKS5 proxy
             *
            'proxy_info' => [
                'ip' => '127.0.0.1',
                'port' => 8080,
                'user_pwd' => 'user:password',
            ],
             */
		]
	],

	// Default service URL
	'AMAZON_SERVICE_URL' => 'https://mws.amazonservices.com/',

	'muteLog' => false
];
