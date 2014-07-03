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
interface SVGRenderingIntent
{
// Rendering Intent Types
	/**
	 * @const RENDERING_INTENT_UNKNOWN
	 */
	public static final $RENDERING_INTENT_UNKNOWN = 0;

	/**
	 * @const RENDERING_INTENT_AUTO
	 */
	public static final $RENDERING_INTENT_AUTO = 1;

	/**
	 * @const RENDERING_INTENT_PERCEPTUAL
	 */
	public static final $RENDERING_INTENT_PERCEPTUAL = 2;

	/**
	 * @const RENDERING_INTENT_RELATIVE_COLORIMETRIC
	 */
	public static final $RENDERING_INTENT_RELATIVE_COLORIMETRIC = 3;

	/**
	 * @const RENDERING_INTENT_SATURATION
	 */
	public static final $RENDERING_INTENT_SATURATION = 4;

	/**
	 * @const RENDERING_INTENT_ABSOLUTE_COLORIMETRIC
	 */
	public static final $RENDERING_INTENT_ABSOLUTE_COLORIMETRIC = 5;

}

