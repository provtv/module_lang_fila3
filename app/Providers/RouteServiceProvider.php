<?php

declare(strict_types=1);

namespace Modules\Lang\Providers;

use Modules\Xot\Providers\XotBaseRouteServiceProvider;

/**
 * Provider per la registrazione delle rotte del modulo Lang.
 */
class RouteServiceProvider extends XotBaseRouteServiceProvider
{
    /**
     * The module namespace to assume when generating URLs to actions.
     *
     * @var string
     */
    protected string $moduleNamespace = 'Modules\Lang\Http\Controllers';

    /**
     * The directory of the module.
     *
     * @var string
     */
    protected string $module_dir = __DIR__;

    /**
     * The namespace of the module.
     *
     * @var string
     */
    protected string $module_ns = __NAMESPACE__;

    /**
     * The name of the module.
     *
     * @var string
     */
    public string $name = 'Lang';

    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot(): void
    {
        parent::boot();
        $this->registerLang();
    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register(): void
    {
        parent::register();
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        // $this->registerLang();
>>>>>>> f0c9bb8 (.)
>>>>>>> cc26d67 (fix: auto resolve conflict)
    }

    /**
     * Registra le impostazioni di lingua basate sulla configurazione.
     *
     * @return void
     */
    public function registerLang(): void
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> cc26d67 (fix: auto resolve conflict)
        /** @var array<string, array<string, string|null>> $locales */
        $locales = config('laravellocalization.supportedLocales');
        
        if (! is_array($locales)) {
<<<<<<< HEAD
=======
=======
        /** @var array<string, array<string, string>>|null $locales */
        $locales = config('laravellocalization.supportedLocales');
        
        if (! \is_array($locales)) {
>>>>>>> f0c9bb8 (.)
>>>>>>> cc26d67 (fix: auto resolve conflict)
            $locales = ['it' => ['name' => 'it'], 'en' => ['name' => 'en']];
        }
        
        /** @var array<string> $langs */
        $langs = array_keys($locales);

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        /*
        if (! \is_array($langs)) {
            throw new \Exception('[.__LINE__.]['.class_basename(self::class).']');
        }
        \getRouteParameters();
        */
>>>>>>> f0c9bb8 (.)
>>>>>>> cc26d67 (fix: auto resolve conflict)
        $n = 1;
        if (inAdmin()) {
            $n = 3;
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> cc26d67 (fix: auto resolve conflict)
        if (in_array(request()->segment($n), $langs, false)) {
            /** @var string|null $lang */
            $lang = request()->segment($n);
            if ($lang !== null) {
<<<<<<< HEAD
=======
=======
        if (\in_array(request()->segment($n), $langs, false)) {
            /** @var string|null $lang */
            $lang = request()->segment($n);
            if (null !== $lang) {
>>>>>>> f0c9bb8 (.)
>>>>>>> cc26d67 (fix: auto resolve conflict)
                app()->setLocale($lang);
            }
        }
    }
}
