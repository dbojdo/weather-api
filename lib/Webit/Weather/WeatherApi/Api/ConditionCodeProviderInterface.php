<?php
namespace Webit\Weather\WeatherApi\Api;

interface ConditionCodeProviderInterface {
	
	/**
	 * 
	 * @param int $conditionCode
   * @return ConditionCodeInterface
	 */
	public function provide($code);
}
?>
