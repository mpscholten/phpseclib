<?php
/**
 * @author     Andreas Fischer <bantu@phpbb.com>
 * @copyright  MMXII Andreas Fischer
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 */

namespace PhpSecLib\Test\Crypt;

use PhpSecLib\Crypt\Hash;
use PhpSecLib\Test\PhpseclibTestCase;

abstract class TestCase extends PhpseclibTestCase
{
	static public function setUpBeforeClass()
	{
		if (!defined('CRYPT_HASH_MODE'))
		{
			define('CRYPT_HASH_MODE', \PhpSecLib\Crypt\Hash::CRYPT_HASH_MODE_INTERNAL);
		}
	}

	public function setUp()
	{
		if (defined('CRYPT_HASH_MODE') && CRYPT_HASH_MODE !== \PhpSecLib\Crypt\Hash::CRYPT_HASH_MODE_INTERNAL)
		{
			$this->markTestSkipped('Skipping test because CRYPT_HASH_MODE is not defined as \PhpSecLib\Crypt\Hash::CRYPT_HASH_MODE_INTERNAL.');
		}
	}

	protected function assertHashesTo(Hash $hash, $message, $expected)
	{
		$this->assertEquals(
			strtolower($expected),
			bin2hex($hash->hash($message)),
			sprintf("Failed asserting that '%s' hashes to '%s'.", $message, $expected)
		);
	}

	protected function assertHMACsTo(Hash $hash, $key, $message, $expected)
	{
		$hash->setKey($key);

		$this->assertEquals(
			strtolower($expected),
			bin2hex($hash->hash($message)),
			sprintf("Failed asserting that '%s' HMACs to '%s' with key '%s'.", $message, $expected, $key)
		);
	}
}
