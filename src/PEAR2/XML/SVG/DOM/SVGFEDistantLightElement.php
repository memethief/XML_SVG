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
interface SVGFEDistantLightElement
	extends SVGElement
{
	/**
	 * read-only member
	 * @var SVGAnimatedNumber azimuth
	 */
	public $azimuth;
	/**
	 * read-only member
	 * @var SVGAnimatedNumber elevation
	 */
	public $elevation;
}

