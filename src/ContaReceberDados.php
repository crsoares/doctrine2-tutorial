<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity(repositoryClass="ContaReceberDadosRepository")
 * @Table(name="ContaReceberDados")
 */
class ContaReceberDados
{
    /**
     * @ManyToOne(targetEntity="Pessoa", fetch="EXTRA_LAZY")
     * @JoinColumn(name="IdPessoa", referencedColumnName="IdPessoa")
     */
    private $receberPessoa;

    /**
     * @ManyToMany(targetEntity="Lancamentofinanceiro", fetch="EXTRA_LAZY")
     * @JoinTable(name="LancamentoFinanceiroContaReceber",
     *      joinColumns={@JoinColumn(name="IdContaReceber", referencedColumnName="IdContaReceber")},
     *      inverseJoinColumns={@JoinColumn(name="IdLancamentoFinanceiro", referencedColumnName="IdLancamentoFinanceiro")})
     */
    private $contaLancamento;

    /**
     * @OneToOne(targetEntity="Localcobranca", fetch="EXTRA_LAZY")
     * @JoinColumn(name="IdLocalCobranca", referencedColumnName="IdLocalCobranca")
     */
    private $contaLocal;

     /**
     * @var integer
     * @Id
     * @Column(name="IdLoja", type="integer", nullable=false)
     */
    private $idloja;

    /**
     * @var integer
     * @Id
     * @Column(name="IdContaReceber", type="integer", nullable=false)
     */
    private $idcontareceber;

    /**
     * @var integer
     * @Id
     * @Column(name="IdPessoa", type="integer")
     * @GeneratedValue(strategy="NONE")  
     */
    private $idpessoa;

    /**
     * @var integer
     *
     * @Column(name="IdPessoaEndereco", type="integer", nullable=false)
     */
    private $idpessoaendereco;

    /**
     * @var string
     *
     * @Column(name="ValorLancamento", type="decimal", precision=7, scale=2, nullable=true)
     */
    private $valorlancamento;

    /**
     * @var string
     *
     * @Column(name="ValorDespesas", type="decimal", precision=7, scale=2, nullable=true)
     */
    private $valordespesas;

    /**
     * @var \DateTime
     *
     * @Column(name="DataLancamento", type="string", nullable=true)
     */
    private $datalancamento;

    /**
     * @var \DateTime
     *
     * @Column(name="DataVencimento", type="string", nullable=true)
     */
    private $datavencimento;

    /**
     * @var integer
     *
     * @Column(name="LimiteDesconto", type="integer", nullable=true)
     */
    private $limitedesconto = '0';

    /**
     * @var integer
     *
     * @Column(name="NumeroDocumento", type="string", nullable=true)
     */
    private $numerodocumento;

    /**
     * @var string
     *
     * @Column(name="NossoNumero", type="string", length=20, nullable=true)
     */
    private $nossonumero;

    /**
     * @var string
     *
     * @Column(name="NumeroNF", type="string", length=20, nullable=true)
     */
    private $numeronf;

    /**
     * @var \DateTime
     *
     * @Column(name="DataNF", type="string", nullable=true)
     */
    private $datanf;

    /**
     * @var string
     *
     * @Column(name="ModeloNF", type="string", length=10, nullable=true)
     */
    private $modelonf;

    /**
     * @var integer
     *
     * @Column(name="IdLocalCobranca", type="integer", nullable=true)
     */
    private $idlocalcobranca;

    /**
     * @var integer
     *
     * @Column(name="IdContaDebito", type="integer", nullable=true)
     */
    private $idcontadebito;

    /**
     * @var integer
     *
     * @Column(name="IdCartao", type="integer", nullable=true)
     */
    private $idcartao;

    /**
     * @var integer
     *
     * @Column(name="IdLojaRemessa", type="integer", nullable=true)
     */
    private $idlojaremessa;

