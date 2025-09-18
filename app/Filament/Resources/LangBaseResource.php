<?php

declare(strict_types=1);

namespace Modules\Lang\Filament\Resources;
use Filament\Actions;
<<<<<<< HEAD
use Illuminate\Support\Facades\Config;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Concerns\Translatable;
use Modules\Cms\Filament\Resources\SectionResource;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
=======
use Filament\Resources\Pages\EditRecord;
use Modules\Cms\Filament\Resources\SectionResource;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Filament\Resources\Concerns\Translatable;
>>>>>>> dc312f89 (.)

abstract class LangBaseResource extends XotBaseResource
{
    use Translatable;


    public static function getDefaultTranslatableLocale(): string
    {
<<<<<<< HEAD
        return Config::string('app.locale', 'it');
=======
        return config('app.locale', 'it');
>>>>>>> dc312f89 (.)
    }

    public static function getTranslatableLocales(): array
    {
        return ['it', 'en'];
    }



}
