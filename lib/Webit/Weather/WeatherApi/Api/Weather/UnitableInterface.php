<?php
namespace Webit\Weather\WeatherApi\Api\Weather;

interface UnitableInterface {
	public function getValue($unit = null);
}
?>