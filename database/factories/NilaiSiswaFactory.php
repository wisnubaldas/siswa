<?php

namespace Database\Factories;

use App\Models\NilaiSiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class NilaiSiswaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NilaiSiswa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nik'=>'N'.$this->faker->unique()->randomNumber(4),
            'nama'=>$this->faker->name,
            'kelas'=>$this->faker->randomElement(['VI','V','III','II']),
            'semester'=>1,
            'pelajaran'=>$this->faker->randomElement(['Matematika','IPA','IPS','Bahasa']),
            'type_nilai'=>'UTS',
            'nilai'=>$this->faker->randomFloat(2,0,10),
        ];
    }
}
