<?php

declare(strict_types=1);

namespace Modules\Lang\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Modules\Lang\Models\BaseModelLang;

class LangField implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param BaseModelLang $model
<<<<<<< HEAD
     * @param string $key
=======
<<<<<<< HEAD
     * @param string $key
=======
     * @param string        $key
>>>>>>> f0c9bb8 (.)
>>>>>>> cc26d67 (fix: auto resolve conflict)
     * @param array         $attributes
     */
    public function get($model, $key, $value, $attributes)
    {
        return $model->post->{$key};
    }

    /**
     * Prepare the given value for storage.
     *
     * @param BaseModelLang $model
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> cc26d67 (fix: auto resolve conflict)
     * @param string $key
     * @param array         $attributes
     * @param string $key
     * @param string $value
<<<<<<< HEAD
=======
=======
     * @param string        $key
     * @param array         $attributes
     * @param string        $key
     * @param string        $value
>>>>>>> f0c9bb8 (.)
>>>>>>> cc26d67 (fix: auto resolve conflict)
     */
    public function set($model, $key, $value, $attributes): array
    {
        $post = $model->post;
        $post->{$key} = $value;
        tap($post)->save();

        // parent::__construct([]);
        // return [$key => encrypt($value)];
        // return ['created_by' => 'xot'];
        return []; // tolgo l'aggiornamento di questo campo
    }
}
