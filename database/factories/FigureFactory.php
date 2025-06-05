<?php

namespace Database\Factories;

use App\Models\Figure;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class FigureFactory extends Factory
{
    protected $model = Figure::class;

    public function definition(): array
    {
        return [
            'figureName' => $this->faker->word(),
            'figureCode' => strtoupper($this->faker->bothify('FIG####')),
            'figureBrand' => $this->faker->company(),
            'figureType' => 'Scale ' . $this->faker->randomElement(['1/7', '1/8', '1/6']),
        ];
    }
}
