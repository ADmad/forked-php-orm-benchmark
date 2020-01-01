<?php

use App\Model\Table\AuthorTable;
use App\Model\Table\BookTable;

require_once dirname(__FILE__) . '/CakeOrmTestSuite.php';

class CakeOrmNoHydrationTestSuite extends CakeOrmTestSuite
{
    public function runPKSearch($i)
    {
        $this->locator->get('Author', ['className' => AuthorTable::class])
            ->find()
            ->where(['id' => 1])
            ->disableResultsCasting()
            ->disableHydration()
            ->first();
    }

    public function runHydrate($i)
    {
        $results = $this->locator->get('Book', ['className' => BookTable::class])
            ->find()
            ->where(['price > ' => $i])
            ->limit(50)
            ->disableResultsCasting()
            ->disableHydration()
            ->all();

        foreach ($results as $book) {
        }
    }

    public function runJoinSearch($i)
    {
        $book = $this->locator->get('Book', ['className' => BookTable::class])->find()
            ->where(['title' => 'Hello' . $i])
            ->contain(['Author'])
            ->limit(1)
            ->disableResultsCasting()
            ->disableHydration()
            ->first();

        return $book;
    }
}
