<?php
    require_once 'item_dao.php';
    
    class Cart{
        public $id;
        public $customer_id;
        public $item_id;
        public $item_stock;
        public $number;
        public $created_at;
        
        public function __construct($customer_id='', $item_id='', $item_stock='', $number=''){
            // $this->id = $id;
            $this->customer_id = $customer_id;
            $this->item_id = $item_id;
            $this->item_stock = $item_stock;
            $this->number = $number;
        }
        
        public function get_item(){
            $item = ItemDAO::get_item_by_id($this->item_id);
            return $item;
        }
    }
?>