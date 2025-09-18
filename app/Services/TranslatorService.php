<?php

declare(strict_types=1);

/**
 * @see https://github.com/barryvdh/laravel-translation-manager/blob/master/src/Translator.php
 */

namespace Modules\Lang\Services;

use Illuminate\Events\Dispatcher;
use Illuminate\Translation\Translator as LaravelTranslator;
use Modules\Lang\Models\Translation;

class TranslatorService extends LaravelTranslator
{
    /** @var Dispatcher */
    protected $events;

    /**
     * Get the translation for the given key.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string      $key
=======
     * @param string $key
>>>>>>> dc312f89 (.)
=======
     * @param string $key
>>>>>>> c010b2b8 (.)
=======
     * @param string $key
>>>>>>> 499a5da9 (.)
     * @param string|null $locale
     * @param bool        $fallback
     *
     * @return string|array
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function get(): void {
=======
    public function get($key, array $replace = [], $locale = null, $fallback = true)
    {
>>>>>>> dc312f89 (.)
=======
    public function get($key, array $replace = [], $locale = null, $fallback = true)
    {
>>>>>>> c010b2b8 (.)
=======
    public function get($key, array $replace = [], $locale = null, $fallback = true)
    {
>>>>>>> 499a5da9 (.)
        // Get without fallback
        $result = parent::get($key, $replace, $locale, false);
        if ($result === $key) {
            $this->notifyMissingKey($key);

            // Reget with fallback
            $result = parent::get($key, $replace, $locale, $fallback);
        }

        return $result;
    }

    /*
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function setTranslationManager(): void {
=======
    public function setTranslationManager(Manager $manager)
    {
>>>>>>> dc312f89 (.)
=======
    public function setTranslationManager(Manager $manager)
    {
>>>>>>> c010b2b8 (.)
=======
    public function setTranslationManager(Manager $manager)
    {
>>>>>>> 499a5da9 (.)
        $this->manager = $manager;
    }
    */
    /**
     * Undocumented function.
     *
     * @param string $key
     *
     * @return void
     */
    protected function notifyMissingKey($key)
    {
        $lang = app()->getLocale();
        [$namespace, $group, $item] = $this->parseKey($key);
        $data = [
            'lang' => $lang,
            'namespace' => $namespace,
            'group' => $group,
            'item' => $item,
        ];
        Translation::firstOrCreate($data);
    }
}
