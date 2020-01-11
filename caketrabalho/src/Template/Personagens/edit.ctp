<h1>Editar personagens</h1>
<?php
    echo $this->Form->create($personagem);
    echo $this->Form->input('Id_p');
    echo $this->Form->input('Nome', ['rows' => '3']);
    echo $this->Form->input('Descricao', ['rows' => '3']);
    echo $this->Form->button(__('Salvar personagem'));
    echo $this->Form->end();
?>