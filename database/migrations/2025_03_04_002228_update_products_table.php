<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
          $table->foreignIdFor(Category::class)->nullable()->constrained()->nullonDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
          $table->dropForeignIdFor(Category::class); 
        });    }
};
