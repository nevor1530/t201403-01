<?php

class DefaultController extends Controller
{
	public $layout = 'main';

	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function actionLogin(){
		$this->layout = "empty";
		$this->render('login');
	}
	
	public function actionUpdateAccount(){
		$this->render('update_account');
	}
}
