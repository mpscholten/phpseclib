<?php
/**
 * @author     Andreas Fischer <bantu@phpbb.com>
 * @copyright  MMXIII Andreas Fischer
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 */

namespace PhpSecLib\Test\Math\BigInteger;

require_once __DIR__ . '/TestCase.php';

class Math_BigInteger_BCMathTest extends TestCase
{
	static public function setUpBeforeClass()
	{
		if (!extension_loaded('bcmath'))
		{
			self::markTestSkipped('BCMath extension is not available.');
		}

		parent::setUpBeforeClass();

		self::ensureConstant('MATH_BIGINTEGER_MODE', \PhpSecLib\Math\BigInteger::MATH_BIGINTEGER_MODE_BCMATH);
	}
}
