<?php
namespace Webit\Weather\WeatherApi\Api;
interface ConditionCodeInterface {
	public function getDescription();
	public function getCode();
	public function getDayIcon();
	public function getNightIcon();
}
?>
