<?php
/**
 * Bootstrap
 * =========
 * This file creates each of the instances used across all of the tests. It
 * also calls the autoload script and creates setUp() and tearDown() methods
 * for each of the test classes.
 */

namespace projectcleverweb\autoload;

// Call the autoload script
require_once realpath(__DIR__.'/../autoload.php');

// The main class MUST be extended (it is abstract)
class autoload extends main {}

/**
 * Since all the setUp() and tearDown() methods are the same, we just extend
 * this class in each of the testing classes. (just make sure this class
 * always extends the PHPUnit TestCase class AND is abstract)
 */
abstract class Autoload_Testing_Config extends \PHPUnit_Framework_TestCase {
	
	/**
	 * Setup
	 */
	public function setUp() {
		
	}
	
	/**
	 * Tear Down
	 */
	public function tearDown() {
		
	}
}
