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
interface SVGFEDisplacementMapElement
	extends SVGElement,  SVGFilterPrimitiveStandardAttributes
{
// Channel Selectors
	/**
	 * @const SVG_CHANNEL_UNKNOWN
	 */
	public static final $SVG_CHANNEL_UNKNOWN = 0;

	/**
	 * @const SVG_CHANNEL_R
	 */
	public static final $SVG_CHANNEL_R = 1;

	/**
	 * @const SVG_CHANNEL_G
	 */
	public static final $SVG_CHANNEL_G = 2;

	/**
	 * @const SVG_CHANNEL_B
	 */
	public static final $SVG_CHANNEL_B = 3;

	/**
	 * @const SVG_CHANNEL_A
	 */
	public static final $SVG_CHANNEL_A = 4;

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
	 * @var SVGAnimatedNumber scale
	 */
	public $scale;
	/**
	 * read-only member
	 * @var SVGAnimatedEnumeration xChannelSelector
	 */
	public $xChannelSelector;
	/**
	 * read-only member
	 * @var SVGAnimatedEnumeration yChannelSelector
	 */
	public $yChannelSelector;
}

