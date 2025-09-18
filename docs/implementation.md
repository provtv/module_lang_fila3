<<<<<<< HEAD
# Implementazione Xot
=======
# Implementazione Job
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)

## Struttura del Codice

### Convenzioni
- Seguire PSR-12 per lo stile del codice
- Mantenere una lunghezza massima di 120 caratteri per riga
- Utilizzare indentazione di 4 spazi
- Inserire una riga vuota tra i metodi
- Utilizzare parentesi graffe su nuova riga per classi e metodi

### Nomenclatura
<<<<<<< HEAD
- **Classi**: PascalCase (es. `XotResource`)
- **Metodi**: camelCase (es. `validateXot`)
- **Variabili**: camelCase (es. `xotStatus`)
- **Costanti**: UPPER_SNAKE_CASE (es. `MAX_XOT`)
- **Interfacce**: PascalCase con suffisso Interface (es. `XotServiceInterface`)
- **Trait**: PascalCase con suffisso Trait (es. `XotTrait`)
=======
- **Classi**: PascalCase (es. `JobResource`)
- **Metodi**: camelCase (es. `validateJob`)
- **Variabili**: camelCase (es. `jobStatus`)
- **Costanti**: UPPER_SNAKE_CASE (es. `MAX_JOBS`)
- **Interfacce**: PascalCase con suffisso Interface (es. `JobServiceInterface`)
- **Trait**: PascalCase con suffisso Trait (es. `JobTrait`)
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)

### Type Hinting
- Utilizzare sempre type hints per parametri e return types
- Utilizzare tipi nullable quando appropriato (es. `?string`)
- Utilizzare union types quando necessario (es. `string|int`)
- Utilizzare mixed solo quando strettamente necessario

## Architettura

### Pattern Utilizzati
- Repository Pattern per l'accesso ai dati
- Service Layer per la logica di business
- Factory Pattern per la creazione di oggetti complessi
- Observer Pattern per eventi e notifiche
- Strategy Pattern per algoritmi variabili

### Directory Structure
```
<<<<<<< HEAD
Xot/
=======
Job/
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
├── Console/
├── Database/
│   ├── Migrations/
│   └── Seeders/
├── Filament/
│   ├── Resources/
│   ├── Pages/
│   └── Widgets/
├── Models/
├── Providers/
├── Services/
└── Traits/
```

## Implementazione Filament

### Resource Base
```php
<<<<<<< HEAD
namespace Modules\Xot\Filament\Resources;

use Filament\Resources\Resource;

class XotResource extends Resource
{
    protected static ?string $model = null;
    protected static ?string $navigationIcon = 'heroicon-o-cube';
    protected static ?string $navigationGroup = 'Xot';
=======
namespace Modules\Job\Filament\Resources;

use Filament\Resources\Resource;

class JobResource extends Resource
{
    protected static ?string $model = null;
    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationGroup = 'Job';
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
    
    public static function getNavigationLabel(): string
    {
        return static::$navigationLabel ?? Str::headline(static::getModelLabel());
    }
}
```

### Pages
```php
<<<<<<< HEAD
namespace Modules\Xot\Filament\Pages;

use Filament\Pages\Page;

class XotPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-cube';
    protected static ?string $navigationGroup = 'Xot';
    protected static string $view = 'xot::filament.pages.xot';
=======
namespace Modules\Job\Filament\Pages;

use Filament\Pages\Page;

class JobPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationGroup = 'Job';
    protected static string $view = 'job::filament.pages.job';
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
    
    public function mount()
    {
        $this->form->fill([
<<<<<<< HEAD
            'xots' => $this->getXots(),
=======
            'jobs' => $this->getJobs(),
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
        ]);
    }
    
    protected function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
            Forms\Components\TextInput::make('name')
                ->label('Nome')
=======
            Forms\Components\TextInput::make('title')
                ->label('Titolo')
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
                ->required(),
            Forms\Components\Textarea::make('description')
                ->label('Descrizione')
                ->required(),
            Forms\Components\Select::make('status')
                ->label('Stato')
                ->options([
                    'draft' => 'Bozza',
<<<<<<< HEAD
                    'active' => 'Attivo',
                    'inactive' => 'Inattivo',
=======
                    'published' => 'Pubblicato',
                    'closed' => 'Chiuso',
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
                ])
                ->required(),
        ];
    }
}
```

