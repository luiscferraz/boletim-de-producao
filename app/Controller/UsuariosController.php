<?php
class UsuariosController extends AppController {
    public $helpers = array('Html', 'Form');
    public $components = array('Session');
    public $name = 'Usuarios';

    public function index() {
        $this->set('usuarios', $this->Usuario->find('all'));
    }

    public function view($id = null) {
        $this->Usuario->id = $id;
        $this->set('usuario', $this->Usuario->read());
    }

    public function add() {

        if ($this->request->is('post')) {
            $this->Usuario->create();

            if ($this->Usuario->saveAll($this->request->data)) {
                $this->Session->setFlash('Usuário adicionado com sucesso.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Não foi possível adicionar o usuário.');
            }
        }
    }

    public function edit($id = NULL){
    		$this->Usuario->id = $id;

		if ($this->request->is('get')) {
		    $this->request->data = $this->Usuario->read();

		} else {
		    if ($this->Usuario->saveAll($this->request->data)) {
		        $this->Session->setFlash('Usuário atualizado com sucesso.');
		        $this->redirect(array('action' => 'index'));
		    } else {
		        $this->Session->setFlash('Não foi possível atualizar o usuário.');
		    }
		}
	}

	public function delete($id) {
	    if ($this->request->is('get')) {
	        throw new MethodNotAllowedException();
	    }
	    if ($this->Usuario->delete($id)) {
	    	$this->Session->setFlash('O usuário foi removido com sucesso.');
        	$this->redirect(array('action' => 'index'));
        }
    }

}
?>
