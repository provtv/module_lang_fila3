<?php

declare(strict_types=1);

namespace Modules\Lang\Providers\Filament;

<<<<<<< HEAD
use Filament\Panel;
use Filament\SpatieLaravelTranslatablePlugin;
=======
>>>>>>> dc312f89 (.)
use Modules\Xot\Providers\Filament\XotBasePanelProvider;

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Lang';
<<<<<<< HEAD

    public function panel(Panel $panel): Panel
    {
        $panel= parent::panel($panel);
        // FilamentAsset::register(
        //     [
        //         Css::make('filament-navigation-styles', __DIR__.'/../../resources/dist/plugin.css'),
        //         Js::make('filament-navigation-scripts', __DIR__.'/../../resources/dist/plugin.js'),
        //     ],
        //     'filament-navigation'
        // );

        $spatieLaravelTranslatablePlugin=SpatieLaravelTranslatablePlugin::make()
                ->defaultLocales(['en', 'it']);
        $panel->plugins([
            $spatieLaravelTranslatablePlugin,
        ]);

        return $panel;
    }
=======
>>>>>>> dc312f89 (.)
}
