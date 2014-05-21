<?php
/**
 * Package for building SVG graphics.
 *
 * Copyright 2002-2007 The Horde Project (http://www.horde.org/)
 *
 * @author  Chuck Hagenbuch <chuck@horde.org>
 * @package XML_SVG
 * @license http://www.fsf.org/copyleft/lgpl.html
 */
require_once 'XML/SVG/Element.php';

/**
 * XML_SVG_Rect
 *
 * @package XML_SVG
 */
class XML_SVG_Rect extends XML_SVG_Element 
{
	protected static $tag = 'rect';
	private static $extra_attributes = array(
		'class',
		'style',
		'externalResourcesRequired',
		'transform',
		'x',
		'y',
		'width',
		'height',
		'rx',
		'ry',
	);

	public static function getNew($x=false, $y=false, $w=false, $h=false) {
		$rect = parent::getNew();
		$rect->x = $x;
		$rect->y = $y;
		$rect->width = $w;
		$rect->height = $h;
		return $rect;
		/*
		return parent::getNew();
		 */
	}

	protected function initialize() {
		return;
		list($x, $y, $height, $width) = func_get_args();
		$this->x = $x;
		$this->y = $y;
		$this->height = $height;
		$this->width = $width;
		return $this;
	}

	protected static function getAttributes() {
		return array_merge(
			static::$ATTR_CONDITIONAL_PROCESSING,
			static::$ATTR_CORE,
			static::$ATTR_GRAPHICAL_EVENT,
			static::$ATTR_PRESENTATION,
			static::$extra_attributes
		);
	}
}

