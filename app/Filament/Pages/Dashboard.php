<?php

declare(strict_types=1);

namespace Modules\Lang\Filament\Pages;

use Filament\Pages\Page;
<<<<<<< HEAD
use Modules\Xot\Filament\Pages\XotBaseDashboard;

class Dashboard extends XotBaseDashboard
=======

class Dashboard extends Page
>>>>>>> dc312f89 (.)
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'lang::filament.pages.dashboard';
}
