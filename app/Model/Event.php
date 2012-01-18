<?php
class Event extends AppModel{

	public $validate = array(
		'name' => array(
			'rule'		=>	'notEmpty',
			'required'	=>	true,
			'message'	=>	'Vous devez indiquer un nom'
		),
		'description' => array(
			'rule'		=>	'notEmpty',
			'required'	=>	true,
			'message'	=>	'Vous devez indiquer une description'
		),
		'image' => array(
			'rule'		=>	'notEmpty',
			'requires'	=> 	true,
			'message'	=>	'Vous devez entrer un lien image'
		),
		'date' => array(
			'rule'		=>	'notEmpty',
			'required'	=>	false,
			'message'	=>	'Vous devez entrer une date'
		),
		'age' => array(
			'rule'		=>	'numeric',
			'required'	=>	true,
			'message'	=>	'Vous devez entrer un age'
		),
		'price' => array(
			'rule'		=>	'numeric',
			'required'	=>	true,
			'message'	=>	'Vous devez entrer un prix'
		)
	);

}