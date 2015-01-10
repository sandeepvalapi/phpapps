<?php

/**
 * Assets static helper
 * 
 * @author volter9
 * @author QsmaPL
 * @date 27th November, 2014
 */

class Assets {
	
	/**
	 * @var array Asset templates
	 */
	protected static $templates = array (
		'js'  => '<script src="%s" type="text/javascript"></script>',
		'css' => '<link href="%s" rel="stylesheet" type="text/css">'
	);
	
	/**
	 * Common templates for assets.
	 *
	 * @param string|array $files
	 * @param string       $template
	 */
	public static function resource ($files, $template) {
		$template = Assets::$templates[$template];
		
		if (is_array($files)) {

			foreach ($files as $file) {
				echo sprintf($template, $file) . "\n";
			}

		} else {
			echo sprintf($template, $files) . "\n";
		}
	}
	
	/**
	 * Output script
	 * 
	 * @param array|string $file
	 */
	public static function js ($files) {
		Assets::resource($files, 'js');
	}
	
	/**
	 * Output stylesheet
	 * 
	 * @param string $file
	 */
	public static function css ($files) {
		Assets::resource($files, 'css');
	}

}