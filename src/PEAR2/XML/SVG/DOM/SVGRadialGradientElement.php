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
 * @extends SVGGradientElement
 */
interface SVGRadialGradientElement
	extends SVGGradientElement
{
	/**
	 * read-only member
	 * @var SVGAnimatedLength cx
	 */
	public $cx;
	/**
	 * read-only member
	 * @var SVGAnimatedLength cy
	 */
	public $cy;
	/**
	 * read-only member
	 * @var SVGAnimatedLength r
	 */
	public $r;
	/**
	 * read-only member
	 * @var SVGAnimatedLength fx
	 */
	public $fx;
	/**
	 * read-only member
	 * @var SVGAnimatedLength fy
	 */
	public $fy;
}

