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
 * @extends SVGLocatable
 * @extends SVGFitToViewBox
 * @extends SVGZoomAndPan
 * @extends DocumentEvent
 * @extends ViewCSS
 * @extends DocumentCSS
 * @extends SVGElement
 * @extends SVGTests
 * @extends SVGLangSpace
 */
interface SVGSVGElement
	extends SVGExternalResourcesRequired,  SVGStylable,  SVGLocatable,  SVGFitToViewBox,  SVGZoomAndPan,  DocumentEvent,  ViewCSS,  DocumentCSS,  SVGElement,  SVGTests,  SVGLangSpace
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
	 * @var DOMString contentScriptType
	 * @throws DOMException
	 */
	public $contentScriptType;
	/**
	 * @var DOMString contentStyleType
	 * @throws DOMException
	 */
	public $contentStyleType;
	/**
	 * read-only member
	 * @var SVGRect viewport
	 */
	public $viewport;
	/**
	 * read-only member
	 * @var float pixelUnitToMillimeterX
	 */
	public $pixelUnitToMillimeterX;
	/**
	 * read-only member
	 * @var float pixelUnitToMillimeterY
	 */
	public $pixelUnitToMillimeterY;
	/**
	 * read-only member
	 * @var float screenPixelToMillimeterX
	 */
	public $screenPixelToMillimeterX;
	/**
	 * read-only member
	 * @var float screenPixelToMillimeterY
	 */
	public $screenPixelToMillimeterY;
	/**
	 * read-only member
	 * @var boolean useCurrentView
	 */
	public $useCurrentView;
	/**
	 * read-only member
	 * @var SVGViewSpec currentView
	 */
	public $currentView;
	/**
	 * @var float currentScale
	 */
	public $currentScale;
	/**
	 * read-only member
	 * @var SVGPoint currentTranslate
	 */
	public $currentTranslate;
	/**
	 * @param unsigned long $maxWaitMilliseconds
	 * @return unsignedlong
	 */
	public function suspendRedraw($maxWaitMilliseconds);

	/**
	 * @param unsigned long $suspendHandleID
	 * @return void
	 */
	public function unsuspendRedraw($suspendHandleID);

	/**
	 * @return void
	 */
	public function unsuspendRedrawAll();

	/**
	 * @return void
	 */
	public function forceRedraw();

	/**
	 * @return void
	 */
	public function pauseAnimations();

	/**
	 * @return void
	 */
	public function unpauseAnimations();

	/**
	 * @return boolean
	 */
	public function animationsPaused();

	/**
	 * @return float
	 */
	public function getCurrentTime();

	/**
	 * @param float $seconds
	 * @return void
	 */
	public function setCurrentTime($seconds);

	/**
	 * @param SVGRect $rect
	 * @param SVGElement $referenceElement
	 * @return NodeList
	 */
	public function getIntersectionList(SVGRect $rect, SVGElement $referenceElement);

	/**
	 * @param SVGRect $rect
	 * @param SVGElement $referenceElement
	 * @return NodeList
	 */
	public function getEnclosureList(SVGRect $rect, SVGElement $referenceElement);

	/**
	 * @param SVGElement $element
	 * @param SVGRect $rect
	 * @return boolean
	 */
	public function checkIntersection(SVGElement $element, SVGRect $rect);

	/**
	 * @param SVGElement $element
	 * @param SVGRect $rect
	 * @return boolean
	 */
	public function checkEnclosure(SVGElement $element, SVGRect $rect);

	/**
	 * @return void
	 */
	public function deselectAll();

	/**
	 * @return SVGNumber
	 */
	public function createSVGNumber();

	/**
	 * @return SVGLength
	 */
	public function createSVGLength();

	/**
	 * @return SVGAngle
	 */
	public function createSVGAngle();

	/**
	 * @return SVGPoint
	 */
	public function createSVGPoint();

	/**
	 * @return SVGMatrix
	 */
	public function createSVGMatrix();

	/**
	 * @return SVGRect
	 */
	public function createSVGRect();

	/**
	 * @return SVGTransform
	 */
	public function createSVGTransform();

	/**
	 * @param SVGMatrix $matrix
	 * @return SVGTransform
	 */
	public function createSVGTransformFromMatrix(SVGMatrix $matrix);

	/**
	 * @param DOMString $elementId
	 * @return Element
	 */
	public function getElementById(DOMString $elementId);

}

