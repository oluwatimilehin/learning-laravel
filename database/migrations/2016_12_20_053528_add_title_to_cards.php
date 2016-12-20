<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTitleToCards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Add the title column to the Cards table
        Schema::table('cards',function ($table){
          $table->string('title')->nullable();
        });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //drop title column
        Schema::table('cards', function ($table){
            $table->dropColumn('title');
        });
    }
}
