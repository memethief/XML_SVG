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
 * The Path class corresponds to the ‘path’ element.
 *
 * @package XML_SVG
 */
class Path extends Element implements SVGDOM\SVGPathElement
{
	protected static $tag = 'path';
	private static $extra_attributes = array(
		'class',
		'style',
		'externalResourcesRequired',
		'transform',
		'd',
		'pathLength',
	);

	public static function getNew($d='') {
		$path = parent::getNew();
		$path->d = $d;
		return $path;
	}

    function setShape($d)
    {
		$this->setAttribute('d', $d);
		// $this->_d = $d;
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
