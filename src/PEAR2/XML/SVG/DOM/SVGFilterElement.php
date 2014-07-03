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
 * @extends SVGUnitTypes
 * @extends SVGElement
 * @extends SVGURIReference
 * @extends SVGLangSpace
 */
interface SVGFilterElement
	extends SVGExternalResourcesRequired,  SVGStylable,  SVGUnitTypes,  SVGElement,  SVGURIReference,  SVGLangSpace
{
	/**
	 * read-only member
	 * @var SVGAnimatedEnumeration filterUnits
	 */
	public $filterUnits;
	/**
	 * read-only member
	 * @var SVGAnimatedEnumeration primitiveUnits
	 */
	public $primitiveUnits;
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
	 * @var SVGAnimatedInteger filterResX
	 */
	public $filterResX;
	/**
	 * read-only member
	 * @var SVGAnimatedInteger filterResY
	 */
	public $filterResY;
	/**
	 * @param unsigned long $filterResX
	 * @param unsigned long $filterResY
	 * @return void
	 * @throws DOMException
	 */
	public function setFilterRes($filterResX, $filterResY);

}

