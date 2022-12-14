<?php

namespace Database\Factories;

use App\Models\QongiroqQilganlar;
use Illuminate\Database\Eloquent\Factories\Factory;

class QongiroqQilganlarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = QongiroqQilganlar::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'familya' => $this->faker->word,
        'ism' => $this->faker->word,
        'sharif' => $this->faker->word,
        'tugulgan_kun' => $this->faker->word,
        'telefon_nomer' => $this->faker->word,
        'parent_telefon' => $this->faker->word,
        'manzil' => $this->faker->word,
        'oquv_yonalishi' => $this->faker->randomDigitNotNull,
        'qoshimcha_desc' => $this->faker->text,
        'recall' => $this->faker->word,
        'oquvchi_keladigan_kun' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
