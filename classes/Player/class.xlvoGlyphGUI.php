<?php
require_once('./Services/UIComponent/Glyph/classes/class.ilGlyphGUI.php');

/**
 * Class xlvoGlyphGUI
 *
 * @author Fabian Schmid <fs@studer-raimann.ch>
 */
class xlvoGlyphGUI extends ilGlyphGUI {

	/**
	 * Get glyph html
	 *
	 * @param string $a_glyph glyph constant
	 * @param string $a_text text representation
	 * @return string html
	 */
	static function get($a_glyph, $a_text = "") {
		if (!isset(self::$map[$a_glyph])) {
			self::$map[$a_glyph]['class'] = 'glyphicon glyphicon-' . $a_glyph;
		}
		return parent::get($a_glyph, $a_text);
	}
}
