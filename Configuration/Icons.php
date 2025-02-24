<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider;
use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return [
    'tx-passionweb' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:icon_api/Resources/Public/Icons/Passionweb.svg',
    ],
    'tx-stars' => [
        'provider' => BitmapIconProvider::class,
        'source' => 'EXT:icon_api/Resources/Public/Icons/Stars.png',
    ],
];
