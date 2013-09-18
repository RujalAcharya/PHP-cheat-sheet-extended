﻿<?php

include_once( 'class.vartype.php' );

class VartypeTest extends Vartype {

	var $tests = array(
		'gettype' =>	array(
			'title'	=>	'gettype()',
			'url'	=>	'http://php.net/gettype',
			'arg'	=>	'$x',
			'function'	=>	'pr_str( gettype( $x ) );',
		),

		'isset' =>	array(
			'title'	=>	'isset()',
			'url'	=>	'http://php.net/isset',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( isset( $x ) );',
		),



		'var' =>	array(
			'title'	=>	'$x',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( $x );',
		),
		'not_var' =>	array(
			'title'	=>	'!$x',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( !$x );',
		),
		'if_var' =>	array(
			'title'	=>	'if(&nbsp;$x&nbsp;) {..}',
			'arg'	=>	'$x',
			'function'	=>	'if ( $x ) { pr_bool( true ); } else { pr_bool( false ); }',
		),
		'if_not_var' =>	array(
			'title'	=>	'if(&nbsp;!&nbsp;$x&nbsp;) {..}',
			'arg'	=>	'$x',
			'function'	=>	'if ( !$x ) { pr_bool( true ); } else { pr_bool( false ); }',
		),


		/**
		 * is_...()
		 */
		'is_array' =>	array(
			'title'	=>	'is_array()',
			'url'	=>	'http://php.net/is_array',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( is_array( $x ) );',
		),
		'is_binary' =>	array(
			'title'	=>	'is_binary()',
			'url'	=>	'http://php.net/is_binary',
			'arg'	=>	'$x',
			'function'	=>	'if ( function_exists( \'is_binary\' ) ) { pr_bool( is_binary( $x ) ); } else { print \'E: not available (PHP 6.0.0+)\'; }',
		),
		'is_bool' =>	array(
			'title'	=>	'is_bool()',
			'url'	=>	'http://php.net/is_bool',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( is_bool( $x ) );',
		),
		'is_callable' =>	array(
			'title'	=>	'is_callable()',
			'url'	=>	'http://php.net/is_callable',
			'arg'	=>	'$x',
			'function'	=>	'if ( function_exists( \'is_callable\' ) ) { pr_bool( is_callable( $x ) ); } else { print \'E: not available (PHP 4.0.6+)\'; }',
		),
		'is_float' =>	array(
			'title'	=>	'is_float()',
			'url'	=>	'http://php.net/is_float',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( is_float( $x ) );',
		),
		'is_int' =>	array(
			'title'	=>	'is_int()',
			'url'	=>	'http://php.net/is_int',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( is_int( $x ) );',
		),
		'is_null' =>	array(
			'title'	=>	'is_null()',
			'url'	=>	'http://php.net/is_null',
			'arg'	=>	'$x',
			'function'	=>	'if ( function_exists( \'is_null\' ) ) { pr_bool( is_null( $x ) ); } else { print \'E: not available (PHP 4.0.4+)\'; }',
		),
		'is_numeric' =>	array(
			'title'	=>	'is_numeric()',
			'url'	=>	'http://php.net/is_numeric',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( is_numeric( $x ) );',
		),
		'is_object' =>	array(
			'title'	=>	'is_object()',
			'url'	=>	'http://php.net/is_object',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( is_object( $x ) );',
		),
		'is_resource' =>	array(
			'title'	=>	'is_resource()',
			'url'	=>	'http://php.net/is_resource',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( is_resource( $x ) );',
		),
		'is_scalar' =>	array(
			'title'	=>	'is_scalar()',
			'url'	=>	'http://php.net/is_scalar',
			'arg'	=>	'$x',
			'function'	=>	'if ( function_exists( \'is_scalar\' ) ) { pr_bool( is_scalar( $x ) ); } else { print \'E: not available (PHP 4.0.5+)\'; }',
		),
		'is_string' =>	array(
			'title'	=>	'is_string()',
			'url'	=>	'http://php.net/is_string',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( is_string( $x ) );',
		),
		

		// Float specific
		'is_nan' =>	array(
			'title'	=>	'is_nan()',
			'url'	=>	'http://php.net/is_nan',
			'arg'	=>	'$x',
			'function'	=>	'if ( function_exists( \'is_nan\' ) ) { $r = is_nan( $x ); if ( is_bool( $r ) ) { pr_bool( $r ); } else { pr_var( $r, \'\', true, true ); } } else { print \'E: not available (PHP 4.2.0+)\'; }',
		),
		'is_finite' =>	array(
			'title'	=>	'is_finite()',
			'url'	=>	'http://php.net/is_finite',
			'arg'	=>	'$x',
			'function'	=>	'if ( function_exists( \'is_finite\' ) ) { $r = is_finite( $x ); if ( is_bool( $r ) ) { pr_bool( $r ); } else { pr_var( $r, \'\', true, true ); } } else { print \'E: not available (PHP 4.2.0+)\'; }',
		),
		'is_infinite' =>	array(
			'title'	=>	'is_infinite()',
			'url'	=>	'http://php.net/is_infinite',
			'arg'	=>	'$x',
			'function'	=>	'if ( function_exists( \'is_infinite\' ) ) { $r = is_infinite( $x ); if ( is_bool( $r ) ) { pr_bool( $r ); } else { pr_var( $r, \'\', true, true ); } } else { print \'E: not available (PHP 4.2.0+)\'; }',
		),



		/**
		 * Type casting
		 */
		'array' =>	array(
			'title'	=>	'(array)',
			'url'	=>	'http://php.net/language.types.array#language.types.array.casting',
			'arg'	=>	'$x',
			'function'	=>	'pr_var( (array) $x, \'\', true, true );',
		),
		'bool' =>	array(
			'title'	=>	'(bool)',
			'url'	=>	'http://php.net/language.types.boolean#language.types.boolean.casting',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( (bool) $x );',
		),
		'float' =>	array(
			'title'	=>	'(float)',
			'url'	=>	'http://php.net/language.types.float#language.types.float.casting',
			'arg'	=>	'$x',
			'function'	=>	'pr_flt( (float) $x );',
		),
		'int' =>	array(
			'title'	=>	'(int)',
			'url'	=>	'http://php.net/language.types.integer#language.types.integer.casting',
			'arg'	=>	'$x',
			'function'	=>	'pr_int( (int) $x );',
		),
		'object' =>	array(
			'title'	=>	'(object)',
			'url'	=>	'http://php.net/language.types.object#language.types.object.casting',
			'arg'	=>	'$x',
			'function'	=>	'pr_var( (object) $x, \'\', true, true );',
		),
		'string' =>	array(
			'title'	=>	'(string)',
			'url'	=>	'http://php.net/language.types.string#language.types.string.casting',
			'arg'	=>	'$x',
			'function'	=>	'pr_str( (string) $x );',
		),
		'unset' =>	array(
			'title'	=>	'(unset)',
			'url'	=>	'http://php.net/language.types.null#language.types.null.casting',
			'arg'	=>	'$x',
			'function'	=>	'if ( PHP_VERSION_ID >= 50000 ) { pr_var( (unset) $x, \'\', true, true ); } else { print \'E: (unset) not available (PHP 5+)\'; }',
		),
		'f_unset' =>	array(
			'title'	=>	'unset()',
			'url'	=>	'http://php.net/unset',
			'arg'	=>	'$x',
			'function'	=>	'unset( $x ); pr_var( $x, \'\', true, true );',
		),


		/**
		 * ...val()
		 */
		'floatval' =>	array(
			'title'	=>	'floatval()',
			'url'	=>	'http://php.net/floatval',
			'arg'	=>	'$x',
			'function'	=>	'if ( function_exists( \'floatval\' ) ) { pr_flt( floatval( $x ) ); } else { pr_flt( doubleval( $x ) ); }',
		),
		'intval' =>	array(
			'title'	=>	'intval()',
			'url'	=>	'http://php.net/intval',
			'arg'	=>	'$x',
			'function'	=>	'pr_int( intval( $x ) );',
		),
		'strval' =>	array(
			'title'	=>	'strval()',
			'url'	=>	'http://php.net/strval',
			'arg'	=>	'$x',
			'function'	=>	'pr_str( strval( $x ) );',
		),


		/**
		 * Loose type juggling
		 */
		'juggle_int' =>	array(
			'title'	=>	'$x&nbsp;+&nbsp;0',
			'url'	=>	'http://php.net/language.types.type-juggling',
			'arg'	=>	'$x',
			'function'	=>	'
				if ( PHP_VERSION_ID >= \'50000\' ) {
					try {
						if ( !is_array( $x ) ) {
							$x = $x + 0;
							if ( is_int( $x ) ) {
								pr_int( $x );
							}
							else if ( is_float( $x ) ) {
								pr_flt( $x );
							}
							else {
								pr_var( $x, \'\', true, true );
							}
						}
						else {
							trigger_error( \'Unsupported operand types\', E_USER_ERROR );
						}
					}
					catch( Exception $e ) {
						$message = $e->getMessage();
						$key = array_search( $message, $GLOBALS[\'encountered_errors\'] );
						if ( $key === false ) {
							$GLOBALS[\'encountered_errors\'][] = $message;
							$key = array_search( $message, $GLOBALS[\'encountered_errors\'] );
						}
						print \'<span class="error">Fatal error <a href="#\' . $GLOBALS[\'test\']. \'-errors">#\' . ( $key + 1 ) . \'</a></span>\';
					}
				}
				else {
					if ( !is_array( $x ) ) {
						$x = $x + 0;
						if ( is_int( $x ) ) {
							pr_int( $x );
						}
						else if ( is_float( $x ) ) {
							pr_flt( $x );
						}
						else {
							pr_var( $x, \'\', true, true );
						}
					}
					else {
						trigger_error( \'Unsupported operand types\', E_USER_ERROR );
					}
				}
			',
		),
		'juggle_flt' =>	array(
			'title'	=>	'$x&nbsp;+&nbsp;0.0',
			'url'	=>	'http://php.net/language.types.type-juggling',
			'arg'	=>	'$x',
			'function'	=> '
				if ( PHP_VERSION_ID >= \'50000\' ) {
					try {
						if ( !is_array( $x ) ) {
							$r = $x + 0.0;
							if ( is_float( $r ) ) {
								pr_flt( $r );
							}
							else if ( is_int( $r ) ) {
								pr_int( $r );
							}
							else {
								pr_var( $r, \'\', true, true );
							}
						}
						else {
							trigger_error( \'Unsupported operand types\', E_USER_ERROR );
						}
					}
					catch( Exception $e ) {
						$message = $e->getMessage();
						$key = array_search( $message, $GLOBALS[\'encountered_errors\'] );
						if ( $key === false ) {
							$GLOBALS[\'encountered_errors\'][] = $message;
							$key = array_search( $message, $GLOBALS[\'encountered_errors\'] );
						}
						print \'<span class="error">Fatal error <a href="#\' . $GLOBALS[\'test\']. \'-errors">#\' . ( $key + 1 ) . \'</a></span>\';
					}
				}
				else {
					if ( !is_array( $x ) ) {
						$r = $x + 0.0;
						if ( is_float( $r ) ) {
							pr_flt( $r );
						}
						else if ( is_int( $r ) ) {
							pr_int( $r );
						}
						else {
							pr_var( $r, \'\', true, true );
						}
					}
					else {
						trigger_error( \'Unsupported operand types\', E_USER_ERROR );
					}
				}
			',
		),
		'juggle_str' =>	array(
			'title'	=>	'$x&nbsp;.&nbsp;\'\'',
			'url'	=>	'http://php.net/language.types.type-juggling',
			'arg'	=>	'$x',
			'function'	=> 'pr_str( $x . \' \' );',
		),


		/**
		 * settype()
		 */
		'settype_array' =>	array(
			'title'	=>	'settype (&nbsp;$copy, \'array\'&nbsp;)',
			'url'	=>	'http://php.net/settype',
			'arg'	=>	'$x',
			'function'	=>	'$pass = settype( $x, \'array\' ); if ( $pass === true ) { pr_var( $x, \'\', true, true ); } else { print \'FAILED\'; }',
		),
		'settype_bool' =>	array(
			'title'	=>	'settype (&nbsp;$copy, \'bool\'&nbsp;)',
			'url'	=>	'http://php.net/settype',
			'arg'	=>	'$x',
			'function'	=>	'$pass = settype( $x, \'boolean\' ); if ( $pass === true ) { pr_bool( $x ); } else { print \'FAILED\'; }',
		),
		'settype_float' =>	array(
			'title'	=>	'settype (&nbsp;$copy, \'float\'&nbsp;)',
			'url'	=>	'http://php.net/settype',
			'arg'	=>	'$x',
			'function'	=>	'if ( PHP_VERSION_ID >= 40200 ) { $pass = settype( $x, \'float\' ); } else { $pass = settype( $x, \'double\' ); } if( $pass === true ) { pr_flt( $x ); } else { print \'FAILED\'; }',
		),
		'settype_int' =>	array(
			'title'	=>	'settype (&nbsp;$copy, \'int\'&nbsp;)',
			'url'	=>	'http://php.net/settype',
			'arg'	=>	'$x',
			'function'	=>	'$pass = settype( $x, \'integer\' ); if ( $pass === true ) { pr_int( $x ); } else { print \'FAILED\'; }',
		),
		'settype_null' =>	array(
			'title'	=>	'settype (&nbsp;$copy, \'null\'&nbsp;)',
			'url'	=>	'http://php.net/settype',
			'arg'	=>	'$x',
			'function'	=>	'if ( PHP_VERSION_ID >= 40200 ) { $pass = settype( $x, \'null\' ); if ( $pass === true ) { pr_var( $x, \'\', true, true ); } else { print \'FAILED\'; } } else { print \'E: not available (PHP 4.2.0+)\'; }',
		),
		'settype_object' =>	array(
			'title'	=>	'settype (&nbsp;$copy, \'object\'&nbsp;)',
			'url'	=>	'http://php.net/settype',
			'arg'	=>	'$x',
			'function'	=>	'$pass = settype( $x, \'object\' ); if ( $pass === true ) { pr_var( $x, \'\', true, true ); } else { print \'FAILED\'; }',
		),
		'settype_string' =>	array(
			'title'	=>	'settype (&nbsp;$copy, \'string\'&nbsp;)',
			'url'	=>	'http://php.net/settype',
			'arg'	=>	'$x',
			'function'	=>	'$pass = settype( $x, \'string\' ); if ( $pass === true ) { pr_str( $x ); } else { print \'FAILED\'; }',
			'notes'	=>	array(
				'<p>Depending on your error handling settings/exception catching and your PHP version, using <code>settype( $copy, \'string\' )</code> on an object which does not have a <code>__toString()</code> method will result either in the string <code>Object</code> or will return a (catchable) fatal error.</p>',
				'<p>For PHP &lt; 5.2.0, the <code>__toString()</code> method was available to echo/print statements, so casting to string would still result in <code>Object</code>.',
			),
		),
		
		
		/**
		 * Using CastToType class
		 * https://github.com/jrfnl/PHP-cast-to-type.git
		 */
		'casttotype_array' =>	array(
			'title'	=>	'CastToType::_array (&nbsp;$x&nbsp;)',
			'url'	=>	'https://github.com/jrfnl/PHP-cast-to-type.git',
			'arg'	=>	'$x',
			'function'	=>	'include_once( \'include/PHP-cast-to-type/class.cast-to-type.php\' ); pr_var( CastToType::_array( $x ), \'\', true, true );',
			'notes'	=>	array(
				'<p>Uses an external library</p>',
			),
		),
		'casttotype_bool' =>	array(
			'title'	=>	'CastToType::_bool (&nbsp;$x&nbsp;)',
			'url'	=>	'https://github.com/jrfnl/PHP-cast-to-type.git',
			'arg'	=>	'$x',
			'function'	=>	'include_once( \'include/PHP-cast-to-type/class.cast-to-type.php\' ); $r = CastToType::_bool( $x ); if ( is_bool( $r ) ) { pr_bool( $r ); } else { pr_var( $r, \'\', true, true ); }',
			'notes'	=>	array(
				'<p>Uses an <a href="https://github.com/jrfnl/PHP-cast-to-type.git" target="_blank">external library</a></p>',
			),
		),
		'casttotype_float' =>	array(
			'title'	=>	'CastToType::_float (&nbsp;$x&nbsp;)',
			'url'	=>	'https://github.com/jrfnl/PHP-cast-to-type.git',
			'arg'	=>	'$x',
			'function'	=>	'include_once( \'include/PHP-cast-to-type/class.cast-to-type.php\' ); $r = CastToType::_float( $x ); if ( is_float( $r ) ) { pr_flt( $r ); } else { pr_var( $r, \'\', true, true ); }',
			'notes'	=>	array(
				'<p>Uses an <a href="https://github.com/jrfnl/PHP-cast-to-type.git" target="_blank">external library</a></p>',
			),
		),
		'casttotype_int' =>	array(
			'title'	=>	'CastToType::_int (&nbsp;$x&nbsp;)',
			'url'	=>	'https://github.com/jrfnl/PHP-cast-to-type.git',
			'arg'	=>	'$x',
			'function'	=>	'include_once( \'include/PHP-cast-to-type/class.cast-to-type.php\' ); $r = CastToType::_int( $x ); if ( is_int( $r ) ) { pr_int( $r ); } else { pr_var( $r, \'\', true, true ); }',
			'notes'	=>	array(
				'<p>Uses an <a href="https://github.com/jrfnl/PHP-cast-to-type.git" target="_blank">external library</a></p>',
			),
		),
		'casttotype_null' =>	array(
			'title'	=>	'CastToType::_null (&nbsp;$x&nbsp;)',
			'url'	=>	'https://github.com/jrfnl/PHP-cast-to-type.git',
			'arg'	=>	'$x',
			'function'	=>	'include_once( \'include/PHP-cast-to-type/class.cast-to-type.php\' ); pr_var( CastToType::_null( $x ), \'\', true, true );',
			'notes'	=>	array(
				'<p>Uses an <a href="https://github.com/jrfnl/PHP-cast-to-type.git" target="_blank">external library</a></p>',
			),
		),
		'casttotype_object' =>	array(
			'title'	=>	'CastToType::_object (&nbsp;$x&nbsp;)',
			'url'	=>	'https://github.com/jrfnl/PHP-cast-to-type.git',
			'arg'	=>	'$x',
			'function'	=>	'include_once( \'include/PHP-cast-to-type/class.cast-to-type.php\' ); pr_var( CastToType::_object( $x ), \'\', true, true );',
			'notes'	=>	array(
				'<p>Uses an <a href="https://github.com/jrfnl/PHP-cast-to-type.git" target="_blank">external library</a></p>',
			),
		),
		'casttotype_string' =>	array(
			'title'	=>	'CastToType::_string (&nbsp;$x&nbsp;)',
			'url'	=>	'https://github.com/jrfnl/PHP-cast-to-type.git',
			'arg'	=>	'$x',
			'function'	=>	'include_once( \'include/PHP-cast-to-type/class.cast-to-type.php\' ); $r = CastToType::_string( $x ); if ( is_string( $r ) ) { pr_str( $r ); } else { pr_var( $r, \'\', true, true ); }',
			'notes'	=>	array(
				'<p>Uses an <a href="https://github.com/jrfnl/PHP-cast-to-type.git" target="_blank">external library</a></p>',
			),
		),
		

		// @todo update titles
		// @todo test recursion
		'casttotype_array_not_empty' =>	array(
			'title'	=>	'CastToType::_array (&nbsp;$x, false&nbsp;)',
			'url'	=>	'https://github.com/jrfnl/PHP-cast-to-type.git',
			'arg'	=>	'$x',
			'function'	=>	'include_once( \'include/PHP-cast-to-type/class.cast-to-type.php\' ); pr_var( CastToType::_array( $x, false ), \'\', true, true );',
			'notes'	=>	array(
				'<p>Uses an external library</p>',
			),
		),
		'casttotype_bool_not_empty_recurse_arrays' =>	array(
			'title'	=>	'CastToType::_bool (&nbsp;$x, false, false&nbsp;)',
			'url'	=>	'https://github.com/jrfnl/PHP-cast-to-type.git',
			'arg'	=>	'$x',
			'function'	=>	'include_once( \'include/PHP-cast-to-type/class.cast-to-type.php\' ); $r = CastToType::_bool( $x, false, false ); if ( is_bool( $r ) ) { pr_bool( $r ); } else { pr_var( $r, \'\', true, true ); }',
			'notes'	=>	array(
				'<p>Uses an <a href="https://github.com/jrfnl/PHP-cast-to-type.git" target="_blank">external library</a></p>',
			),
		),
		'casttotype_float_not_empty_recurse_arrays' =>	array(
			'title'	=>	'CastToType::_float (&nbsp;$x, false, false&nbsp;)',
			'url'	=>	'https://github.com/jrfnl/PHP-cast-to-type.git',
			'arg'	=>	'$x',
			'function'	=>	'include_once( \'include/PHP-cast-to-type/class.cast-to-type.php\' ); $r = CastToType::_float( $x, false, false ); if ( is_float( $r ) ) { pr_flt( $r ); } else { pr_var( $r, \'\', true, true ); }',
			'notes'	=>	array(
				'<p>Uses an <a href="https://github.com/jrfnl/PHP-cast-to-type.git" target="_blank">external library</a></p>',
			),
		),
		'casttotype_int_not_empty_recurse_arrays' =>	array(
			'title'	=>	'CastToType::_int (&nbsp;$x, false, false&nbsp;)',
			'url'	=>	'https://github.com/jrfnl/PHP-cast-to-type.git',
			'arg'	=>	'$x',
			'function'	=>	'include_once( \'include/PHP-cast-to-type/class.cast-to-type.php\' ); $r = CastToType::_int( $x, false, false ); if ( is_int( $r ) ) { pr_int( $r ); } else { pr_var( $r, \'\', true, true ); }',
			'notes'	=>	array(
				'<p>Uses an <a href="https://github.com/jrfnl/PHP-cast-to-type.git" target="_blank">external library</a></p>',
			),
		),
		'casttotype_object_not_empty' =>	array(
			'title'	=>	'CastToType::_object (&nbsp;$x, false&nbsp;)',
			'url'	=>	'https://github.com/jrfnl/PHP-cast-to-type.git',
			'arg'	=>	'$x',
			'function'	=>	'include_once( \'include/PHP-cast-to-type/class.cast-to-type.php\' ); pr_var( CastToType::_object( $x, false ), \'\', true, true );',
			'notes'	=>	array(
				'<p>Uses an <a href="https://github.com/jrfnl/PHP-cast-to-type.git" target="_blank">external library</a></p>',
			),
		),
		'casttotype_string_not_empty_recurse_arrays' =>	array(
			'title'	=>	'CastToType::_string (&nbsp;$x, false, false&nbsp;)',
			'url'	=>	'https://github.com/jrfnl/PHP-cast-to-type.git',
			'arg'	=>	'$x',
			'function'	=>	'include_once( \'include/PHP-cast-to-type/class.cast-to-type.php\' ); $r = CastToType::_string( $x, false, false ); if ( is_string( $r ) ) { pr_str( $r ); } else { pr_var( $r, \'\', true, true ); }',
			'notes'	=>	array(
				'<p>Uses an <a href="https://github.com/jrfnl/PHP-cast-to-type.git" target="_blank">external library</a></p>',
			),
		),





		/**
		 * Some rounding functions
		 */
		'floor' =>	array(
			'title'	=>	'floor()',
			'url'	=>	'http://php.net/floor',
			'arg'	=>	'$x',
			'function'	=>	'$r = floor( $x ); if( is_float( $r ) ) { pr_flt( $r ); } else { pr_var( $r, \'\', true, true ); }',
		),
		'ceil' =>	array(
			'title'	=>	'ceil()',
			'url'	=>	'http://php.net/ceil',
			'arg'	=>	'$x',
			'function'	=>	'$r = ceil( $x ); if( is_float( $r ) ) { pr_flt( $r ); } else { pr_var( $r, \'\', true, true ); }',
		),
		'round' =>	array(
			'title'	=>	'round()',
			'url'	=>	'http://php.net/round',
			'arg'	=>	'$x',
			'function'	=>	'$r = round( $x ); if( is_float( $r ) ) { pr_flt( $r ); } else { pr_var( $r, \'\', true, true ); }',
		),


		/**
		 * Some string related functions
		 */
		'empty' =>	array(
			'title'	=>	'empty()',
			'url'	=>	'http://php.net/empty',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( empty( $x ) );',
		),
		'strlen' =>	array(
			'title'	=>	'strlen()',
			'url'	=>	'http://php.net/strlen',
			'arg'	=>	'$x',
			'function'	=>	'pr_int( strlen( $x ) );',
		),
		'count_chars' =>	array(
			'title'	=>	'count_chars (&hellip;)',
			'tooltip'	=>	'array_sum( count_chars( $x, 1 ) )',
			'url'	=>	'http://php.net/count_chars',
			'arg'	=>	'$x',
			'function'	=>	'pr_var( array_sum( count_chars( $x, 1 ) ), \'\', true, true );',
		),
		'str_shuffle' =>	array(
			'title'	=>	'str_shuffle (&nbsp;$x&nbsp;)',
			'url'	=>	'http://php.net/str_shuffle',
			'arg'	=>	'$x',
			'function'	=>	'pr_var( str_shuffle( $x ), \'\', true, true );',
		),

		'mb_strlen' =>	array(
			'title'	=>	'mb_strlen()',
			'url'	=>	'http://php.net/mb-strlen',
			'arg'	=>	'$x',
			'function'	=>	'if ( function_exists( \'mb_strlen\' ) ) { $r = mb_strlen( $x, \'UTF-8\' ); if ( is_int( $r ) ) { pr_int( $r ); } else { pr_var( $r, \'\', true, true ); } } else { print \'E: mbstring extension not installed\'; }',
		),


		/**
		 * Some array related functions
		 */
		'count' =>	array(
			'title'	=>	'count()',
			'url'	=>	'http://php.net/count',
			'arg'	=>	'$x',
			'function'	=>	'pr_int( count( $x ) );',
		),
		'count_mt_0' =>	array(
			'title'	=>	'count()&nbsp;>&nbsp;0',
			'url'	=>	'http://php.net/count',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( ( count( $x ) > 0 ) );',
		),
		'isset_0' =>	array(
			'title'	=>	'isset (&nbsp;$x[0]&nbsp;)',
			'url'	=>	'http://php.net/isset',
			'arg'	=>	'$x',
			'function'	=>	'if ( !is_object( $x ) ) { pr_bool( isset( $x[0] ) ); } else { $class = get_class( $x ); trigger_error( \'Cannot use object of type \' . $class . \' as array\', E_USER_ERROR ); unset( $class ); }',
			'notes'	=>	array(
				'<p>
					Whether to use <code>isset()</code> or <code>array_key_exists()</code> depends on what you want to know:
				</p>
				<ul>
					<li><code>isset( $array[$key] )</code> will tell you whether the array key exists <strong>and</strong> has been assigned a value.<br />
						Used on its own it will give undesired results when used on strings as characters within a string can be approached using the <code>$x[]</code> syntax as well.<br />
						Also, it will cause fatal errors when used on objects.</li>
					<li><code>array_key_exists( $key, $array )</code> will tell you only whether the array key exists, but will not check whether it has a value assigned to it.<br />
						Used on its own, it will show a warning if $array is not an array</li>
				</ul>
				<p>
					This said, we can concluded that to avoid warnings and undesired results you will always have to use an <code>is_array()</code> first.<br />
					Also note that <code>isset()</code> is faster than <code>array_key_exists()</code>, but as said above, will return false if no value has been assigned.
				</p>',
			),
		),
		
		'isset_foo' =>	array(
			'title'	=>	'isset (&nbsp;$x[\'foo\']&nbsp;)',
			'url'	=>	'http://php.net/isset',
			'arg'	=>	'$x',
			'function'	=>	'if ( !is_object( $x ) ) { pr_bool( isset( $x[\'foo\'] ) ); } else { $class = get_class( $x ); trigger_error( \'Cannot use object of type \' . $class . \' as array\', E_USER_ERROR ); unset( $class ); }',
			'notes'	=>	array(
				'<p>
					Whether to use <code>isset()</code> or <code>array_key_exists()</code> depends on what you want to know:
				</p>
				<ul>
					<li><code>isset( $array[$key] )</code> will tell you whether the array key exists <strong>and</strong> has been assigned a value.<br />
						Used on its own it will give undesired results when used on strings as characters within a string can be approached using the <code>$x[]</code> syntax as well.<br />
						Also, it will cause fatal errors when used on objects.</li>
					<li><code>array_key_exists( $key, $array )</code> will tell you only whether the array key exists, but will not check whether it has a value assigned to it.<br />
						Used on its own, it will show a warning if $array is not an array</li>
				</ul>
				<p>
					This said, we can concluded that to avoid warnings and undesired results you will always have to use an <code>is_array()</code> first.<br />
					Also note that <code>isset()</code> is faster than <code>array_key_exists()</code>, but as said above, will return false if no value has been assigned.
				</p>',
			),
		),

		'array_key_exists' =>	array(
			'title'	=>	'array_key_exists (&nbsp;0,&nbsp;$x&nbsp;)',
			'url'	=>	'http://php.net/array_key_exists',
			'arg'	=>	'$x',
			'function'	=>	'if ( function_exists( \'array_key_exists\' ) ) { pr_bool( array_key_exists( 0, $x ) ); } else { print \'E: not available (PHP 4.0.7+)\'; }',
			'notes'	=>	array(
				'<p>
					Whether to use <code>isset()</code> or <code>array_key_exists()</code> depends on what you want to know:
				</p>
				<ul>
					<li><code>isset( $array[$key] )</code> will tell you whether the array key exists <strong>and</strong> has been assigned a value.<br />
						Used on its own it will give undesired results when used on strings as characters within a string can be approached using the <code>$x[]</code> syntax as well.<br />
						Also, it will cause fatal errors when used on objects.</li>
					<li><code>array_key_exists( $key, $array )</code> will tell you only whether the array key exists, but will not check whether it has a value assigned to it.<br />
						Used on its own, it will show a warning if $array is not an array</li>
				</ul>
				<p>
					This said, we can concluded that to avoid warnings and undesired results you will always have to use an <code>is_array()</code> first.<br />
					Also note that <code>isset()</code> is faster than <code>array_key_exists()</code>, but as said above, will return false if no value has been assigned.
				</p>',
			),

		),
		'in_array' =>	array(
			'title'	=>	'in_array (&nbsp;\'s\', $x&nbsp;)',
			'url'	=>	'http://php.net/in_array',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( in_array( \'s\', $x ) );',
		),
		'array_count_values' =>	array(
			'title'	=>	'array_count_values()',
			'url'	=>	'http://php.net/array_count_values',
			'arg'	=>	'$x',
			'function'	=>	'pr_var( array_count_values( $x ), \'\', true, true );',
		),
		


		'array_filter' =>	array(
			'title'	=>	'array_filter()',
			'url'	=>	'http://php.net/array_filter',
			'arg'	=>	'$x',
			'function'	=>	'pr_var( array_filter( $x ), \'\', true, true );',
		),
		'array_flip' =>	array(
			'title'	=>	'array_flip()',
			'url'	=>	'http://php.net/array_flip',
			'arg'	=>	'$x',
			'function'	=>	'pr_var( array_flip( $x ), \'\', true, true );',
		),
		'array_reverse' =>	array(
			'title'	=>	'array_reverse()',
			'url'	=>	'http://php.net/array_reverse',
			'arg'	=>	'$x',
			'function'	=>	'pr_var( array_reverse( $x ), \'\', true, true );',
		),
		'current' =>	array(
			'title'	=>	'current()',
			'url'	=>	'http://php.net/current',
			'arg'	=>	'$x',
			'function'	=>	'pr_var( current( $x ), \'\', true, true );',
		),
		'key' =>	array(
			'title'	=>	'key()',
			'url'	=>	'http://php.net/key',
			'arg'	=>	'$x',
			'function'	=>	'pr_var( key( $x ), \'\', true, true );',
		),
		'shuffle' =>	array(
			'title'	=>	'shuffle (&nbsp;$copy&nbsp;)',
			'url'	=>	'http://php.net/shuffle',
			'arg'	=>	'$x',
			'function'	=>	'$pass = shuffle( $x ); if ( $pass === true) { pr_var( $x, \'\', true, true ); } else { print \'FAILED\'; }',
		),
		'sort' =>	array(
			'title'	=>	'sort (&nbsp;$copy&nbsp;)',
			'url'	=>	'http://php.net/sort',
			'arg'	=>	'$x',
			'function'	=>	'$pass = sort( $x ); if ( $pass === true) { pr_var( $x, \'\', true, true ); } else { print \'FAILED\'; }',
		),


		/**
		 * Some object related functions
		 */
		'is_a' => array(
			'title'	=>	'is_a (&nbsp;$x, \'TestObject\'&nbsp;)',
			'url'	=>	'http://php.net/is_a',
			'arg'	=>	'$x',
			'function'	=>	'$c = \'TestObject\'; $r = is_a( $x, $c ); if ( is_bool( $r ) ) { pr_bool( $r ); } else { pr_var( $r, \'\', true, true ); }',
		),
		'instanceof' => array(
			'title'	=>	'instanceof TestObject',
			'url'	=>	'http://php.net/language.operators.type',
			'arg'	=>	'$x',
			'function'	=>	'if ( PHP_VERSION_ID >= 50000 ) { $c = \'TestObject\'; $r = ( $x instanceof $c ); if ( is_bool( $r ) ) { pr_bool( $r ); } else { pr_var( $r, \'\', true, true ); } } else { print \'E: not available (PHP 5.0+)\'; }',
		),
		'get_class' => array(
			'title'	=>	'get_class()',
			'url'	=>	'http://php.net/get_class',
			'arg'	=>	'$x',
			'function'	=>	'$r = get_class( $x ); if( !is_bool( $r ) ) { pr_var( $r, \'\', true, true ); } else { pr_bool( $r ); }',
		),
		'get_parent_class' => array(
			'title'	=>	'get_parent_class()',
			'url'	=>	'http://php.net/get_parent_class',
			'arg'	=>	'$x',
			'function'	=>	'$r = get_parent_class( $x ); if( !is_bool( $r ) ) { pr_var( $r, \'\', true, true ); } else { pr_bool( $r ); }',
		),
		'is_subclass_of' => array(
			'title'	=>	'is_subclass_of (&nbsp;$x, \'TestObject\'&nbsp;)',
			'url'	=>	'http://php.net/is_subclass_of',
			'arg'	=>	'$x',
			'function'	=>	'$c = \'TestObject\'; $r = is_subclass_of( $x, $c  ); if ( is_bool( $r ) ) { pr_bool( $r, \'\', true, true ); } else { pr_var( $r, \'\', true, true ); }',
		),



		/**
		 * Resource specific functions
		 */
		'get_resource_type' =>	array(
			'title'	=>	'get_resource_type()',
			'url'	=>	'http://php.net/get_resource_type',
			'arg'	=>	'$x',
			'function'	=>	'if( function_exists( \'get_resource_type\' ) ) { $r = get_resource_type( $x ); if( is_string( $r ) ) { pr_str( $r ); } else if( is_bool( $r ) ) { pr_bool( $r ); } else { pr_var( $r, \'\', true, true ); } } else {print \'E: not available (PHP 4.0.2+)\'; }',
		),






		/**
		 * null comparisons
		 */
		'null_cmp_loose' =>	array(
			'title'	=>	'== null',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( $x == null );',
		),
		'null_cmp_strict' =>	array(
			'title'	=>	'=== null',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( $x === null );',
		),
		'null_cmp_loose_str' =>	array(
			'title'	=>	'== \'null\'',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( $x == \'null\' );',
		),
		'null_cmp_strict_str' =>	array(
			'title'	=>	'=== \'null\'',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( $x === \'null\' );',
		),

		'null_cmp_rv_loose' =>	array(
			'title'	=>	'null ==',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( null == $x );',
		),
		'null_cmp_rv_strict' =>	array(
			'title'	=>	'null ===',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( null === $x );',
		),
		'null_cmp_rv_loose_str' =>	array(
			'title'	=>	'\'null\' ==',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( \'null\' == $x );',
		),
		'null_cmp_rv_strict_str' =>	array(
			'title'	=>	'\'null\' ===',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( \'null\' === $x );',
		),


		/**
		 * Boolean comparisons
		 */
		'bool_cmp_true_loose' =>	array(
			'title'	=>	'== true',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( $x == true );',
		),
		'bool_cmp_false_loose' =>	array(
			'title'	=>	'== false',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( $x == false );',
		),
		'bool_cmp_true_strict' =>	array(
			'title'	=>	'=== true',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( $x === true );',
		),
		'bool_cmp_false_strict' =>	array(
			'title'	=>	'=== false',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( $x === false );',
		),
		'bool_cmp_true_loose_int' =>	array(
			'title'	=>	'==&nbsp;1',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( $x == 1 );',
		),
		'bool_cmp_false_loose_int' =>	array(
			'title'	=>	'==&nbsp;0',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( $x == 0 );',
		),
		'bool_cmp_true_strict_int' =>	array(
			'title'	=>	'===&nbsp;1',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( $x === 1 );',
		),
		'bool_cmp_false_strict_int' =>	array(
			'title'	=>	'===&nbsp;0',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( $x === 0 );',
		),
		'bool_cmp_true_loose_str' =>	array(
			'title'	=>	'== \'true\'',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( $x == \'true\' );',
		),
		'bool_cmp_false_loose_str' =>	array(
			'title'	=>	'== \'false\'',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( $x == \'false\' );',
		),
		'bool_cmp_true_strict_str' =>	array(
			'title'	=>	'=== \'true\'',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( $x === \'true\' );',
		),
		'bool_cmp_false_strict_str' =>	array(
			'title'	=>	'=== \'false\'',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( $x === \'false\' );',
		),



		'bool_cmp_rv_true_loose' =>	array(
			'title'	=>	'true ==',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( true == $x );',
		),
		'bool_cmp_rv_false_loose' =>	array(
			'title'	=>	'false ==',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( false == $x );',
		),
		'bool_cmp_rv_true_strict' =>	array(
			'title'	=>	'true ===',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( true === $x );',
		),
		'bool_cmp_rv_false_strict' =>	array(
			'title'	=>	'false ===',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( false === $x );',
		),
		'bool_cmp_rv_true_loose_int' =>	array(
			'title'	=>	'1 ==',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( 1 == $x );',
		),
		'bool_cmp_rv_false_loose_int' =>	array(
			'title'	=>	'0 ==',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( 0 == $x );',
		),
		'bool_cmp_rv_true_strict_int' =>	array(
			'title'	=>	'1 ===',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( 1 === $x );',
		),
		'bool_cmp_rv_false_strict_int' =>	array(
			'title'	=>	'0 ===',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( 0 === $x );',
		),
		'bool_cmp_rv_true_loose_str' =>	array(
			'title'	=>	'\'true\' ==',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( \'true\' == $x );',
		),
		'bool_cmp_rv_false_loose_str' =>	array(
			'title'	=>	'\'false\' ==',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( \'false\' == $x );',
		),
		'bool_cmp_rv_true_strict_str' =>	array(
			'title'	=>	'\'true\' ===',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( \'true\' === $x );',
		),
		'bool_cmp_rv_false_strict_str' =>	array(
			'title'	=>	'\'false\' ===',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( \'false\' === $x );',
		),


		/**
		 * Comparisons with int 0
		 */
		'int_cmp_gt0' =>	array(
			'title'	=>	'&gt;&nbsp;0',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( $x > 0 );',
		),
		'int_cmp_gte0' =>	array(
			'title'	=>	'&gt;=&nbsp;0',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( $x >= 0 );',
		),
		'int_cmp_is0_loose' =>	array(
			'title'	=>	'==&nbsp;0',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( $x == 0 );',
		),
		'int_cmp_is0_strict' =>	array(
			'title'	=>	'===&nbsp;0',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( $x === 0 );',
		),
		'int_cmp_not0_loose' =>	array(
			'title'	=>	'!=&nbsp;0',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( $x != 0 );',
		),
		'int_cmp_not0_strict' =>	array(
			'title'	=>	'!==&nbsp;0',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( $x !== 0 );',
		),
		'int_cmp_lt0' =>	array(
			'title'	=>	'&lt;&nbsp;0',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( $x < 0 );',
		),
		'int_cmp_lte0' =>	array(
			'title'	=>	'&lt;=&nbsp;0',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( $x <= 0 );',
		),


		/**
		 * Comparisons with empty string
		 */
		'str_cmp_empty_loose' =>	array(
			'title'	=>	'==&nbsp;\'\'',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( $x == \'\' );',
		),
		'str_cmp_empty_strict' =>	array(
			'title'	=>	'===&nbsp;\'\'',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( $x === \'\' );',
		),
		'str_cmp_not_empty_loose' =>	array(
			'title'	=>	'!=&nbsp;\'\'',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( $x != \'\' );',
		),
		'str_cmp_not_empty_strict' =>	array(
			'title'	=>	'!==&nbsp;\'\'',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( $x !== \'\' );',
		),


		/**
		 * Arithmetic operations
		 */
		'pre_increment'		=>	array(
			'title'	=>	'$x = ++$x',
			'url'	=>	'http://php.net/language.operators.increment',
			'arg'	=>	'$x',
			'function'	=>	'$r = ++$x; if ( is_int( $r ) ) { pr_int( $r ); } else if ( is_float( $r ) ) { pr_flt( $r ); } else { pr_var( $r, \'\', true, true ); }',
			'notes'	=>	array(
				'<p>Please take note: using the in-/decrementors on SplInt and SplFloat objects may give unexpected (inconsistent) results....</p>'
			),
		),
		'post_increment'		=>	array(
			'title'	=>	'$x = $x++',
			'url'	=>	'http://php.net/language.operators.increment',
			'arg'	=>	'$x',
			'function'	=>	'$r = $x++; if ( is_int( $r ) ) { pr_int( $r ); } else if ( is_float( $r ) ) { pr_flt( $r ); } else { pr_var( $r, \'\', true, true ); }',
			'notes'	=>	array(
				'<p>Please take note: using the in-/decrementors on SplInt and SplFloat objects may give unexpected (inconsistent) results....</p>'
			),
		),
		'pre_decrement'		=>	array(
			'title'	=>	'$x = --$x',
			'url'	=>	'http://php.net/language.operators.increment',
			'arg'	=>	'$x',
			'function'	=>	'$r = --$x; if ( is_int( $r ) ) { pr_int( $r ); } else if ( is_float( $r ) ) { pr_flt( $r ); } else { pr_var( $r, \'\', true, true ); }',
			'notes'	=>	array(
				'<p>Please take note: using the in-/decrementors on SplInt and SplFloat objects may give unexpected (inconsistent) results....</p>'
			),
		),
		'post_decrement'		=>	array(
			'title'	=>	'$x = $x--',
			'url'	=>	'http://php.net/language.operators.increment',
			'arg'	=>	'$x',
			'function'	=>	'$r = $x--; if ( is_int( $r ) ) { pr_int( $r ); } else if ( is_float( $r ) ) { pr_flt( $r ); } else { pr_var( $r, \'\', true, true ); }',
			'notes'	=>	array(
				'<p>Please take note: using the in-/decrementors on SplInt and SplFloat objects may give unexpected (inconsistent) results....</p>'
			),
		),


		'arithmetic_negate'		=>	array(
			'title'	=>	'-$x',
			'url'	=>	'http://php.net/language.operators.arithmetic',
			'arg'	=>	'$x',
			'function'	=>	'if ( !is_array( $x ) ) { pr_var( -$x, \'\', true, true ); } else { trigger_error( \'Unsupported operand types\', E_USER_ERROR ); }',
		),
		'arithmetic_subtract'	=>	array(
			'title'	=>	'$x&nbsp;-&nbsp;0',
			'url'	=>	'http://php.net/language.operators.arithmetic',
			'arg'	=>	'$x',
			'function'	=>	'if ( !is_array( $x ) ) { pr_var( $x - 0, \'\', true, true ); } else { trigger_error( \'Unsupported operand types\', E_USER_ERROR ); }',
		),
		'arithmetic_multiply'	=>	array(
			'title'	=>	'$x&nbsp;*&nbsp;1',
			'url'	=>	'http://php.net/language.operators.arithmetic',
			'arg'	=>	'$x',
			'function'	=>	'if ( !is_array( $x ) ) { pr_var( $x * 1, \'\', true, true ); } else { trigger_error( \'Unsupported operand types\', E_USER_ERROR ); }',
		),
		'arithmetic_divide'		=>	array(
			'title'	=>	'$x&nbsp;/&nbsp;1',
			'url'	=>	'http://php.net/language.operators.arithmetic',
			'arg'	=>	'$x',
			'function'	=>	'if ( !is_array( $x ) ) { pr_var( $x / 1, \'\', true, true ); } else { trigger_error( \'Unsupported operand types\', E_USER_ERROR ); }',
		),
		'arithmetic_modulus'	=>	array(
			'title'	=>	'$x&nbsp;%&nbsp;1',
			'url'	=>	'http://php.net/language.operators.arithmetic',
			'arg'	=>	'$x',
			'function'	=>	'pr_var( $x % 1, \'\', true, true );',
		),



		/**
		 * preg_match()
		 */
		'preg_int_pos' =>	array(
			'title'	=>	'preg_match (`^[0-9]+$`)',
			'url'	=>	'http://php.net/preg-match',
			'arg'	=>	'$x',
			'function'	=> '$valid = preg_match( \'`^[0-9]+$`\', $x ); if ( $valid === 1 ) { pr_bool( true ); } else if ( $valid === 0 ) { pr_bool( false ); } else if ( $valid === false ) { print \'Error\'; } else { pr_var( $valid, \'\', true, true ); }',
		),
		'preg_int' =>	array(
			'title'	=>	'preg_match (`^[0-9<span style="color: red;">-</span>]+$`)',
			'url'	=>	'http://php.net/preg-match',
			'arg'	=>	'$x',
			'function'	=>	'$valid = preg_match( \'`^[0-9-]+$`\', $x ); if ( $valid === 1 ) { pr_bool( true ); } else if ( $valid === 0 ) { pr_bool( false ); } else if ( $valid === false ) { print \'Error\'; } else { pr_var( $valid, \'\', true, true ); }',
		),
		'preg_digit_pos' =>	array(
			'title'	=>	'preg_match (`^\d+$`)',
			'url'	=>	'http://php.net/preg-match',
			'arg'	=>	'$x',
			'function'	=>	'$valid = preg_match( \'`^\d+$`\', $x ); if ( $valid === 1 ) { pr_bool( true ); } else if ( $valid === 0 ) { pr_bool( false ); } else if ( $valid === false ) { print \'Error\'; } else { pr_var( $valid, \'\', true, true ); }',
		),
		'preg_digit' =>	array(
			'title'	=>	'preg_match (`^[\d<span style="color: red;">-</span>]+$`)',
			'url'	=>	'http://php.net/preg-match',
			'arg'	=>	'$x',
			'function'	=>	'$valid = preg_match( \'`^[\d-]+$`\', $x ); if ( $valid === 1 ) { pr_bool( true ); } else if ( $valid === 0 ) { pr_bool( false ); } else if ( $valid === false ) { print \'Error\'; } else { pr_var( $valid, \'\', true, true ); }',
		),
		
		// ##PREG_DECIMAL_POINT## is replaced by the locale specific decimal point character in the class constructor
		'preg_float_pos' =>	array(
			'title'	=>	'preg_match (`^[0-9##PREG_DECIMAL_POINT##]+$`)',
			'tooltip'	=>	'Decimal point character adjusted based on locale',
			'url'	=>	'http://php.net/preg-match',
			'arg'	=>	'$x',
			'function'	=> '$valid = preg_match( \'`^[0-9##PREG_DECIMAL_POINT##]+$`\', $x ); if ( $valid === 1 ) { pr_bool( true ); } else if ( $valid === 0 ) { pr_bool( false ); } else if ( $valid === false ) { print \'Error\'; } else { pr_var( $valid, \'\', true, true ); }',
		),
		// ##PREG_DECIMAL_POINT## is replaced by the locale specific decimal point character in the class constructor
		'preg_float' =>	array(
			'title'	=>	'preg_match (`^[0-9##PREG_DECIMAL_POINT##<span style="color: red;">-</span>]+$`)',
			'tooltip'	=>	'Decimal point character adjusted based on locale',
			'url'	=>	'http://php.net/preg-match',
			'arg'	=>	'$x',
			'function'	=>	'$valid = preg_match( \'`^[0-9##PREG_DECIMAL_POINT##-]+$`\', $x ); if ( $valid === 1 ) { pr_bool( true ); } else if ( $valid === 0 ) { pr_bool( false ); } else if ( $valid === false ) { print \'Error\'; } else { pr_var( $valid, \'\', true, true ); }',
		),
		// ##PREG_DECIMAL_POINT## is replaced by the locale specific decimal point character in the class constructor
		'preg_digit_float_pos' =>	array(
			'title'	=>	'preg_match (`^[\d##PREG_DECIMAL_POINT##]+$`)',
			'tooltip'	=>	'Decimal point character adjusted based on locale',
			'url'	=>	'http://php.net/preg-match',
			'arg'	=>	'$x',
			'function'	=>	'$valid = preg_match( \'`^[\d##PREG_DECIMAL_POINT##]+$`\', $x ); if ( $valid === 1 ) { pr_bool( true ); } else if ( $valid === 0 ) { pr_bool( false ); } else if ( $valid === false ) { print \'Error\'; } else { pr_var( $valid, \'\', true, true ); }',
		),
		// ##PREG_DECIMAL_POINT## is replaced by the locale specific decimal point character in the class constructor
		'preg_digit_float' =>	array(
			'title'	=>	'preg_match (`^[\d##PREG_DECIMAL_POINT##<span style="color: red;">-</span>]]+$`)',
			'tooltip'	=>	'Decimal point character adjusted based on locale',
			'url'	=>	'http://php.net/preg-match',
			'arg'	=>	'$x',
			'function'	=>	'$valid = preg_match( \'`^[\d##PREG_DECIMAL_POINT##-]+$`\', $x ); if ( $valid === 1 ) { pr_bool( true ); } else if ( $valid === 0 ) { pr_bool( false ); } else if ( $valid === false ) { print \'Error\'; } else { pr_var( $valid, \'\', true, true ); }',
		),
		'preg_alpha' =>	array(
			'title'	=>	'preg_match (`^[A-Za-z]+$`)',
			'url'	=>	'http://php.net/preg-match',
			'arg'	=>	'$x',
			'function'	=>	'$valid = preg_match( \'`^[A-Za-z]+$`\', $x ); if ( $valid === 1 ) { pr_bool( true ); } else if ( $valid === 0 ) { pr_bool( false ); } else if ( $valid === false ) { print \'Error\'; } else { pr_var( $valid, \'\', true, true ); }',
		),
		'preg_alnum' =>	array(
			'title'	=>	'preg_match (`^[A-Za-z0-9]+$`)',
			'url'	=>	'http://php.net/preg-match',
			'arg'	=>	'$x',
			'function'	=>	'$valid = preg_match( \'`^[A-Za-z0-9]+$`\', $x ); if ( $valid === 1 ) { pr_bool( true ); } else if ( $valid === 0 ) { pr_bool( false ); } else if ( $valid === false ) { print \'Error\'; } else { pr_var( $valid, \'\', true, true ); }',
		),
		'preg_word' =>	array(
			'title'	=>	'preg_match (`^\w+$`)',
			'url'	=>	'http://php.net/preg-match',
			'arg'	=>	'$x',
			'function'	=>	'$valid = preg_match( \'`^\w+$`\', $x ); if ( $valid === 1 ) { pr_bool( true ); } else if ( $valid === 0 ) { pr_bool( false ); } else if ( $valid === false ) { print \'Error\'; } else { pr_var( $valid, \'\', true, true ); }',
		),
		'preg_word_utf8' =>	array(
			'title'	=>	'preg_match (`^\w+$`u)',
			'url'	=>	'http://php.net/preg-match',
			'arg'	=>	'$x',
			'function'	=>	'$valid = preg_match( \'`^\w+$`u\', $x ); if ( $valid === 1 ) { pr_bool( true ); } else if ( $valid === 0 ) { pr_bool( false ); } else if ( $valid === false ) { print \'Error\'; } else { pr_var( $valid, \'\', true, true ); }',
		),
		

		/**
		 * CTYPE extension
		 */
		'ctype_alnum' =>	array(
			'title'	=>	'ctype_alnum()',
			'url'	=>	'http://php.net/ctype_alnum',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( ctype_alnum( $x ) );',
			'notes'	=> array(
				'<p>Important: Integers between -128 and 255 are interpreted as the ASCII value pointing to a character (negative values have 256 added in order to allow characters in the Extended ASCII range).<br />
				In any other case, integers are interpreted as a string containing the decimal digits of the integer.</p>',
			),
		),
		'ctype_alpha' =>	array(
			'title'	=>	'ctype_alpha()',
			'url'	=>	'http://php.net/ctype_alpha',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( ctype_alpha( $x ) );',
			'notes'	=> array(
				'<p>Important: Integers between -128 and 255 are interpreted as the ASCII value pointing to a character (negative values have 256 added in order to allow characters in the Extended ASCII range).<br />
				In any other case, integers are interpreted as a string containing the decimal digits of the integer.</p>',
			),

		),
		'ctype_cntrl' =>	array(
			'title'	=>	'ctype_cntrl()',
			'url'	=>	'http://php.net/ctype_cntrl',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( ctype_cntrl( $x ) );',
			'notes'	=> array(
				'<p>Important: Integers between -128 and 255 are interpreted as the ASCII value pointing to a character (negative values have 256 added in order to allow characters in the Extended ASCII range).<br />
				In any other case, integers are interpreted as a string containing the decimal digits of the integer.</p>',
			),

		),
		'ctype_digit' =>	array(
			'title'	=>	'ctype_digit()',
			'url'	=>	'http://php.net/ctype_digit',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( ctype_digit( $x ) );',
			'notes'	=> array(
				'<p>Important: Integers between -128 and 255 are interpreted as the ASCII value pointing to a character (negative values have 256 added in order to allow characters in the Extended ASCII range).<br />
				In any other case, integers are interpreted as a string containing the decimal digits of the integer.</p>',
			),

		),
		'ctype_graph' =>	array(
			'title'	=>	'ctype_graph()',
			'url'	=>	'http://php.net/ctype_graph',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( ctype_graph( $x ) );',
			'notes'	=> array(
				'<p>Important: Integers between -128 and 255 are interpreted as the ASCII value pointing to a character (negative values have 256 added in order to allow characters in the Extended ASCII range).<br />
				In any other case, integers are interpreted as a string containing the decimal digits of the integer.</p>',
			),

		),
		'ctype_lower' =>	array(
			'title'	=>	'ctype_lower()',
			'url'	=>	'http://php.net/ctype_lower',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( ctype_lower( $x ) );',
			'notes'	=> array(
				'<p>Important: Integers between -128 and 255 are interpreted as the ASCII value pointing to a character (negative values have 256 added in order to allow characters in the Extended ASCII range).<br />
				In any other case, integers are interpreted as a string containing the decimal digits of the integer.</p>',
			),

		),
		'ctype_print' =>	array(
			'title'	=>	'ctype_print()',
			'url'	=>	'http://php.net/ctype_print',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( ctype_print( $x ) );',
			'notes'	=> array(
				'<p>Important: Integers between -128 and 255 are interpreted as the ASCII value pointing to a character (negative values have 256 added in order to allow characters in the Extended ASCII range).<br />
				In any other case, integers are interpreted as a string containing the decimal digits of the integer.</p>',
			),

		),
		'ctype_punct' =>	array(
			'title'	=>	'ctype_punct()',
			'url'	=>	'http://php.net/ctype_punct',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( ctype_punct( $x ) );',
			'notes'	=> array(
				'<p>Important: Integers between -128 and 255 are interpreted as the ASCII value pointing to a character (negative values have 256 added in order to allow characters in the Extended ASCII range).<br />
				In any other case, integers are interpreted as a string containing the decimal digits of the integer.</p>',
			),

		),
		'ctype_space' =>	array(
			'title'	=>	'ctype_space()',
			'url'	=>	'http://php.net/ctype_space',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( ctype_space( $x ) );',
			'notes'	=> array(
				'<p>Important: Integers between -128 and 255 are interpreted as the ASCII value pointing to a character (negative values have 256 added in order to allow characters in the Extended ASCII range).<br />
				In any other case, integers are interpreted as a string containing the decimal digits of the integer.</p>',
			),

		),
		'ctype_upper' =>	array(
			'title'	=>	'ctype_upper()',
			'url'	=>	'http://php.net/ctype_upper',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( ctype_upper( $x ) );',
			'notes'	=> array(
				'<p>Important: Integers between -128 and 255 are interpreted as the ASCII value pointing to a character (negative values have 256 added in order to allow characters in the Extended ASCII range).<br />
				In any other case, integers are interpreted as a string containing the decimal digits of the integer.</p>',
			),

		),
		'ctype_xdigit' =>	array(
			'title'	=>	'ctype_xdigit()',
			'url'	=>	'http://php.net/ctype_xdigit',
			'arg'	=>	'$x',
			'function'	=>	'pr_bool( ctype_xdigit( $x ) );',
			'notes'	=> array(
				'<p>Important: Integers between -128 and 255 are interpreted as the ASCII value pointing to a character (negative values have 256 added in order to allow characters in the Extended ASCII range).<br />
				In any other case, integers are interpreted as a string containing the decimal digits of the integer.</p>',
			),

		),






		/**
		 * FILTER extension
		 */

		// Boolean filters
		'filter_var_bool' =>	array(
			'title'	=>	'filter_var (&hellip;)',
			'tooltip'	=>	'filter_var( $x, FILTER_VALIDATE_BOOLEAN )',
			'url'	=>	'http://php.net/filter_var',
			'arg'	=>	'$x',
			'function'	=>	'if ( function_exists( \'filter_var\' ) ) { pr_bool( filter_var( $x, FILTER_VALIDATE_BOOLEAN ), \'\', true, true ); } else { print \'E: not available (PHP 5.2.0+)\'; }',
		),
		'filter_var_array_bool' =>	array(
			'title'	=>	'filter_var_array (&hellip;)',
			'tooltip'	=>	'filter_var_array( $x, FILTER_VALIDATE_BOOLEAN )',
			'url'	=>	'http://php.net/filter_var_array',
			'arg'	=>	'$x',
			'function'	=>	'if ( function_exists( \'filter_var_array\' ) ) { pr_var( filter_var_array( $x, FILTER_VALIDATE_BOOLEAN ), \'\', true, true ); } else { print \'E: not available (PHP 5.2.0+)\'; }',
		),
		'filter_combined_bool' =>	array(
			'title'	=>	'filter_var (&hellip;)',
			'tooltip' => '
if( !is_array( $x ) ) {
	filter_var( $x, FILTER_VALIDATE_BOOLEAN );
}
else {
	filter_var_array( $x, FILTER_VALIDATE_BOOLEAN );
}
			',
			'url'	=>	'http://php.net/filter_var',
			'arg'	=>	'$x',
			'function'	=>	'VartypeTest::filter_combined( $x, \'bool\', FILTER_VALIDATE_BOOLEAN );',
		),
		// Note: PHP 5.2.11: bool false will result in null!!!
		'filter_combined_bool_null' =>	array(
			'title'	=>	'filter_var (&hellip;)',
			'tooltip' => '
if( !is_array( $x ) ) {
	filter_var( $x, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE );
}
else {
	filter_var_array( $x, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE ); // = Simplified... see note
}
			',
			'url'	=>	'http://php.net/filter_var',
			'arg'	=>	'$x',
			'function'	=>	'VartypeTest::filter_combined( $x, \'bool\', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE );',
			'notes'	=>	array(
				'<p>Please note: On some PHP versions <code>filter_var( $x, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE )</code> where <code>$x = false</code> will incorrectly return <code>null</code>.<br />
				Also: with the same parameters filter_var() will return <code>false</code> instead of <code>null</code> for most objects.</p>',
				'<p>The code snippet is simplified for brevity. Please refer to the source of this file on <a href="http://github.com/jrfnl/PHP-cheat-sheet-extended" target="_blank">GitHub</a> for full details on how to use filter_var_array().</p>',
			),
		),

		// Float filters
		'filter_var_float' =>	array(
			'title'	=>	'filter_var (&hellip;)',
			'tooltip'	=>	'filter_var( $x, FILTER_VALIDATE_FLOAT )',
			'url'	=>	'http://php.net/filter_var',
			'arg'	=>	'$x',
			'function'	=>	'if ( function_exists( \'filter_var\' ) ) { $r = filter_var( $x, FILTER_VALIDATE_FLOAT ); if ( is_float( $r ) ) { pr_flt( $r ); } else { pr_var( $r, \'\', true, true ); } } else { print \'E: not available (PHP 5.2.0+)\'; }',
		),
		'filter_var_array_float' =>	array(
			'title'	=>	'filter_var_array (&hellip;)',
			'tooltip'	=>	'filter_var_array( $x, FILTER_VALIDATE_FLOAT )',
			'url'	=>	'http://php.net/filter_var_array',
			'arg'	=>	'$x',
			'function'	=>	'if ( function_exists( \'filter_var_array\' ) ) { pr_var( filter_var_array( $x, FILTER_VALIDATE_FLOAT ), \'\', true, true ); } else { print \'E: not available (PHP 5.2.0+)\'; }',
		),
		'filter_combined_float' =>	array(
			'title'	=>	'filter_var (&hellip;)',
			'tooltip'	=>	'
if( !is_array( $x ) ) {
	filter_var( $x, FILTER_VALIDATE_FLOAT );
}
else {
	filter_var_array( $x, FILTER_VALIDATE_FLOAT );
}
 			',
			'url'	=>	'http://php.net/filter_var',
			'arg'	=>	'$x',
			'function'	=>	'VartypeTest::filter_combined( $x, \'float\', FILTER_VALIDATE_FLOAT );',
		),
		'filter_combined_float_null' =>	array(
			'title'	=>	'filter_var (&hellip;)',
			'tooltip'	=>	'
if( !is_array( $x ) ) {
	filter_var( $x, FILTER_VALIDATE_FLOAT, FILTER_NULL_ON_FAILURE );
}
else {
	filter_var_array( $x, FILTER_VALIDATE_FLOAT, FILTER_NULL_ON_FAILURE ); // = Simplified... see note
}
 			',
			'url'	=>	'http://php.net/filter_var',
			'arg'	=>	'$x',
			'function'	=>	'VartypeTest::filter_combined( $x, \'float\', FILTER_VALIDATE_FLOAT, FILTER_NULL_ON_FAILURE );',
			'notes'	=> array(
				'<p>The code snippet is simplified for brevity. Please refer to the source of this file on <a href="http://github.com/jrfnl/PHP-cheat-sheet-extended" target="_blank">GitHub</a> for full details on how to use filter_var_array().</p>',
			),
		),
		'filter_combined_flt_null_sanitize' =>	array(
			'title'	=>	'filter_var (&hellip;)',
			'tooltip'	=>	'
if( !is_array( $x ) ) {
	filter_var( $x, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_NULL_ON_FAILURE );
}
else {
	filter_var_array( $x, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_NULL_ON_FAILURE ); // = Simplified... see note
}
 			',
			'url'	=>	'http://php.net/filter_var',
			'arg'	=>	'$x',
			'function'	=>	'VartypeTest::filter_combined( $x, \'float\', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_NULL_ON_FAILURE );',
			'notes'	=> array(
				'<p>The code snippet is simplified for brevity. Please refer to the source of this file on <a href="http://github.com/jrfnl/PHP-cheat-sheet-extended" target="_blank">GitHub</a> for full details on how to use filter_var_array().</p>',
			),
		),
		
		
		'filter_combined_flt_null_sanitize_allowx3' =>	array(
			'title'	=>	'filter_var (&hellip;)',
			'tooltip'	=>	'
if( !is_array( $x ) ) {
	filter_var( $x, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_NULL_ON_FAILURE|FILTER_FLAG_ALLOW_FRACTION|FILTER_FLAG_ALLOW_THOUSAND|FILTER_FLAG_ALLOW_SCIENTIFIC );
}
else {
	filter_var_array( $x, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_NULL_ON_FAILURE|FILTER_FLAG_ALLOW_FRACTION|FILTER_FLAG_ALLOW_THOUSAND|FILTER_FLAG_ALLOW_SCIENTIFIC ); // = Simplified... see note
}
 			',
			'url'	=>	'http://php.net/filter_var',
			'arg'	=>	'$x',
			'function'	=>	'VartypeTest::filter_combined( $x, \'float\', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_NULL_ON_FAILURE|FILTER_FLAG_ALLOW_FRACTION|FILTER_FLAG_ALLOW_THOUSAND|FILTER_FLAG_ALLOW_SCIENTIFIC );',
			'notes'	=> array(
				'<p>The code snippet is simplified for brevity. Please refer to the source of this file on <a href="http://github.com/jrfnl/PHP-cheat-sheet-extended" target="_blank">GitHub</a> for full details on how to use filter_var_array().</p>',
			),
		),



		'filter_var_int' =>	array(
			'title'	=>	'filter_var (&hellip;)',
			'tooltip'	=>	'filter_var( $x, FILTER_VALIDATE_INT )',
			'url'	=>	'http://php.net/filter_var',
			'arg'	=>	'$x',
			'function'	=>	'if ( function_exists( \'filter_var\' ) ) { $r = filter_var( $x, FILTER_VALIDATE_INT ); if ( is_int( $r ) ) { pr_int( $r ); } else { pr_var( $r, \'\', true, true ); } } else { print \'E: not available (PHP 5.2.0+)\'; }',
		),
		'filter_var_array_int' =>	array(
			'title'	=>	'filter_var_array (&hellip;)',
			'tooltip'	=>	'filter_var_array( $x, FILTER_VALIDATE_INT )',
			'url'	=>	'http://php.net/filter_var_array',
			'arg'	=>	'$x',
			'function'	=>	'if ( function_exists( \'filter_var_array\' ) ) { pr_var( filter_var_array( $x, FILTER_VALIDATE_INT ), \'\', true, true ); } else { print \'E: not available (PHP 5.2.0+)\'; }',
		),
		'filter_combined_int' =>	array(
			'title'	=>	'filter_var (&hellip;)',
			'tooltip'	=>	'
if( !is_array( $x ) ) {
	filter_var( $x, FILTER_VALIDATE_INT );
}
else {
	filter_var_array( $x, FILTER_VALIDATE_INT );
}
 			',
			'url'	=>	'http://php.net/filter_var',
			'arg'	=>	'$x',
			'function'	=>	'VartypeTest::filter_combined( $x, \'int\', FILTER_VALIDATE_INT );',
		),
		'filter_combined_int_null' =>	array(
			'title'	=>	'filter_var (&hellip;)',
			'tooltip'	=>	'
if( !is_array( $x ) ) {
	filter_var( $x, FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE );
}
else {
	filter_var_array( $x, FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE ); // = Simplified... see note
}
 			',
			'url'	=>	'http://php.net/filter_var',
			'arg'	=>	'$x',
			'function'	=>	'VartypeTest::filter_combined( $x, \'int\', FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE );',
			'notes'	=> array(
				'<p>The code snippet is simplified for brevity. Please refer to the source of this file on <a href="http://github.com/jrfnl/PHP-cheat-sheet-extended" target="_blank">GitHub</a> for full details on how to use filter_var_array().</p>',
			),
		),
		'filter_combined_int_null_min_max' =>	array(
			'title'	=>	'filter_var (&hellip;)',
			'tooltip'	=>	'
$options = array( \'min_range\' => 1, \'max_range\' => 50 );
if( !is_array( $x ) ) {
	filter_var( $x, FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE, $options );
}
else {
	filter_var_array( $x, FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE, $options ); // = Simplified... see note
}
 			',
			'url'	=>	'http://php.net/filter_var',
			'arg'	=>	'$x',
			'function'	=>	'$options = array( \'min_range\' => 1, \'max_range\' => 50 ); VartypeTest::filter_combined( $x, \'int\', FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE, $options );',
			'notes'	=> array(
				'<p>The code snippet is simplified for brevity. Please refer to the source of this file on <a href="http://github.com/jrfnl/PHP-cheat-sheet-extended" target="_blank">GitHub</a> for full details on how to use filter_var_array().</p>',
			),
		),

		'filter_combined_int_null_hex_octal' =>	array(
			'title'	=>	'filter_var (&hellip;)',
			'tooltip'	=>	'
if( !is_array( $x ) ) {
	filter_var( $x, FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE|FILTER_FLAG_ALLOW_HEX|FILTER_FLAG_ALLOW_OCTAL );
}
else {
	filter_var_array( $x, FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE|FILTER_FLAG_ALLOW_HEX|FILTER_FLAG_ALLOW_OCTAL ); // = Simplified... see note
}
 			',
			'url'	=>	'http://php.net/filter_var',
			'arg'	=>	'$x',
			'function'	=>	'VartypeTest::filter_combined( $x, \'int\', FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE|FILTER_FLAG_ALLOW_HEX|FILTER_FLAG_ALLOW_OCTAL );',
			'notes'	=> array(
				'<p>The code snippet is simplified for brevity. Please refer to the source of this file on <a href="http://github.com/jrfnl/PHP-cheat-sheet-extended" target="_blank">GitHub</a> for full details on how to use filter_var_array().</p>',
			),
		),
		
		'filter_combined_int_null_sanitize' =>	array(
			'title'	=>	'filter_var (&hellip;)',
			'tooltip'	=>	'
if( !is_array( $x ) ) {
	filter_var( $x, FILTER_SANITIZE_NUMBER_INT, FILTER_NULL_ON_FAILURE );
}
else {
	filter_var_array( $x, FILTER_SANITIZE_NUMBER_INT, FILTER_NULL_ON_FAILURE ); // = Simplified... see note
}
 			',
			'url'	=>	'http://php.net/filter_var',
			'arg'	=>	'$x',
			'function'	=>	'VartypeTest::filter_combined( $x, \'int\', FILTER_SANITIZE_NUMBER_INT, FILTER_NULL_ON_FAILURE );',
			'notes'	=> array(
				'<p>The code snippet is simplified for brevity. Please refer to the source of this file on <a href="http://github.com/jrfnl/PHP-cheat-sheet-extended" target="_blank">GitHub</a> for full details on how to use filter_var_array().</p>',
			),
		),


		'filter_var_string' =>	array(
			'title'	=>	'filter_var (&hellip;)',
			'tooltip'	=>	'filter_var( $x, FILTER_UNSAFE_RAW )',
			'url'	=>	'http://php.net/filter_var',
			'arg'	=>	'$x',
			'function'	=>	'if ( function_exists( \'filter_var\' ) ) { $r = filter_var( $x, FILTER_UNSAFE_RAW ); if ( is_string( $r ) ) { pr_str( $r ); } else { pr_var( $r, \'\', true, true ); } } else { print \'E: not available (PHP 5.2.0+)\'; }',
		),
		'filter_var_array_string' =>	array(
			'title'	=>	'filter_var_array (&hellip;)',
			'tooltip'	=>	'filter_var_array( $x, FILTER_UNSAFE_RAW )',
			'url'	=>	'http://php.net/filter_var_array',
			'arg'	=>	'$x',
			'function'	=>	'if ( function_exists( \'filter_var_array\' ) ) { pr_var( filter_var_array( $x, FILTER_UNSAFE_RAW ), \'\', true, true ); } else { print \'E: not available (PHP 5.2.0+)\'; }',
		),
		'filter_combined_string' =>	array(
			'title'	=>	'filter_var (&hellip;)',
			'tooltip'	=>	'
if( !is_array( $x ) ) {
	filter_var( $x, FILTER_UNSAFE_RAW );
}
else {
	filter_var_array( $x, FILTER_UNSAFE_RAW );
}
 			',
			'url'	=>	'http://php.net/filter_var',
			'arg'	=>	'$x',
			'function'	=>	'VartypeTest::filter_combined( $x, \'string\', FILTER_UNSAFE_RAW );',
		),
		'filter_combined_string_null' =>	array(
			'title'	=>	'filter_var (&hellip;)',
			'tooltip'	=>	'
if( !is_array( $x ) ) {
	filter_var( $x, FILTER_UNSAFE_RAW, FILTER_NULL_ON_FAILURE );
}
else {
	filter_var_array( $x, FILTER_UNSAFE_RAW, FILTER_NULL_ON_FAILURE ); // = Simplified... see note
}
 			',
			'url'	=>	'http://php.net/filter_var',
			'arg'	=>	'$x',
			'function'	=>	'VartypeTest::filter_combined( $x, \'string\', FILTER_UNSAFE_RAW, FILTER_NULL_ON_FAILURE );',
			'notes'	=> array(
				'<p>The code snippet is simplified for brevity. Please refer to the source of this file on <a href="http://github.com/jrfnl/PHP-cheat-sheet-extended" target="_blank">GitHub</a> for full details on how to use filter_var_array().</p>',
			),
		),
		

		'filter_combined_str_null_sanitize' =>	array(
			'title'	=>	'filter_var (&hellip;)',
			'tooltip'	=>	'
if( !is_array( $x ) ) {
	filter_var( $x, FILTER_SANITIZE_STRING, FILTER_NULL_ON_FAILURE );
}
else {
	filter_var_array( $x, FILTER_SANITIZE_STRING, FILTER_NULL_ON_FAILURE ); // = Simplified... see note
}
 			',
			'url'	=>	'http://php.net/filter_var',
			'arg'	=>	'$x',
			'function'	=>	'VartypeTest::filter_combined( $x, \'string\', FILTER_SANITIZE_STRING, FILTER_NULL_ON_FAILURE );',
			'notes'	=> array(
				'<p>The code snippet is simplified for brevity. Please refer to the source of this file on <a href="http://github.com/jrfnl/PHP-cheat-sheet-extended" target="_blank">GitHub</a> for full details on how to use filter_var_array().</p>',
			),
		),
		
		
		'filter_combined_str_null_sanitize_encode' =>	array(
			'title'	=>	'filter_var (&hellip;)',
			'tooltip'	=>	'
if( !is_array( $x ) ) {
	filter_var( $x, FILTER_SANITIZE_STRING, FILTER_NULL_ON_FAILURE|FILTER_FLAG_ENCODE_LOW|FILTER_FLAG_ENCODE_HIGH|FILTER_FLAG_ENCODE_AMP );
}
else {
	filter_var_array( $x, FILTER_SANITIZE_STRING, FILTER_NULL_ON_FAILURE|FILTER_FLAG_ENCODE_LOW|FILTER_FLAG_ENCODE_HIGH|FILTER_FLAG_ENCODE_AMP ); // = Simplified... see note
}
 			',
			'url'	=>	'http://php.net/filter_var',
			'arg'	=>	'$x',
			'function'	=>	'VartypeTest::filter_combined( $x, \'string\', FILTER_SANITIZE_STRING, FILTER_NULL_ON_FAILURE|FILTER_FLAG_ENCODE_LOW|FILTER_FLAG_ENCODE_HIGH|FILTER_FLAG_ENCODE_AMP );',
			'notes'	=> array(
				'<p>The code snippet is simplified for brevity. Please refer to the source of this file on <a href="http://github.com/jrfnl/PHP-cheat-sheet-extended" target="_blank">GitHub</a> for full details on how to use filter_var_array().</p>',
			),
		),
		
		'filter_combined_str_null_sanitize_strip' =>	array(
			'title'	=>	'filter_var (&hellip;)',
			'tooltip'	=>	'
if( !is_array( $x ) ) {
	filter_var( $x, FILTER_SANITIZE_STRING, FILTER_NULL_ON_FAILURE|FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH );
}
else {
	filter_var_array( $x, FILTER_SANITIZE_STRING, FILTER_NULL_ON_FAILURE|FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH ); // = Simplified... see note
}
 			',
			'url'	=>	'http://php.net/filter_var',
			'arg'	=>	'$x',
			'function'	=>	'VartypeTest::filter_combined( $x, \'string\', FILTER_SANITIZE_STRING, FILTER_NULL_ON_FAILURE|FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH );',
			'notes'	=> array(
				'<p>The code snippet is simplified for brevity. Please refer to the source of this file on <a href="http://github.com/jrfnl/PHP-cheat-sheet-extended" target="_blank">GitHub</a> for full details on how to use filter_var_array().</p>',
			),
		),
		
		'filter_combined_str_null_sanitize_special_chars' =>	array(
			'title'	=>	'filter_var (&hellip;)',
			'tooltip'	=>	'
if( !is_array( $x ) ) {
	filter_var( $x, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_NULL_ON_FAILURE );
}
else {
	filter_var_array( $x, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_NULL_ON_FAILURE ); // = Simplified... see note
}
 			',
			'url'	=>	'http://php.net/filter_var',
			'arg'	=>	'$x',
			'function'	=>	'VartypeTest::filter_combined( $x, \'string\', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_NULL_ON_FAILURE );',
			'notes'	=> array(
				'<p>The code snippet is simplified for brevity. Please refer to the source of this file on <a href="http://github.com/jrfnl/PHP-cheat-sheet-extended" target="_blank">GitHub</a> for full details on how to use filter_var_array().</p>',
			),
		),
		
		'filter_combined_str_null_sanitize_full_special_chars' =>	array(
			'title'	=>	'filter_var (&hellip;)',
			'tooltip'	=>	'
if( !is_array( $x ) ) {
	filter_var( $x, FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_NULL_ON_FAILURE );
}
else {
	filter_var_array( $x, FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_NULL_ON_FAILURE ); // = Simplified... see note
}
 			',
			'url'	=>	'http://php.net/filter_var',
			'arg'	=>	'$x',
			'function'	=>	'if( defined( \'FILTER_SANITIZE_FULL_SPECIAL_CHARS\' ) ) { VartypeTest::filter_combined( $x, \'string\', FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_NULL_ON_FAILURE ); } else { print \'E: not available (PHP 5.3.3+)\'; }',
			'notes'	=> array(
				'<p>The code snippet is simplified for brevity. Please refer to the source of this file on <a href="http://github.com/jrfnl/PHP-cheat-sheet-extended" target="_blank">GitHub</a> for full details on how to use filter_var_array().</p>',
			),
		),
		
//FILTER_SANITIZE_SPECIAL_CHARS
//FILTER_SANITIZE_FULL_SPECIAL_CHARS
//VartypeTest::filter_combined( $value, $expected = null, $filter = FILTER_DEFAULT, $flags = FILTER_FLAG_NONE, $options = null )

/*
FILTER_VALIDATE_FLOAT 	"float" 	decimal 	FILTER_FLAG_ALLOW_THOUSAND 	Validates value as float.
FILTER_VALIDATE_INT 	"int" 	min_range, max_range 	FILTER_FLAG_ALLOW_OCTAL, FILTER_FLAG_ALLOW_HEX 	Validates value as integer, optionally from the specified range.

FILTER_SANITIZE_NUMBER_FLOAT 	"number_float" 	  	FILTER_FLAG_ALLOW_FRACTION, FILTER_FLAG_ALLOW_THOUSAND, FILTER_FLAG_ALLOW_SCIENTIFIC 	Remove all characters except digits, +- and optionally .,eE.
FILTER_SANITIZE_NUMBER_INT 	"number_int" 	  	  	Remove all characters except digits, plus and minus sign. 

FILTER_SANITIZE_STRING 	"string" 	  	FILTER_FLAG_NO_ENCODE_QUOTES, FILTER_FLAG_STRIP_LOW, FILTER_FLAG_STRIP_HIGH, FILTER_FLAG_ENCODE_LOW, FILTER_FLAG_ENCODE_HIGH, FILTER_FLAG_ENCODE_AMP 	Strip tags, optionally strip or encode special characters.

FILTER_FLAG_STRIP_LOW 	FILTER_SANITIZE_ENCODED, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING, FILTER_UNSAFE_RAW 	Strips characters that has a numerical value <32.
FILTER_FLAG_STRIP_HIGH 	FILTER_SANITIZE_ENCODED, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING, FILTER_UNSAFE_RAW 	Strips characters that has a numerical value >127.
FILTER_FLAG_ALLOW_FRACTION 	FILTER_SANITIZE_NUMBER_FLOAT 	Allows a period (.) as a fractional separator in numbers.
FILTER_FLAG_ALLOW_THOUSAND 	FILTER_SANITIZE_NUMBER_FLOAT, FILTER_VALIDATE_FLOAT 	Allows a comma (,) as a thousands separator in numbers.
FILTER_FLAG_ALLOW_SCIENTIFIC 	FILTER_SANITIZE_NUMBER_FLOAT 	Allows an e or E for scientific notation in numbers.
FILTER_FLAG_NO_ENCODE_QUOTES 	FILTER_SANITIZE_STRING 	If this flag is present, single (') and double (") quotes will not be encoded.
FILTER_FLAG_ENCODE_LOW 	FILTER_SANITIZE_ENCODED, FILTER_SANITIZE_STRING, FILTER_SANITIZE_RAW 	Encodes all characters with a numerical value <32.
FILTER_FLAG_ENCODE_HIGH 	FILTER_SANITIZE_ENCODED, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING, FILTER_SANITIZE_RAW 	Encodes all characters with a numerical value >127.
FILTER_FLAG_ENCODE_AMP 	FILTER_SANITIZE_STRING, FILTER_SANITIZE_RAW 	Encodes ampersands (&).
FILTER_NULL_ON_FAILURE 	FILTER_VALIDATE_BOOLEAN 	Returns NULL for unrecognized boolean values.
FILTER_FLAG_ALLOW_OCTAL 	FILTER_VALIDATE_INT 	Regards inputs starting with a zero (0) as octal numbers. This only allows the succeeding digits to be 0-7.
FILTER_FLAG_ALLOW_HEX 	FILTER_VALIDATE_INT 	Regards inputs starting with 0x or 0X as hexadecimal numbers. This only allows succeeding characters to be a-fA-F0-9. 

*/




	);

	var $test_groups = array(


		'general'	=>	array(
			'title'	=>	'General typing',
			'tests'	=>	array(
				'gettype',
				'empty',
				'is_null',
				'isset',
				'bool',
				'if_var',
			),
			'break_at'	=>	array( 'gettype', 'if_var', ),
			'good'		=>	array(),
			'best'		=>	array(),
			'urls'		=>	array(),
			'book_url'	=>	'http://php.net/types.comparisons',
			'target'	=>	null,
		),
		
		'typetesting'	=>	array(
			'title'	=>	'is_&hellip;()',
			'tests'	=>	array(
				'gettype',

				'is_null',
				'is_scalar',
				'is_bool',
				'is_int',
				'is_float',
				'is_string',
				'is_array',
				'is_object',
				'is_resource',

//				'is_binary', //PHP6
				'is_callable',

				'is_numeric',

			),
			'break_at'	=>	array( 'gettype', 'is_resource', 'is_callable', 'is_numeric', ),
			'good'		=>	array(),
			'best'		=>	array(),
			'urls'		=>	array(),
			'book_url'	=>	'http://php.net/ref.var',
			'target'	=>	null,
		),
		


		
/*		'typecasting'	=>	array(
			'title'	=>	'Typecasting',
			'tests'	=>	array(
//				'gettype',
				'settype_null',
				'unset',
				'f_unset',

				'settype_bool',
				'bool',

				'settype_int',
				'int',
				'intval',
				'juggle_int',

				'settype_float',
				'float',
				'floatval',
				'juggle_flt',

				'settype_string',
				'string',
				'strval',
				'juggle_str',

				'settype_array',
				'array',

				'settype_object',
				'object',
			),
			'break_at'	=>	array( 'gettype', 'f_unset', 'bool', 'juggle_int', 'juggle_flt', 'juggle_str', 'array', 'object' ),
			'good'		=>	array(),
			'best'		=>	array(),
			'urls'		=>	array(),
			'book_url'	=>	'http://php.net/language.types.type-juggling',
			'target'	=>	null,
		),
*/

		
		'null'	=>	array(
			'title'	=>	'Null',
			'tests'	=>	array(
				'settype_null',
				'unset',
				'f_unset',
				'casttotype_null',

				'isset',
				'empty',

				'is_null',
				'null_cmp_loose',
				'null_cmp_strict',
				'null_cmp_loose_str',
				'null_cmp_strict_str',

/*				'null_cmp_rv_loose',
				'null_cmp_rv_strict',
				'null_cmp_rv_loose_str',
				'null_cmp_rv_strict_str',*/
			),
			'break_at'	=>	array( 'casttotype_null', 'empty', 'null_cmp_strict_str', 'null_cmp_rv_strict_str', ),
			'good'		=>	array( 'is_null', 'null_cmp_strict', 'null_cmp_rv_strict', ),
			'best'		=>	array( 'isset', ),
			'urls'		=>	array(),
			'book_url'	=>	'http://php.net/types.comparisons',
			'target'	=>	'n',
		),


		'bool'	=>	array(
			'title'	=>	'Boolean',
			'tests'	=>	array(
				'settype_bool',
				'bool',
				'filter_combined_bool',
				'filter_combined_bool_null',
				'casttotype_bool',
				'casttotype_bool_not_empty_recurse_arrays',

				'is_bool',

				'bool_cmp_true_loose',
				'bool_cmp_true_strict',
				'bool_cmp_true_loose_int',
//				'bool_cmp_true_strict_int',
				'bool_cmp_true_loose_str',
//				'bool_cmp_true_strict_str',

/*				'bool_cmp_rv_true_loose',
				'bool_cmp_rv_true_strict',
				'bool_cmp_rv_true_loose_int',
				'bool_cmp_rv_true_strict_int',
				'bool_cmp_rv_true_loose_str',
				'bool_cmp_rv_true_strict_str',*/

				'bool_cmp_false_loose',
				'bool_cmp_false_strict',
				'bool_cmp_false_loose_int',
//				'bool_cmp_false_strict_int',
				'bool_cmp_false_loose_str',
//				'bool_cmp_false_strict_str',

/*				'bool_cmp_rv_false_loose',
				'bool_cmp_rv_false_strict',
				'bool_cmp_rv_false_loose_int',
				'bool_cmp_rv_false_strict_int',
				'bool_cmp_rv_false_loose_str',
				'bool_cmp_rv_false_strict_str',*/

/*				'var',
				'not_var',*/
				'if_var',
				'if_not_var',

			),
			'break_at'	=>	array( 'casttotype_bool_not_empty_recurse_arrays', 'is_bool', 'bool_cmp_true_loose_str', 'bool_cmp_rv_true_strict_str', 'bool_cmp_false_loose_str', 'bool_cmp_rv_false_strict_str', 'if_not_var', ),
			'good'		=>	array( 'casttotype_bool', 'casttotype_bool_not_empty_recurse_arrays', 'filter_combined_bool_null', 'is_bool', 'bool_cmp_true_strict', 'bool_cmp_false_strict', ),
			'best'		=>	array(),
			'urls'		=>	array(),
			'book_url'	=>	'http://php.net/types.comparisons',
			'target'	=>	'b',
		),


		'integer'	=>	array(
			'title'	=>	'Integers',
			'tests'	=>	array(
				'settype_int',
				'int',
				'intval',
				'juggle_int',
				'filter_combined_int',
				'filter_combined_int_null',
				'casttotype_int',
				'casttotype_int_not_empty_recurse_arrays',

				'empty',
				'is_int',
				'ctype_digit',
				'preg_int_pos',
				'preg_int',
//				'preg_digit_pos',
//				'preg_digit',
/*				'is_numeric',

				'int_cmp_gt0',
				'int_cmp_gte0',
				'int_cmp_is0_loose',
				'int_cmp_is0_strict',
				'int_cmp_not0_loose',
				'int_cmp_not0_strict',
				'int_cmp_lt0',
				'int_cmp_lte0',
*/
			),
			'break_at'	=>	array( 'casttotype_int_not_empty_recurse_arrays', 'preg_int', 'is_numeric', 'int_cmp_lte0', ),
			'good'		=>	array( 'casttotype_int', 'casttotype_int_not_empty_recurse_arrays', 'filter_combined_int_null', 'is_int', ),
			'best'		=>	array(),
			'urls'		=>	array(),
			'book_url'	=>	'http://php.net/book.var',
			'target'	=>	'i',
		),

		

		'float'	=>	array(
			'title'	=>	'Floats',
			'tests'	=>	array(
				'settype_float',
				'float',
				'floatval',
				'juggle_flt',
				'filter_combined_float',
				'filter_combined_float_null',
				'casttotype_float',
				'casttotype_float_not_empty_recurse_arrays',

				'empty',
				'is_float',
				'ctype_digit',
				'preg_float_pos',
				'preg_float',
//				'preg_digit_float_pos',
//				'preg_digit_float',

/*				'is_numeric',
				'is_nan',
				'is_finite',
				'is_infinite',
*/
			),
			'break_at'	=>	array( 'casttotype_float_not_empty_recurse_arrays', 'preg_float', 'is_numeric', 'is_infinite', ),
			'good'		=>	array( 'casttotype_float', 'casttotype_float_not_empty_recurse_arrays', 'filter_combined_float_null', 'is_float', ),
			'best'		=>	array(),
			'urls'		=>	array(),
			'book_url'	=>	'http://php.net/book.var',
			'target'	=>	'f',
		),


		'numeric'	=>	array(
			'title'	=>	'Numeric tests',
			'tests'	=>	array(
				'is_numeric',

				'int_cmp_gt0',
				'int_cmp_gte0',
				'int_cmp_is0_loose',
				'int_cmp_is0_strict',
				'int_cmp_not0_loose',
				'int_cmp_not0_strict',
				'int_cmp_lt0',
				'int_cmp_lte0',

				'is_nan',
				'is_finite',
				'is_infinite',
				
				'floor',
				'ceil',
				'round',
			),
			'break_at'	=>	array( 'is_numeric', 'int_cmp_lte0', 'is_infinite', 'round', ),
			'good'		=>	array(),
			'best'		=>	array(),
			'urls'		=>	array(),
			'book_url'	=>	'http://php.net/book.var',
			'target'	=>	'',
		),


		'string1'	=>	array(
			'title'	=>	'String casting',
			'tests'	=>	array(
				'settype_string',
				'string',
				'strval',
				'juggle_str',
				'filter_combined_string',
				'filter_combined_string_null',
				'casttotype_string',
				'casttotype_string_not_empty_recurse_arrays',

			),
			'break_at'	=>	array( 'casttotype_string_not_empty_recurse_arrays', ),
			'good'		=>	array( 'casttotype_string', 'casttotype_string_not_empty_recurse_arrays', 'filter_combined_string_null', 'is_string', 'ctype_alpha', 'mb_strlen' ),
			'best'		=>	array(),
			'urls'		=>	array(),
			'book_url'	=>	'http://php.net/book.strings',
			'target'	=>	's',
		),


		'string2'	=>	array(
			'title'	=>	'String tests',
			'tests'	=>	array(
				'is_string',
				
				'empty',
				'str_cmp_empty_loose',
				'str_cmp_empty_strict',
//				'str_cmp_not_empty_loose',
//				'str_cmp_not_empty_strict',

				'ctype_alpha',
				'preg_alpha',
				'ctype_alnum',
				'preg_alnum',
				'preg_word',
//				'preg_word_utf8',

				'strlen',
				'count_chars',
				'mb_strlen',

			),
			'break_at'	=>	array( 'casttotype_string', 'is_string', 'str_cmp_empty_strict', 'preg_word', 'mb_strlen', ),
			'good'		=>	array( 'casttotype_string', 'filter_combined_string_null', 'is_string', 'ctype_alpha', 'mb_strlen' ),
			'best'		=>	array(),
			'urls'		=>	array(),
			'book_url'	=>	'http://php.net/book.strings',
			'target'	=>	's',
		),

		'array'	=>	array(
			'title'	=>	'Arrays',
			'tests'	=>	array(
				'settype_array',
				'array',
				'casttotype_array',
				'casttotype_array_not_empty',

				'is_array',
				'count',

				'empty',
				'count_mt_0',
				
				'isset_0',
				'array_key_exists',
				'isset_foo',
				
				'key',
				'current',
				'array_filter',

			),
			'break_at'	=>	array( 'casttotype_array_not_empty', 'count', 'count_mt_0', 'isset_foo', 'array_filter', ),
			'good'		=>	array( 'casttotype_array', 'casttotype_array_not_empty', 'is_array' ),
			'best'		=>	array(),
			'urls'		=>	array(),
			'book_url'	=>	'http://php.net/book.array',
			'target'	=>	'a',
		),


		'object'	=> array(
			'title'	=>	'Objects',
			'tests'	=>	array(
				'settype_object',
				'object',
				'casttotype_object',
				'casttotype_object_not_empty',
				
				'is_object',
				'is_a',
				'instanceof',

				'get_class',
				'get_parent_class',
				'is_subclass_of',

			),
			'break_at'	=>	array( 'casttotype_object', 'casttotype_object_not_empty', 'instanceof', 'is_subclass_of', ),
			'good'		=>	array( 'casttotype_object', 'casttotype_object_not_empty', 'is_object' ),
			'best'		=>	array(),
			'urls'		=>	array(),
			'book_url'	=>	'http://php.net/book.classobj',
			'target'	=>	'o',
		),


		'resources'	=> array(
			'title'	=>	'Resources',
			'tests'	=>	array(
				'is_resource',
				'get_resource_type',

			),
			'break_at'	=>	array( 'is_resource', 'get_resource_type', ),
			'good'		=>	array(),
			'best'		=>	array(),
			'urls'		=>	array(),
			'book_url'	=>	'',
			'target'	=>	'r',
		),


		'arithmetic'	=>	array(
			'title'	=>	'Arithmetic',
			'tests'	=>	array(
				'pre_increment',
				'post_increment',
				'pre_decrement',
				'post_decrement',

				'arithmetic_negate',
				'arithmetic_subtract',
				'arithmetic_multiply',
				'arithmetic_divide',
				'arithmetic_modulus',

			),
			'break_at'	=>	array( 'post_decrement', 'arithmetic_modulus', ),
			'good'		=>	array(),
			'best'		=>	array(),
			'urls'		=>	array(),
			'book_url'	=>	'http://php.net/language.operators.arithmetic',
			'target'	=>	'',
		),


		'ctype'	=>	array(
			'title'	=>	'ctype extension',
			'tests'	=>	array(
				'ctype_digit',
				'ctype_xdigit',

				'ctype_alpha',
				'ctype_alnum',
				'ctype_graph',
				'ctype_print',

				'ctype_lower',
				'ctype_upper',

				'ctype_cntrl',
				'ctype_punct',
				'ctype_space',
			),
			'break_at'	=>	array( 'ctype_xdigit', 'ctype_print', 'ctype_upper', 'ctype_space' ),
			'good'		=>	array(),
			'best'		=>	array(),
			'urls'		=>	array(),
			'book_url'	=>	'http://php.net/book.ctype',
			'target'	=>	's',
		),



		'filters' => array(
			'title'	=>	'filter extension',
			'tests'	=>	array(
				'filter_combined_bool_null',

				'filter_combined_int_null',
				'filter_combined_int_null_min_max',
				'filter_combined_int_null_hex_octal',
				'filter_combined_int_null_sanitize',

				'filter_combined_float_null',
				'filter_combined_flt_null_sanitize',
				'filter_combined_flt_null_sanitize_allowx3',

				'filter_combined_string_null',
				'filter_combined_str_null_sanitize',
				'filter_combined_str_null_sanitize_encode',
				'filter_combined_str_null_sanitize_strip',
				'filter_combined_str_null_sanitize_special_chars',
				'filter_combined_str_null_sanitize_full_special_chars',
			),
			'break_at'	=>	array( 'filter_combined_bool_null', 'filter_combined_int_null_sanitize', 'filter_combined_flt_null_sanitize_allowx3', 'filter_combined_str_null_sanitize_full_special_chars', ),
			'good'		=>	array(),
			'best'		=>	array(),
			'urls'		=>	array(),
			'book_url'	=>	'http://php.net/book.filter',
			'target'	=>	'',
		),


	);


	function __construct() {

		/**
		 * Adjust float regex tests to use the correct decimal point character
		 */
		// Try & get decimal point for use in float operations
		if ( !defined( 'DECIMAL_POINT' ) ) {
			if ( function_exists( 'nl_langinfo' ) && nl_langinfo( 'DECIMAL_POINT' ) !== false ) {
				define( 'DECIMAL_POINT', nl_langinfo( 'DECIMAL_POINT' ) );
			}
			else {
				$locale_info = localeconv();
				define( 'DECIMAL_POINT', $locale_info['decimal_point'] );
				unset( $locale_info );
			}
		}
		// Prep decimal point for use in regex
		$preg_point = ( ( defined( 'DECIMAL_POINT' ) ) ? preg_quote( DECIMAL_POINT, '`' ) : preg_quote( '.,', '`' ) );

		$targets = array(
			'preg_float_pos',
			'preg_float',
			'preg_digit_float_pos',
			'preg_digit_float',
		);
		foreach ( $targets as $target ) {
			foreach ( $this->tests[$target] as $key => $value ) {
				$this->tests[$target][$key] = str_replace( '##PREG_DECIMAL_POINT##', $preg_point, $value );
			}
		}
		unset( $preg_point );

		parent::__construct();
	}

	function VartypeTest() {
		$this->__construct();
	}


	static function filter_combined( $value, $expected = null, $filter = FILTER_DEFAULT, $flags = null, $options = null ) {
		
		if ( function_exists( 'filter_var' ) && function_exists( 'filter_var_array' ) ) {
			if ( !is_array( $value ) ) {
				$opt = array();
				if ( isset( $flags ) ) {
					$opt['flags']	=	$flags;
				}
				if ( isset( $options ) && ( is_array( $options ) && $options !== array() ) ) {
					$opt['options'] = $options;
				}

				if ( $opt !== array() ) {
					$r = filter_var( $value, $filter, $opt );
				}
				else {
					$r = filter_var( $value, $filter );
				}
				switch ( true ) {
					case( $expected === 'bool' && is_bool( $r ) ):
						pr_bool( $r );
						break;
					case( $expected === 'int' && is_int( $r ) ):
						pr_int( $r );
						break;
					case( $expected === 'float' && is_float( $r ) ):
						pr_flt( $r );
						break;
					case( $expected === 'string' && is_string( $r ) ):
						pr_str( $r );
						break;
					default:
						pr_var( $r, '', true, true );
						break;
				}
			}
			else {
				if ( !isset( $flags ) && !isset( $options ) ) {
					pr_var( filter_var_array( $value, $filter ), '', true, true );
				}
				else {
					$input = array( 'x' => $value );
					$filter_def = array(
						'x' => array(
							'filter' => $filter,
						),
					);
					if ( isset( $flags ) ) {
						$filter_def['x']['flags']	=	FILTER_REQUIRE_ARRAY|$flags;
					}
					if ( isset( $options ) && ( is_array( $options ) && $options !== array() ) ) {
						$filter_def['x']['options'] = $options;
					}
					$output = filter_var_array( $input, $filter_def );
					pr_var( $output['x'], '', true, true );
				}
			}
		}
		else {
			print 'E: not available (PHP 5.2.0+)';
		}
	}

}

?>