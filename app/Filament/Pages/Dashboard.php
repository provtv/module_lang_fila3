<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\Lang\Filament\Pages;

use Filament\Pages\Page;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Filament\Pages\XotBaseDashboard;

class Dashboard extends XotBaseDashboard
=======

class Dashboard extends Page
>>>>>>> dc312f89 (.)
=======

class Dashboard extends Page
>>>>>>> c010b2b8 (.)
=======

class Dashboard extends Page
>>>>>>> 499a5da9 (.)
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'lang::filament.pages.dashboard';
=======
namespace Modules\Job\Filament\Pages;

use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'job::filament.pages.dashboard';

    // public function mount(): void {
    //     $user = auth()->user();
    //     if(!$user->hasRole('super-admin')){
    //         redirect('/admin');
    //     }
    // }
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
}
