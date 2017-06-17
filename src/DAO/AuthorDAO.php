<?php
namespace MyBooks\DAO;

use MyBooks\Domain\Author;

class AuthorDAO extends DAO
{
	/**
     * Return a list of all articles, sorted by date (most recent first).
     *
     * @return array A list of all articles.
     */

	public function findAll()
	{
		$sql =  'SELECT * FROM author ORDER BY auth_id DESC';
		$result = $this->getDb()->fetchAll($sql);

		// Convert query result to an array of domain objects
		$authors = array();
		foreach($result as $row)
		{
			$authorId = $row['auth_id'];
			$authors[$authorId] = $this->buildDomainObject($row);
		}

		return $authors;
	}
}