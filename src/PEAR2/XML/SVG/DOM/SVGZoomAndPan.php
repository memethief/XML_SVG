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
interface SVGZoomAndPan
{
// Zoom and Pan Types
	/**
	 * @const SVG_ZOOMANDPAN_UNKNOWN
	 */
	public static final $SVG_ZOOMANDPAN_UNKNOWN = 0;

	/**
	 * @const SVG_ZOOMANDPAN_DISABLE
	 */
	public static final $SVG_ZOOMANDPAN_DISABLE = 1;

	/**
	 * @const SVG_ZOOMANDPAN_MAGNIFY
	 */
	public static final $SVG_ZOOMANDPAN_MAGNIFY = 2;

	/**
	 * @var unsignedshort zoomAndPan
	 * @throws DOMException
	 */
	public $zoomAndPan;
}

