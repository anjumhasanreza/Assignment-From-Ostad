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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50)->unique();
            $table->string('description', 255)->nullable();
            $table->decimal('unit_price', 8, 2);
            $table->decimal('other_charge', 8, 2);
            $table->decimal('purchase_price', 8, 2)->virtualAs('unit_price + other_charge');
            $table->decimal('profit_margin', 8, 2);
            $table->decimal('sale_price', 8, 2);
            $table->decimal('final_sale_price', 8, 2)->virtualAs('purchase_price * (profit_margin/100)');
            $table->string('discount_type',255);
            $table->decimal('discount_amount', 8, 2);
            $table->decimal('opening_stock', 8, 2);
            $table->decimal('stock_adjust', 8, 2);
            $table->string('adjust_note',255);
            $table->string('imagess');


            $table->foreignId('group_id')->constrained('groups')->onDelete('cascade')->OnUpdate('cascade');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade')->OnUpdate('cascade');
            $table->foreignId('brand_id')->constrained('brands')->onDelete('cascade')->OnUpdate('cascade');
            $table->foreignId('style_id')->constrained('styles')->onDelete('cascade')->OnUpdate('cascade');
            $table->foreignId('size_id')->constrained('sizes')->onDelete('cascade')->OnUpdate('cascade');
            $table->foreignId('color_id')->constrained('colors')->onDelete('cascade')->OnUpdate('cascade');
            $table->foreignId('uom_id')->constrained('uoms')->onDelete('cascade')->OnUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
