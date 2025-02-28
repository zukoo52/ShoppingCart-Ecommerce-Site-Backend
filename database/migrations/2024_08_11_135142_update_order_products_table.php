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
        if (!Schema::hasColumn('order_products', 'product_id' ) && !Schema::hasColumn('order_products', 'order_id' )) {
            Schema::table('order_products', function (Blueprint $table) {
                $table->foreignId('product_id')->constrained('products')->onDelete('cascade')->onUpdate('cascade');
                $table->foreignId('order_id')->constrained('orders')->onDelete('cascade')->onUpdate('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
