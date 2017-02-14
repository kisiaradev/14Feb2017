<?php 

require_once('../StockItem.php');

class ProductCDI
{
	private $stockItem;
	private $sku;

	public function __construct($sku, StockItem $stockItem)
	{
		$this->stockItem  = $stockItem;
		$this->sku        = $sku;
	}

	public function getStockItem()
	{
		return $this->stockItem;
	}

	public function getSku()
	{
		return $this->sku;
	}
}