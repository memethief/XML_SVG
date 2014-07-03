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
 * @extends SVGTextContentElement
 */
interface SVGTextPositioningElement
	extends SVGTextContentElement
{
	/**
	 * read-only member
	 * @var SVGAnimatedLengthList x
	 */
	public $x;
	/**
	 * read-only member
	 * @var SVGAnimatedLengthList y
	 */
	public $y;
	/**
	 * read-only member
	 * @var SVGAnimatedLengthList dx
	 */
	public $dx;
	/**
	 * read-only member
	 * @var SVGAnimatedLengthList dy
	 */
	public $dy;
	/**
	 * read-only member
	 * @var SVGAnimatedNumberList rotate
	 */
	public $rotate;
}

