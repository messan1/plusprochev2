<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrajetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('trajets', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments("id");
            $table->string("depart")->nullable($value = false);
            $table->string("destination")->nullable($value = false);
            $table->string("plane_ticket")->nullable($value = false);
            $table->timestamp("arrived_at")->nullable($value = false);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trajets');
    }
}
