# Rubium.YaMaps Plugin

A locations and maps management plugin.

## Plugin Dependencies

This plugin depends on **Rubium Backend Yandex Maps Widgets**.

## Description

### This plugin allows you to:
* Manage your locations.
* Configure your maps.
* Select the locations to show on a given map.
* Show your map with its locations on the front-end of your site.

## Contents of this plugin

### A simple location manager
* Uses the **YaMaps FormWidget** to select the position of the location on a map.
* Uses the **YAddress FormWidget** to find an address and is position on the **YaMaps FormWidget**.
* Define aditional information to display on the map.
* Select in which maps you want to display the locations.

### A simple map manager
* Select map Width and Height.
* Select the initial position of the map.
* Select the initial zoom of the map.
* Enable/disable fitToView option.
* Enable/disable the Map Type Selector.
* Define the position of the Map Type Selector.
* Define the style of the Map Type Selector.
* Select witch Map Type.
* Select the available Map Types to use.
* Enable/disable the Zoom Control.
* Define the position of the Zoom Control.
* Select which locations to display on the map.

### A map component
* Uses the **yaMap** to render a Map with its Locations.

### Example:
### On the Frontend
```yaml

[yaMap]
map = 1
mapTypeId = "yandex#map"
zoom = 12
showMarker = "true"
fitToView = "true"
==
{% component 'yaMap' %}