<?php namespace Rubium\YaMaps\Updates;

use Rubium\YaMaps\Models\Map;
use Rubium\YaMaps\Models\Location;
use October\Rain\Database\Updates\Seeder;
use Db;
class SeedAllTables extends Seeder
{

	public function run()
	{
		Location::create([
				'name' => 'Красная площадь',
				'address' => 'Красная площадь, Москва, Россия',
				'latlng' => '{"position": [55.75409394651552,37.6204909756778]}',
				'marker_type' => 'islands#icon',
				'enable_balloon' => 1,
				'marker_color' => '#f52323',
				'info_window' => '<p><b>Красная плщадь</b> — главная площадь Москвы, расположенная в центре радиально-кольцевой планировки города между Московским Кремлём (к западу) и Китай-городом (на восток). Также неофициально является главной площадью страны. От площади к берегу Москвы-реки ведёт покатый Васильевский спуск.</p>',
		]);
		
		Location::create([
				'name' => 'Тайницкий сад',
				'address' => 'Тайницкий сад, Москва, Россия',
				'latlng' => '{"position": [55.750915156110594,37.620743706124344]}',
				'marker_type' => 'islands#icon',
				'enable_balloon' => 1,
				'marker_color' => '#f52323',
				'info_window' => '<p>Тайницкий сад — сад на территории Московского Кремля. Располагается вдоль южной стены крепости, своё название получил в честь Тайницкой башни. Входит в список всемирного культурного наследия ЮНЕСКО</p>',
		]);
		
		Location::create([
				'name' => 'Библиотека имени Ленина',
				'address' => 'остановка Метро Библиотека имени Ленина, Россия, Москва',
				'latlng' => '{"position": [55.752957646566315,37.61178785235946]}',
				'marker_type' => 'islands#icon',
				'enable_balloon' => 1,
				'marker_color' => '#f52323',
				'info_window' => '<p><b>Библиотека имени Ленина</b> - станция Сокольнической линии Московского метрополитена. Расположена между станциями «Охотный Ряд» и «Кропоткинская». Находится на территории Тверского района Центрального административного округа Москвы.</p>',
		]);
		
		Map::create([
				'name' => 'Карта московских достопримечательностей',
				'options' => '{}',
				'height' => '300px',
				'width' => '100%',
		]);
		
		
		Db::table('rubium_yamaps_map_location')->insert(['map_id' => '1', 'location_id' => '1']);
		Db::table('rubium_yamaps_map_location')->insert(['map_id' => '1', 'location_id' => '2']);
		Db::table('rubium_yamaps_map_location')->insert(['map_id' => '1', 'location_id' => '3']);
		
		
	}

}
