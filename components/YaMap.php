<?php namespace Rubium\YaMaps\Components;

use Cms\Classes\ComponentBase;
use Lang;
use Rubium\YaMaps\Models\Map as MapModel;

class YaMap extends ComponentBase
{
	public $message;
	public $map;
	
    public function componentDetails()
    {
        return [
            'name'        => 'rubium.yamaps::lang.map_component.name',
            'description' => 'rubium.yamaps::lang.map_component.description'
        ];
    }

    public function defineProperties()
    {
        return [
        		'map' => [
    				'title'       => 'rubium.yamaps::lang.map_component.map_property',
    				'type'        => 'dropdown',
    				'default'     => ''
        		],
                'mapTypeId' => [
                    'title'             => 'rubium.yamapswidgets::lang.component.mapType',
                    'default'           => 'yandex#map',
                    'type'              => 'dropdown',
                    'options'           => ['yandex#map'=>'Sheme', 'yandex#satellite'=>'Sputnik', 'yandex#hybrid'=>'Hybrid']
                ],
                'zoom' => [
                    'title'             => 'rubium.yamapswidgets::lang.component.zoom',
                    'default'           => 12,
                    'type'              => 'string',
                ],
                'showMarker' => [
                    'title'             => 'rubium.yamapswidgets::lang.component.showMarker',
                    'default'           => 'true',
                    'type'              => 'checkbox',
                ],
                'fitToView' => [
                    'title'             => 'rubium.yamapswidgets::lang.component.fitToView',
                    'default'           => 'true',
                    'type'              => 'checkbox',
                ] 
        ];
    }
    
    public function getMapOptions()
    {
    	return MapModel::lists('name', 'id');
    }
    
    public function onRun()
    {
        $this->addJs('//api-maps.yandex.ru/2.1/?lang=ru_RU');
        $this->addJs('/plugins/rubium/yamapswidgets/assets/js/script.js');
        $this->addCss('/plugins/rubium/yamapswidgets/assets/css/style.css');

    	$this->map = MapModel::find($this->property('map'));
    	if(!$this->map)
    		$this->message = Lang::get('rubium.yamaps::lang.map_component.map_not_defined');
    }

}