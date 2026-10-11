<?php

declare(strict_types=1);

namespace App\Services;

use Illuminate\Support\Str;

class PasswordService
{
    public function generatePassword(int $length = 12, bool $includeSpecialChars = true): string
    {
        // Use laravel's built-in Str::random() for simplicity.
        $password = Str::random($length);

        if ($includeSpecialChars) {
            // Ensure the password contains at least one special character.
            $specialChars = '!@#$%^&*()-_=+[]{}|;:,.<>?';
            $password .= $specialChars[random_int(0, strlen($specialChars) - 1)];
        }

        // Shuffle the password to ensure randomness.
        return str_shuffle($password);
    }
}
