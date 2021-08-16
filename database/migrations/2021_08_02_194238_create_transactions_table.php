<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('transactions', function (Blueprint $table) {

            $table->id();
            $table->foreignId("user_id")->constrained("users")->onDelete("cascade");
            $table->foreignId("offer_id")->constrained("offers");
            $table->foreignId("payment_id")->constrained("payments");

            $table->string("code")->unique();
            $table->string("currency")->notNull()->defaultValue("EUR");
            $table->double("ratio_eur")->notNull()->defaultValue(1);

            $table->boolean("has_colis")->notNull()->defaultValue(false);
            $table->double("colis_quantity")->notNull()->defaultValue(0);
            $table->double("colis_cost")->defaultValue(0);

            $table->boolean("has_courrier")->notNull()->defaultValue(false);
            $table->double("courrier_number")->defaultValue(0);
            $table->double("courrier_cost")->defaultValue(0);

            $table->boolean("has_insurance")->notNull()->defaultValue(false);
            $table->double("insurance_unit_cost")->defaultValue(0);

            $table->double("total_cost")->defaultValue(0);

            $table->enum('status_transaction', ['EN COURS', 'TERMINE','SUSPENDU']);
            $table->enum('status_delivery', ['EN COURS', 'TERMINE','SUSPENDU']);

            $table->text("description")->nullable();

            $table->timestamp("ordered_at");
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
        Schema::dropIfExists('transactions');
    }
}
