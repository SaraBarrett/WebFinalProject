<?php

namespace Database\Factories;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    protected $model = Booking::class;

    public function definition(): array
    {
        $services = [
            'Quality Control Testing',
            'GMP Contract Manufacturing',
            'Formulation Development',
            'Controlled Storage',
        ];

        $start = $this->faker->dateTimeBetween('now', '+1 month');
        $end   = (clone $start)->modify('+'.rand(1, 7).' days');

        return [
            'service_type' => $this->faker->randomElement($services),
            'start_date'   => $start->format('Y-m-d'),
            'end_date'     => $end->format('Y-m-d'),
            'email'        => $this->faker->unique()->safeEmail(),
            'company_name' => $this->faker->company(),
            'notes'        => $this->faker->optional()->sentence(8),
        ];
    }
}
