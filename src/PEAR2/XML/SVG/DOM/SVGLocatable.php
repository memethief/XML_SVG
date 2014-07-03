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
 */
interface SVGLocatable
{
	/**
	 * read-only member
	 * @var SVGElement nearestViewportElement
	 */
	public $nearestViewportElement;
	/**
	 * read-only member
	 * @var SVGElement farthestViewportElement
	 */
	public $farthestViewportElement;
	/**
	 * @return SVGRect
	 */
	public function getBBox();

	/**
	 * @return SVGMatrix
	 */
	public function getCTM();

	/**
	 * @return SVGMatrix
	 */
	public function getScreenCTM();

	/**
	 * @param SVGElement $element
	 * @return SVGMatrix
	 * @throws SVGException
	 */
	public function getTransformToElement(SVGElement $element);

}

