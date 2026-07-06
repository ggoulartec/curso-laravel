<?php

namespace Database\Factories;

use App\Models\Habit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Habit>
 */
class HabitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $habites = [
            "Ler 10 páginas do livro",
            "Estudar inglês por 1 hora",
            "Fazer 30 minutos de exercícios físicos",
            "Meditar por 10 minutos",
            "Beber 2 litros de água",
        ];

        return [
            'user_id' => 1,
            'name' => $this->faker->unique()->randomElement($habites)
        ];
    }
}
