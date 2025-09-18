<?php

declare(strict_types=1);

namespace Modules\Lang\Providers;

use Filament\Actions\Action;
use Filament\Forms\Components\Field;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Wizard\Step;
use Filament\Infolists\Components\Entry;
use Filament\Support\Components\Component;
use Filament\Support\Concerns\Configurable;
use Filament\Tables\Actions\Action as TableAction;
use Filament\Tables\Columns\Column;
use Filament\Tables\Filters\BaseFilter;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Container\Container;
use Illuminate\Support\Facades\View;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Mcamara\LaravelLocalization\LaravelLocalizationServiceProvider;
=======
>>>>>>> dc312f89 (.)
=======
>>>>>>> c010b2b8 (.)
=======
>>>>>>> 499a5da9 (.)
use Modules\Lang\Actions\Filament\AutoLabelAction;
use Modules\Lang\Services\TranslatorService;
use Modules\Xot\Providers\XotBaseServiceProvider;
use Modules\Xot\Services\BladeService;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\Select;
=======
>>>>>>> dc312f89 (.)
=======
>>>>>>> c010b2b8 (.)
=======
>>>>>>> 499a5da9 (.)

/**
 * ---.
 */
class LangServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Lang';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

    protected string $module_dir = __DIR__;

=======
    protected string $module_dir = __DIR__;
>>>>>>> dc312f89 (.)
=======

    protected string $module_dir = __DIR__;

>>>>>>> c010b2b8 (.)
=======

    protected string $module_dir = __DIR__;

