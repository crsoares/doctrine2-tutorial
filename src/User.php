<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="users")
 */
class User
{
	/**
	 * @Id
	 * @Column(type="integer")
	 * @GeneratedValue
	 */
	protected $id;

	/**
	 * @Column(type="string")
	 */
	protected $name;

	/**
	 * @OneToMany(targetEntity="Bug", mappedBy="reporter")
	 */
	protected $reportedBugs = null;

	/**
	 * @OneToMany(targetEntity="Bug", mappedBy="engineer")
	 */
	protected $assignedBugs = null;

	public function __construct()
	{
		$this->reportedBugs = new ArrayCollection();
		$this->assignedBugs = new ArrayCollection();
	}

	public function addReportedBug($bug)
	{
		$this->reportedBugs[] = $bug;
		return $this;
	}

	public function assignedToBug($bug)
	{
		$this->assignedBugs[] = $bug;
		return $this;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
}