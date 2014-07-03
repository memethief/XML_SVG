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
interface SVGFECompositeElement
	extends SVGElement,  SVGFilterPrimitiveStandardAttributes
{
// Composite Operators
	/**
	 * @const SVG_FECOMPOSITE_OPERATOR_UNKNOWN
	 */
	public static final $SVG_FECOMPOSITE_OPERATOR_UNKNOWN = 0;

	/**
	 * @const SVG_FECOMPOSITE_OPERATOR_OVER
	 */
	public static final $SVG_FECOMPOSITE_OPERATOR_OVER = 1;

	/**
	 * @const SVG_FECOMPOSITE_OPERATOR_IN
	 */
	public static final $SVG_FECOMPOSITE_OPERATOR_IN = 2;

	/**
	 * @const SVG_FECOMPOSITE_OPERATOR_OUT
	 */
	public static final $SVG_FECOMPOSITE_OPERATOR_OUT = 3;

	/**
	 * @const SVG_FECOMPOSITE_OPERATOR_ATOP
	 */
	public static final $SVG_FECOMPOSITE_OPERATOR_ATOP = 4;

	/**
	 * @const SVG_FECOMPOSITE_OPERATOR_XOR
	 */
	public static final $SVG_FECOMPOSITE_OPERATOR_XOR = 5;

	/**
	 * @const SVG_FECOMPOSITE_OPERATOR_ARITHMETIC
	 */
	public static final $SVG_FECOMPOSITE_OPERATOR_ARITHMETIC = 6;

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
	 * @var SVGAnimatedEnumeration operator
	 */
	public $operator;
	/**
	 * read-only member
	 * @var SVGAnimatedNumber k1
	 */
	public $k1;
	/**
	 * read-only member
	 * @var SVGAnimatedNumber k2
	 */
	public $k2;
	/**
	 * read-only member
	 * @var SVGAnimatedNumber k3
	 */
	public $k3;
	/**
	 * read-only member
	 * @var SVGAnimatedNumber k4
	 */
	public $k4;
}

