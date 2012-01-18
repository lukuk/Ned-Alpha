<?php
class Artist extends AppModel{

	public $validate = array(
		'name' => array(
			'rule'		=>	'notEmpty',
			'required'	=>	true,
			'message'	=>	"Vous devez indiquer un nom"
		),
		'description' => array(
			'rule'		=>	'notEmpty',
			'required'	=> 	true,
			'message'	=>	"Vous devez indiquer un message"
		),
		'image' => array(
			'rule'		=>	'notEmpty',
			'required'	=>	true,
			'message'	=>	"Vous devez indiquer le chemin d'une image"
		)
	);

}