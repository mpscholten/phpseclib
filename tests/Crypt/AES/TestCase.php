<?php
/**
 * @author     Andreas Fischer <bantu@phpbb.com>
 * @copyright  MMXIII Andreas Fischer
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 */

namespace PhpSecLib\Test\Crypt\AES;

use PhpSecLib\Test\PhpseclibTestCase;

abstract class TestCase extends PhpseclibTestCase
{
	static public function setUpBeforeClass()
	{
		if (!defined('CRYPT_AES_MODE'))
		{
			define('CRYPT_AES_MODE', \PhpSecLib\Crypt\AES::CRYPT_AES_MODE_INTERNAL);
		}
	}

	public function setUp()
	{
		if (defined('CRYPT_AES_MODE') && CRYPT_AES_MODE !== \PhpSecLib\Crypt\AES::CRYPT_AES_MODE_INTERNAL)
		{
			$this->markTestSkipped('Skipping test because CRYPT_AES_MODE is not defined as \PhpSecLib\Crypt\AES::CRYPT_AES_MODE_INTERNAL.');
		}
	}
}
