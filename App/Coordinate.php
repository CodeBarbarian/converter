<?php

namespace App;



class Coordinate {
	// =============================================================================
	// Degrees Minutes Seconds
	// =============================================================================
	/**
	 * Convert from Degrees Minutes Seconds to Decimal Degree
	 *
	 * @param $Degrees
	 * @param $Minutes
	 * @param $Seconds
	 * @return float
	 */
	public static function convertFromDMSToDD($Degrees, $Minutes, $Seconds): float {
		return $Degrees + ($Minutes/60) + ($Seconds/3600);
	}

	/**
	 * Convert from Degrees Minutes Seconds to Degree Minutes
	 *
	 * @return void
	 */
	public static function convertFromDMSToDM() {

	}

	/**
	 * Convert from Degree Minutes Seconds to UTM Coordinates
	 * @return void
	 */
	public static function convertFromDMSToUTM() {

	}

	// =============================================================================
	// Decimal Degree
	// =============================================================================

	/***
	 * Convert from Decimal Degree to Degrees Minutes Seconds
	 * @return void
	 */
	public static function convertFromDDToDMS() {

	}

	/**
	 * Convert from Decimal Degree to Degree Minutes
	 * @return void
	 */
	public static function convertFromDDToDM() {

	}

	/**
	 * Convert from Decimal Degree to UTM Coordinates
	 * @return void
	 */
	public static function convertFromDDToUTM() {

	}

	// =============================================================================
	// Degree Minutes
	// =============================================================================

	/***
	 * Convert from Degree Minutes to Degree Minutes Seconds
	 * @return void
	 */
	public static function convertFromDMToDMS() {

	}

	/**
	 * Convert from Degree Minutes to Decimal Degree
	 * @return void
	 */
	public static function convertFromDMToDD() {

	}

	/**
	 * Convert from Degree Minutes to UTM Coordinates
	 * @return void
	 */
	public static function convertFromDMToUTM() {

	}

	// =============================================================================
	// UTM
	// =============================================================================

	/**
	 * Convert from UTM to Degree Minutes Seconds
	 * @return void
	 */
	public static function convertFromUTMToDMS() {

	}

	/**
	 * Convert from UTM to Decimal Degree
	 * @return void
	 */
	public static function convertFromUTMToDD() {

	}

	/**
	 * Convert from UTM to Degree Minutes
	 * @return void
	 */
	public static function convertFromUTMToDM() {

	}
}

echo Coordinate::convertFromDMSToDD(1,1,1);