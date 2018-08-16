<?php namespace Rubium\YaMaps\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateLocationsTable extends Migration
{

    public function up()
    {
        Schema::create('rubium_yamaps_locations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('latlng')->nullable();
            $table->string('marker_type')->nullable();
            $table->string('marker_color')->nullable();            
            $table->text('info_window')->nullable();
            $table->integer('enable_balloon')->default(1)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rubium_yamaps_locations');
    }

}
