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
 * @extends ElementTimeControl
 * @extends SVGElement
 * @extends SVGTests
 * @extends SVGExternalResourcesRequired
 */
interface SVGAnimationElement
	extends ElementTimeControl,  SVGElement,  SVGTests,  SVGExternalResourcesRequired
{
	/**
	 * read-only member
	 * @var SVGElement targetElement
	 */
	public $targetElement;
	/**
	 * @return float
	 * @throws DOMException
	 */
	public function getStartTime();

	/**
	 * @return float
	 */
	public function getCurrentTime();

	/**
	 * @return float
	 * @throws DOMException
	 */
	public function getSimpleDuration();

}

