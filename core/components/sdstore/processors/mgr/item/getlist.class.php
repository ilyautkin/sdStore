<?php
/**
 * Get a list of Items
 */
class sdStoreItemGetListProcessor extends modObjectGetListProcessor {
	public $objectType = 'sdStoreItem';
	public $classKey = 'sdStoreItem';
	public $defaultSortField = 'id';
	public $defaultSortDirection = 'DESC';
	public $renderers = '';


	/**
	 * @param xPDOQuery $c
	 *
	 * @return xPDOQuery
	 */
	public function prepareQueryBeforeCount(xPDOQuery $c) {
		return $c;
	}


	/**
	 * @param xPDOObject $object
	 *
	 * @return array
	 */
	public function prepareRow(xPDOObject $object) {
		$array = $object->toArray();

		return $array;
	}

}

return 'sdStoreItemGetListProcessor';