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
 * @extends SVGZoomAndPan
 * @extends SVGFitToViewBox
 */
interface SVGViewSpec
	extends SVGZoomAndPan,  SVGFitToViewBox
{
	/**
	 * read-only member
	 * @var SVGTransformList transform
	 */
	public $transform;
	/**
	 * read-only member
	 * @var SVGElement viewTarget
	 */
	public $viewTarget;
	/**
	 * read-only member
	 * @var DOMString viewBoxString
	 */
	public $viewBoxString;
	/**
	 * read-only member
	 * @var DOMString preserveAspectRatioString
	 */
	public $preserveAspectRatioString;
	/**
	 * read-only member
	 * @var DOMString transformString
	 */
	public $transformString;
	/**
	 * read-only member
	 * @var DOMString viewTargetString
	 */
	public $viewTargetString;
}

