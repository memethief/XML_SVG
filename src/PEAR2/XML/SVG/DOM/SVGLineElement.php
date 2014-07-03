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
 * @extends SVGExternalResourcesRequired
 * @extends SVGStylable
 * @extends SVGTransformable
 * @extends SVGElement
 * @extends SVGTests
 * @extends SVGLangSpace
 */
interface SVGLineElement
	extends SVGExternalResourcesRequired,  SVGStylable,  SVGTransformable,  SVGElement,  SVGTests,  SVGLangSpace
{
	/**
	 * read-only member
	 * @var SVGAnimatedLength x1
	 */
	public $x1;
	/**
	 * read-only member
	 * @var SVGAnimatedLength y1
	 */
	public $y1;
	/**
	 * read-only member
	 * @var SVGAnimatedLength x2
	 */
	public $x2;
	/**
	 * read-only member
	 * @var SVGAnimatedLength y2
	 */
	public $y2;
}