### Widgets
```php
<<<<<<< HEAD
namespace Modules\Xot\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class XotStatsOverview extends BaseWidget
=======
namespace Modules\Job\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class JobStatsOverview extends BaseWidget
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
{
    protected function getStats(): array
    {
        return [
<<<<<<< HEAD
            Stat::make('Xot', Xot::count())
                ->description('Xot attivi')
                ->descriptionIcon('heroicon-m-cube'),
            Stat::make('Elementi', Element::count())
                ->description('Elementi totali')
                ->descriptionIcon('heroicon-m-cube-transparent'),
=======
            Stat::make('Lavori', Job::count())
                ->description('Lavori attivi')
                ->descriptionIcon('heroicon-m-briefcase'),
            Stat::make('Candidature', Application::count())
                ->description('Candidature ricevute')
                ->descriptionIcon('heroicon-m-document-text'),
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
        ];
    }
}
```

## Servizi

<<<<<<< HEAD
### Gestione Xot
```php
namespace Modules\Xot\Services;

interface XotServiceInterface
{
    public function createXot(array $data): void;
    public function updateXot(string $id, array $data): void;
    public function deleteXot(string $id): void;
    public function getXotDetails(string $id): array;
    public function getXotsByStatus(string $status): array;
}
```

### Gestione Elementi
```php
namespace Modules\Xot\Services;

interface ElementServiceInterface
{
    public function createElement(string $xotId, array $data): void;
    public function updateElement(string $id, array $data): void;
    public function deleteElement(string $id): void;
    public function getElementDetails(string $id): array;
    public function getElementsByXot(string $xotId): array;
=======
### Gestione Lavori
```php
namespace Modules\Job\Services;

interface JobServiceInterface
{
    public function createJob(array $data): void;
    public function updateJob(string $id, array $data): void;
    public function deleteJob(string $id): void;
    public function getJobDetails(string $id): array;
    public function getJobsByStatus(string $status): array;
}
```

### Gestione Candidature
```php
namespace Modules\Job\Services;

