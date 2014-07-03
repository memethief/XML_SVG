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
interface SVGFEConvolveMatrixElement
	extends SVGElement,  SVGFilterPrimitiveStandardAttributes
{
// Edge Mode Values
	/**
	 * @const SVG_EDGEMODE_UNKNOWN
	 */
	public static final $SVG_EDGEMODE_UNKNOWN = 0;

	/**
	 * @const SVG_EDGEMODE_DUPLICATE
	 */
	public static final $SVG_EDGEMODE_DUPLICATE = 1;

	/**
	 * @const SVG_EDGEMODE_WRAP
	 */
	public static final $SVG_EDGEMODE_WRAP = 2;

	/**
	 * @const SVG_EDGEMODE_NONE
	 */
	public static final $SVG_EDGEMODE_NONE = 3;

	/**
	 * read-only member
	 * @var SVGAnimatedString in1
	 */
	public $in1;
	/**
	 * read-only member
	 * @var SVGAnimatedInteger orderX
	 */
	public $orderX;
	/**
	 * read-only member
	 * @var SVGAnimatedInteger orderY
	 */
	public $orderY;
	/**
	 * read-only member
	 * @var SVGAnimatedNumberList kernelMatrix
	 */
	public $kernelMatrix;
	/**
	 * read-only member
	 * @var SVGAnimatedNumber divisor
	 */
	public $divisor;
	/**
	 * read-only member
	 * @var SVGAnimatedNumber bias
	 */
	public $bias;
	/**
	 * read-only member
	 * @var SVGAnimatedInteger targetX
	 */
	public $targetX;
	/**
	 * read-only member
	 * @var SVGAnimatedInteger targetY
	 */
	public $targetY;
	/**
	 * read-only member
	 * @var SVGAnimatedEnumeration edgeMode
	 */
	public $edgeMode;
	/**
	 * read-only member
	 * @var SVGAnimatedNumber kernelUnitLengthX
	 */
	public $kernelUnitLengthX;
	/**
	 * read-only member
	 * @var SVGAnimatedNumber kernelUnitLengthY
	 */
	public $kernelUnitLengthY;
	/**
	 * read-only member
	 * @var SVGAnimatedBoolean preserveAlpha
	 */
	public $preserveAlpha;
}

