<?php


/**
 * Lancamentofinanceirocontareceber
 *
 * @Table(name="LancamentoFinanceiroContaReceber")
 * @Entity
 */
class Lancamentofinanceirocontareceber
{
    /**
     * @var integer
     *
     * @Column(name="IdLoja", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $idloja;

    /**
     * @var integer
     *
     * @Column(name="IdLancamentoFinanceiro", type="integer", nullable=false)
     */
    private $idlancamentofinanceiro;

    /**
     * @var integer
     *
     * @Column(name="IdContaReceber", type="integer", nullable=false)
     */
    private $idcontareceber;

    /**
     * @var integer
     *
     * @Column(name="IdStatus", type="integer", nullable=true)
     */
    private $idstatus;



    /**
     * Set idloja
     *
     * @param integer $idloja
     * @return Lancamentofinanceirocontareceber
     */
    public function setIdloja($idloja)
    {
        $this->idloja = $idloja;

        return $this;
    }

    /**
     * Get idloja
     *
     * @return integer 
     */
    public function getIdloja()
    {
        return $this->idloja;
    }

    /**
     * Set idlancamentofinanceiro
     *
     * @param integer $idlancamentofinanceiro
     * @return Lancamentofinanceirocontareceber
     */
    public function setIdlancamentofinanceiro($idlancamentofinanceiro)
    {
        $this->idlancamentofinanceiro = $idlancamentofinanceiro;

        return $this;
    }

    /**
     * Get idlancamentofinanceiro
     *
     * @return integer 
     */
    public function getIdlancamentofinanceiro()
    {
        return $this->idlancamentofinanceiro;
    }

    /**
     * Set idcontareceber
     *
     * @param integer $idcontareceber
     * @return Lancamentofinanceirocontareceber
     */
    public function setIdcontareceber($idcontareceber)
    {
        $this->idcontareceber = $idcontareceber;

        return $this;
    }

    /**
     * Get idcontareceber
     *
     * @return integer 
     */
    public function getIdcontareceber()
    {
        return $this->idcontareceber;
    }

    /**
     * Set idstatus
     *
     * @param integer $idstatus
     * @return Lancamentofinanceirocontareceber
     */
    public function setIdstatus($idstatus)
    {
        $this->idstatus = $idstatus;

        return $this;
    }

    /**
     * Get idstatus
     *
     * @return integer 
     */
    public function getIdstatus()
    {
        return $this->idstatus;
    }
}
