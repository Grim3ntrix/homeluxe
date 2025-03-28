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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade');
            $table->string('shop_name')
                ->nullable();
            $table->string('location')
                ->nullable();
            $table->string('phone_number')
                ->nullable();
            $table->string('email');
            $table->string('business_type')
                ->nullable();
            $table->string('description')
                ->nullable();
            $table->foreignId('status_id')
                ->constrained('statuses')
                ->default(fn () => DB::table('statuses')
                    ->where('status', 'Pending setup')
                    ->value('id')
                );
            $table->string('opening_hours')
                ->nullable();
            $table->string('shop_link')
                ->nullable();
            $table->string('reputation')
                ->nullable();
            $table->foreignId('badge_id')
                ->constrained('badges')
                ->default(fn () => DB::table('statuses')
                    ->where('status', 'Offline')
                    ->value('id')
                );
            $table->string('product_total')
                ->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
