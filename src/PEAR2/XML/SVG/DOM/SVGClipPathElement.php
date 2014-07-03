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
 * @extends SVGUnitTypes
 * @extends SVGElement
 * @extends SVGTests
 * @extends SVGLangSpace
 */
interface SVGClipPathElement
	extends SVGExternalResourcesRequired,  SVGStylable,  SVGTransformable,  SVGUnitTypes,  SVGElement,  SVGTests,  SVGLangSpace
{
	/**
	 * read-only member
	 * @var SVGAnimatedEnumeration clipPathUnits
	 */
	public $clipPathUnits;
}

