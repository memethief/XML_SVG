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
interface SVGTransformList
{
	/**
	 * read-only member
	 * @var unsignedlong numberOfItems
	 */
	public $numberOfItems;
	/**
	 * @return void
	 * @throws DOMException
	 */
	public function clear();

	/**
	 * @param SVGTransform $newItem
	 * @return SVGTransform
	 * @throws DOMException
	 */
	public function initialize(SVGTransform $newItem);

	/**
	 * @param unsigned long $index
	 * @return SVGTransform
	 * @throws DOMException
	 */
	public function getItem($index);

	/**
	 * @param SVGTransform $newItem
	 * @param unsigned long $index
	 * @return SVGTransform
	 * @throws DOMException
	 */
	public function insertItemBefore(SVGTransform $newItem, $index);

	/**
	 * @param SVGTransform $newItem
	 * @param unsigned long $index
	 * @return SVGTransform
	 * @throws DOMException
	 */
	public function replaceItem(SVGTransform $newItem, $index);

	/**
	 * @param unsigned long $index
	 * @return SVGTransform
	 * @throws DOMException
	 */
	public function removeItem($index);

	/**
	 * @param SVGTransform $newItem
	 * @return SVGTransform
	 * @throws DOMException
	 */
	public function appendItem(SVGTransform $newItem);

	/**
	 * @param SVGMatrix $matrix
	 * @return SVGTransform
	 */
	public function createSVGTransformFromMatrix(SVGMatrix $matrix);

	/**
	 * @return SVGTransform
	 * @throws DOMException
	 */
	public function consolidate();

}

