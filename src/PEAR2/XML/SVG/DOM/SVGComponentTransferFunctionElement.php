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
 */
interface SVGComponentTransferFunctionElement
	extends SVGElement
{
// Component Transfer Types
	/**
	 * @const SVG_FECOMPONENTTRANSFER_TYPE_UNKNOWN
	 */
	public static final $SVG_FECOMPONENTTRANSFER_TYPE_UNKNOWN = 0;

	/**
	 * @const SVG_FECOMPONENTTRANSFER_TYPE_IDENTITY
	 */
	public static final $SVG_FECOMPONENTTRANSFER_TYPE_IDENTITY = 1;

	/**
	 * @const SVG_FECOMPONENTTRANSFER_TYPE_TABLE
	 */
	public static final $SVG_FECOMPONENTTRANSFER_TYPE_TABLE = 2;

	/**
	 * @const SVG_FECOMPONENTTRANSFER_TYPE_DISCRETE
	 */
	public static final $SVG_FECOMPONENTTRANSFER_TYPE_DISCRETE = 3;

	/**
	 * @const SVG_FECOMPONENTTRANSFER_TYPE_LINEAR
	 */
	public static final $SVG_FECOMPONENTTRANSFER_TYPE_LINEAR = 4;

	/**
	 * @const SVG_FECOMPONENTTRANSFER_TYPE_GAMMA
	 */
	public static final $SVG_FECOMPONENTTRANSFER_TYPE_GAMMA = 5;

	/**
	 * read-only member
	 * @var SVGAnimatedEnumeration type
	 */
	public $type;
	/**
	 * read-only member
	 * @var SVGAnimatedNumberList tableValues
	 */
	public $tableValues;
	/**
	 * read-only member
	 * @var SVGAnimatedNumber slope
	 */
	public $slope;
	/**
	 * read-only member
	 * @var SVGAnimatedNumber intercept
	 */
	public $intercept;
	/**
	 * read-only member
	 * @var SVGAnimatedNumber amplitude
	 */
	public $amplitude;
	/**
	 * read-only member
	 * @var SVGAnimatedNumber exponent
	 */
	public $exponent;
	/**
	 * read-only member
	 * @var SVGAnimatedNumber offset
	 */
	public $offset;
}

