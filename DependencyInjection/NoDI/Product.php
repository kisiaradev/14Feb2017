<?php 

require_once('../StockItem.php');

class Product 
{
	private $stockItem;
	private $sku;

	public function __construct($sku, $stockQuantity, $stockStatus)
	{
		$this->stockItem  = new StockItem($stockQuantity, $stockStatus);
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

$pdct = new Product(134, 13, 'full');

var_dump($pdct->getStockItem());