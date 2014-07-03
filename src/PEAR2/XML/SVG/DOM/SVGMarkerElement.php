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
 * @extends SVGStylable
 * @extends SVGFitToViewBox
 * @extends SVGElement
 * @extends SVGLangSpace
 * @extends SVGExternalResourcesRequired
 */
interface SVGMarkerElement
	extends SVGStylable,  SVGFitToViewBox,  SVGElement,  SVGLangSpace,  SVGExternalResourcesRequired
{
// Marker Unit Types
	/**
	 * @const SVG_MARKERUNITS_UNKNOWN
	 */
	public static final $SVG_MARKERUNITS_UNKNOWN = 0;

	/**
	 * @const SVG_MARKERUNITS_USERSPACEONUSE
	 */
	public static final $SVG_MARKERUNITS_USERSPACEONUSE = 1;

	/**
	 * @const SVG_MARKERUNITS_STROKEWIDTH
	 */
	public static final $SVG_MARKERUNITS_STROKEWIDTH = 2;

// Marker Orientation Types
	/**
	 * @const SVG_MARKER_ORIENT_UNKNOWN
	 */
	public static final $SVG_MARKER_ORIENT_UNKNOWN = 0;

	/**
	 * @const SVG_MARKER_ORIENT_AUTO
	 */
	public static final $SVG_MARKER_ORIENT_AUTO = 1;

	/**
	 * @const SVG_MARKER_ORIENT_ANGLE
	 */
	public static final $SVG_MARKER_ORIENT_ANGLE = 2;

	/**
	 * read-only member
	 * @var SVGAnimatedLength refX
	 */
	public $refX;
	/**
	 * read-only member
	 * @var SVGAnimatedLength refY
	 */
	public $refY;
	/**
	 * read-only member
	 * @var SVGAnimatedEnumeration markerUnits
	 */
	public $markerUnits;
	/**
	 * read-only member
	 * @var SVGAnimatedLength markerWidth
	 */
	public $markerWidth;
	/**
	 * read-only member
	 * @var SVGAnimatedLength markerHeight
	 */
	public $markerHeight;
	/**
	 * read-only member
	 * @var SVGAnimatedEnumeration orientType
	 */
	public $orientType;
	/**
	 * read-only member
	 * @var SVGAnimatedAngle orientAngle
	 */
	public $orientAngle;
	/**
	 * @return void
	 * @throws DOMException
	 */
	public function setOrientToAuto();

	/**
	 * @param SVGAngle $angle
	 * @return void
	 * @throws DOMException
	 */
	public function setOrientToAngle(SVGAngle $angle);

}

