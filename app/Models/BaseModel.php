<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\Lang\Models;

// use GeneaLabs\LaravelModelCaching\Traits\Cachable;
=======
namespace Modules\Xot\Models;

>>>>>>> 80d56bca (Squashed 'laravel/Modules/Xot/' content from commit 88673e4f7)
// use Laravel\Scout\Searchable;
// ---------- traits
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\Factory\GetFactoryAction;
=======
namespace Modules\Job\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
use Modules\Xot\Traits\Updater;

/**
 * Class BaseModel.
 */
abstract class BaseModel extends Model
{
    use HasFactory;

    // use Searchable;
<<<<<<< HEAD
<<<<<<< HEAD
    // use Cachable;
=======
    // //use Cachable;
>>>>>>> 80d56bca (Squashed 'laravel/Modules/Xot/' content from commit 88673e4f7)
=======
    // //use Cachable;
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
    use Updater;

    /**
     * Indicates whether attributes are snake cased on arrays.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @see  https://laravel-news.com/6-eloquent-secrets
=======
     * @see https://laravel-news.com/6-eloquent-secrets
>>>>>>> 80d56bca (Squashed 'laravel/Modules/Xot/' content from commit 88673e4f7)
=======
     * @see https://laravel-news.com/6-eloquent-secrets
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
     *
     * @var bool
     */
    public static $snakeAttributes = true;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
    /** @var bool */
    public $incrementing = true;

    /** @var bool */
    public $timestamps = true;

    /** @var int */
    protected $perPage = 30;

    /** @var string */
<<<<<<< HEAD
    protected $connection = 'lang';
=======
    public $incrementing = true;

    public $timestamps = true;

    protected $perPage = 30;

    protected $connection = 'xot';
>>>>>>> 80d56bca (Squashed 'laravel/Modules/Xot/' content from commit 88673e4f7)
=======
    protected $connection = 'job';

    /** @var string|null */
    protected $prefix;
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)

    /** @var list<string> */
    protected $fillable = ['id'];

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
    /** @var string */
    protected $primaryKey = 'id';

    /** @var string */
<<<<<<< HEAD
=======
    protected $primaryKey = 'id';

>>>>>>> 80d56bca (Squashed 'laravel/Modules/Xot/' content from commit 88673e4f7)
=======
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
    protected $keyType = 'string';

    /** @var list<string> */
    protected $hidden = [
        // 'password'
    ];

<<<<<<< HEAD
    /**
     * Create a new factory instance for the model.
     *
<<<<<<< HEAD
     * @return Factory
     */
    protected static function newFactory()
    {
        return app(GetFactoryAction::class)->execute(static::class);
    }

    /**
     * @return array<string, string> */
=======
    public function __construct(array $attributes = [])
    {
        if (isset($this->prefix)) {
            $this->table = $this->prefix.$this->table;
        }

        parent::__construct($attributes);
    }

    /**
     * ----
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory<static>
     */
    protected static function newFactory()
    {
        return app(\Modules\Xot\Actions\Factory\GetFactoryAction::class)->execute(static::class);
    }

    /** @return array<string, string> */
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
    protected function casts(): array
    {
        return [
            'id' => 'string',
<<<<<<< HEAD
            'uuid' => 'string', 'published_at' => 'datetime', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
=======
     * @return Factory<static>
     */
    protected static function newFactory(): Factory
    {
        // return app(\Modules\Xot\Actions\Factory\GetFactoryAction::class)->execute(static::class);
        return app(GetFactoryAction::class)->execute(static::class);
    }

    /** @return array<string, class-string|string> */
    protected function casts(): array
    {
        return [
=======
            'uuid' => 'string',
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
            'published_at' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',

            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
        ];
<<<<<<< HEAD
>>>>>>> 80d56bca (Squashed 'laravel/Modules/Xot/' content from commit 88673e4f7)
=======
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
    }
}
