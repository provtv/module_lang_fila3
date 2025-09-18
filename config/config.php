<?php

declare(strict_types=1);

return [
<<<<<<< HEAD
<<<<<<< HEAD
    'name' => 'Lang',
    'description' => 'Modulo per la gestione delle traduzioni e localizzazioni',
    'icon' => 'heroicon-o-language',
    'navigation' => [
        'enabled' => true,
        'sort' => 50,
=======
    'name' => 'Xot',
    'description' => 'Modulo base con funzionalità core e utilities',
    'icon' => 'heroicon-o-cube',
    'navigation' => [
        'enabled' => true,
        'sort' => 110,
>>>>>>> 80d56bca (Squashed 'laravel/Modules/Xot/' content from commit 88673e4f7)
=======
    'name' => 'Job',
    'description' => 'Modulo per la gestione dei lavori in background e code',
    'icon' => 'heroicon-o-queue-list',
    'navigation' => [
        'enabled' => true,
        'sort' => 40,
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
    ],
    'routes' => [
        'enabled' => true,
        'middleware' => ['web', 'auth'],
    ],
    'providers' => [
<<<<<<< HEAD
<<<<<<< HEAD
        'Modules\\Lang\\Providers\\LangServiceProvider',
=======
        'Modules\\Xot\\Providers\\XotServiceProvider',
>>>>>>> 80d56bca (Squashed 'laravel/Modules/Xot/' content from commit 88673e4f7)
=======
        'Modules\\Job\\Providers\\JobServiceProvider',
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
    ],
];
