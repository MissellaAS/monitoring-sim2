<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
//    public function up()
// {
//     Schema::create('products', function (Blueprint $table) {
//         $table->id();
//         $table->string('company');
//         $table->string('product');
//         $table->string('detail');
//         $table->enum('status', ['Preparation', 'On Process', 'Finish'])->default('Preparation');
//         $table->timestamps();
//     });
// }
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('machine_id')->constrained(
                table: 'machines',
                indexName: 'products_machine_id_',
            );
            $table->string('product');
            $table->string('detail');
            $table->string('status');
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
  