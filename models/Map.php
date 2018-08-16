<?php namespace Rubium\YaMaps\Models;

use Lang;
use Model;

/**
 * Map Model
 */
class Map extends Model
{
	
	/*
	 * Validation
	 */
	use \October\Rain\Database\Traits\Validation;
	public $rules = [
		'name' => ['required', 'max:255'],
		'options' => 'required',
	];
	/**
    /**
     * @var string The database table used by the model.
     */
    public $table = 'rubium_yamaps_maps';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [
    	'locations' => [
    		'Rubium\YaMaps\Models\Location',
    		'table' => 'rubium_yamaps_map_location',
    		'order' => 'name'
    	],
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}