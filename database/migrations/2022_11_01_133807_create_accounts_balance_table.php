<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsBalanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts_balance', function (Blueprint $table) {
            $table->id();
            $table->integer('account_id')->default(0);
            $table->decimal('opening_balance', 32, 2)->default(0);
            $table->decimal('closing_balance', 32, 2)->default(0);
            $table->integer('business_id')->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('accounts_balance');
    }
}
