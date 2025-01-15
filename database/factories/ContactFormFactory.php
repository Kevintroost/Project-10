<?php

namespace Database\Factories;

use App\Models\ContactForm;
use Illuminate\Database\Eloquent\Factories\Factory;


class ContactFormFactory extends Factory
{
    protected $model = ContactForm::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phonenumber' => $this->faker->phoneNumber,
            'message' => $this->faker->text(200),
        ];
    }
}