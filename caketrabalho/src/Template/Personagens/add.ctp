<h1>Add Personagem</h1>
<?php
    echo $this->Form->create($personagem);
    echo $this->Form->input('Id_p');
    echo $this->Form->input('Nome');
    echo $this->Form->input('Descricao', ['rows' => '3']);
    echo $this->Form->button(__(' Salvar personagem'));
    echo $this->Form->end();