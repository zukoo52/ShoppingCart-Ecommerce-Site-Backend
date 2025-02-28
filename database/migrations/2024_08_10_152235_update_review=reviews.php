<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasColumn('reviews', 'users_id')) {
            Schema::table('reviews', function (Blueprint $table) {
                $table->foreignId('users_id')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            });
        }
    }






    public function down(): void
    {
        Schema::table('reviews', function (Blueprint $table) {
            if (Schema::hasColumn('reviews', 'users_id')) {
                $table->dropColumn('users_id');
            }
        });
    }
};
