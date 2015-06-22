<?php
/**
 * Autoload
 * ========
 * As silly as it seems to autoload an autoloader, there are some people who
 * would want it.
 */

/**
 * Simple PSR-4 autoloader
 * 
 * This is ignored by code coverage because the autoload is not considered a
 * part of the actual library, and is not required for the library to work in
 * some cases. (such as when loaded by composer)
 * 
 * @codeCoverageIgnore
 */
spl_autoload_register(function ($class) {
	$prefix = 'projectcleverweb\\autoload';
	$prefix_len = strlen($prefix);
	if(strncmp($prefix, $class, $prefix_len) !== 0) {
		return;
	}
	
	$file = __DIR__.'/src'.str_replace('\\', DIRECTORY_SEPARATOR, substr($class, $prefix_len)).'.php';
	if(is_file($file)) {
		require_once $file;
	}
});
