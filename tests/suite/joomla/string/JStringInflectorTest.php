<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  Utilities
 *
 * @copyright   Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

require_once JPATH_PLATFORM . '/joomla/string/inflector.php';

/**
 * Test class for JStringInflector.
 * Generated by PHPUnit on 2009-10-26 at 22:29:34.
 */
class JStringInflectorTest extends PHPUnit_Framework_TestCase
{
	/**
	 * Method to test JStringInflector::isCountable().
	 *
	 * @return  void
	 *
	 * @dataProvider  isCountable
	 * @since   11.3
	 */
	public function testIsCountable($expected, $input)
	{
		$this->assertEquals($expected, JStringInflector::isCountable($input));
	}
	
	/**
	 * Method to test JStringInflector::toPlural().
	 *
	 * @return  void
	 *
	 * @dataProvider  toPlural
	 * @since   11.3
	 */
	public function testToPlural($expected, $input)
	{
		$this->assertEquals($expected, JStringInflector::toPlural($input));
	}
	
	/**
	 * Method to test JStringInflector::toSingular().
	 *
	 * @return  void
	 *
	 * @dataProvider  toSingular
	 * @since   11.3
	 */
	public function testToSingular($expected, $input)
	{
		$this->assertEquals($expected, JStringInflector::toSingular($input));
	}
	
	/**
	 * Method to seed data to testIsCountable.
	 *
	 * @return  array
	 *
	 * @since   11.3
	 */
	public function seedIsCountable()
	{
		return array(
			array('id', true),
			array('hits', true),
			array('clicks', true),
			array('impmade', true),
			array('imptotal', true),
			array('title', false),
		);
	}
	
	/**
	 * Method to seed data to testToPlural.
	 *
	 * @return  array
	 *
	 * @since   11.3
	 */
	public function seedToPlural()
	{
		return array(
			array('bus', 'busses'),
			array('notify', 'notifies'),
			array('clicks', 'clicks'),
		);
	}
	
	/**
	 * Method to seed data to testToSingular.
	 *
	 * @return  array
	 *
	 * @since   11.3
	 */
	public function seedToSingular()
	{
		return array(
			array('clicks', 'click'),
			array('busses', 'bus'),
			array('notifies', 'notify'),
		);
	}
}
