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
interface SVGFEMorphologyElement
	extends SVGElement,  SVGFilterPrimitiveStandardAttributes
{
// Morphology Operators
	/**
	 * @const SVG_MORPHOLOGY_OPERATOR_UNKNOWN
	 */
	public static final $SVG_MORPHOLOGY_OPERATOR_UNKNOWN = 0;

	/**
	 * @const SVG_MORPHOLOGY_OPERATOR_ERODE
	 */
	public static final $SVG_MORPHOLOGY_OPERATOR_ERODE = 1;

	/**
	 * @const SVG_MORPHOLOGY_OPERATOR_DILATE
	 */
	public static final $SVG_MORPHOLOGY_OPERATOR_DILATE = 2;

	/**
	 * read-only member
	 * @var SVGAnimatedString in1
	 */
	public $in1;
	/**
	 * read-only member
	 * @var SVGAnimatedEnumeration operator
	 */
	public $operator;
	/**
	 * read-only member
	 * @var SVGAnimatedNumber radiusX
	 */
	public $radiusX;
	/**
	 * read-only member
	 * @var SVGAnimatedNumber radiusY
	 */
	public $radiusY;
}

