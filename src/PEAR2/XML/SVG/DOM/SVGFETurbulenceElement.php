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
interface SVGFETurbulenceElement
	extends SVGElement,  SVGFilterPrimitiveStandardAttributes
{
// Turbulence Types
	/**
	 * @const SVG_TURBULENCE_TYPE_UNKNOWN
	 */
	public static final $SVG_TURBULENCE_TYPE_UNKNOWN = 0;

	/**
	 * @const SVG_TURBULENCE_TYPE_FRACTALNOISE
	 */
	public static final $SVG_TURBULENCE_TYPE_FRACTALNOISE = 1;

	/**
	 * @const SVG_TURBULENCE_TYPE_TURBULENCE
	 */
	public static final $SVG_TURBULENCE_TYPE_TURBULENCE = 2;

// Stitch Options
	/**
	 * @const SVG_STITCHTYPE_UNKNOWN
	 */
	public static final $SVG_STITCHTYPE_UNKNOWN = 0;

	/**
	 * @const SVG_STITCHTYPE_STITCH
	 */
	public static final $SVG_STITCHTYPE_STITCH = 1;

	/**
	 * @const SVG_STITCHTYPE_NOSTITCH
	 */
	public static final $SVG_STITCHTYPE_NOSTITCH = 2;

	/**
	 * read-only member
	 * @var SVGAnimatedNumber baseFrequencyX
	 */
	public $baseFrequencyX;
	/**
	 * read-only member
	 * @var SVGAnimatedNumber baseFrequencyY
	 */
	public $baseFrequencyY;
	/**
	 * read-only member
	 * @var SVGAnimatedInteger numOctaves
	 */
	public $numOctaves;
	/**
	 * read-only member
	 * @var SVGAnimatedNumber seed
	 */
	public $seed;
	/**
	 * read-only member
	 * @var SVGAnimatedEnumeration stitchTiles
	 */
	public $stitchTiles;
	/**
	 * read-only member
	 * @var SVGAnimatedEnumeration type
	 */
	public $type;
}

