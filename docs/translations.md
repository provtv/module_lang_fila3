<<<<<<< HEAD
<<<<<<< HEAD
# Traduzioni nel Progetto

## Regole Fondamentali

### Regola #1: MAI utilizzare ->label() o metodi simili

❌ **NON FARE MAI**:
```php
TextInput::make('nome')
    ->label('Nome Utente')
    ->placeholder('Inserisci il nome')
    ->helperText('Il nome completo dell\'utente');
```

✅ **FARE SEMPRE**:
```php
TextInput::make('nome')  // Le traduzioni vengono gestite automaticamente dal LangServiceProvider
```

**Motivazione**: 
Il metodo `->label()` e simili non devono mai essere utilizzati direttamente nei componenti Filament. Le etichette vengono gestite automaticamente dal `LangServiceProvider` che intercetta la creazione dei componenti e applica le traduzioni dai file di lingua.

## Struttura delle Traduzioni

### File di Traduzione
```php
// resources/lang/it/module-name.php
return [
    'fields' => [
        'nome' => [
            'label' => 'Nome Utente',
            'placeholder' => 'Inserisci il nome',
            'helper_text' => 'Il nome completo dell\'utente',
            'tooltip' => 'Inserisci il nome come appare sul documento',
            'validation' => [
                'required' => 'Il nome è obbligatorio',
                'min' => 'Il nome deve contenere almeno :min caratteri',
            ],
        ],
    ],
    'sections' => [
        'personal_info' => [
            'title' => 'Informazioni Personali',
            'description' => 'Inserisci i tuoi dati personali',
        ],
    ],
    'actions' => [
        'save' => [
            'label' => 'Salva',
            'tooltip' => 'Salva le modifiche',
            'confirmation' => 'Sei sicuro di voler salvare?',
=======
# Sistema di Traduzioni

## Struttura

### File di Traduzione
```
resources/lang/
├── it/
│   ├── broker.php
│   ├── ui.php
│   └── validation.php
└── en/
    ├── broker.php
    ├── ui.php
    └── validation.php
