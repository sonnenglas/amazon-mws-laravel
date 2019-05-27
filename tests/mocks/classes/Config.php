<?php

/**
 * Simple Laravel Config mock class
 *
 */

class Config
{
    const MARKETPLACE_1 = 'A1PA6795UKMFR9';
    const MARKETPLACE_2 = 'APJ6JRA9NG5V4';
    const MARKETPLACE_3 = 'A13V1IB3VIYZZH';
    const MARKETPLACE_4 = 'A1RKKUPIHCS9HS';
    const MARKETPLACE_5 = 'A1F83G8C2ARO7P';
    static function get($name)
    {
        $fakeConfig = [
            'amazon-mws.muteLog' => 'Info',
            'amazon-mws.AMAZON_SERVICE_URL' => 'http://foo.bar',
            'amazon-mws.store' => [
                'testStore' => [
                    'merchantId' => 'ABC_MARKET_1234',
                    'marketplaceId' => [
                        self::MARKETPLACE_1,
                        self::MARKETPLACE_2,
                        self::MARKETPLACE_3,
                        self::MARKETPLACE_4,
                        self::MARKETPLACE_5
                    ],
                    'keyId' => 'key',
                    'secretkey' => 'secret',
                ],
            ],
        ];

        return (isset($fakeConfig[$name])) ? $fakeConfig[$name] : null;
    }
}