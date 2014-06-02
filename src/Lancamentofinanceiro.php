<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Lancamentofinanceiro
 *
 * @Table(name="LancamentoFinanceiro")
 * @Entity
 */
class Lancamentofinanceiro
{
    /**
     * @var integer
     *
     * @Column(name="IdLoja", type="integer", nullable=false)
     */
    private $idloja;

    /**
     * @var integer
     *
     * @Column(name="IdLancamentoFinanceiro", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $idlancamentofinanceiro;

    /**
     * @var integer
     *
     * @Column(name="IdContrato", type="integer", nullable=true)
     */
    private $idcontrato;

    /**
     * @var integer
     *
     * @Column(name="IdContaEventual", type="integer", nullable=true)
     */
    private $idcontaeventual;

    /**
     * @var integer
     *
     * @Column(name="IdEstorno", type="integer", nullable=true)
     */
    private $idestorno;

    /**
     * @var integer
     *
     * @Column(name="IdEncargoFinanceiro", type="integer", nullable=true)
     */
    private $idencargofinanceiro;

    /**
     * @var integer
     *
     * @Column(name="IdMudancaStatus", type="integer", nullable=true)
     */
    private $idmudancastatus;

    /**
     * @var integer
     *
     * @Column(name="NumParcelaEventual", type="integer", nullable=true)
     */
    private $numparcelaeventual;

    /**
     * @var integer
     *
     * @Column(name="IdOrdemServico", type="integer", nullable=true)
     */
    private $idordemservico;

    /**
     * @var integer
     *
     * @Column(name="IdContaReceberAgrupado", type="integer", nullable=true)
     */
    private $idcontareceberagrupado;

    /**
     * @var integer
     *
     * @Column(name="NumParcelaContaReceberAgrupado", type="integer", nullable=true)
     */
    private $numparcelacontareceberagrupado;

    /**
     * @var integer
     *
     * @Column(name="IdLancamentoInformativo", type="integer", nullable=true)
     */
    private $idlancamentoinformativo;

    /**
     * @var integer
     *
     * @Column(name="TipoLancamentoFinanceiro", type="integer", nullable=true)
     */
    private $tipolancamentofinanceiro;

    /**
     * @var string
     *
     * @Column(name="Valor", type="decimal", precision=7, scale=2, nullable=true)
     */
    private $valor;

    /**
     * @var string
     *
     * @Column(name="ValorDescontoAConceber", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $valordescontoaconceber = '0.00';

    /**
     * @var integer
     *
     * @Column(name="LimiteDesconto", type="integer", nullable=true)
     */
    private $limitedesconto;

    /**
     * @var string
     *
     * @Column(name="ValorRepasseTerceiro", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $valorrepasseterceiro = '0.00';

    /**
     * @var \DateTime
     *
     * @Column(name="DataReferenciaInicial", type="date", nullable=true)
     */
    private $datareferenciainicial;

    /**
     * @var \DateTime
     *
     * @Column(name="DataReferenciaFinal", type="date", nullable=true)
     */
    private $datareferenciafinal;

    /**
     * @var string
     *
     * @Column(name="ParametroDemonstrativo", type="string", length=255, nullable=true)
     */
    private $parametrodemonstrativo;

    /**
     * @var integer
     *
     * @Column(name="IdProcessoFinanceiro", type="integer", nullable=true)
     */
    private $idprocessofinanceiro = '0';

    /**
     * @var string
     *
     * @Column(name="Obs", type="text", nullable=true)
     */
    private $obs;

    /**
     * @var integer
     *
     * @Column(name="IdStatus", type="integer", nullable=false)
     */
    private $idstatus = '0';

    /**
     * @var string
     *
     * @Column(name="LoginCancelamento", type="string", length=20, nullable=true)
     */
    private $logincancelamento;

