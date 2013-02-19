<?php
namespace Webit\Weather\WeatherApi\Api\Weather;

interface WindInterface {
	/**
	 * @return UnitableInterface
	 */
	public function getWindSpeed();
	
	/**
	 * @return UnitableInterface
	 */
	public function getWindDirection();
}
?>
