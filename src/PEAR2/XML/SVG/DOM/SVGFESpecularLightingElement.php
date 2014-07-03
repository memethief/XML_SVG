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
interface SVGFESpecularLightingElement
	extends SVGElement,  SVGFilterPrimitiveStandardAttributes
{
	/**
	 * read-only member
	 * @var SVGAnimatedString in1
	 */
	public $in1;
	/**
	 * read-only member
	 * @var SVGAnimatedNumber surfaceScale
	 */
	public $surfaceScale;
	/**
	 * read-only member
	 * @var SVGAnimatedNumber specularConstant
	 */
	public $specularConstant;
	/**
	 * read-only member
	 * @var SVGAnimatedNumber specularExponent
	 */
	public $specularExponent;
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
}

