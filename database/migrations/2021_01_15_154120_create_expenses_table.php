<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
			$table->bigInteger('user_id')->unsigned();
			$table->date('payed_at');	
			$table->text('description');						
			$table->decimal('amount', 5, 2);						
            $table->timestamps();
        
			$table->foreign('user_id')
				->references('id')
				->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expenses');
    }
}
