<?php
/**
 * W3C DOM-compliant SVG package
 *
 * DOM compliance is currently in progress. For details on the SVG DOM see:
 * @link{http://www.w3.org/TR/SVG/svgdom.html}
 * The definition for this interface is at:
 * @link{http://www.w3.org/TR/SVG/types.html#InterfaceSVGElement}
 *
 * @category XML
 * @author  David Leaman <david@davidleaman.ca>
 * @package PEAR2_XML_SVG
 * @license http://www.fsf.org/copyleft/lgpl.html
 */
namespace PEAR2\XML\SVG;
use PEAR2\XML\SVG\DOM as SVGDOM;

/**
 * The Group class corresponds to the ‘g’ element.
 *
 * @package XML_SVG
 */
class Group extends Element implements SVGDOM\SVGGroupElement 
{
	protected static $tag = "g";
	private static $extra_attributes = array(
		'class',
		'style',
		'externalResourcesRequired',
		'transform',
	);

	public static function getNew($x=false, $y=false, $marginx=0, $marginy=false) {
		$group = parent::getNew();
		$group->marginx = $marginx;
		$group->marginy = ($marginy === false) ? $marginx : $marginy;
		if (($x !== false) || ($y !== false)) {
			$group->{'right-of'} = $x;
			$group->{'below-of'} = $y;
			//$group->transform = "translate({$group->x}, {$group->y})";
		}
		return $group;
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

			/*
	public function __set($attribute, $value) {
		switch ($attribute) {
		case 'transform' :
			if ($value === true) {
				$this->dynamic['transform'] = true;
			} else {
				unset($this->transform);
			}
			break;
		default :
			parent::__set($attribute, $value);
			break;
		}
	}

	public function __unset($attribute) {
		switch ($attribute) {
		case 'transform' :
			unset($this->transform);
			break;
		default :
			parent::__unset($attribute);
			break;
		}
	}
			 */
}

