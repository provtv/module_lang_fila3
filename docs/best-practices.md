<<<<<<< HEAD
# 📚 **Best Practices Modulo Lang - Laraxot**

## 🎯 **Panoramica**

Questo documento definisce le best practices per il modulo Lang, seguendo i principi **DRY**, **KISS**, **SOLID**, **Robust** e **Laraxot**. Ogni regola è progettata per garantire coerenza, manutenibilità e performance ottimali.

---

## 🏗️ **Principi Architetturali**

### **1. DRY (Don't Repeat Yourself)**
- **Centralizzazione**: Tutte le traduzioni in un unico punto
- **Riutilizzo**: Chiavi condivise tra moduli correlati
- **Template**: Strutture standardizzate per file simili

### **2. KISS (Keep It Simple, Stupid)**
- **API Intuitive**: Metodi semplici e diretti
- **Struttura Lineare**: Organizzazione logica e prevedibile
- **Naming Chiaro**: Nomi autoesplicativi

### **3. SOLID**
- **Single Responsibility**: Ogni file ha una responsabilità specifica
- **Open/Closed**: Estensibile senza modifiche
- **Liskov Substitution**: Interfacce coerenti
- **Interface Segregation**: API specifiche per contesto
- **Dependency Inversion**: Dipendenze gestite centralmente

### **4. Robust**
- **Error Handling**: Gestione completa degli errori
- **Fallback Strategy**: Strategie di recupero intelligenti
- **Validation**: Controlli di integrità automatici
- **Performance**: Ottimizzazioni per scalabilità

### **5. Laraxot**
- **Framework Compliance**: Rispetto standard Laraxot
- **Module Integration**: Integrazione nativa con moduli
- **Consistency**: Coerenza con ecosistema Laraxot

---

## 📁 **Struttura File Traduzioni**

### **Organizzazione Standard**
```
Modules/{ModuleName}/lang/{locale}/
├── fields.php          # Campi form e modelli
├── actions.php         # Azioni UI e bottoni
├── messages.php        # Messaggi utente
├── validation.php      # Messaggi validazione
├── navigation.php      # Menu e navigazione
├── errors.php          # Messaggi di errore
├── notifications.php   # Notifiche sistema
└── emails.php          # Template email
```

### **Convenzioni Naming**
```php
// ✅ CORRETTO - Struttura gerarchica
return [
    'user' => [
        'profile' => [
            'name' => [
                'label' => 'Nome',
                'placeholder' => 'Inserisci nome',
                'help' => 'Nome completo utente'
            ]
        ]
    ]
];

// ❌ ERRATO - Struttura piatta
return [
    'user_profile_name_label' => 'Nome',
    'user_profile_name_placeholder' => 'Inserisci nome'
];
```

---

## 🔧 **Implementazione Tecnica**

### **1. Sintassi File PHP**
```php
<?php

declare(strict_types=1);

/**
 * File traduzioni per campi utente.
 *
 * @return array<string, array<string, string>>
 */
return [
    'name' => [
        'label' => 'Nome',
        'placeholder' => 'Inserisci nome',
        'help' => 'Nome completo utente',
        'validation' => [
            'required' => 'Il nome è obbligatorio',
            'min' => 'Il nome deve essere di almeno :min caratteri',
            'max' => 'Il nome non può superare :max caratteri'
        ]
    ]
];
```

### **2. Gestione Pluralizzazione**
```php
// ✅ CORRETTO - Utilizzo trans_choice
'items_count' => '{0} Nessun elemento|{1} Un elemento|[2,*] :count elementi',

// Utilizzo
{{ trans_choice('module::messages.items_count', $count, ['count' => $count]) }}

// ❌ ERRATO - Logica manuale
'items_count' => 'Elementi: ' . $count,
```

### **3. Gestione Parametri**
```php
// ✅ CORRETTO - Parametri tipizzati
'welcome_user' => 'Benvenuto :name, hai :count messaggi',

// Utilizzo
__('module::messages.welcome_user', ['name' => $user->name, 'count' => $count])

// ❌ ERRATO - Concatenazione manuale
'welcome_user' => 'Benvenuto ' . $user->name . ', hai ' . $count . ' messaggi',
```

