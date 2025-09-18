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
<<<<<<< HEAD
=======
     *
     * @var string
>>>>>>> dc312f89 (.)
     */
    protected string $moduleNamespace = 'Modules\Lang\Http\Controllers';

    /**
     * The directory of the module.
<<<<<<< HEAD
=======
     *
     * @var string
>>>>>>> dc312f89 (.)
     */
    protected string $module_dir = __DIR__;

    /**
     * The namespace of the module.
<<<<<<< HEAD
=======
     *
     * @var string
>>>>>>> dc312f89 (.)
     */
    protected string $module_ns = __NAMESPACE__;

    /**
     * The name of the module.
<<<<<<< HEAD
=======
     *
     * @var string
>>>>>>> dc312f89 (.)
     */
    public string $name = 'Lang';

    /**
     * Bootstrap the module services.
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> dc312f89 (.)
     */
    public function boot(): void
    {
        parent::boot();
<<<<<<< HEAD
        // $this->registerLang(); // ✅ Temporaneamente disabilitato per debug
=======
        $this->registerLang();
>>>>>>> dc312f89 (.)
    }

    /**
     * Register the module services.
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> dc312f89 (.)
     */
    public function register(): void
    {
        parent::register();
<<<<<<< HEAD
        // $this->registerLang();
=======
>>>>>>> dc312f89 (.)
    }

    /**
     * Registra le impostazioni di lingua basate sulla configurazione.
<<<<<<< HEAD
     */
    public function registerLang(): void
    {
        /** @var array<string, array<string, string>>|null $locales */
        $locales = config()->has('laravellocalization.supportedLocales') 
            ? config('laravellocalization.supportedLocales') 
            : null;

        if (! \is_array($locales)) {
            $locales = ['it' => ['name' => 'it'], 'en' => ['name' => 'en']];
        }

        /** @var array<string> $langs */
        $langs = array_keys($locales);

        /*
        if (! \is_array($langs)) {
            throw new \Exception('[.__LINE__.]['.class_basename(self::class).']');
        }
        \getRouteParameters();
        */
=======
     *
     * @return void
     */
    public function registerLang(): void
    {
        /** @var array<string, array<string, string|null>> $locales */
        $locales = config('laravellocalization.supportedLocales');
        
        if (! is_array($locales)) {
            $locales = ['it' => ['name' => 'it'], 'en' => ['name' => 'en']];
        }
        
        /** @var array<string> $langs */
        $langs = array_keys($locales);

>>>>>>> dc312f89 (.)
        $n = 1;
        if (inAdmin()) {
            $n = 3;
        }

<<<<<<< HEAD
        if (\in_array(request()->segment($n), $langs, false)) {
            /** @var string|null $lang */
            $lang = request()->segment($n);
            if (null !== $lang) {
=======
        if (in_array(request()->segment($n), $langs, false)) {
            /** @var string|null $lang */
            $lang = request()->segment($n);
            if ($lang !== null) {
>>>>>>> dc312f89 (.)
                app()->setLocale($lang);
            }
        }
    }
}
