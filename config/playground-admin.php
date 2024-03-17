<?php

declare(strict_types=1);

return [
    'about' => (bool) env('PLAYGROUND_ADMIN_ABOUT', true),
    'load' => [
        'migrations' => (bool) env('PLAYGROUND_ADMIN_LOAD_MIGRATIONS', false),
    ],
];
