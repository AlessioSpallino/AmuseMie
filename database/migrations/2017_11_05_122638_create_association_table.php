<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssociationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associations', function (Blueprint $table) {
            Schema::dropIfExists('association');

            $table->increments('id');
            $table->timestamps();
            $table->string('name', 50);
            $table->string('email', 50);
            $table->string('link_one');
            $table->string('link_two');
            $table->string('link_three');
            $table->text('description');
            $table->string('logo');
            $table->string('address', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('associations');
    }
}
