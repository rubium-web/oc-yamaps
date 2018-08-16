<?php namespace Rubium\YaMaps\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Rubium\YaMaps\Models\Map as MapModel;
use Backend;
use Lang;
use Flash;

/**
 * Maps Back-end Controller
 */
class Maps extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
    	'Backend.Behaviors.RelationController',
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $relationConfig = 'config_relation.yaml';
	
    public function __construct()
    {
        parent::__construct();
        
        BackendMenu::setContext('Rubium.YaMaps', 'maps', 'maps');
    }
    
    public function index()
    {
    	$this->asExtension('ListController')->index();
    }
    
    public function create()
    {
    	return $this->asExtension('FormController')->create();
    }
    
    public function update($recordId = null)
    {
    	return $this->asExtension('FormController')->update($recordId);
    }
    
    public function index_onDelete()
    {
    	if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
    
    		foreach ($checkedIds as $checkedId) {
    			if ((!$object = MapModel::find($checkedId)))
    				continue;
    				$object->delete();
    		}
    
    		Flash::success(Lang::get('rubium.yamaps::lang.maps.success_delete'));
    	}
    
    	return $this->listRefresh();
    }
}