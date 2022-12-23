<?php

namespace Database\Factories;

use App\Models\QongiroqQilganlar;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categories;

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
            'familya' => $this->faker->firstName,
            'ism' => $this->faker->lastName,
            'sharif' => $this->faker->name,
            'tugulgan_kun' => $this->faker->date('Y-m-d H:i:s'),
            'telefon_nomer' => $this->faker->e164PhoneNumber,
            'parent_telefon' => $this->faker->e164PhoneNumber,
            'manzil' => $this->faker->streetAddress,
            'oquv_yonalishi' => $this->faker->randomElement(Categories::pluck('id')),
            'qoshimcha_desc' => $this->faker->text,
            'qayta_tell_qilindimi' => $this->faker->randomElement(['0', '1']),
            'keldimi' => $this->faker->randomElement(['0', '1']),
            'recall' => $this->faker->text($maxNbChars = 200),
            'oquvchi_keladigan_kun' => $this->faker->date('Y-m-d H:i:s'),
            'qayta_tell_qilingan_sana' => $this->faker->date('Y-m-d H:i:s'),
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
