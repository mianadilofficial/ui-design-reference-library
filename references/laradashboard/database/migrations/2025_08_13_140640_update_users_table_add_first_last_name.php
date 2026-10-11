<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Drop the old name field since first_name and last_name already exist
            $table->dropColumn('name');

            $table->string('first_name')->after('id');
            $table->string('last_name')->after('first_name');

            $table->unsignedBigInteger('avatar_id')->nullable()->after('username');
            $table->foreign('avatar_id')->references('id')->on('media')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Revert changes - add back the name field
            $table->dropForeign(['avatar_id']);

            $table->string('name')->after('id');

            $table->dropColumn(['first_name', 'last_name', 'avatar_id']);
        });
    }
};
