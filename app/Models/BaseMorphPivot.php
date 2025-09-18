<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\Lang\Models;
=======
namespace Modules\Xot\Models;
>>>>>>> 80d56bca (Squashed 'laravel/Modules/Xot/' content from commit 88673e4f7)
=======
namespace Modules\Job\Models;
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)

use Illuminate\Database\Eloquent\Relations\MorphPivot;
use Modules\Xot\Traits\Updater;

/**
 * Class BaseMorphPivot.
 */
abstract class BaseMorphPivot extends MorphPivot
{
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

    /** @var bool */
    public $incrementing = true;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
    /** @var bool */
    public $timestamps = true;

    /** @var int */
    protected $perPage = 30;

<<<<<<< HEAD
    protected $connection = 'lang';
=======
    /** @var int */
    protected $perPage = 30;

    /** @var string */
    protected $connection = 'xot';
>>>>>>> 80d56bca (Squashed 'laravel/Modules/Xot/' content from commit 88673e4f7)
=======
    /** @var string */
    protected $connection = 'job';
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)

    /** @var list<string> */
    protected $appends = [];

    /** @var string */
    protected $primaryKey = 'id';

    /** @var string */
    protected $keyType = 'string';

    /** @var list<string> */
    protected $fillable = [
        'id',
        'post_id', 'post_type',
        'related_type',
        'user_id',
        'note',
    ];

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
    protected function casts(): array
    {
        return [
            'id' => 'string',
<<<<<<< HEAD
            'uuid' => 'string', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'deleted_at' => 'datetime'];
=======
    /** @return array<string, string> */
    protected function casts(): array
    {
        return [
            'id' => 'string', // must be string else primary key of related model will be typed as int
            'uuid' => 'string',

=======
            'uuid' => 'string',
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
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
