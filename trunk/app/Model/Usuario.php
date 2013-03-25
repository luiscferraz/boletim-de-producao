<?php
class Usuario extends AppModel {

        public $useTable = 'usuarios';

	public $validate = array(

        'cpf' => array(
        	'rule' => 'isUnique',
                'message' => 'CPF já existente.' 
        ));
}
?>