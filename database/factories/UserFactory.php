<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Available avatar images from public assets.
     *
     * @var list<string>
     */
    protected static array $avatars = [
        'assets/media/users/100_1.jpg',
        'assets/media/users/100_2.jpg',
        'assets/media/users/100_3.jpg',
        'assets/media/users/100_4.jpg',
        'assets/media/users/100_5.jpg',
        'assets/media/users/100_6.jpg',
        'assets/media/users/100_7.jpg',
        'assets/media/users/100_8.jpg',
        'assets/media/users/100_9.jpg',
        'assets/media/users/100_10.jpg',
        'assets/media/users/100_11.jpg',
        'assets/media/users/100_12.jpg',
        'assets/media/users/100_13.jpg',
        'assets/media/users/100_14.jpg',
        'assets/media/users/user1.jpg',
        'assets/media/users/user2.jpg',
        'assets/media/users/user3.jpg',
        'assets/media/users/user4.jpg',
        'assets/media/users/user5.jpg',
    ];

    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'avatar' => fake()->randomElement(self::$avatars),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
