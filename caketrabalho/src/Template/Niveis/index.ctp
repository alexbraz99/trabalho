<h1>Blog de niveis</h1>
<table>
    <tr>
        <?= $this->Html->link('Adicionar nivel', ['action' => 'add']) ?>
        
        <th>Id</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Ações</th>
    </tr>

   

    <?php foreach ($nivel as $nivel): ?>
    <tr>
        <td><?= $nivel->Id_n ?></td>
        <td>
            <?= $this->Html->link($nivel->Nome, ['action' => 'view', $nivel->Id_n]) ?>
        </td>
        <td>
            <?= $this->Html->link($nivel->Descricao, ['action' => 'view', $nivel->Id_n]) ?>
        </td>
        <td>
            <?= $this->Html->link('Editar', ['action' => 'edit', $nivel->Id_n]) ?>
            <?= $this->Form->postLink(
                'Deletar',
                ['action' => 'delete', $nivel->Id_n],
                ['confirm' => 'Tem certeza?'])
            ?>
            
        </td>

        
    </tr>
    <?php endforeach; ?>
</table>
