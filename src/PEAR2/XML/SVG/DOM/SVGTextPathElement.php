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
 * @extends SVGURIReference
 */
interface SVGTextPathElement
	extends SVGTextContentElement,  SVGURIReference
{
// textPath Method Types
	/**
	 * @const TEXTPATH_METHODTYPE_UNKNOWN
	 */
	public static final $TEXTPATH_METHODTYPE_UNKNOWN = 0;

	/**
	 * @const TEXTPATH_METHODTYPE_ALIGN
	 */
	public static final $TEXTPATH_METHODTYPE_ALIGN = 1;

	/**
	 * @const TEXTPATH_METHODTYPE_STRETCH
	 */
	public static final $TEXTPATH_METHODTYPE_STRETCH = 2;

// textPath Spacing Types
	/**
	 * @const TEXTPATH_SPACINGTYPE_UNKNOWN
	 */
	public static final $TEXTPATH_SPACINGTYPE_UNKNOWN = 0;

	/**
	 * @const TEXTPATH_SPACINGTYPE_AUTO
	 */
	public static final $TEXTPATH_SPACINGTYPE_AUTO = 1;

	/**
	 * @const TEXTPATH_SPACINGTYPE_EXACT
	 */
	public static final $TEXTPATH_SPACINGTYPE_EXACT = 2;

	/**
	 * read-only member
	 * @var SVGAnimatedLength startOffset
	 */
	public $startOffset;
	/**
	 * read-only member
	 * @var SVGAnimatedEnumeration method
	 */
	public $method;
	/**
	 * read-only member
	 * @var SVGAnimatedEnumeration spacing
	 */
	public $spacing;
}

