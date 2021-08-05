<?php

namespace Database\Factories;

use App\Models\Jemaat;
use Illuminate\Database\Eloquent\Factories\Factory;

class JemaatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Jemaat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'golongan_darah' => 'O',
            'tanggal_lahir' => $this->faker->dateTime($max='now'),
            'kategori' => 'Jemaat Tetap',
            'alamat' => $this->faker->address(),
        ];
    }
}
