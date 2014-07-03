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
interface SVGFESpotLightElement
	extends SVGElement
{
	/**
	 * read-only member
	 * @var SVGAnimatedNumber x
	 */
	public $x;
	/**
	 * read-only member
	 * @var SVGAnimatedNumber y
	 */
	public $y;
	/**
	 * read-only member
	 * @var SVGAnimatedNumber z
	 */
	public $z;
	/**
	 * read-only member
	 * @var SVGAnimatedNumber pointsAtX
	 */
	public $pointsAtX;
	/**
	 * read-only member
	 * @var SVGAnimatedNumber pointsAtY
	 */
	public $pointsAtY;
	/**
	 * read-only member
	 * @var SVGAnimatedNumber pointsAtZ
	 */
	public $pointsAtZ;
	/**
	 * read-only member
	 * @var SVGAnimatedNumber specularExponent
	 */
	public $specularExponent;
	/**
	 * read-only member
	 * @var SVGAnimatedNumber limitingConeAngle
	 */
	public $limitingConeAngle;
}

