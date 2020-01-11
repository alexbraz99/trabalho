

<h1 align="center">Blog de personagens</h1>
<table>
    <tr style="background-color: #C1CDCD">
        <?= $this->Html->link('Adicionar personagem', ['action' => 'add']) ?>
        
        <th>Id</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Ações</th>
    </tr>

   

    <?php foreach ($personagens as $personagem): ?>
    <tr style="background-color: #C1CDCD">
        <td><?= $personagem->Id_p ?></td>
        <td>
            <?= $this->Html->link($personagem->Nome, ['action' => 'view', $personagem->Id_p]) ?>
        </td>
        <td>
            <?= $this->Html->link($personagem->Descricao, ['action' => 'view', $personagem->Id_p]) ?>
        </td>
        <td>
            <?= $this->Html->link('Editar', ['action' => 'edit', $personagem->Id_p]) ?>
            <?= $this->Form->postLink(
                'Deletar',
                ['action' => 'delete', $personagem->Id_p],
                ['confirm' => 'Tem certeza?'])
            ?>
            
        </td>

        
    </tr>
    <?php endforeach; ?>
</table>


