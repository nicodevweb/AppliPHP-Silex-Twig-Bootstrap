<?php
namespace MyBooks\DAO;

use MyBooks\Domain\Book;

class BookDAO extends DAO
{
	/**
     * Return a list of all books, sorted by date (most recent first).
     *
     * @return array A list of all books.
     */

	public function findAll()
	{
		$sql =  'SELECT * FROM book ORDER BY book_id DESC';
		$result = $this->getDb()->fetchAll($sql);

		// Convert query result to an array of domain objects
		$books = array();
		foreach($result as $row)
		{
			$bookId = $row['book_id'];
			$books[$bookId] = $this->buildDomainObject($row);
		}

		return $books;
	}

    /**
     * Creates an Article object based on a DB row.
     *
     * @param array $row The DB row containing Article data.
     * @return \MicroCMS\Domain\Article
     */

    public function buildDomainObject(array $row)
    {
    	$book = new Book();
    	$book->setId($row['book_id']);
    	$book->setTitle($row['book_title']);
    	$book->setIsbn($row['book_isbn']);
    	$book->setSummary($row['book_summary']);
    	/*
    	if (array_key_exists('auth_id', $row))
    	{
    		$authId = $row['auth_id'];
    		$article = $this->articleDAO->find($articleId);
    		$comment->setArticle($article);
    	}
    	*/
    	return $book;
    }
}