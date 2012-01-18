<?php
class EventsController extends AppController{

	function index() {
		$events = $this->Event->find('all',array(
			'conditions' => array('online' => 1),
			'fields' => array('id','name')
		));

		$d['events'] = $events;
		$this->set($d);
	}

	function view($id = null) {
		$event = $this->Event->find('first', array(
			'conditions' => array('id' => $id)
		));

		if(empty($event)) {
			throw new NotFoundException('Aucune page ne correspond à cet ID');
		}

		$d['event'] = $event;
		$this->set($d);
	}

	function admin_index() {
		$this->paginate = array('Event' => array(
			'limit' => 10
		));

		$d['events'] = $this->Paginate('Event');
		$this->set($d);
	}

	function admin_edit($id = null) {
		if($this->request->is('put') || $this->request->is('post')){
			if($this->Event->save($this->request->data)) {
				$this->Session->setFlash('Le contenu a bien été modifié', 'notif');
				$this->redirect(array('action' => 'index'));
			}
		} elseif($id) {
			$this->Event->id = $id;
			$this->request->data = $this->Event->read();
		}
	}

	function admin_delete($id) {
		$this->Session->setFlash("L'event a bien été supprimé",'notif');
		$this->Event->delete($id);
		$this->redirect($this->referer());
	}

}