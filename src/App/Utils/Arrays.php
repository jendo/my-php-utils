<?php
declare(strict_types=1);

namespace App\Utils;

class Arrays
{

	/**
	 * Removes duplicated items from array
	 * @param array $arr
	 * @return array
	 */
	public static function removeDuplicates(array $arr): array
	{
		return array_values(array_unique($arr));
	}


	/**
	 * @param array $list
	 * @return mixed
	 */
	public static function removeRandomElementFromList(array &$list)
	{
		$randomKey = array_rand($list);
		$randomElement = $list[$randomKey];
		unset($list[$randomKey]);

		return $randomElement;
	}
}
