<?php

use App\Models\Product;
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
            // $table->foreignId('sub_category_id')->constrained()->onDelete('cascade');
            $table->foreignIdFor(Product::class)->constrained();
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('description')->nullable();
            $table->text('content')->nullable();
            $table->integer('view')->default(0);
            $table->boolean('is_hot')->default(0);
            $table->boolean('is_sale')->default(0);
            $table->boolean('is_show_home')->default(0);
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
