<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function($table) {
        $table->date('eventdate')->nullable();
        $table->string('address', 50);
        $table->string('price');
        $table->string('location');
        $table->string('time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
{
    Schema::table('events', function($table) {
        $table->dropColumn('paid');
        $table->dropColumn('eventdate');
        $table->dropColumn('address');
        $table->dropColumn('price');
        $table->dropColumn('location');
        $table->dropColumn('time');
    });
}
}
