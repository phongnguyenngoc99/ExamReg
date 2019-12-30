<?php

namespace App\Models;

class DSDK
{
    public $items = null;
    public $total = 0;

	public function __construct($old_DSDK)
	{
		if($old_DSDK){
			$this->items = $old_DSDK->items;
			$this->total = $old_DSDK->total;
		}
	}

	public function add($item, $id){
		$storedItem = ['qty' => 0, 'item' => $item];
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$storedItem = $this->items[$id];
			}
		}
		$storedItem['qty']++;
		$this->items[$id] = $storedItem;
		$this->total++;
	}
}