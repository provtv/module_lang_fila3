<?php

declare(strict_types=1);

return [
<<<<<<< HEAD
    'filters' => [
        'apply' => [
            'label' => 'Applica filtri',
            'tooltip' => 'Applica i filtri selezionati',
            'icon' => 'heroicon-o-funnel',
        ],
        'reset' => [
            'label' => 'Reset filtri',
            'tooltip' => 'Ripristina i filtri predefiniti',
            'icon' => 'heroicon-o-x-mark',
        ],
        'open' => [
            'label' => 'Apri filtri',
            'tooltip' => 'Mostra i pannelli di filtro',
            'icon' => 'heroicon-o-adjustments-horizontal',
        ],
    ],
    'columns' => [
        'toggle' => [
            'label' => 'Mostra/Nascondi colonne',
            'tooltip' => 'Gestisci la visibilità delle colonne',
            'icon' => 'heroicon-o-view-columns',
        ],
    ],
    'records' => [
        'reorder' => [
            'label' => 'Riordina record',
            'tooltip' => 'Modifica l\'ordine dei record',
            'icon' => 'heroicon-o-arrows-up-down',
=======
    'pages' => [
        'artisan-commands-manager' => [
            'navigation_label' => 'Gestione Artisan',
            'navigation_group' => 'Sistema',
            'navigation_icon' => 'xot::terminal',
            'title' => 'Gestione Comandi Artisan',
            'commands' => [
                'migrate' => [
                    'label' => 'Migrate Database',
                    'icon' => 'xot::database-update',
                ],
                'filament_upgrade' => [
                    'label' => 'Upgrade Filament',
                    'icon' => 'xot::upgrade',
                ],
                'filament_optimize' => [
                    'label' => 'Optimize Filament',
                    'icon' => 'xot::optimize',
                ],
                'view_cache' => [
                    'label' => 'Cache Views',
                    'icon' => 'xot::view-cache',
                ],
                'config_cache' => [
                    'label' => 'Cache Config',
                    'icon' => 'xot::config-cache',
                ],
                'route_cache' => [
                    'label' => 'Cache Routes',
                    'icon' => 'xot::route-cache',
                ],
                'event_cache' => [
                    'label' => 'Cache Events',
                    'icon' => 'xot::event-cache',
                ],
                'queue_restart' => [
                    'label' => 'Restart Queue',
                    'icon' => 'xot::queue-restart',
                ],
            ],
            'status' => [
                'completed' => 'Completato',
                'failed' => 'Fallito',
                'waiting' => 'In attesa dell\'output...',
            ],
            'messages' => [
                'command_started' => 'Comando avviato',
                'command_completed' => 'Il comando :command è stato eseguito con successo',
                'command_failed' => 'Il comando :command è fallito',
            ],
>>>>>>> 80d56bca (Squashed 'laravel/Modules/Xot/' content from commit 88673e4f7)
        ],
    ],
];
