<?php

declare(strict_types=1);

namespace Modules\Lang\Datas;

use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

/**
 * Classe che rappresenta i dati relativi a una lingua.
 */
class LangData extends Data
{
    /**
     * Codice identificativo della lingua.
<<<<<<< HEAD
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
=======
     *
     * @var string
>>>>>>> 499a5da9 (.)
     */
    public string $id;

    /**
     * Nome della lingua.
<<<<<<< HEAD
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
=======
     *
     * @var string
>>>>>>> 499a5da9 (.)
     */
    public string $name;

    /**
     * HTML della bandiera rappresentativa della lingua.
<<<<<<< HEAD
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
=======
     *
     * @var string
>>>>>>> 499a5da9 (.)
     */
    public string $flag;

    /**
     * URL per cambiare lingua.
<<<<<<< HEAD
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
=======
     *
     * @var string
>>>>>>> 499a5da9 (.)
     */
    public string $url;

    /**
     * Crea una collezione di dati di lingua.
     *
     * @param EloquentCollection<int, mixed>|Collection<int, mixed>|array<int, mixed> $data
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
>>>>>>> dc312f89 (.)
=======
>>>>>>> c010b2b8 (.)
=======
>>>>>>> 499a5da9 (.)
     * @return DataCollection<LangData>
     */
    public static function collection(EloquentCollection|Collection|array $data): DataCollection
    {
        return self::collect($data, DataCollection::class);
    }
}
