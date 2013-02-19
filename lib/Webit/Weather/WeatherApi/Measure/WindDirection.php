<?php
namespace Webit\Weather\WeatherApi\Measure;

class WindDirection extends UnitAbstract {
	const UNIT_16POINTS = '16points';
	const UNIT_DEGREE = 'degree';
	
	public function __construct() {
		$this->setDefaultUnit(self::UNIT_16POINTS);
	}
}
?>
