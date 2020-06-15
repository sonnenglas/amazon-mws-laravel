<?php

/**
 * Simple Laravel Config mock class
 *
 */

class Config
{
    const MARKETPLACE_DE = 'A1PA6795UKMFR9';
    const MARKETPLACE_IT = 'APJ6JRA9NG5V4';
    const MARKETPLACE_FR = 'A13V1IB3VIYZZH';
    const MARKETPLACE_ES = 'A1RKKUPIHCS9HS';
    const MARKETPLACE_GB = 'A1F83G8C2ARO7P';

    static function get($name)
    {
        $fakeConfig = [
            'amazon-mws.muteLog' => 'Info',
            'amazon-mws.AMAZON_SERVICE_URL' => 'http://foo.bar',
            'amazon-mws.store' => [
                'testStore' => [
                    'merchantId' => 'ABC_MARKET_1234',
                    //'marketplaceId' => 'ABC3456789456',
                    'marketplaceId' => [
                        self::MARKETPLACE_DE,
                        self::MARKETPLACE_IT,
                        self::MARKETPLACE_FR,
                        self::MARKETPLACE_ES,
                        self::MARKETPLACE_GB
                    ],
                    'keyId' => 'key',
                    'secretkey' => 'secret',
                ],
            ],
        ];

        return (isset($fakeConfig[$name])) ? $fakeConfig[$name] : null;
    }
}