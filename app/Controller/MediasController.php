<?php
class MediasController extends AppController{

	function admin_index($event_id){
		if ($this->request->is('post')) {
			$data = $this->request->data;

			$dir = IMAGES.date('Y');
			if(!file_exists($dir))
				mkdir($dir,0777);
			$dir .= DS.date('m');
			if(!file_exists($dir))
				mkdir($dir, 0777);

			$f = explode('.', $data['Media']['file']['name']);
			$ext = '.'.end($f);
			$filename = Inflector::slug(implode('.', array_slice($f, 0, -1)), '-');
			//SAUVEGARDE EN BDD
			$success = $this->Media->save(array(
				'name' 	=> $data['Media']['name'],
				'url'	=> date('Y').'/'.date('m').'/'.$filename.$ext
			));

			if ($success) {
				move_uploaded_file($data['Media']['file']['tmp_name'], $dir.DS.$filename.$ext);
			} else {
				$this->Session->setFlash("L'image n'est pas au bon format",'notif',array('type' => 'error'));
			}

		}
		$d = array();
		$d['medias'] = $this->Media->find('all', array(
			'conditions'	=>	array('event_id' => $event_id)
		));
		$this->set($d);
	}

}