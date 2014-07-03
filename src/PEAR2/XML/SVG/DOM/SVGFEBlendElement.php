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
 * @extends SVGElement
 * @extends SVGFilterPrimitiveStandardAttributes
 */
interface SVGFEBlendElement
	extends SVGElement,  SVGFilterPrimitiveStandardAttributes
{
// Blend Mode Types
	/**
	 * @const SVG_FEBLEND_MODE_UNKNOWN
	 */
	public static final $SVG_FEBLEND_MODE_UNKNOWN = 0;

	/**
	 * @const SVG_FEBLEND_MODE_NORMAL
	 */
	public static final $SVG_FEBLEND_MODE_NORMAL = 1;

	/**
	 * @const SVG_FEBLEND_MODE_MULTIPLY
	 */
	public static final $SVG_FEBLEND_MODE_MULTIPLY = 2;

	/**
	 * @const SVG_FEBLEND_MODE_SCREEN
	 */
	public static final $SVG_FEBLEND_MODE_SCREEN = 3;

	/**
	 * @const SVG_FEBLEND_MODE_DARKEN
	 */
	public static final $SVG_FEBLEND_MODE_DARKEN = 4;

	/**
	 * @const SVG_FEBLEND_MODE_LIGHTEN
	 */
	public static final $SVG_FEBLEND_MODE_LIGHTEN = 5;

	/**
	 * read-only member
	 * @var SVGAnimatedString in1
	 */
	public $in1;
	/**
	 * read-only member
	 * @var SVGAnimatedString in2
	 */
	public $in2;
	/**
	 * read-only member
	 * @var SVGAnimatedEnumeration mode
	 */
	public $mode;
}

