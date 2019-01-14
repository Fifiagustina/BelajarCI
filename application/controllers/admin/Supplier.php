<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

  //yang pertama dijalankan constructor
  public function __construct()
  {
    parent::__construct();
    $this->load->model("Supplier_model");
  }

	public function index()
	{
    //$data["products"] = $this->product_model->getAll();
    //$data["supplier"] = $this->Supplier_model->getAll();
    $data["supplier"] = $this->Supplier_model->getAll();
    $this->load->view("admin/Supplier/list",$data);
	  //var_dump($data["supplier"]);
	}
}
