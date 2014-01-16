<?php
include ('C:/xampp/htdocs/frenteCaixa/protected/controllers/FilialController.php');
include ('C:/xampp/htdocs/frenteCaixa/protected/controllers/ClienteController.php');

class ClienteView {
	public $filialCO;

	public function filialActionView($id)
	{
		$filialCO = new FilialController();
		$filialCO->actionView($id);
	}
}
