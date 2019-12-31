<?php
namespace App\Model\Table;

class BookTable extends \Cake\ORM\Table
{
    public function initialize(array $config): void
    {
        $this->setTable('book');
        $this->belongsTo('Author', ['className' => AuthorTable::class]);
    }
}