---

## 🎨 **Integrazione Filament**

### **1. Componenti Automatici**
```php
// ✅ CORRETTO - Nessun ->label() o ->placeholder()
TextInput::make('name')
    ->required()
    ->maxLength(255);

// Il sistema carica automaticamente:
// - fields.name.label
// - fields.name.placeholder
// - fields.name.help
```

### **2. Azioni Personalizzate**
```php
// ✅ CORRETTO - Traduzioni da file
Action::make('approve')
    ->requiresConfirmation()
    ->modalHeading(__('module::actions.approve.modal.heading'))
    ->modalDescription(__('module::actions.approve.modal.description'));

// ❌ ERRATO - Stringhe hardcoded
Action::make('approve')
    ->label('Approva')
    ->modalHeading('Conferma approvazione');
```

### **3. Validazione Messaggi**
```php
// ✅ CORRETTO - Messaggi centralizzati
'validation' => [
    'name' => [
        'required' => 'Il nome è obbligatorio',
        'string' => 'Il nome deve essere una stringa',
        'max' => 'Il nome non può superare :max caratteri'
    ]
]

// Utilizzo automatico in Filament
TextInput::make('name')
    ->required()
    ->maxLength(255);
```

---

## 🚀 **Performance e Ottimizzazione**

### **1. Cache Strategy**
```php
// Configurazione cache ottimizzata
'cache' => [
    'enabled' => true,
    'ttl' => 3600, // 1 ora
    'compression' => true,
    'prefix' => 'lang_translations'
]
```

### **2. Lazy Loading**
```php
// ✅ CORRETTO - Caricamento on-demand
$translation = app(TranslationService::class);
$text = $translation->get('key', $locale);

// ❌ ERRATO - Caricamento completo
$allTranslations = config('lang.translations');
$text = $allTranslations[$locale]['key'] ?? 'key';
```

### **3. Memory Management**
```php
// Ottimizzazione memoria
'performance' => [
    'lazy_loading' => true,
    'memory_optimization' => true,
    'batch_loading' => true,
    'compression_level' => 6
]
```

---

## 🔒 **Sicurezza e Validazione**

### **1. Validazione File**
```php
// Controlli di sicurezza
'security' => [
    'validate_file_integrity' => true,
    'max_file_size' => 1024 * 1024, // 1MB
    'allowed_extensions' => ['php'],
    'scan_for_malicious_code' => true
]
```

### **2. Rate Limiting**
```php
// Protezione da abuso
'rate_limiting' => [
    'enabled' => true,
    'max_requests' => 100,
    'time_window' => 60 // secondi
]
```

### **3. Validazione Contenuto**
```php
// Controllo qualità traduzioni
'validation' => [
    'enabled' => true,
    'strict_mode' => false,
    'quality_threshold' => 95, // %
    'auto_fix' => false
]
```

---

## 📊 **Business Logic Integration**

### **1. Validazione Business Rules**
```php
// Regole specifiche business
'business' => [
    'enforce_naming_conventions' => true,
    'require_context_in_keys' => true,
    'validate_business_terms' => true,
    'consistency_check' => true
]
```

### **2. Contesto e Dominio**
```php
// ✅ CORRETTO - Contesto chiaro
'user' => [
    'profile' => [
        'update' => [
            'success' => 'Profilo aggiornato con successo',
            'error' => 'Errore nell\'aggiornamento profilo'
        ]
    ]
]

// ❌ ERRATO - Contesto generico
'update_success' => 'Aggiornato con successo',
'update_error' => 'Errore nell\'aggiornamento'
```

### **3. Consistenza Terminologica**
```php
// Glossario centralizzato
'glossary' => [
    'user' => 'Utente',
    'profile' => 'Profilo',
    'update' => 'Aggiorna',
    'delete' => 'Elimina'
]
```

---

