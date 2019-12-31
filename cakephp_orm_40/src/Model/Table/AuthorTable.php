<?php
namespace App\Model\Table;

class AuthorTable extends \Cake\ORM\Table
{
    public function initialize(array $config): void
    {
        $this->setTable('author');
    }
}
