<h1>Editar Usuário</h1>
<?php echo $this->Form->create('Usuario', array('action' => 'edit')); ?>

<?php echo $this->Form->input('Usuario.login', array('label' => 'Login:','required'=>'required', 'id' => 'login')); ?>
<?php echo $this->Form->input('Usuario.senha', array('label' => 'Senha:','required'=>'required', 'id' => 'senha')); ?>
<?php echo $this->Form->input('Usuario.tipo', array('options' => array('admin' => 'ADM', 'user' => 'Usuário'),'type' => 'select', 'empty' => 'Selecione','label' => 'Tipo:','required'=>'required', 'id' => 'tipo')); ?>
<?php echo $this->Form->input('Usuario.nome', array('label' => 'Nome:', 'required'=>'required', 'id' => 'nome')); ?>
<?php echo $this->Form->input('Usuario.matricula', array('label' => 'Matrícula:','required'=>'required', 'id' => 'matricula')); ?>
<?php echo $this->Form->input('Usuario.cpf', array('label' => 'CPF:','required'=>'required','id' => 'cpf')); ?>

<?php echo $this->Form->end('Salvar Usuário'); ?>