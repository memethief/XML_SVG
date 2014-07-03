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
interface SVGPointList
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
	 * @param SVGPoint $newItem
	 * @return SVGPoint
	 * @throws DOMException
	 */
	public function initialize(SVGPoint $newItem);

	/**
	 * @param unsigned long $index
	 * @return SVGPoint
	 * @throws DOMException
	 */
	public function getItem($index);

	/**
	 * @param SVGPoint $newItem
	 * @param unsigned long $index
	 * @return SVGPoint
	 * @throws DOMException
	 */
	public function insertItemBefore(SVGPoint $newItem, $index);

	/**
	 * @param SVGPoint $newItem
	 * @param unsigned long $index
	 * @return SVGPoint
	 * @throws DOMException
	 */
	public function replaceItem(SVGPoint $newItem, $index);

	/**
	 * @param unsigned long $index
	 * @return SVGPoint
	 * @throws DOMException
	 */
	public function removeItem($index);

	/**
	 * @param SVGPoint $newItem
	 * @return SVGPoint
	 * @throws DOMException
	 */
	public function appendItem(SVGPoint $newItem);

}

