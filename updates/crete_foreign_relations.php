<?php namespace Rubium\YaMaps\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateForeignRelations extends Migration
{

    public function up()
    {
        Schema::table('rubium_yamaps_map_location', function ($table)
        {
        	$table->foreign('map_id')->references('id')->on('rubium_yamaps_maps')->onDelete('cascade');
        	$table->foreign('location_id')->references('id')->on('rubium_yamaps_locations')->onDelete('cascade');
        });
    }
    
    public function down()
    {
    	
    }

}