    /**
     * @var \DateTime
     *
     * @Column(name="DataCancelamento", type="datetime", nullable=true)
     */
    private $datacancelamento;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idlancamentofinanceiro = new ArrayCollection();
    }


    /**
     * Set idloja
     *
     * @param integer $idloja
     * @return Lancamentofinanceiro
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
     * @return Lancamentofinanceiro
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
     * Set idcontrato
     *
     * @param integer $idcontrato
     * @return Lancamentofinanceiro
     */
    public function setIdcontrato($idcontrato)
    {
        $this->idcontrato = $idcontrato;

        return $this;
    }

    /**
     * Get idcontrato
     *
     * @return integer 
     */
    public function getIdcontrato()
    {
        return $this->idcontrato;
    }

    /**
     * Set idcontaeventual
     *
     * @param integer $idcontaeventual
     * @return Lancamentofinanceiro
     */
    public function setIdcontaeventual($idcontaeventual)
    {
        $this->idcontaeventual = $idcontaeventual;

        return $this;
    }

    /**
     * Get idcontaeventual
     *
     * @return integer 
     */
    public function getIdcontaeventual()
    {
        return $this->idcontaeventual;
    }

    /**
     * Set idestorno
     *
     * @param integer $idestorno
     * @return Lancamentofinanceiro
     */
    public function setIdestorno($idestorno)
    {
        $this->idestorno = $idestorno;

        return $this;
    }

    /**
     * Get idestorno
     *
     * @return integer 
     */
    public function getIdestorno()
    {
        return $this->idestorno;
    }

    /**
     * Set idencargofinanceiro
     *
     * @param integer $idencargofinanceiro
     * @return Lancamentofinanceiro
     */
    public function setIdencargofinanceiro($idencargofinanceiro)
    {
        $this->idencargofinanceiro = $idencargofinanceiro;

        return $this;
    }

    /**
     * Get idencargofinanceiro
     *
     * @return integer 
     */
    public function getIdencargofinanceiro()
    {
        return $this->idencargofinanceiro;
    }

    /**
     * Set idmudancastatus
     *
     * @param integer $idmudancastatus
     * @return Lancamentofinanceiro
     */
    public function setIdmudancastatus($idmudancastatus)
    {
        $this->idmudancastatus = $idmudancastatus;

        return $this;
    }

    /**
     * Get idmudancastatus
     *
     * @return integer 
     */
    public function getIdmudancastatus()
    {
        return $this->idmudancastatus;
    }

    /**
     * Set numparcelaeventual
     *
     * @param integer $numparcelaeventual
     * @return Lancamentofinanceiro
     */
    public function setNumparcelaeventual($numparcelaeventual)
    {
        $this->numparcelaeventual = $numparcelaeventual;

        return $this;
    }

    /**
     * Get numparcelaeventual
     *
     * @return integer 
     */
    public function getNumparcelaeventual()
    {
        return $this->numparcelaeventual;
    }

    /**
     * Set idordemservico
     *
     * @param integer $idordemservico
     * @return Lancamentofinanceiro
     */
    public function setIdordemservico($idordemservico)
    {
        $this->idordemservico = $idordemservico;

        return $this;
    }

    /**
     * Get idordemservico
     *
     * @return integer 
     */
    public function getIdordemservico()
    {
        return $this->idordemservico;
    }

    /**
     * Set idcontareceberagrupado
     *
     * @param integer $idcontareceberagrupado
     * @return Lancamentofinanceiro
     */
    public function setIdcontareceberagrupado($idcontareceberagrupado)
    {
        $this->idcontareceberagrupado = $idcontareceberagrupado;

        return $this;
    }

    /**
     * Get idcontareceberagrupado
     *
     * @return integer 
     */
    public function getIdcontareceberagrupado()
    {
        return $this->idcontareceberagrupado;
    }

    /**
     * Set numparcelacontareceberagrupado
     *
     * @param integer $numparcelacontareceberagrupado
     * @return Lancamentofinanceiro
     */
    public function setNumparcelacontareceberagrupado($numparcelacontareceberagrupado)
    {
        $this->numparcelacontareceberagrupado = $numparcelacontareceberagrupado;

        return $this;
    }

    /**
     * Get numparcelacontareceberagrupado
     *
     * @return integer 
     */
    public function getNumparcelacontareceberagrupado()
    {
        return $this->numparcelacontareceberagrupado;
    }

    /**
     * Set idlancamentoinformativo
     *
     * @param integer $idlancamentoinformativo
     * @return Lancamentofinanceiro
     */
    public function setIdlancamentoinformativo($idlancamentoinformativo)
    {
        $this->idlancamentoinformativo = $idlancamentoinformativo;

        return $this;
    }

    /**
     * Get idlancamentoinformativo
     *
     * @return integer 
     */
    public function getIdlancamentoinformativo()
    {
        return $this->idlancamentoinformativo;
    }

    /**
     * Set tipolancamentofinanceiro
     *
     * @param integer $tipolancamentofinanceiro
     * @return Lancamentofinanceiro
     */
    public function setTipolancamentofinanceiro($tipolancamentofinanceiro)
    {
        $this->tipolancamentofinanceiro = $tipolancamentofinanceiro;

        return $this;
    }

    /**
     * Get tipolancamentofinanceiro
     *
     * @return integer 
     */
    public function getTipolancamentofinanceiro()
    {
        return $this->tipolancamentofinanceiro;
    }

    /**
     * Set valor
     *
     * @param string $valor
     * @return Lancamentofinanceiro
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return string 
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set valordescontoaconceber
     *
     * @param string $valordescontoaconceber
     * @return Lancamentofinanceiro
     */
    public function setValordescontoaconceber($valordescontoaconceber)
    {
        $this->valordescontoaconceber = $valordescontoaconceber;

        return $this;
    }

    /**
     * Get valordescontoaconceber
     *
     * @return string 
     */
    public function getValordescontoaconceber()
    {
        return $this->valordescontoaconceber;
    }

    /**
     * Set limitedesconto
     *
     * @param integer $limitedesconto
     * @return Lancamentofinanceiro
     */
    public function setLimitedesconto($limitedesconto)
    {
        $this->limitedesconto = $limitedesconto;

        return $this;
    }

    /**
     * Get limitedesconto
     *
     * @return integer 
     */
    public function getLimitedesconto()
    {
        return $this->limitedesconto;
    }

    /**
     * Set valorrepasseterceiro
     *
     * @param string $valorrepasseterceiro
     * @return Lancamentofinanceiro
     */
    public function setValorrepasseterceiro($valorrepasseterceiro)
    {
        $this->valorrepasseterceiro = $valorrepasseterceiro;

        return $this;
    }

    /**
     * Get valorrepasseterceiro
     *
     * @return string 
     */
    public function getValorrepasseterceiro()
    {
        return $this->valorrepasseterceiro;
    }

    /**
     * Set datareferenciainicial
     *
     * @param \DateTime $datareferenciainicial
     * @return Lancamentofinanceiro
     */
    public function setDatareferenciainicial($datareferenciainicial)
    {
        $this->datareferenciainicial = $datareferenciainicial;

        return $this;
    }

    /**
     * Get datareferenciainicial
     *
     * @return \DateTime 
     */
    public function getDatareferenciainicial()
    {
        return $this->datareferenciainicial;
    }

    /**
     * Set datareferenciafinal
     *
     * @param \DateTime $datareferenciafinal
     * @return Lancamentofinanceiro
     */
    public function setDatareferenciafinal($datareferenciafinal)
    {
        $this->datareferenciafinal = $datareferenciafinal;

        return $this;
    }

    /**
     * Get datareferenciafinal
     *
     * @return \DateTime 
     */
    public function getDatareferenciafinal()
    {
        return $this->datareferenciafinal;
    }

    /**
     * Set parametrodemonstrativo
     *
     * @param string $parametrodemonstrativo
     * @return Lancamentofinanceiro
     */
    public function setParametrodemonstrativo($parametrodemonstrativo)
    {
        $this->parametrodemonstrativo = $parametrodemonstrativo;

        return $this;
    }

    /**
     * Get parametrodemonstrativo
     *
     * @return string 
     */
    public function getParametrodemonstrativo()
    {
        return $this->parametrodemonstrativo;
    }

    /**
     * Set idprocessofinanceiro
     *
     * @param integer $idprocessofinanceiro
     * @return Lancamentofinanceiro
     */
    public function setIdprocessofinanceiro($idprocessofinanceiro)
    {
        $this->idprocessofinanceiro = $idprocessofinanceiro;

        return $this;
    }

    /**
     * Get idprocessofinanceiro
     *
     * @return integer 
     */
    public function getIdprocessofinanceiro()
    {
        return $this->idprocessofinanceiro;
    }

    /**
     * Set obs
     *
     * @param string $obs
     * @return Lancamentofinanceiro
     */
    public function setObs($obs)
    {
        $this->obs = $obs;

        return $this;
    }

    /**
     * Get obs
     *
     * @return string 
     */
    public function getObs()
    {
        return $this->obs;
    }

    /**
     * Set idstatus
     *
     * @param integer $idstatus
     * @return Lancamentofinanceiro
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

    /**
     * Set logincancelamento
     *
     * @param string $logincancelamento
     * @return Lancamentofinanceiro
     */
    public function setLogincancelamento($logincancelamento)
    {
        $this->logincancelamento = $logincancelamento;

        return $this;
    }

    /**
     * Get logincancelamento
     *
     * @return string 
     */
    public function getLogincancelamento()
    {
        return $this->logincancelamento;
    }

    /**
     * Set datacancelamento
     *
     * @param \DateTime $datacancelamento
     * @return Lancamentofinanceiro
     */
    public function setDatacancelamento($datacancelamento)
    {
        $this->datacancelamento = $datacancelamento;

        return $this;
    }

    /**
     * Get datacancelamento
     *
     * @return \DateTime 
     */
    public function getDatacancelamento()
    {
        return $this->datacancelamento;
    }

    /**
     * Add periodoapuracao
     *
     * @param \Sici $periodoapuracao
     * @return Lancamentofinanceiro
     */
    /*public function addPeriodoapuracao(\Sici $periodoapuracao)
    {
        $this->periodoapuracao[] = $periodoapuracao;

        return $this;
    }*/

    /**
     * Remove periodoapuracao
     *
     * @param \Sici $periodoapuracao
     */
    /*public function removePeriodoapuracao(\Sici $periodoapuracao)
    {
        $this->periodoapuracao->removeElement($periodoapuracao);
    }*/

    /**
     * Get periodoapuracao
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPeriodoapuracao()
    {
        return $this->periodoapuracao;
    }
}
