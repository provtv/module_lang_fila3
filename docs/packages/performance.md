# Performance

## Pacchetti Utilizzati

<<<<<<< HEAD
### Cache
- [spatie/laravel-translation-loader](https://github.com/spatie/laravel-translation-loader)
  - Cache traduzioni
  - Ottimizzazione query
  - Gestione memoria

### Response Cache
- [spatie/laravel-responsecache](https://github.com/spatie/laravel-responsecache)
  - Cache risposte per lingua
  - Gestione cache utente
  - Invalido cache automatico

## Implementazione

### Cache Traduzioni
```php
use Spatie\TranslationLoader\TranslationLoaderManager;

class TranslationServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('translation.loader', function ($app) {
            return new TranslationLoaderManager($app['files'], $app['path.lang']);
        });
    }
}
```

### Response Cache
```php
use Spatie\ResponseCache\Middlewares\CacheResponse;

Route::middleware([
    'localeSessionRedirect',
    'localizationRedirect',
    CacheResponse::class
])->group(function () {
    Route::get('/', 'HomeController@index');
});
```

## Best Practices

### Cache
1. Implementare strategie appropriate
2. Gestire invalidazione cache
3. Monitorare hit/miss ratio

### Query
1. Ottimizzare query traduzioni
2. Utilizzare eager loading
3. Implementare indici

## Performance

### Ottimizzazioni
- Implementare CDN per assets
- Utilizzare HTTP/2
- Minificare assets
- Implementare compressione

### Monitoring
- Monitorare utilizzo memoria
- Tracciare query lente
- Analizzare performance cache

## Tools

### Sviluppo
- Laravel Debugbar
- Laravel Telescope
- Blackfire

### Testing
- Test performance query
- Test cache hit/miss
- Test memoria

## Collegamenti

- [Torna a packages.md](../packages.md)
- [Localizzazione](localization.md)
- [Traduzioni](translations.md) 
<<<<<<< HEAD
<<<<<<< HEAD
### Versione HEAD


## Collegamenti tra versioni di performance.md
* [performance.md](laravel/vendor/spatie/laravel-data/docs/advanced-usage/performance.md)
* [performance.md](../../../Xot/docs/features/performance.md)
* [performance.md](../../../Xot/docs/packages/performance.md)
* [performance.md](../../../Xot/docs/roadmap/architecture/performance.md)
* [performance.md](../../../UI/docs/standards/performance.md)
* [performance.md](../../../Lang/docs/packages/performance.md)
* [performance.md](../../../Job/docs/packages/performance.md)
* [performance.md](../../../Cms/docs/frontoffice/performance.md)


### Versione Incoming


---

=======
>>>>>>> dc312f89 (.)
=======
>>>>>>> c010b2b8 (.)
=======
### Response Cache
- [spatie/laravel-responsecache](https://github.com/spatie/laravel-responsecache)
  - Cache risposte
  - Tagging
  - Performance
  - Configurazione dettagliata
  - Integrazione con Filament

### Model States
- [spatie/laravel-model-states](https://github.com/spatie/laravel-model-states)
  - Stati modelli
  - Transizioni
  - Performance
  - Configurazione dettagliata
  - Integrazione con Filament

## Configurazione

### Response Cache
```php
// config/responsecache.php
return [
    'enabled' => env('RESPONSE_CACHE_ENABLED', true),
    'cache_profile' => \Spatie\ResponseCache\CacheProfiles\CacheAllSuccessfulGetRequests::class,
    'cache_lifetime_in_minutes' => 60 * 24,
    'add_cache_time_header' => env('APP_DEBUG', true),
    'cache_store' => null,
];
```

### Model States
```php
// config/model-states.php
return [
    'states' => [
        'package' => [
            'draft' => \App\States\Package\Draft::class,
            'published' => \App\States\Package\Published::class,
            'archived' => \App\States\Package\Archived::class,
        ],
    ],
];
```

## Utilizzo

### Response Cache
```php
// Cache risposta
ResponseCache::cache([
    'enabled' => true,
    'lifetime' => 60 * 24,
]);

// Pulire cache
ResponseCache::clear();

// Tag cache
ResponseCache::tags(['tag1', 'tag2'])->clear();
```

### Model States
```php
// Impostare stato
$package->state->transitionTo(Published::class);

// Verificare stato
if ($package->state->is(Published::class)) {
    // ...
}

// Transizione
$package->state->transitionTo(Archived::class);
```

## Documentazione Collegata

- [Sviluppo](development.md)
- [Testing](testing.md)
- [Debug](debug.md)
- [Panoramica](../packages.md) 
>>>>>>> 80d56bca (Squashed 'laravel/Modules/Xot/' content from commit 88673e4f7)