    /**
     * @var integer
     *
     * @Column(name="IdLocalCobrancaRemessa", type="integer", nullable=true)
     */
    private $idlocalcobrancaremessa;

    /**
     * @var integer
     *
     * @Column(name="IdArquivoRemessa", type="integer", nullable=true)
     */
    private $idarquivoremessa;

    /**
     * @var integer
     *
     * @Column(name="IdCarne", type="integer", nullable=true)
     */
    private $idcarne;

    /**
     * @var integer
     *
     * @Column(name="IdStatus", type="integer", nullable=true)
     */
    private $idstatus;

    /**
     * @var integer
     *
     * @Column(name="IdPosicaoCobranca", type="integer", nullable=true)
     */
    private $idposicaocobranca;

    /**
     * @var string
     *
     * @Column(name="Obs", type="text", nullable=true)
     */
    private $obs;

    /**
     * @var string
     *
     * @Column(name="MD5", type="string", length=32, nullable=true)
     */
    private $md5;

    /**
     * @var string
     *
     * @Column(name="LoginCriacao", type="string", length=20, nullable=false)
     */
    private $logincriacao;

    /**
     * @var \DateTime
     *
     * @Column(name="DataCriacao", type="string", nullable=false)
     */
    private $datacriacao;

    /**
     * @var string
     *
     * @Column(name="LoginAlteracao", type="string", length=20, nullable=true)
     */
    private $loginalteracao;

    /**
     * @var \DateTime
     *
     * @Column(name="DataAlteracao", type="string", nullable=true)
     */
    private $dataalteracao;


    public function __construct()
    {
        //$this->idcontareceber = new ArrayCollection();
    }

    public function getReceberPessoa()
    {
        return $this->receberPessoa;
    }

    public function getContaLancamento()
    {
        return $this->contaLancamento->toArray();
    }

    public function getContaLocal()
    {
        return $this->contaLocal;
    }

    /**
     * Set idloja
     *
     * @param integer $idloja
     * @return Contareceber
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
     * Set idcontareceber
     *
     * @param integer $idcontareceber
     * @return Contareceber
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
     * Set idpessoa
     *
     * @param integer $idpessoa
     * @return Contareceber
     */
    public function setIdpessoa($idpessoa)
    {
        $this->idpessoa = $idpessoa;

        return $this;
    }

    /**
     * Get idpessoa
     *
     * @return integer 
     */
    public function getIdpessoa()
    {
        return $this->idpessoa;
    }

    /**
     * Set idpessoaendereco
     *
     * @param integer $idpessoaendereco
     * @return Contareceber
     */
    public function setIdpessoaendereco($idpessoaendereco)
    {
        $this->idpessoaendereco = $idpessoaendereco;

        return $this;
    }

    /**
     * Get idpessoaendereco
     *
     * @return integer 
     */
    public function getIdpessoaendereco()
    {
        return $this->idpessoaendereco;
    }

    /**
     * Set valorlancamento
     *
     * @param string $valorlancamento
     * @return Contareceber
     */
    public function setValorlancamento($valorlancamento)
    {
        $this->valorlancamento = $valorlancamento;

        return $this;
    }

    /**
     * Get valorlancamento
     *
     * @return string 
     */
    public function getValorlancamento()
    {
        return $this->valorlancamento;
    }

    /**
     * Set valordespesas
     *
     * @param string $valordespesas
     * @return Contareceber
     */
    public function setValordespesas($valordespesas)
    {
        $this->valordespesas = $valordespesas;

        return $this;
    }

    /**
     * Get valordespesas
     *
     * @return string 
     */
    public function getValordespesas()
    {
        return $this->valordespesas;
    }

    /**
     * Set datalancamento
     *
     * @param \DateTime $datalancamento
     * @return Contareceber
     */
    public function setDatalancamento($datalancamento)
    {
        $this->datalancamento = $datalancamento;

        return $this;
    }

