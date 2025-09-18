<?php

declare(strict_types=1);

/**
 * @see https://github.com/barryvdh/laravel-translation-manager/blob/master/src/Models/Translation.php
 */

namespace Modules\Lang\Models;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use DB;
=======
>>>>>>> dc312f89 (.)
=======
>>>>>>> c010b2b8 (.)
=======
>>>>>>> 499a5da9 (.)
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Support\Carbon;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Xot\Traits\Updater;
>>>>>>> dc312f89 (.)
=======
use Illuminate\Support\Facades\DB;
>>>>>>> c010b2b8 (.)
=======
use Illuminate\Support\Facades\DB;
>>>>>>> 499a5da9 (.)

/**
 * Modules\Lang\Models\Translation.
 *
 * @property int         $id
 * @property string|null $lang
 * @property string|null $key
 * @property string|null $value
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @property string      $namespace
 * @property string      $group
 * @property string|null $item
=======
=======
>>>>>>> c010b2b8 (.)
=======
>>>>>>> 499a5da9 (.)
 * @property string $namespace
 * @property string $group
 * @property string|null $item
 *
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> dc312f89 (.)
=======
>>>>>>> c010b2b8 (.)
=======
>>>>>>> 499a5da9 (.)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   ofTranslatedGroup(string $group)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   orderByGroupKeys(bool $ordered)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   query()
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   selectDistinctGroup()
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   whereItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   whereNamespace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Translation   whereValue($value)
 * @method static \Modules\Lang\Database\Factories\TranslationFactory factory($count = null, $state = [])
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
 * @mixin IdeHelperTranslation
=======
=======
>>>>>>> 499a5da9 (.)
 *
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
 *
<<<<<<< HEAD
>>>>>>> c010b2b8 (.)
=======
>>>>>>> 499a5da9 (.)
 * @mixin \Eloquent
 */
class Translation extends BaseModel
{
<<<<<<< HEAD
<<<<<<< HEAD
=======
 *
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
 *
 * @mixin \Eloquent
 */
class Translation extends Model
{
    use HasFactory;
    use Updater;

>>>>>>> dc312f89 (.)
=======
>>>>>>> c010b2b8 (.)
=======
>>>>>>> 499a5da9 (.)
    final public const STATUS_SAVED = 0;

    final public const STATUS_CHANGED = 1;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c010b2b8 (.)
=======
>>>>>>> 499a5da9 (.)
    protected $fillable = [
        'id',
        'lang',
        'value',
        'namespace',
        'group',
        'item',
    ];

    // protected $table = 'ltm_translations';
    protected $guarded = ['id', 'created_at', 'updated_at'];
<<<<<<< HEAD
<<<<<<< HEAD
=======
    /**
     * @var string
     */
    protected $table = 'language_lines';

    /**
     * @var array<string>
     */
    protected $fillable = [
        'group',
        'key',
        'text',
        'locale',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'text' => 'array',
    ];

    // protected $guarded = ['id', 'created_at', 'updated_at'];
>>>>>>> dc312f89 (.)
=======
>>>>>>> c010b2b8 (.)
=======
>>>>>>> 499a5da9 (.)

    /**
     * Undocumented function.
     */
    public function scopeOfTranslatedGroup(EloquentBuilder $query, string $group): QueryBuilder|EloquentBuilder
    {
        return $query->where('group', $group)->whereNotNull('value');
    }

    public function scopeOrderByGroupKeys(EloquentBuilder $query, bool $ordered): EloquentBuilder
    {
        if ($ordered) {
            $query->orderBy('group')->orderBy('key');
        }

        return $query;
    }

    public function scopeSelectDistinctGroup(EloquentBuilder $query): EloquentBuilder|QueryBuilder
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $select = match (\DB::getDriverName()) {
=======
        $select = match (DB::getDriverName()) {
>>>>>>> dc312f89 (.)
=======
        $select = match (DB::getDriverName()) {
>>>>>>> c010b2b8 (.)
=======
        $select = match (DB::getDriverName()) {
>>>>>>> 499a5da9 (.)
            'mysql' => 'DISTINCT `group`',
            default => 'DISTINCT "group"',
        };

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $query->select(\DB::raw($select));
=======
        return $query->select(DB::raw($select));
>>>>>>> dc312f89 (.)
=======
        return $query->select(DB::raw($select));
>>>>>>> c010b2b8 (.)
=======
        return $query->select(DB::raw($select));
>>>>>>> 499a5da9 (.)
    }

    /*
     * Get the current connection name for the model.
     *
     * @return string|null

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getConnectionName(): void {
=======
    public function getConnectionName()
    {
>>>>>>> dc312f89 (.)
=======
    public function getConnectionName()
    {
>>>>>>> c010b2b8 (.)
=======
    public function getConnectionName()
    {
>>>>>>> 499a5da9 (.)
        if ($connection = config('translation-manager.db_connection')) {
            return $connection;
        }

        return parent::getConnectionName();
    }
    */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

    /**
     * Ottiene il valore tradotto.
     */
    public function getTranslation(string $key, ?string $locale = null): ?string
    {
        $locale = $locale ?? app()->getLocale();
        $translations = $this->text;

        return $translations[$key][$locale] ?? null;
    }

    /**
     * Imposta una traduzione.
     *
     * @param array<string, string> $value
     */
    public function setTranslation(string $key, array $value): void
    {
        $translations = $this->text;
        $translations[$key] = $value;
        $this->text = $translations;
        $this->save();
    }
>>>>>>> dc312f89 (.)
=======
>>>>>>> c010b2b8 (.)
=======
>>>>>>> 499a5da9 (.)
}
