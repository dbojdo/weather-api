<?php
namespace Webit\Weather\WeatherApi\Api;

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
