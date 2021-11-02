<?php 
class Home extends Controller{
	public $data = [];

	public function index()
	{
		$product = $this->model('HomeModel');
		$dataProduct = $product->getlist();
		$this->data['user'] = $dataProduct;

		$this->view('home/index',$this->data);
	}

	public function product($id)
	{
		$product = $this->model('HomeModel');
		$this->data['product'] = $product->getdataID($id);

		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		
		//xuat view 
		$this->view('home/product' , $this->data );
	}

	

	
}



?>