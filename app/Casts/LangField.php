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
<<<<<<< HEAD
     * @param string        $key
     * @param array         $attributes
     */
    public function get(): void {
=======
=======
>>>>>>> c010b2b8 (.)
     * @param string $key
     * @param array         $attributes
     */
    public function get($model, $key, $value, $attributes)
    {
<<<<<<< HEAD
>>>>>>> dc312f89 (.)
=======
>>>>>>> c010b2b8 (.)
        return $model->post->{$key};
    }

    /**
     * Prepare the given value for storage.
     *
     * @param BaseModelLang $model
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string        $key
     * @param array         $attributes
     * @param string        $key
     * @param string        $value
=======
=======
>>>>>>> c010b2b8 (.)
     * @param string $key
     * @param array         $attributes
     * @param string $key
     * @param string $value
<<<<<<< HEAD
>>>>>>> dc312f89 (.)
=======
>>>>>>> c010b2b8 (.)
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
