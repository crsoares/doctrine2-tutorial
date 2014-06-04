<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity(repositoryClass="BugRepository")
 * @Table(name="bugs")
 */
class Bug
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
	protected $description;

	/**
	 * @Column(type="datetime")
	 */
	protected $created;

	/**
	 * @Column(type="string")
	 */
	protected $status;

	/**
	 * @ManyToMany(targetEntity="Product")
	 */
	protected $products = null;

	/**
	 * @ManyToOne(targetEntity="User", inversedBy="assignedBugs")
	 */
	protected $engineer;

	/**
	 * @ManyToOne(targetEntity="User", inversedBy="reportedBugs")
	 */
	protected $reporter;

	public function __construct()
	{
		$this->products = new ArrayCollection(); 
	}

	public function assignToProduct($product)
	{
		$this->products[] = $product;
	}

	public function getProducts()
	{
		return $this->products;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function setDescription($description) 
	{
		$this->description = $description;
		return $this;
	}

	public function getCreated()
	{
		return $this->created;
	}

	public function setCreated(DateTime $created)
	{
		$this->created = $created;
		return $this;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		return $this;
	}

	public function setEngineer($engineer)
	{
		$engineer->assignedToBug($this);
		$this->engineer = $engineer;
		return $this;
	}

	public function setReporter($reporter)
	{
		$reporter->addReportedBug($this);
		$this->reporter = $reporter;
		return $this;
	}

	public function getEngineer()
	{
		return $this->engineer;
	}

	public function getReporter()
	{
		return $this->reporter;
	}

	public function close()
	{
		$this->status = "CLOSE";
	}


}