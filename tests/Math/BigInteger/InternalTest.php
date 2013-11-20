<?php
/**
 * @author     Andreas Fischer <bantu@phpbb.com>
 * @copyright  MMXIII Andreas Fischer
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 */

namespace PhpSecLib\Test\Math\BigInteger;

class Math_BigInteger_InternalTest extends TestCase
{
	static public function setUpBeforeClass()
	{
		parent::setUpBeforeClass();

		self::ensureConstant('MATH_BIGINTEGER_MODE', \PhpSecLib\Math\BigInteger::MATH_BIGINTEGER_MODE_INTERNAL);
		self::ensureConstant('MATH_BIGINTEGER_OPENSSL_DISABLE', true);
	}
}
