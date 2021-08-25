<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('offers', function (Blueprint $table) {

            $table->increments("id");


            $table->foreignId("user_id")->nullable()->constrained('users')->onDelete("cascade");
            $table->foreignId("trajet_id")->nullable();

            $table->string("code")->nullable();
            $table->string("currency")->nullable()->defaultValue("EUR");
            $table->double("ratio_eur")->nullable()->defaultValue(1);

            $table->string("has_colis")->nullable();
            $table->double("colis_unit_cost")->nullable()->defaultValue(0);
            $table->double("colis_quantity")->nullable()->defaultValue(0);
            $table->double("colis_ttc")->nullable();

            $table->string("has_courrier")->nullable();
            $table->double("courrier_unit_cost")->nullable();
            $table->double("courrier_quantity")->nullable()->defaultValue(0);
            $table->double("courrier_ttc")->nullable()->defaultValue(0);

            $table->enum("status", ['EN COURS', 'TERMINE','SUSPENDU'])->nullable();
            $table->text("delivery_condition")->nullable();
            $table->text("delivery_address")->nullable();
            $table->timestamp("published_at");
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
        Schema::dropIfExists('offers');
    }
}