```

### Formato File
```php
return [
    'resources' => [
        'polizza_convenzione' => [
            'label' => 'Polizza in Convenzione',
            'plural_label' => 'Polizze in Convenzione',
            'navigation' => [
                'group' => 'Portafoglio',
                'icon' => 'heroicon-o-document-text',
                'sort' => 1,
            ],
            'columns' => [
                'numero_adesione' => 'Numero Adesione',
                'cliente' => 'Cliente',
                // ...
            ],
            'filters' => [
                'stato_pratica' => 'Stato Pratica',
                'convenzione' => 'Convenzione',
                // ...
            ],
            'actions' => [
                'create' => 'Nuova Polizza',
                'edit' => 'Modifica',
                'view' => 'Visualizza',
                // ...
            ],
>>>>>>> 688d0704 (first)
        ],
    ],
];
```

<<<<<<< HEAD
## Gestione Automatica delle Traduzioni

Il `LangServiceProvider` gestisce automaticamente:
- Label dei campi
- Placeholder
- Helper text
- Tooltip
- Messaggi di validazione
- Titoli delle sezioni
- Descrizioni
- Messaggi di conferma

## Best Practices

1. **Organizzazione**
   - Un file di traduzione per modulo
   - Struttura gerarchica chiara
   - Separazione per tipo (fields, sections, actions)
   - Mantenere coerenza tra le lingue

2. **Naming**
   - Usare snake_case per le chiavi
   - Nomi descrittivi e significativi
   - Mantenere coerenza in tutto il progetto
   - Evitare abbreviazioni

3. **Validazione**
   - Includere tutti i messaggi di validazione
   - Usare i placeholder per i valori dinamici
   - Messaggi chiari e concisi
   - Feedback utile all'utente

4. **Manutenzione**
   - Aggiornare regolarmente le traduzioni
   - Verificare la completezza
   - Mantenere la documentazione aggiornata
   - Seguire le convenzioni stabilite

## Checklist di Verifica

Prima di committare:
1. [ ] Verificare di non aver usato ->label() o metodi simili
2. [ ] Controllare che tutte le stringhe siano nei file di traduzione
3. [ ] Verificare la coerenza delle traduzioni tra le lingue
4. [ ] Testare la visualizzazione in tutte le lingue supportate

## Note Importanti

1. **Sicurezza**
   - Non includere dati sensibili nelle traduzioni
   - Sanitizzare i valori dinamici
   - Evitare XSS attraverso le traduzioni

2. **Performance**
   - Caricare solo le traduzioni necessarie
   - Utilizzare il caching delle traduzioni
   - Ottimizzare la struttura dei file

3. **Internazionalizzazione**
   - Supportare tutte le lingue necessarie
   - Gestire correttamente i plurali
   - Considerare le differenze culturali
   - Mantenere la stessa struttura per tutte le lingue

## Documentazione Correlata

- [Filament Translations](/.cursor/rules/filament-translations.rule)
- [Laravel Localization](https://laravel.com/docs/10.x/localization)
- [Best Practices](/.cursor/rules/translations.rule)
=======
# Gestione delle Traduzioni

## Documentazione Principale

- [Regole Generali](../../Xot/docs/translations.md) - Regole generali per tutte le traduzioni
- [Regole CMS](../../Cms/docs/translations.md) - Regole specifiche per il CMS

## Struttura delle Traduzioni

### 1. Regole Generali
- Tutte le traduzioni devono essere gestite tramite file di traduzione
- Non utilizzare mai stringhe hardcoded
- Seguire la struttura gerarchica dei namespace
- Mantenere la coerenza tra i file
- Utilizzare il prefisso del modulo (es: `cms::`) per le traduzioni
- Mantenere la coerenza tra le diverse lingue

### 2. Regole Specifiche CMS
- Gestione dei blocchi di contenuto
- Traduzioni per form e campi
- Struttura gerarchica per sezioni e blocchi
- Tooltip e descrizioni per tutti i campi

## Best Practices

### 1. Organizzazione
- Mantenere una struttura coerente
- Utilizzare namespace corretti
- Creare collegamenti bidirezionali
- Documentare le eccezioni

### 2. Implementazione
- Utilizzare sempre le traduzioni
- Aggiungere tooltip descrittivi
- Includere messaggi di validazione
- Gestire le traduzioni per le azioni

### 3. Manutenzione
- Aggiornare regolarmente la documentazione
- Verificare la presenza di stringhe hardcoded
- Controllare la coerenza tra i file
- Testare le traduzioni

## Troubleshooting

### Problemi Comuni
1. **Stringhe Hardcoded**
   - Verificare che non ci siano `->label()` con stringhe
   - Utilizzare sempre le traduzioni

2. **Namespace Errati**
   - Controllare che i namespace non includano `App`
   - Seguire la struttura corretta

3. **Traduzioni Mancanti**
   - Verificare la presenza di tutte le traduzioni
   - Aggiungere le traduzioni mancanti

4. **Struttura Errata**
   - Seguire la gerarchia corretta
   - Mantenere la coerenza tra i file

## Collegamenti Utili

- [Documentazione Laravel](https://laravel.com/docs/10.x/localization)
- [Best Practices Filament](https://filamentphp.com/docs/3.x/panels/resources/forms#localization)
- [Guida Traduzioni](https://laravel.com/docs/10.x/localization#using-translation-strings-as-keys) 
>>>>>>> dc312f89 (.)
=======
## Utilizzo

### In Filament Resources
```php
// NON utilizzare ->label()
TextColumn::make('numero_adesione')
TextColumn::make('cliente.nominativo')
SelectFilter::make('stato_pratica_id')
```

### In Blade Views
```blade
@lang('broker.resources.polizza_convenzione.label')
{{ __('broker.resources.polizza_convenzione.columns.numero_adesione') }}
```

### In PHP
```php
trans('broker.resources.polizza_convenzione.label')
__('broker.resources.polizza_convenzione.columns.numero_adesione')
```

## Best Practices

### 1. Struttura Chiavi
- Utilizzare nomi descrittivi
- Mantenere una gerarchia logica
- Evitare duplicazioni
- Usare snake_case per le chiavi

### 2. Organizzazione File
- Un file per modulo
- Separare le traduzioni per contesto
- Mantenere coerenza tra lingue
- Documentare struttura complessa

### 3. Gestione Traduzioni
- Non cancellare traduzioni esistenti
- Aggiungere nuove traduzioni in modo incrementale
- Mantenere le traduzioni aggiornate
- Verificare completezza traduzioni

### 4. Performance
- Utilizzare cache delle traduzioni
- Caricare solo le traduzioni necessarie
- Evitare traduzioni dinamiche
- Ottimizzare file di grandi dimensioni

## LangService

### Caratteristiche
- Caricamento automatico traduzioni
- Fallback su lingua predefinita
- Cache delle traduzioni
- Supporto per più lingue

### Configurazione
```php
// config/xot.php
return [
    'translations' => [
        'default_locale' => 'it',
        'fallback_locale' => 'en',
        'cache_translations' => true,
        'cache_key' => 'translations',
        'cache_duration' => 3600,
    ],
];
```

### Metodi Principali
```php
// Carica tutte le traduzioni per una lingua
LangService::loadTranslations(string $locale): array

// Ottiene una traduzione con fallback
LangService::get(string $key, array $replace = []): string

// Verifica esistenza traduzione
LangService::has(string $key): bool

// Aggiunge traduzioni runtime
LangService::add(string $key, string $value): void
```

## Esempi Comuni

### Resource
```php
// Definizione traduzioni
'resources' => [
    'polizza_convenzione' => [
        'label' => 'Polizza in Convenzione',
        'columns' => [
            'numero_adesione' => 'Numero Adesione',
        ],
    ],
],

// Utilizzo in Resource
TextColumn::make('numero_adesione')
```

### Form
```php
// Definizione traduzioni
'forms' => [
    'cliente' => [
        'fields' => [
            'nome' => 'Nome',
            'cognome' => 'Cognome',
        ],
    ],
],

// Utilizzo in Form
TextInput::make('nome')
TextInput::make('cognome')
```

### Actions
```php
// Definizione traduzioni
'actions' => [
    'save' => 'Salva',
    'cancel' => 'Annulla',
    'delete' => [
        'label' => 'Elimina',
        'confirm' => 'Sei sicuro?',
    ],
],

// Utilizzo in Actions
Action::make('save')
Action::make('delete')
``` 
>>>>>>> 688d0704 (first)
