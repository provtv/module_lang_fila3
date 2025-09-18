<?php

declare(strict_types=1);

namespace Modules\Lang\View\Composers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Lang\Datas\LangData;
use Spatie\LaravelData\DataCollection;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Webmozart\Assert\Assert;
>>>>>>> dc312f89 (.)
=======
use Webmozart\Assert\Assert;
>>>>>>> c010b2b8 (.)
=======
use Webmozart\Assert\Assert;
>>>>>>> 499a5da9 (.)

/**
 * Classe per la composizione di dati relativi alle lingue nei template.
 */
class ThemeComposer
{
    /**
     * Get all supported languages as a DataCollection.
     *
     * @throws \Exception if supportedLocales config is not an array
     *
     * @return DataCollection<LangData>
     */
    public function languages(): DataCollection
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        // ✅ Controllo sicuro della configurazione laravellocalization
        $langs = config()->has('laravellocalization.supportedLocales') 
            ? config('laravellocalization.supportedLocales') 
            : ['it' => ['name' => 'Italiano', 'regional' => 'it_IT'], 'en' => ['name' => 'English', 'regional' => 'en_US']];
=======
        $langs = config('laravellocalization.supportedLocales');
>>>>>>> dc312f89 (.)
=======
        $langs = config('laravellocalization.supportedLocales');
>>>>>>> c010b2b8 (.)
=======
        $langs = config('laravellocalization.supportedLocales');
>>>>>>> 499a5da9 (.)

        if (! is_array($langs)) {
            throw new \Exception(sprintf('Invalid config for supportedLocales on line %d in %s', __LINE__, class_basename($this)));
        }

        $languages = collect($langs)->map(function (mixed $item, string $locale): array {
            // Ensure $item is an array
            if (! is_array($item)) {
                throw new \InvalidArgumentException(sprintf('Expected array at locale %s, got %s', $locale, gettype($item)));
            }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> dc312f89 (.)
=======
            
>>>>>>> c010b2b8 (.)
=======
            
>>>>>>> 499a5da9 (.)
            // Ensure $item has the required keys
            if (! isset($item['regional'], $item['name'])) {
                throw new \InvalidArgumentException(sprintf('Expected array with "regional" and "name" keys at locale %s', $locale));
            }

            // Extract regional code and handle 'en' to 'gb' mapping.
            // Verifichiamo che regional sia una stringa o lo convertiamo in modo sicuro
            $regional = $item['regional'];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (! is_string($regional)) {
=======
            if (!is_string($regional)) {
>>>>>>> dc312f89 (.)
=======
            if (!is_string($regional)) {
>>>>>>> c010b2b8 (.)
=======
            if (!is_string($regional)) {
>>>>>>> 499a5da9 (.)
                $regional = '';
            }
            $regionalParts = explode('_', $regional);
            $regionalCode = $regionalParts[0] ?? 'en';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> dc312f89 (.)
=======
            
>>>>>>> c010b2b8 (.)
=======
            
>>>>>>> 499a5da9 (.)
            if ('en' === $regionalCode) {
                $regionalCode = 'gb';
            }

            $url = '#'; // Placeholder URL for frontend.
            if (inAdmin()) {
                $url = $this->buildAdminLanguageUrl($locale);
            }

            // Verifichiamo che name sia una stringa o lo convertiamo in modo sicuro
            $name = $item['name'];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (! is_string($name)) {
=======
            if (!is_string($name)) {
>>>>>>> dc312f89 (.)
=======
            if (!is_string($name)) {
>>>>>>> c010b2b8 (.)
=======
            if (!is_string($name)) {
>>>>>>> 499a5da9 (.)
                $name = $locale; // Fallback al codice locale
            }

            return [
                'id' => $locale,
                'name' => $name,
                'flag' => $this->buildFlagHtml($regionalCode),
                'url' => $url,
            ];
        });

        // Convertiamo esplicitamente a array<int, mixed> per soddisfare il tipo richiesto
        $languagesArray = $languages->values()->all();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> dc312f89 (.)
=======
        
>>>>>>> c010b2b8 (.)
=======
        
>>>>>>> 499a5da9 (.)
        return LangData::collection($languagesArray);
    }

    /**
     * Get all languages except the current one.
     *
     * @return DataCollection<LangData>
     */
    public function otherLanguages(): DataCollection
    {
        $currentLocale = app()->getLocale();

        return $this->languages()
            ->filter(function (mixed $item) use ($currentLocale): bool {
                // Ensure the item is an instance of LangData
                if (! $item instanceof LangData) {
                    throw new \Exception(sprintf('Expected instance of LangData, got %s', is_object($item) ? get_class($item) : gettype($item)));
                }

                return $item->id !== $currentLocale;
            });
    }

    /**
     * Get a specific field of the current language.
     *
     * @throws \Exception if the current language is not found
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * 
     * @return string
>>>>>>> dc312f89 (.)
=======
     * 
     * @return string
>>>>>>> c010b2b8 (.)
=======
     * 
     * @return string
>>>>>>> 499a5da9 (.)
     */
    public function currentLang(string $field): string
    {
        $currentLocale = app()->getLocale();

        // Convert DataCollection to a Laravel Collection to use firstWhere()
        $lang = $this->languages()
            ->toCollection()
            ->firstWhere('id', $currentLocale);

        if (! $lang instanceof LangData) {
            throw new \Exception(sprintf('Current language not found on line %d in %s', __LINE__, class_basename($this)));
        }

        // Verifichiamo che il valore del campo sia una stringa o lo convertiamo in modo sicuro
        $value = $lang->{$field};
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! is_string($value)) {
            return 'id' === $field ? $currentLocale : '';
        }

=======
=======
>>>>>>> c010b2b8 (.)
=======
>>>>>>> 499a5da9 (.)
        if (!is_string($value)) {
            return $field === 'id' ? $currentLocale : '';
        }
        
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> dc312f89 (.)
=======
>>>>>>> c010b2b8 (.)
=======
>>>>>>> 499a5da9 (.)
        return $value;
    }

    /**
     * Build the URL for the admin panel based on the current route and parameters.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @param string $locale The locale code to build URL for
     *
=======
     * 
     * @param string $locale The locale code to build URL for
>>>>>>> dc312f89 (.)
=======
     * 
     * @param string $locale The locale code to build URL for
>>>>>>> c010b2b8 (.)
=======
     * 
     * @param string $locale The locale code to build URL for
>>>>>>> 499a5da9 (.)
     * @return string The generated URL
     */
    private function buildAdminLanguageUrl(string $locale): string
    {
        $routeName = Route::currentRouteName();
        if (! is_string($routeName)) {
            return '#';
        }
        $routeParameters = array_merge(getRouteParameters(), ['lang' => $locale]);
        $queryParameters = request()->all();

        $url = route($routeName, $routeParameters);

        return Request::create($url)->fullUrlWithQuery($queryParameters);
    }

    /**
     * Build the HTML for the language flag.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @param string $regionalCode The regional code for the flag
     *
=======
     * 
     * @param string $regionalCode The regional code for the flag
>>>>>>> dc312f89 (.)
=======
     * 
     * @param string $regionalCode The regional code for the flag
>>>>>>> c010b2b8 (.)
=======
     * 
     * @param string $regionalCode The regional code for the flag
>>>>>>> 499a5da9 (.)
     * @return string The HTML for the flag
     */
    private function buildFlagHtml(string $regionalCode): string
    {
        return sprintf(
            '<div class="iti__flag-box"><div class="iti__flag iti__%s"></div></div>',
            e($regionalCode)
        );
    }
}
