<?php

use App\Model\Table\AuthorTable;
use App\Model\Table\BookTable;
use Cake\Datasource\ConnectionManager;
use Cake\ORM\Locator\TableLocator;

require_once dirname(__FILE__) . '/../AbstractTestSuite.php';

/**
 * This test suite just demonstrates the baseline performance without any kind of ORM
 * or even any other kind of slightest abstraction.
 */
class CakeOrmTestSuite extends AbstractTestSuite
{
    /**
     * @var \Cake\ORM\Locator\TableLocator
     */
    protected $locator;

    public function initialize()
    {
        require_once "vendor/autoload.php";

        ConnectionManager::setConfig('default', ['url' => 'sqlite:///:memory:']);
        $connection = ConnectionManager::get('default');
        $connection->connect();

        $this->con = $connection->getDriver()->getConnection();

        $this->locator = new TableLocator();

        $this->initTables();
    }

    public function clearCache()
    {
    }

    public function beginTransaction()
    {
    }

    public function commit()
    {
    }

    public function runAuthorInsertion($i)
    {
        $table = $this->locator->get('Author', ['className' => AuthorTable::class]);

        $author = $table->newEntity([
            'first_name' => 'John' . $i,
            'last_name' => 'Doe' . $i,
        ]);
        $table->save($author);
        $this->authors[] = $author;
    }

    public function runBookInsertion($i)
    {
        $table = $this->locator->get('Book', ['className' => BookTable::class]);
        $book = $table->newEntity([
            'title' => 'Hello' . $i,
            'isbn' => '1234' . $i,
            'price' => $i,
            'author' => $this->authors[array_rand($this->authors)],
        ]);
        $table->save($book);
        $this->books[] = $book;
    }

    public function runPKSearch($i)
    {
        $this->locator->get('Author', ['className' => AuthorTable::class])
            ->get($this->authors[array_rand($this->authors)]->id);
    }

    public function runComplexQuery($i)
    {
        $id = $this->authors[array_rand($this->authors)]->id;
        $query = $this->locator->get('Author', ['className' => AuthorTable::class])->find();
        $count = $query
            ->select(['count' => $query->func()->count('*')])
            ->where(function ($exp, $q) use ($id) {
                return $exp
                    ->or(function ($or) use ($q) {
                        $name = $q->func()->concat(['first_name' => 'identifier', 'last_name' => 'identifier']);

                        return $or->eq($name, 'John Doe');
                    })
                    ->add(['id' => $id]);
            })
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
            ->first();

        return $book;
    }
}
