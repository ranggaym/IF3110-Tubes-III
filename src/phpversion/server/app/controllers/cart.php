<?php

Class CartController Extends BaseController {

	public function index() {
	}

	public function get($id) {
		$json = json_encode(ShoppingBag::getNotPurchasedByCustomerId($this->registry, $id));
		echo $json;
	}

	public function update($id) {
		$json = json_encode(ShoppingBag::updatePurchasedByCustomerId($this->registry, $id));
		echo $json;
	}

	public function add($customer_id, $product_id, $quantity) {
		$json = json_encode(ShoppingBag::addItem($this->registry, $customer_id, $product_id, $quantity));
		echo $json;
	}
}