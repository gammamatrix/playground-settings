<?php

declare(strict_types=1);

return [
    'load' => [
        'migrations' => (bool) env('PLAYGROUND_ADMIN_LOAD_MIGRATIONS', false),
    ],
];
