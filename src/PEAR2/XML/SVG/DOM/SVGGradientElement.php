<?php
/**
 * W3C DOM-compliant SVG package
 * 
 * DOM compliance is currently in progress.
 * For details on the SVG DOM see:
 * @link{http://www.w3.org/TR/SVG/svgdom.html}
 * 
 * @category XML
 * @author  David Leaman <david@davidleaman.ca>
 * @package PEAR2_XML_SVG
 * @license http://www.fsf.org/copyleft/lgpl.html
 */
namespace PEAR2\XML\SVG\DOM;

/**
 * @extends SVGStylable
 * @extends SVGUnitTypes
 * @extends SVGElement
 * @extends SVGURIReference
 * @extends SVGExternalResourcesRequired
 */
interface SVGGradientElement
	extends SVGStylable,  SVGUnitTypes,  SVGElement,  SVGURIReference,  SVGExternalResourcesRequired
{
// Spread Method Types
	/**
	 * @const SVG_SPREADMETHOD_UNKNOWN
	 */
	public static final $SVG_SPREADMETHOD_UNKNOWN = 0;

	/**
	 * @const SVG_SPREADMETHOD_PAD
	 */
	public static final $SVG_SPREADMETHOD_PAD = 1;

	/**
	 * @const SVG_SPREADMETHOD_REFLECT
	 */
	public static final $SVG_SPREADMETHOD_REFLECT = 2;

	/**
	 * @const SVG_SPREADMETHOD_REPEAT
	 */
	public static final $SVG_SPREADMETHOD_REPEAT = 3;

	/**
	 * read-only member
	 * @var SVGAnimatedEnumeration gradientUnits
	 */
	public $gradientUnits;
	/**
	 * read-only member
	 * @var SVGAnimatedTransformList gradientTransform
	 */
	public $gradientTransform;
	/**
	 * read-only member
	 * @var SVGAnimatedEnumeration spreadMethod
	 */
	public $spreadMethod;
}

