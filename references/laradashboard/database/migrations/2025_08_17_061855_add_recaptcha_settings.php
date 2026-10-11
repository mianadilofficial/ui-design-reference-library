<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Add reCAPTCHA settings to the settings table
        $settings = [
            [
                'option_name' => 'recaptcha_site_key',
                'option_value' => '',
                'autoload' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_name' => 'recaptcha_secret_key',
                'option_value' => '',
                'autoload' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'option_name' => 'recaptcha_enabled_pages',
                'option_value' => json_encode([]),
                'autoload' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($settings as $setting) {
            DB::table('settings')->updateOrInsert(
                ['option_name' => $setting['option_name']],
                $setting
            );
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('settings')->whereIn('option_name', [
            'recaptcha_site_key',
            'recaptcha_secret_key',
            'recaptcha_enabled_pages',
        ])->delete();
    }
};
