<?php
	namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class NiveisTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('Nome')
            ->requirePresence('Descricao')
            ->notEmpty('Nome')
            ->requirePresence('Descricao');

        return $validator;
    }
    public function isOwnedBy($Id_n)
    {
        return $this->exists(['id' => $Id_n]);
    }

}
    


?>