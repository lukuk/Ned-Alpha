<?php
class ArtistsController extends AppController{

	function index() {
		$artists = $this->Artist->find('all',array(
			'fields' => array('id','name')
		));
		$d['artists'] = $artists;
		$this->set($d);
	}

	function view($id = null) {
		$artist = $this->Artist->find('first', array(
			'conditions' => array('id' => $id)
		));

		if(empty($artist)) {
			throw new NotFoundException('Aucune page ne correspond à cet ID');
		}

		$d['artist'] = $artist;
		$this->set($d);

	}

	function admin_index() {
		$this->paginate = array('Artist' => array(
			'limit' => 10
		));

		$d['artists'] = $this->Paginate('Artist');
		$this->set($d);
	}

	function admin_edit($id = null) {
		if($this->request->is('put') || $this->request->is('post')){
			if($this->Artist->save($this->request->data)) {
				$this->Session->setFlash('Le contenu a bien été modifié', 'notif');
				$this->redirect(array('action' => 'index'));
			}
		} elseif($id) {
			$this->Artist->id = $id;
			$this->request->data = $this->Artist->read();
		}
	}

	function admin_delete($id) {
		$this->Session->setFlash('La page a bien été supprimée','notif');
		$this->Artist->delete($id);
		$this->redirect($this->referer());	
	}

}