    /**
     * Get datalancamento
     *
     * @return \DateTime 
     */
    public function getDatalancamento()
    {
        return $this->datalancamento;
    }

    /**
     * Set datavencimento
     *
     * @param \DateTime $datavencimento
     * @return Contareceber
     */
    public function setDatavencimento($datavencimento)
    {
        $this->datavencimento = $datavencimento;

        return $this;
    }

    /**
     * Get datavencimento
     *
     * @return \DateTime 
     */
    public function getDatavencimento()
    {
        return $this->datavencimento;
    }

    /**
     * Set limitedesconto
     *
     * @param integer $limitedesconto
     * @return Contareceber
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
     * Set numerodocumento
     *
     * @param integer $numerodocumento
     * @return Contareceber
     */
    public function setNumerodocumento($numerodocumento)
    {
        $this->numerodocumento = $numerodocumento;

        return $this;
    }

    /**
     * Get numerodocumento
     *
     * @return integer 
     */
    public function getNumerodocumento()
    {
        return $this->numerodocumento;
    }

    /**
     * Set nossonumero
     *
     * @param string $nossonumero
     * @return Contareceber
     */
    public function setNossonumero($nossonumero)
    {
        $this->nossonumero = $nossonumero;

        return $this;
    }

    /**
     * Get nossonumero
     *
     * @return string 
     */
    public function getNossonumero()
    {
        return $this->nossonumero;
    }

    /**
     * Set numeronf
     *
     * @param string $numeronf
     * @return Contareceber
     */
    public function setNumeronf($numeronf)
    {
        $this->numeronf = $numeronf;

        return $this;
    }

    /**
     * Get numeronf
     *
     * @return string 
     */
    public function getNumeronf()
    {
        return $this->numeronf;
    }

    /**
     * Set datanf
     *
     * @param \DateTime $datanf
     * @return Contareceber
     */
    public function setDatanf($datanf)
    {
        $this->datanf = $datanf;

        return $this;
    }

    /**
     * Get datanf
     *
     * @return \DateTime 
     */
    public function getDatanf()
    {
        return $this->datanf;
    }

    /**
     * Set modelonf
     *
     * @param string $modelonf
     * @return Contareceber
     */
    public function setModelonf($modelonf)
    {
        $this->modelonf = $modelonf;

        return $this;
    }

    /**
     * Get modelonf
     *
     * @return string 
     */
    public function getModelonf()
    {
        return $this->modelonf;
    }

    /**
     * Set idlocalcobranca
     *
     * @param integer $idlocalcobranca
     * @return Contareceber
     */
    public function setIdlocalcobranca($idlocalcobranca)
    {
        $this->idlocalcobranca = $idlocalcobranca;

        return $this;
    }

    /**
     * Get idlocalcobranca
     *
     * @return integer 
     */
    public function getIdlocalcobranca()
    {
        return $this->idlocalcobranca;
    }

    /**
     * Set idcontadebito
     *
     * @param integer $idcontadebito
     * @return Contareceber
     */
    public function setIdcontadebito($idcontadebito)
    {
        $this->idcontadebito = $idcontadebito;

        return $this;
    }

    /**
     * Get idcontadebito
     *
     * @return integer 
     */
    public function getIdcontadebito()
    {
        return $this->idcontadebito;
    }

    /**
     * Set idcartao
     *
     * @param integer $idcartao
     * @return Contareceber
     */
    public function setIdcartao($idcartao)
    {
        $this->idcartao = $idcartao;

        return $this;
    }

    /**
     * Get idcartao
     *
     * @return integer 
     */
    public function getIdcartao()
    {
        return $this->idcartao;
    }

    /**
     * Set idlojaremessa
     *
     * @param integer $idlojaremessa
     * @return Contareceber
     */
    public function setIdlojaremessa($idlojaremessa)
    {
        $this->idlojaremessa = $idlojaremessa;

        return $this;
    }

