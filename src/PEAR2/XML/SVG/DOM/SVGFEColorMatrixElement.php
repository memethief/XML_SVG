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
interface SVGFEColorMatrixElement
	extends SVGElement,  SVGFilterPrimitiveStandardAttributes
{
// Color Matrix Types
	/**
	 * @const SVG_FECOLORMATRIX_TYPE_UNKNOWN
	 */
	public static final $SVG_FECOLORMATRIX_TYPE_UNKNOWN = 0;

	/**
	 * @const SVG_FECOLORMATRIX_TYPE_MATRIX
	 */
	public static final $SVG_FECOLORMATRIX_TYPE_MATRIX = 1;

	/**
	 * @const SVG_FECOLORMATRIX_TYPE_SATURATE
	 */
	public static final $SVG_FECOLORMATRIX_TYPE_SATURATE = 2;

	/**
	 * @const SVG_FECOLORMATRIX_TYPE_HUEROTATE
	 */
	public static final $SVG_FECOLORMATRIX_TYPE_HUEROTATE = 3;

	/**
	 * @const SVG_FECOLORMATRIX_TYPE_LUMINANCETOALPHA
	 */
	public static final $SVG_FECOLORMATRIX_TYPE_LUMINANCETOALPHA = 4;

	/**
	 * read-only member
	 * @var SVGAnimatedString in1
	 */
	public $in1;
	/**
	 * read-only member
	 * @var SVGAnimatedEnumeration type
	 */
	public $type;
	/**
	 * read-only member
	 * @var SVGAnimatedNumberList values
	 */
	public $values;
}

