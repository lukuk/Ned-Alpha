<?php
class Media extends AppModel{

	public $useTable = 'medias';
	public $validate = array(
		'url' => array(
			'rule'		=>	'/^.*\.(jpg|png|jpeg)$/',
			'required'	=>	true,
			'message'	=>	"Le fichier n'est pas une image valide"
		),
	);

}