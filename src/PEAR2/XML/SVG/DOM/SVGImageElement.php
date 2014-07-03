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
 * @extends SVGLangSpace
 * @extends SVGExternalResourcesRequired
 * @extends SVGStylable
 * @extends SVGTransformable
 * @extends SVGElement
 * @extends SVGURIReference
 * @extends SVGTests
 */
interface SVGImageElement
	extends SVGLangSpace,  SVGExternalResourcesRequired,  SVGStylable,  SVGTransformable,  SVGElement,  SVGURIReference,  SVGTests
{
	/**
	 * read-only member
	 * @var SVGAnimatedLength x
	 */
	public $x;
	/**
	 * read-only member
	 * @var SVGAnimatedLength y
	 */
	public $y;
	/**
	 * read-only member
	 * @var SVGAnimatedLength width
	 */
	public $width;
	/**
	 * read-only member
	 * @var SVGAnimatedLength height
	 */
	public $height;
	/**
	 * read-only member
	 * @var SVGAnimatedPreserveAspectRatio preserveAspectRatio
	 */
	public $preserveAspectRatio;
}

