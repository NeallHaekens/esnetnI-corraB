<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('supply_type_id');
            $table->string('token');
            $table->string('title');
            $table->decimal('price', '6', '2');
            $table->text('description')->nullable();
            $table->decimal('instal_costs', '6', '2')->nullable();
            $table->bigInteger('quantity')->nullable();
            $table->timestamps();

            $table->foreign('supply_type_id')
                ->references('id')
                ->on('supply_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplies');
    }
}
