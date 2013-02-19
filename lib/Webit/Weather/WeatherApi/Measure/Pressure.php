<?php
namespace Webit\Weather\WeatherApi\Measure;

class Pressure extends UnitAbstract {
	const UNIT_HPA = 'hpa';
	
	public function __construct() {
		$this->setDefaultUnit(self::UNIT_HPA);
	}
}
?>
