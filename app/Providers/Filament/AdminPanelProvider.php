<?php

<<<<<<< HEAD
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
=======
/**
 * ---.
 */

declare(strict_types=1);

namespace Modules\User\Providers\Filament;

use Filament\Navigation\MenuItem;
use Filament\Panel;
use Filament\Support\Facades\FilamentView;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Modules\User\Filament\Pages\MyProfilePage;
>>>>>>> 0bcedf94 (Squashed 'laravel/Modules/User/' content from commit 947e4724)
use Modules\Xot\Providers\Filament\XotBasePanelProvider;

class AdminPanelProvider extends XotBasePanelProvider
{
<<<<<<< HEAD
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
=======
    protected string $module = 'User';

    public function panel(Panel $panel): Panel
    {
        $panel = parent::panel($panel);

        FilamentView::registerRenderHook(
            'panels::auth.login.form.after',
            static fn (): string => Blade::render("@livewire('socialite.buttons')"),
        );

        /*-- moved into Gdpr
        FilamentView::registerRenderHook(
            'panels::auth.login.form.after',
            fn (): string => Blade::render('@livewire(\'terms-of-service\')'),
        );
        */

        /* -- moved into Notify
        DatabaseNotifications::trigger('notifications.database-notifications-trigger');
        FilamentView::registerRenderHook(
            'panels::user-menu.before',
            fn (): string => Blade::render('@livewire(\'database-notifications\')'),
        );
        //*/

        FilamentView::registerRenderHook(
            'panels::user-menu.before',
            static fn (): string => Blade::render("@livewire('team.change')"),
        );

        FilamentView::registerRenderHook(
            'panels::user-menu.before',
            // static fn (): string => View::make('user::badges.super-admin')->render(),
            static fn (): string => Blade::render("@livewire('profile.super-admin')"),
        );

        /*
        $panel->renderHook(
            'panels::user-menu.before',
            fn (): string => Blade::render('@livewire(\'team.change\')'),
        );
        */
        // $tenantId = request()->route()->parameter('tenant');
        // $profile_url = MyProfilePage::getUrl(panel: 'admin');
        // $panel->default();
        // $profile_url = MyProfilePage::getUrl(panel: 'admin');
        // $panel = $panel->pages([
        //     MyProfilePage::class,
        // ]);
        // $profile_url = '#';
        // $panel->userMenuItems([
        //     // 'account' => MenuItem::make()->url($profile_url),
        //     MenuItem::make()
        //
        //         ->url(fn (): string => '#')
        //         ->icon('heroicon-m-cog-8-tooth'),
        // ]);

        return $panel;
    }
>>>>>>> 0bcedf94 (Squashed 'laravel/Modules/User/' content from commit 947e4724)
}
