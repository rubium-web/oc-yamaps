<?php namespace Rubium\YaMaps\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateMapsTable extends Migration
{

    public function up()
    {
        Schema::create('rubium_yamaps_maps', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            
            $table->string('name')->nullable();
            
            $table->text('options')->nullable();

            $table->string('height')->nullable()->default('300px');
            $table->string('width')->nullable()->default('100%');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rubium_yamaps_maps');
    }

}
