<?php
namespace MyBooks\Domain;

class Book
{
	protected	$id,
				$title,
				$isbn,
				$summary,
				$author;

	/**
	 * Book class getters
	 */

	public function getId()
	{
		return $this->$id;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getIsbn()
	{
		return $this->isbn;
	}

	public function getSummary()
	{
		return $this->summary;
	}

	public function getAuthor()
	{
		return $this->author;
	}

	/**
	 * Author class getters
	 */

	public function setId($id)
	{
		$id = (int) $id;

		$this->id = $id;
		return $id;
	}

	public function setTitle($title)
	{
		if (is_string($title))
		{
			$this->title = $title;
			return $title;
		}
	}

	public function setIsbn($isbn)
	{
		if (is_string($isbn))
		{
			$this->isbn = $isbn;
			return $isbn;
		}
	}

	public function setSummary($summary)
	{
		if (is_string($summary))
		{
			$this->summary = $summary;
			return $summary;
		}
	}

	public function setAuthor(Author $author)
	{
		$this->author = $author;
		return $author;
	}
}