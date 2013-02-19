<?php
namespace Webit\Weather\WeatherApi\Weather\Measure;

class Precipitation extends UnitAbstract {
	const UNIT_MM = 'mm';
	
	public function __construct() {
		$this->setDefaultUnit(self::UNIT_MM);
	}
}
?>