## 🧪 **Testing e Qualità**

### **1. PHPStan Compliance**
```bash
# Verifica qualità codice
./vendor/bin/phpstan analyze Modules/Lang --level=9

# Controllo specifico traduzioni
./vendor/bin/phpstan analyze --configuration=phpstan-translations.neon
```

### **2. Test Traduzioni**
```php
// Test unitari traduzioni
public function test_translation_structure(): void
{
    $translations = require lang_path('it/fields.php');
    
    $this->assertIsArray($translations);
    $this->assertArrayHasKey('name', $translations);
    $this->assertArrayHasKey('label', $translations['name']);
}
```

### **3. Validazione Automatica**
```bash
# Comandi di validazione
php artisan lang:validate          # Controllo completezza
php artisan lang:report            # Report qualità
php artisan lang:fix               # Fix automatici
php artisan lang:benchmark         # Test performance
```

---

## 🔄 **Manutenzione e Aggiornamenti**

### **1. Versioning Traduzioni**
```php
// Metadati versione
'version' => '2.0.0',
'last_updated' => '2025-01-27',
'compatibility' => [
    'laravel' => '^12.0',
    'filament' => '^3.0',
    'php' => '^8.2'
]
```

### **2. Migrazione Versioni**
```bash
# Script di migrazione
php artisan lang:migrate --from=1.0 --to=2.0

# Backup automatico
php artisan lang:backup --before-migration
```

### **3. Rollback e Recovery**
```bash
# Rollback traduzioni
php artisan lang:rollback --version=1.0

# Ripristino da backup
php artisan lang:restore --backup=20250127_120000
```

---

## 📋 **Checklist Implementazione**

### **Pre-Implementazione**
- [ ] Analisi requisiti business
- [ ] Definizione struttura traduzioni
- [ ] Pianificazione naming conventions
- [ ] Setup ambiente sviluppo

### **Implementazione**
- [ ] Creazione file traduzioni base
- [ ] Implementazione servizi core
- [ ] Integrazione Filament
- [ ] Configurazione cache

### **Post-Implementazione**
- [ ] Test PHPStan livello 9+
- [ ] Validazione traduzioni
- [ ] Test performance
- [ ] Documentazione aggiornata

---

## 🚨 **Anti-Pattern da Evitare**

### **1. Stringhe Hardcoded**
```php
// ❌ MAI fare questo
TextInput::make('name')->label('Nome');
Button::make('save')->label('Salva');
```

### **2. Strutture Piatte**
```php
// ❌ MAI fare questo
return [
    'name_label' => 'Nome',
    'name_placeholder' => 'Inserisci nome',
    'save_label' => 'Salva'
];
```

### **3. Logica Business nei File Traduzioni**
```php
// ❌ MAI fare questo
return [
    'welcome' => 'Benvenuto ' . $user->name . '!'
];
```

---

## 🔗 **Riferimenti e Collegamenti**

