<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\Lang\Providers\Filament;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Panel;
use Filament\SpatieLaravelTranslatablePlugin;
=======
>>>>>>> dc312f89 (.)
=======
>>>>>>> c010b2b8 (.)
=======
>>>>>>> 499a5da9 (.)
=======
namespace Modules\Job\Providers\Filament;

>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
use Modules\Xot\Providers\Filament\XotBasePanelProvider;

class AdminPanelProvider extends XotBasePanelProvider
{
<<<<<<< HEAD
    protected string $module = 'Lang';
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> c010b2b8 (.)
=======
>>>>>>> 499a5da9 (.)
=======
namespace Modules\Xot\Providers\Filament;

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Xot';
>>>>>>> 80d56bca (Squashed 'laravel/Modules/Xot/' content from commit 88673e4f7)
=======
    protected string $module = 'Job';
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
}
