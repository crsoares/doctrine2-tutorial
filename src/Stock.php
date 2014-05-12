<?php

/**
 * @Entity
 * @Table(name="exchange_stocks")
 */
class Stock 
{
	/**
	 * @Id
	 * @Column(type="integer")
	 * @GeneratedValue
	 */
	private $id;

	/**
	 * @Column(type="string", unique=true)
	 */
	private $symbol;

	/**
	 * @ManyToOne(targetEntity="Market", inversedBy="stocks")
	 */
	private $market;

	public function __construct($symbol, Market $market)
	{
		$this->symbol = $symbol;
		$this->market = $market;
		$market->addStock($this);
	}

	public function getSymbol()
	{
		return $this->symbol;
	}
}