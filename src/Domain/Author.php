<?php
namespace MyBooks\Domain;

class Author
{
	protected	$id,
				$firstName,
				$lastName;

	/**
	 * Author class getters
	 */

	public function getId()
	{
		return $this->id;
	}

	public function getFirstName()
	{
		return $this->firstName;
	}

	public function getLastName()
	{
		return $this->lastName;
	}

	/**
	 * Author class setters
	 */

	public function setId($id)
	{
		$id = (int) $id;

		if ($id > 0)
		{
			$this->id = $id;
			return $this;
		}
	}

	public function setFirstName($firstName)
	{
		if (is_string($firstName))
		{
			$this->firstName = $firstName;
			return $this;
		}
	}

	public function setLastName($lastName)
	{
		if (is_string($lastName))
		{
			$this->lastName = $lastName;
			return $this;
		}
	}
}