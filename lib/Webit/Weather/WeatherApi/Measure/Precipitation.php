<?php
namespace Webit\Weather\WeatherApi\Measure;

class Precipitation extends UnitAbstract {
	const UNIT_MM = 'mm';
	
	public function __construct() {
		$this->setDefaultUnit(self::UNIT_MM);
	}
}
?>
