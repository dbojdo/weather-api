<?php
namespace Webit\Weather\WeatherApi\Api;

interface UnitableInterface {
	public function getValue($unit = null);
}
?>