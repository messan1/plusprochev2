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

            $table->string("code")->unique();
            $table->string("currency")->notNull()->defaultValue("EUR");
            $table->double("ratio_eur")->notNull()->defaultValue(1);

            $table->boolean("has_colis")->notNull()->defaultValue(false);
            $table->double("colis_unit_cost")->defaultValue(0);
            $table->double("colis_quantity")->notNull()->defaultValue(0);
            $table->double("colis_ttc")->defaultValue(0);

            $table->boolean("has_courrier")->notNull()->defaultValue(false);
            $table->double("courrier_unit_cost")->defaultValue(0);
            $table->double("courrier_quantity")->notNull()->defaultValue(0);


            $table->enum("status", ['EN COURS', 'TERMINE','SUSPENDU']);
            $table->text("delivery_condition");
            $table->text("delivery_address");

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
