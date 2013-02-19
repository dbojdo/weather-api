<?php
namespace Webit\Weather\WeatherApi\Api\Weather;

interface ConditionCodeProviderInterface {
	
	/**
	 * 
	 * @param int $conditionCode
   * @return ConditionCodeInterface
	 */
	public function provide($code);
}
?>
