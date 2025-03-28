<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                  ->constrained('users')
                  ->onDelete('cascade');
            $table->string('last_name')
                  ->nullable();
            $table->string('first_name')
                  ->nullable();
            $table->string('middle_name')
                  ->nullable();
            $table->string('date_of_birth')
                  ->nullable();
            $table->string('gender')
                  ->nullable();
            $table->string('phone_number')
                  ->nullable();
            $table->string('profile_image')
                  ->nullable();
            $table->foreignId('badge')
                  ->constrained('badges')
                  ->default(fn () => DB::table('badges')
                        ->where('badge', 'Classic')
                        ->value('id')
                  );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
