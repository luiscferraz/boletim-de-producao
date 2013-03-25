<h1>Usuários</h1>
<p><?php echo $this->Html->link("Adicionar Usuário", array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Login</th>
        <th>Matrícula</th>
        <th>Ações</th>

    </tr>

    <?php foreach ($usuarios as $usuario): ?>
    <tr>
        <td><?php echo $usuario['Usuario']['id']; ?></td>
        <td><?php echo $usuario['Usuario']['nome']; ?></td>
        <td><?php echo $this->Html->link($usuario['Usuario']['login'],
        array('controller' => 'usuarios', 'action' => 'view', $usuario['Usuario']['id'])); ?></td>
        <td><?php echo $usuario['Usuario']['matricula']; ?></td>
        
        <td>
        	<?php echo $this->Html->link('Editar', 
                array('action' => 'edit', $usuario['Usuario']['id'])); ?>

            <?php echo $this->Form->postLink('Remover',
                array('action' => 'delete', $usuario['Usuario']['id']),
                array('confirm' => 'Deseja remover o usuário?'));
            ?>
        </td>

    </tr>
    <?php endforeach; ?>

</table>

