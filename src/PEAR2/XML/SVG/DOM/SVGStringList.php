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
interface SVGStringList
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
	 * @param DOMString $newItem
	 * @return DOMString
	 * @throws DOMException
	 */
	public function initialize(DOMString $newItem);

	/**
	 * @param unsigned long $index
	 * @return DOMString
	 * @throws DOMException
	 */
	public function getItem($index);

	/**
	 * @param DOMString $newItem
	 * @param unsigned long $index
	 * @return DOMString
	 * @throws DOMException
	 */
	public function insertItemBefore(DOMString $newItem, $index);

	/**
	 * @param DOMString $newItem
	 * @param unsigned long $index
	 * @return DOMString
	 * @throws DOMException
	 */
	public function replaceItem(DOMString $newItem, $index);

	/**
	 * @param unsigned long $index
	 * @return DOMString
	 * @throws DOMException
	 */
	public function removeItem($index);

	/**
	 * @param DOMString $newItem
	 * @return DOMString
	 * @throws DOMException
	 */
	public function appendItem(DOMString $newItem);

}