>>>>>>> 499a5da9 (.)
    protected string $module_ns = __NAMESPACE__;

    public function boot(): void
    {
        parent::boot();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        // BladeService::registerComponents($this->module_dir.'/../View/Components', 'Modules\\Lang');
        // $this->registerTranslator();
        $this->translatableComponents();
        $this->registerFilamentLabel();
        
=======
        $this->translatableComponents();
        $this->registerFilamentLabel();
>>>>>>> dc312f89 (.)
=======
        $this->translatableComponents();
        $this->registerFilamentLabel();
>>>>>>> c010b2b8 (.)
=======
        $this->translatableComponents();
        $this->registerFilamentLabel();
>>>>>>> 499a5da9 (.)
    }

    public function register(): void
    {
        parent::register();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        // Registra il service provider di laravel-localization
        // $this->app->register(LaravelLocalizationServiceProvider::class);
        // NOTA: Il LaravelLocalizationServiceProvider viene già registrato automaticamente
        // tramite package discovery di Laravel (vedere composer.json del package)

        // Carica la configurazione di laravel-localization
        // $this->mergeConfigFrom(
        //    __DIR__.'/../config/laravel-localization.php', 'laravel-localization'
        //);

        // --dalla doc in register ... ma non funziona, funziona in boot
        // $this->registerTranslator();
=======
>>>>>>> dc312f89 (.)
=======
>>>>>>> c010b2b8 (.)
=======
>>>>>>> 499a5da9 (.)
    }

    protected function translatableComponents(): void
    {
        $components = [Field::class, BaseFilter::class, Placeholder::class, Column::class, Entry::class];
        foreach ($components as $component) {
            /* @var Configurable $component */
            $component::configureUsing(function (Component $translatable): void {
                /* @phpstan-ignore method.notFound */
                $translatable->translateLabel();
            });
        }
    }

    public function registerFilamentLabel(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Select::configureUsing(function (Select $component) {
            $component->placeholder(__('filament-forms::components.select.placeholder'));
            return $component;
        });
=======
>>>>>>> dc312f89 (.)
=======
>>>>>>> c010b2b8 (.)
=======
>>>>>>> 499a5da9 (.)
        Field::configureUsing(function (Field $component) {
            $component = app(AutoLabelAction::class)->execute($component);
            Assert::isInstanceOf($component, Field::class);
            $validationMessages = __('user::validation');
            if (is_array($validationMessages)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                // Convertiamo l'array generico in un array<string, string> per soddisfare il tipo richiesto
=======
>>>>>>> dc312f89 (.)
=======
>>>>>>> c010b2b8 (.)
=======
>>>>>>> 499a5da9 (.)
                $typedMessages = [];
                foreach ($validationMessages as $key => $value) {
                    if (is_string($key) && (is_string($value) || $value instanceof \Closure)) {
                        $typedMessages[$key] = $value;
                    }
                }
                $component->validationMessages($typedMessages);
            }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $component = app(AutoLabelAction::class)->execute($component,'placeholder');
            $component = app(AutoLabelAction::class)->execute($component,'helperText');
            $component = app(AutoLabelAction::class)->execute($component,'description');

            return $component;
        });
        \Filament\Forms\Components\Section::configureUsing(function (\Filament\Forms\Components\Section $component) {
            $component = app(AutoLabelAction::class)->execute($component);
            $component = app(AutoLabelAction::class)->execute($component,'heading');
            return $component;
        });
        BaseFilter::configureUsing(function (BaseFilter $component) {
            $component = app(AutoLabelAction::class)->execute($component);

=======
=======
>>>>>>> c010b2b8 (.)
=======
>>>>>>> 499a5da9 (.)

            return $component;
        });

        BaseFilter::configureUsing(function (BaseFilter $component) {
            $component = app(AutoLabelAction::class)->execute($component);
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> dc312f89 (.)
=======
>>>>>>> c010b2b8 (.)
=======
>>>>>>> 499a5da9 (.)
            return $component;
        });

        Column::configureUsing(function (Column $component) {
            $component = app(AutoLabelAction::class)->execute($component);
            Assert::isInstanceOf($component, Column::class);
            $component = $component
                ->wrapHeader()
                ->verticallyAlignStart()
                ->grow();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            // ->wrap()
=======
>>>>>>> dc312f89 (.)
=======
>>>>>>> c010b2b8 (.)
=======
>>>>>>> 499a5da9 (.)

            return $component;
        });

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
        Step::configureUsing(function (Step $component) {
            $component = app(AutoLabelAction::class)->execute($component);
            
            // ->translateLabel()
            return $component;
        });
        Action::configureUsing(function (Action $component) {
            $component = app(AutoLabelAction::class)->execute($component);
            // $component->tooltip('preso');

            // $component->iconButton();
            // ->translateLabel()
            return $component;
        });
=======
=======
>>>>>>> c010b2b8 (.)
=======
>>>>>>> 499a5da9 (.)
        Step::configureUsing(function (Step $component) {
            $component = app(AutoLabelAction::class)->execute($component);
            return $component;
        });

        Action::configureUsing(function (Action $component) {
            $component = app(AutoLabelAction::class)->execute($component);
            return $component;
        });

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> dc312f89 (.)
=======
>>>>>>> c010b2b8 (.)
=======
>>>>>>> 499a5da9 (.)
        TableAction::configureUsing(function (TableAction $component) {
            $component = app(AutoLabelAction::class)->execute($component);
            if (method_exists($component, 'iconButton')) {
                $component->iconButton();
            }
            if (method_exists($component, 'icon')) {
                $component->icon('heroicon-o-plus');
            }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            // ->translateLabel()
            return $component;
        });
        // Method Filament\Widgets\StatsOverviewWidget\Stat::configureUsing does not exist.
        /*
        Stat::configureUsing(function (Stat $component) {
            $component = app(AutoLabelAction::class)->execute($component);

            // ->translateLabel()
            return $component;
        });
        */
=======
            return $component;
        });
>>>>>>> dc312f89 (.)
=======
            return $component;
        });
>>>>>>> c010b2b8 (.)
=======
            return $component;
        });
>>>>>>> 499a5da9 (.)
    }

    public function registerTranslator(): void
    {
        $this->app->singleton('translator', function (Container $app): TranslatorService {
            $loader = $app['translation.loader'];

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            // When registering the translator component, we'll need to set the default
            // locale as well as the fallback locale. So, we'll grab the application
            // configuration so we can easily get both of these values from there.
=======
>>>>>>> dc312f89 (.)
=======
>>>>>>> c010b2b8 (.)
=======
>>>>>>> 499a5da9 (.)
            Assert::string($locale = $app['config']['app.locale']);
            Assert::string($fallback_locale = $app['config']['app.fallback_locale']);

            $translatorService = new TranslatorService($loader, $locale);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

            $translatorService->setFallback($fallback_locale);

            /*
            if($app->bound('translation-manager')){
                $trans->setTranslationManager($app['translation-manager']);
            }
            */
=======
            $translatorService->setFallback($fallback_locale);

>>>>>>> dc312f89 (.)
=======
            $translatorService->setFallback($fallback_locale);

>>>>>>> c010b2b8 (.)
=======
            $translatorService->setFallback($fallback_locale);

>>>>>>> 499a5da9 (.)
            return $translatorService;
        });
    }
}
