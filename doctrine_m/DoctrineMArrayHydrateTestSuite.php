<?php

require_once dirname(__FILE__) . '/DoctrineMWithCacheTestSuite.php';

class DoctrineMArrayHydrateTestSuite extends DoctrineMWithCacheTestSuite
{
    public function runHydrate($i)
    {        
        $books = $this->em->createQuery(
            'SELECT b FROM Book b WHERE b.price > ?1'
        )->setParameter(1, $i)
         ->setMaxResults(5)
         ->getArrayResult();

        foreach ($books as $book) {
            
        }
        $this->em->clear();
    }

    public function runJoinSearch($i)
    {
        $book = $this->em->createQuery(
            'SELECT b, a FROM Book b JOIN b.author a WHERE b.title = ?1'
        )->setParameter(1, 'Hello' . $i)
         ->setMaxResults(1)
         ->getArrayResult();
    }
	
}