interface ApplicationServiceInterface
{
    public function submitApplication(string $jobId, array $data): void;
    public function updateApplicationStatus(string $id, string $status): void;
    public function getApplicationDetails(string $id): array;
    public function getApplicationsByJob(string $jobId): array;
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
}
```

## Database

### Convenzioni
<<<<<<< HEAD
- Nomi tabelle in snake_case plurale (es. `xots`)
- Nomi colonne in snake_case (es. `xot_status`)
=======
- Nomi tabelle in snake_case plurale (es. `jobs`)
- Nomi colonne in snake_case (es. `job_status`)
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
- Chiavi esterne: `{table}_id` (es. `user_id`)
- Timestamps: `created_at`, `updated_at`, `deleted_at`
- Soft deletes per tutte le tabelle principali

### Migrazioni
```php
<<<<<<< HEAD
Schema::create('xots', function (Blueprint $table) {
    $table->id();
    $table->string('name');
=======
Schema::create('jobs', function (Blueprint $table) {
    $table->id();
    $table->string('title');
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
    $table->text('description');
    $table->string('status');
    $table->morphs('owner');
    $table->json('data')->nullable();
    $table->timestamps();
    $table->softDeletes();
});

<<<<<<< HEAD
Schema::create('elements', function (Blueprint $table) {
    $table->id();
    $table->foreignId('xot_id')->constrained();
    $table->morphs('elementable');
=======
Schema::create('applications', function (Blueprint $table) {
    $table->id();
    $table->foreignId('job_id')->constrained();
    $table->morphs('applicant');
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
    $table->string('status');
    $table->json('data')->nullable();
    $table->timestamps();
    $table->softDeletes();
});
```

### Indici
```php
<<<<<<< HEAD
Schema::table('xots', function (Blueprint $table) {
=======
Schema::table('jobs', function (Blueprint $table) {
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
    $table->index(['status', 'created_at']);
    $table->index(['owner_type', 'owner_id']);
});

<<<<<<< HEAD
Schema::table('elements', function (Blueprint $table) {
    $table->index(['xot_id', 'status']);
    $table->index(['elementable_type', 'elementable_id']);
=======
Schema::table('applications', function (Blueprint $table) {
    $table->index(['job_id', 'status']);
    $table->index(['applicant_type', 'applicant_id']);
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
});
```

## Frontend

### Views
```php
<<<<<<< HEAD
// resources/views/xot/xot.blade.php
=======
// resources/views/job/job.blade.php
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
<x-filament::page>
    <x-filament::form wire:submit="save">
        <x-filament::card>
            <x-filament::form-section>
                <x-slot name="title">
<<<<<<< HEAD
                    Gestione Xot
                </x-slot>

                <x-slot name="description">
                    Gestisci i dettagli dell'Xot
=======
                    Gestione Lavoro
                </x-slot>

                <x-slot name="description">
                    Gestisci i dettagli del lavoro
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
                </x-slot>

                {{ $this->form }}
            </x-filament::form-section>
        </x-filament::card>
    </x-filament::form>
</x-filament::page>
```

### Folio
```php
// routes/folio.php
<<<<<<< HEAD
Route::get('/xot', \Modules\Xot\Filament\Pages\XotPage::class);
=======
Route::get('/job', \Modules\Job\Filament\Pages\JobPage::class);
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
```

## Testing

### Convenzioni
- Test unitari per ogni classe
- Test di integrazione per flussi complessi
- Test di feature per Filament e Folio
- Utilizzare data providers quando appropriato
- Seguire il pattern "given-when-then"

### Unit Tests
```php
<<<<<<< HEAD
class XotServiceTest extends TestCase
{
    public function test_create_xot()
    {
        $data = [
            'name' => 'Test Xot',
            'description' => 'Descrizione Xot',
            'status' => 'draft'
        ];
        
        $this->xotService->createXot($data);
        
        $xot = Xot::where('name', $data['name'])->first();
        $this->assertNotNull($xot);
        $this->assertEquals($data['status'], $xot->status);
=======
class JobServiceTest extends TestCase
{
    public function test_create_job()
    {
        $data = [
            'title' => 'Sviluppatore PHP',
            'description' => 'Descrizione lavoro',
            'status' => 'draft'
        ];
        
        $this->jobService->createJob($data);
        
        $job = Job::where('title', $data['title'])->first();
        $this->assertNotNull($job);
        $this->assertEquals($data['status'], $job->status);
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
    }
}
```

### Feature Tests
```php
<<<<<<< HEAD
class XotPageTest extends TestCase
{
    public function test_can_render_xot_page()
    {
        $this->get('/xot')
            ->assertStatus(200)
            ->assertSee('Gestione Xot');
    }
    
    public function test_can_save_xot()
    {
        $this->post('/xot', [
            'name' => 'Test Xot',
            'description' => 'Descrizione Xot',
=======
class JobPageTest extends TestCase
{
    public function test_can_render_job_page()
    {
        $this->get('/job')
            ->assertStatus(200)
            ->assertSee('Gestione Lavoro');
    }
    
    public function test_can_save_job()
    {
        $this->post('/job', [
            'title' => 'Sviluppatore PHP',
            'description' => 'Descrizione lavoro',
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
            'status' => 'draft'
        ])
        ->assertStatus(200)
        ->assertSessionHas('success');
    }
}
``` 
