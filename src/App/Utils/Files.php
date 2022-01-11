<?php
declare(strict_types=1);

namespace App\Utils;

class Files
{

	/**
	 * @param string $filename
	 * @param string $text
	 * @return void
	 */
	public static function writingToFile(string $filename, string $text): bool
	{
		if (file_exists($filename) === false) {
			$myFile = fopen($filename, 'wb+');
		} else {
			$myFile = fopen($filename, 'ab+');
		}

		if ($myFile === false) {
			return false;
		}
		if (fwrite($myFile, $text) === false) {
			return false;
		}
		if (fclose($myFile) === false) {
			return false;
		}

		return true;
	}

}
