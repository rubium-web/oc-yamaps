<?php namespace Rubium\YaMaps\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateMapLocationTable extends Migration
{

    public function up()
    {
        Schema::create('rubium_yamaps_map_location', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('map_id')->unsigned();
            $table->integer('location_id')->unsigned();
            $table->primary(['map_id', 'location_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('rubium_yamaps_map_location');
    }

}
