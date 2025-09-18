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
<<<<<<< HEAD
=======
     *
     * @var string
>>>>>>> dc312f89 (.)
=======
     *
     * @var string
>>>>>>> c010b2b8 (.)
     */
    protected string $moduleNamespace = 'Modules\Lang\Http\Controllers';

    /**
     * The directory of the module.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @var string
>>>>>>> dc312f89 (.)
=======
     *
     * @var string
>>>>>>> c010b2b8 (.)
     */
    protected string $module_dir = __DIR__;

    /**
     * The namespace of the module.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @var string
>>>>>>> dc312f89 (.)
=======
     *
     * @var string
>>>>>>> c010b2b8 (.)
     */
    protected string $module_ns = __NAMESPACE__;

    /**
     * The name of the module.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @var string
>>>>>>> dc312f89 (.)
=======
     *
     * @var string
>>>>>>> c010b2b8 (.)
     */
    public string $name = 'Lang';

    /**
     * Bootstrap the module services.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> dc312f89 (.)
=======
     *
     * @return void
>>>>>>> c010b2b8 (.)
     */
    public function boot(): void
    {
        parent::boot();
<<<<<<< HEAD
<<<<<<< HEAD
        // $this->registerLang(); // ✅ Temporaneamente disabilitato per debug
=======
        $this->registerLang();
>>>>>>> dc312f89 (.)
=======
        $this->registerLang();
>>>>>>> c010b2b8 (.)
    }

    /**
     * Register the module services.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> dc312f89 (.)
=======
     *
     * @return void
>>>>>>> c010b2b8 (.)
     */
    public function register(): void
    {
        parent::register();
<<<<<<< HEAD
<<<<<<< HEAD
        // $this->registerLang();
=======
>>>>>>> dc312f89 (.)
=======
>>>>>>> c010b2b8 (.)
    }

    /**
     * Registra le impostazioni di lingua basate sulla configurazione.
<<<<<<< HEAD
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
=======
>>>>>>> c010b2b8 (.)
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

<<<<<<< HEAD
>>>>>>> dc312f89 (.)
=======
>>>>>>> c010b2b8 (.)
        $n = 1;
        if (inAdmin()) {
            $n = 3;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        if (\in_array(request()->segment($n), $langs, false)) {
            /** @var string|null $lang */
            $lang = request()->segment($n);
            if (null !== $lang) {
=======
=======
>>>>>>> c010b2b8 (.)
        if (in_array(request()->segment($n), $langs, false)) {
            /** @var string|null $lang */
            $lang = request()->segment($n);
            if ($lang !== null) {
<<<<<<< HEAD
>>>>>>> dc312f89 (.)
=======
>>>>>>> c010b2b8 (.)
                app()->setLocale($lang);
            }
        }
    }
}
