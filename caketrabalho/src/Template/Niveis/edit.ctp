<h1>Editar personagens</h1>
<?php
    echo $this->Form->create($nivel);
    echo $this->Form->input('Id_n');
    echo $this->Form->input('Nome', ['rows' => '3']);
    echo $this->Form->input('Descricao', ['rows' => '3']);
    echo $this->Form->button(__('Salvar nivel'));
    echo $this->Form->end();
?>