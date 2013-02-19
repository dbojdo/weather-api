<?php

namespace Webit\Weather\WeatherApi;

use Webit\Weather\WeatherApi\Api\UnitableInterface;
use Webit\Weather\WeatherApi\Api\WindInterface;

class Wind implements WindInterface {
	/**
	 * 
	 * @var WindDirectionInterface
	 */
	protected $direction;
	
	/**
	 * 
	 * @var WindSpeedInterface
	 */
	protected $speed;
	
	public function __construct(UnitableInterface $direction, UnitableInterface $speed) {
		$this->direction = $direction;
		$this->speed = $speed;
	}
	
	/**
	 * (non-PHPdoc)
	 * @see Webit\Weather\WorldWeather\LocalWeather\Api\Weather.WindInterface::getWindSpeed()
	 */
	public function getWindSpeed() {
		return $this->speed;
	}
	
	/**
	 * (non-PHPdoc)
	 * @see Webit\Weather\WorldWeather\LocalWeather\Api\Weather.WindInterface::getWindDirection()
	 */
	public function getWindDirection() {
		return $this->direction;
	}
	
	public function __toString() {
		$str = $this->getWindDirection() . ' ' . $this->getWindSpeed();
		
		return $str;
	}
}
?>
