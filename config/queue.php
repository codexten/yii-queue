<?php

use yii\queue\file\Queue;

return [
    'bootstrap' => [
        'queue',
    ],
    'components' => [
        'queue' => [
            'class' => Queue::class,
        ],
    ],
];