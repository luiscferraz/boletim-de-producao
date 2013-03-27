<?php
class Usuario extends AppModel {

	var $hasOne = array('Dados');

	public $name = 'Usuario';
	
	public $validate = array(

        'cpf' => array(
        	'rule' => 'isUnique',
                'message' => 'CPF já existente.' 
        ));
}
?>