    /**
     * Get idlojaremessa
     *
     * @return integer 
     */
    public function getIdlojaremessa()
    {
        return $this->idlojaremessa;
    }

    /**
     * Set idlocalcobrancaremessa
     *
     * @param integer $idlocalcobrancaremessa
     * @return Contareceber
     */
    public function setIdlocalcobrancaremessa($idlocalcobrancaremessa)
    {
        $this->idlocalcobrancaremessa = $idlocalcobrancaremessa;

        return $this;
    }

    /**
     * Get idlocalcobrancaremessa
     *
     * @return integer 
     */
    public function getIdlocalcobrancaremessa()
    {
        return $this->idlocalcobrancaremessa;
    }

    /**
     * Set idarquivoremessa
     *
     * @param integer $idarquivoremessa
     * @return Contareceber
     */
    public function setIdarquivoremessa($idarquivoremessa)
    {
        $this->idarquivoremessa = $idarquivoremessa;

        return $this;
    }

    /**
     * Get idarquivoremessa
     *
     * @return integer 
     */
    public function getIdarquivoremessa()
    {
        return $this->idarquivoremessa;
    }

    /**
     * Set idcarne
     *
     * @param integer $idcarne
     * @return Contareceber
     */
    public function setIdcarne($idcarne)
    {
        $this->idcarne = $idcarne;

        return $this;
    }

    /**
     * Get idcarne
     *
     * @return integer 
     */
    public function getIdcarne()
    {
        return $this->idcarne;
    }

    /**
     * Set idstatus
     *
     * @param integer $idstatus
     * @return Contareceber
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
     * Set idposicaocobranca
     *
     * @param integer $idposicaocobranca
     * @return Contareceber
     */
    public function setIdposicaocobranca($idposicaocobranca)
    {
        $this->idposicaocobranca = $idposicaocobranca;

        return $this;
    }

    /**
     * Get idposicaocobranca
     *
     * @return integer 
     */
    public function getIdposicaocobranca()
    {
        return $this->idposicaocobranca;
    }

    /**
     * Set obs
     *
     * @param string $obs
     * @return Contareceber
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
     * Set md5
     *
     * @param string $md5
     * @return Contareceber
     */
    public function setMd5($md5)
    {
        $this->md5 = $md5;

        return $this;
    }

    /**
     * Get md5
     *
     * @return string 
     */
    public function getMd5()
    {
        return $this->md5;
    }

    /**
     * Set logincriacao
     *
     * @param string $logincriacao
     * @return Contareceber
     */
    public function setLogincriacao($logincriacao)
    {
        $this->logincriacao = $logincriacao;

        return $this;
    }

    /**
     * Get logincriacao
     *
     * @return string 
     */
    public function getLogincriacao()
    {
        return $this->logincriacao;
    }

    /**
     * Set datacriacao
     *
     * @param \DateTime $datacriacao
     * @return Contareceber
     */
    public function setDatacriacao($datacriacao)
    {
        $this->datacriacao = $datacriacao;

        return $this;
    }

    /**
     * Get datacriacao
     *
     * @return \DateTime 
     */
    public function getDatacriacao()
    {
        return $this->datacriacao;
    }

    /**
     * Set loginalteracao
     *
     * @param string $loginalteracao
     * @return Contareceber
     */
    public function setLoginalteracao($loginalteracao)
    {
        $this->loginalteracao = $loginalteracao;

        return $this;
    }

    /**
     * Get loginalteracao
     *
     * @return string 
     */
    public function getLoginalteracao()
    {
        return $this->loginalteracao;
    }

    /**
     * Set dataalteracao
     *
     * @param \DateTime $dataalteracao
     * @return Contareceber
     */
    public function setDataalteracao($dataalteracao)
    {
        $this->dataalteracao = $dataalteracao;

        return $this;
    }

    /**
     * Get dataalteracao
     *
     * @return \DateTime 
     */
    public function getDataalteracao()
    {
        return $this->dataalteracao;
    }
}