- [README.md](README.md) - Documentazione principale modulo
- [config/lang.php](../config/lang.php) - Configurazione centralizzata
- [Laraxot Framework](https://github.com/laraxot/laraxot) - Framework principale
- [Laravel Localization](https://laravel.com/docs/localization) - Documentazione ufficiale

---

**Ultimo aggiornamento**: Gennaio 2025  
**Versione**: 2.0.0  
**Autore**: Team Laraxot  
**Mantenuto da**: Community Laraxot
=======
# Best Practices UI

## Principi Generali

### 1. Consistenza
- Utilizzare componenti standard
- Mantenere uno stile uniforme
- Seguire le convenzioni di naming
- Riutilizzare pattern comuni

### 2. Accessibilità
- Supportare la navigazione da tastiera
- Utilizzare attributi ARIA
- Mantenere contrasto adeguato
- Fornire testi alternativi

### 3. Performance
- Ottimizzare il caricamento
- Minimizzare le dipendenze
- Utilizzare lazy loading
- Implementare caching

### 4. Responsive Design
- Mobile-first approach
- Breakpoint standard
- Layout fluidi
- Testing multi-device

## Sviluppo Componenti

### 1. Struttura
```php
class CustomComponent extends Component
{
    // Proprietà pubbliche con type hint
    public string $label;
    public ?string $hint = null;
    
    // Proprietà private per stato interno
    private bool $isLoading = false;
    
    // Metodi pubblici con return type
    public function render(): View
    {
        return view('ui::components.custom');
    }
}
```

### 2. Template
```blade
<div class="custom-component">
    {{-- Utilizzare slot nominati --}}
    <div class="header">
        {{ $header ?? '' }}
    </div>
    
    {{-- Gestire stati condizionali --}}
    <div class="content {{ $isLoading ? 'loading' : '' }}">
        {{ $slot }}
    </div>
    
    {{-- Fornire fallback --}}
    <div class="footer">
        {{ $footer ?? 'Default Footer' }}
    </div>
</div>
```

### 3. Stili
```scss
// Utilizzare BEM naming
.custom-component {
    &__header { }
    &__content { }
    &__footer { }
    
    // Stati
    &--loading { }
    &--disabled { }
    
    // Varianti
    &--primary { }
    &--secondary { }
}
```

## Form Components

### 1. Validazione
```php
// Definire regole di validazione
public array $rules = [
    'email' => ['required', 'email'],
    'password' => ['required', 'min:8'],
];

// Messaggi personalizzati
public array $messages = [
    'email.required' => 'trans.validation.email.required',
];
```

### 2. Eventi
```php
// Emettere eventi standard
$this->emit('saved');
$this->emit('deleted', $id);

// Ascoltare eventi
protected $listeners = [
    'refresh' => '$refresh',
];
```

### 3. Loading States
```php
// Gestire stati di caricamento
public function save()
{
    $this->loading = true;
    // ...
    $this->loading = false;
}
```

## Table Components

### 1. Configurazione
```php
// Definire colonne in modo chiaro
protected function getColumns(): array
{
    return [
        Column::make('name')->sortable()->searchable(),
        Column::make('email')->searchable(),
    ];
}

// Configurare filtri
protected function getFilters(): array
{
    return [
        Filter::make('active')->query(fn ($query) => $query->where('active', true)),
    ];
}
```

### 2. Actions
```php
// Definire azioni in modo modulare
protected function getActions(): array
{
    return [
        Action::make('edit')->visible(fn ($record) => $this->can('edit', $record)),
        Action::make('delete')->requiresConfirmation(),
    ];
}
```

## Chart Components

### 1. Dati
```php
// Formattare dati in modo standard
protected function getData(): array
{
    return [
        'labels' => ['Gen', 'Feb', 'Mar'],
        'datasets' => [
            [
                'label' => 'Vendite',
                'data' => [10, 20, 30],
            ],
        ],
    ];
}
```

### 2. Opzioni
```php
// Configurare opzioni in modo chiaro
protected function getOptions(): array
{
    return [
        'responsive' => true,
        'maintainAspectRatio' => false,
        'plugins' => [
            'legend' => [
                'position' => 'bottom',
            ],
        ],
    ];
}
```

## Testing

### 1. Unit Tests
```php
public function test_component_renders()
{
    $component = Livewire::test(CustomComponent::class);
    $component->assertSee('Expected Content');
}
```

### 2. Browser Tests
```php
public function test_component_interaction()
{
    $this->browse(function (Browser $browser) {
        $browser->visit('/page')
            ->click('@button')
            ->assertSee('Result');
    });
}
```

## Documentazione

### 1. PHPDoc
```php
/**
 * Componente per la gestione di form avanzati.
 *
 * @property string $label Label del componente
 * @property string|null $hint Suggerimento opzionale
 *
 * @method void save() Salva i dati del form
 * @method void reset() Resetta il form
 */
class AdvancedForm extends Component
```

### 2. README
- Descrizione chiara
- Esempi di utilizzo
- Configurazioni disponibili
- Breaking changes 
>>>>>>> 688d0704 (first)
