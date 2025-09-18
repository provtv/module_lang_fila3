<?php

declare(strict_types=1);

namespace Modules\Lang\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Modules\Lang\Models\Translation;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Lang\Models\Translation>
 */
class TranslationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Translation>
     */
    protected $model = Translation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function definition(): void {
=======
    public function definition()
    {
>>>>>>> dc312f89 (.)
=======
    public function definition()
    {
>>>>>>> c010b2b8 (.)
=======
    public function definition()
    {
>>>>>>> 499a5da9 (.)
        return [
            'id' => fake()->randomNumber(5),
            'lang' => fake()->word,
            'value' => fake()->text,
            'created_at' => fake()->dateTime,
            'updated_at' => fake()->dateTime,
            'namespace' => fake()->word,
            'group' => fake()->word,
            'item' => fake()->word,
        ];
    }
}
