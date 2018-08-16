<?php

return [
    'plugin' => [
        'name' => 'YaMaps',
        'description' => 'Управление YaMaps.',
    	'access' => 'Управление плагина YaMaps',
    ],
	'maps' => [		
		'description_name' => 'Имя для использования в списке компонентов',
		'description_height' => 'Высота карты на сайте, поддерживаются (px|vh|%|em|other)',
		'description_width' => 'Ширина карты на сайте, поддерживаются (px|vh|%|em|other)',
		'description_location' => 'Вы можете выбрать местоположение на карте или указать адрес и выбрать его в выпадающем меню',
		'description_address' => 'Это поле автоматически обновляется с помощью API-интерфейса Yandex. В раскрывающемся меню укажите адрес и выберите опцию. Адрес будет автоматически вставлен на карту',
		'description_marker_type' => 'Тип маркера ля отображения на сайте',
		'description_enable_balloon' => 'Показывать балун после клика по маркеру',
		'description_info_window' => 'Этот текст будет помещен в содержимое балуна',
		'plugin_label' => 'YaMaps',
		'menu_label' => 'Карты',
		'name' => 'Название',
		'address' => 'Адрес',
		'marker_type' => 'Тип маркера',
		'marker_color' => 'Цвет маркера',
		'enable_balloon' => 'Показать балун',
		'latitude' => 'Широта',
		'longitude' => 'Долгота',
		'map' => 'Карта',
		'search' => 'Поиск',
		'not_found' => 'Нет результатов.',
		'locations' => 'Метки',
		'location' => 'Метка',
		'zoom' => 'Масштаб',
		'width' => 'Ширина',
		'height' => 'Высота',
		'preview' => 'Предварительный просмотр',
		'provider' => 'Поставщик',
		'position' => 'Расположенеи',
		'dimensions' => 'Размеры',
		'other_options' => 'Другие опции',
		'fullscreen' => 'Включить полноэкранный режим',
		'streetview' => 'Включить просмотр улиц',
		'hybrid' => 'Hybrid',
		'satellite' => 'Satellite',
		'terrain' => 'Terrain',
		'roadmap' => 'Roadmap',
		'map_type_options' => 'Тип карты',
		'map_types' => 'Типы карт',
		'map_type' => 'Тип карты',
		'map_type_control' => 'Включить управление типом карты',
		'map_type_style' => 'Стиль управления типом карты',
		'map_type_control_style_default' => 'По умолчанию',
		'map_type_control_style_dropdown_menu' => 'Выпадающее меню',
		'map_type_control_style_horizontal_bar' => 'Горизонтальная полоса',
		'position' => 'Позиция',
		'position_top_right' => 'Сверху справа',
		'position_top_left' => 'Сверху слева',
		'position_top_center' => 'Сверху в центре',
		'position_right_top' => 'Сверху справа',
		'position_right_center' => 'Справа по центру',
		'position_right_bottom' => 'Справа внизу',
		'position_left_top' => 'Слева вверху',
		'position_left_center' => 'Слева по центру',
		'position_left_bottom' => 'Слева внизу',
		'position_bottom_right' => 'Справа внизу',
		'position_bottom_left' => 'Слева внизу',
		'position_bottom_center' => 'Снизу в центре',
		'zoom_options' => 'Параметры масштабирования',
		'scrollwheel' => 'Масштабирование колесом прокрутки',
		'zoom_control' => 'Включить управление масштабированием',
		'refresh_locations' => 'Обновить метки',
		'info_window' => 'Информационное окно',
		'no_alias' => 'Нет псевдонимов для карты',
		'new_map' => 'Новая карта',
		'return_to_maps_list' => 'Обратно к списку карт',
		'create_map' => 'Создать карту',
		'edit_map' => 'Редактировать карту',
		'preview_map' => 'Предпросмотр карты',
		'manage_maps' => 'Управление картами',
		'success_delete' => 'Карта успешно удалена.',
	],
	'map_component' => [
		'name' => 'Компонент карты',
		'description' => 'Вывод яндекс карты.',
		'map_property' => 'Карта',
		'map_not_defined' => 'Карты не найдены.',
	],
	'locations' => [
		'menu_label' => 'Метки',
		'location' => 'Метка',
		'create_location' => 'Создать метка',
		'edit_location' => 'Изменить метку',
		'preview_location' => 'Предпросмотр метки',
		'manage_locations' => 'Управление метками',
		'new_location' => 'Новое метка',
		'return_to_location_list' => 'Назад к списку меток',
		'success_delete' => 'Метка успешно удалена.',
	],
	'common' => [
		'create_and_close' => 'Создать и закрыть',
		'save_and_close' => 'Сохранить и закрыть',
		'save' => 'Сохранить',
		'create' => 'Создать',
		'cancel' => 'Выход',
		'are_you_sure' => 'Вы уверены, что хотите продолжить?',
		'delete_selected' => 'Удалить выбранное',
	],
];