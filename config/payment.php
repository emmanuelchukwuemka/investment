<?php

return [
    'bitcoin' => [
        'label'   => 'Bitcoin (BTC)',
        'network' => 'Bitcoin Network',
        'address' => env('PAYMENT_BTC_ADDRESS', ''),
        'icon'    => '₿',
    ],
    'ethereum' => [
        'label'   => 'Ethereum (ETH)',
        'network' => 'ERC20 Network',
        'address' => env('PAYMENT_ETH_ADDRESS', ''),
        'icon'    => 'Ξ',
    ],
    'usdt' => [
        'label'   => 'USDT (TRC20)',
        'network' => 'TRON Network',
        'address' => env('PAYMENT_USDT_TRC20_ADDRESS', ''),
        'icon'    => '₮',
    ],
    'usdt_erc20' => [
        'label'   => 'USDT (ERC20)',
        'network' => 'Ethereum Network',
        'address' => env('PAYMENT_USDT_ERC20_ADDRESS', ''),
        'icon'    => '₮',
    ],
    'bank' => [
        'label'          => 'Bank Transfer',
        'network'        => 'Wire / SWIFT',
        'bank_name'      => env('PAYMENT_BANK_NAME', ''),
        'account_name'   => env('PAYMENT_BANK_ACCOUNT_NAME', ''),
        'account_number' => env('PAYMENT_BANK_ACCOUNT_NUMBER', ''),
        'routing_number' => env('PAYMENT_BANK_ROUTING_NUMBER', ''),
        'swift_code'     => env('PAYMENT_BANK_SWIFT_CODE', ''),
        'country'        => env('PAYMENT_BANK_COUNTRY', ''),
        'icon'           => '🏦',
    ],
];
