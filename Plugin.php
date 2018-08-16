<?php namespace Rubium\YaMaps;

use Backend;
use System\Classes\PluginBase;

/**
 * Maps Plugin Information File
 */
class Plugin extends PluginBase
{
	
	public $require = ['Rubium.YaMapsWidgets'];
    
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'rubium.yamaps::lang.plugin.name',
            'description' => 'rubium.yamaps::lang.plugin.description',
            'author'      => 'RubiumWeb',
            'icon'        => 'icon-map-marker',
        	'homepage'    => 'https://www.rubium.ru'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
	    return
	    [
            'Rubium\YaMaps\Components\YaMap' => 'yaMap',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return 
        [
            'rubium.yamaps.access' => ['tab' => 'rubium.yamaps::lang.plugin.name', 'label' => 'rubium.yamaps::lang.plugin.access'],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
	public function registerNavigation()
    {
        return [
            'maps' => [
                'label'       => 'rubium.yamaps::lang.maps.plugin_label',
                'url'         => Backend::url('rubium/yamaps/maps'),
                'icon'        => 'icon-map',
                'iconSvg'     => 'plugins/rubium/yamaps/assets/images/map.svg',
                'permissions' => ['rubium.yamaps.*'],
                'order'       => 500,
            	'sideMenu' => [
            		'maps' => [
        				'label'       => 'rubium.yamaps::lang.maps.menu_label',
                        'iconSvg'     => 'plugins/rubium/yamaps/assets/images/map_lite.svg',
        				'url'         => Backend::url('rubium/yamaps/maps'),
        				'permissions' => ['rubium.yamaps.*']
            		],
            		'locations' => [
        				'label'       => 'rubium.yamaps::lang.locations.menu_label',
        				'iconSvg'     => 'plugins/rubium/yamaps/assets/images/location.svg',
        				'url'         => Backend::url('rubium/yamaps/locations'),
        				'permissions' => ['rubium.yamaps.*']
            		],
            	]
            ],
        ];
    }
}
