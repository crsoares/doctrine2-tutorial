<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Localcobranca
 *
 * @Table(name="LocalCobranca")
 * @Entity
 */
class Localcobranca
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
     * @Column(name="IdLocalCobranca", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $idlocalcobranca;

    /**
     * @var integer
     *
     * @Column(name="IdTipoLocalCobranca", type="integer", nullable=false)
     */
    private $idtipolocalcobranca;

    /**
     * @var integer
     *
     * @Column(name="IdPessoa", type="integer", nullable=true)
     */
    private $idpessoa;

    /**
     * @var string
     *
     * @Column(name="DescricaoLocalCobranca", type="string", length=100, nullable=true)
     */
    private $descricaolocalcobranca;

    /**
     * @var string
     *
     * @Column(name="AbreviacaoNomeLocalCobranca", type="string", length=8, nullable=false)
     */
    private $abreviacaonomelocalcobranca;

    /**
     * @var integer
     *
     * @Column(name="IdLocalCobrancaLayout", type="integer", nullable=true)
     */
    private $idlocalcobrancalayout;

    /**
     * @var integer
     *
     * @Column(name="IdDuplicataLayout", type="integer", nullable=true)
     */
    private $idduplicatalayout;

    /**
     * @var string
     *
     * @Column(name="ValorDespesaLocalCobranca", type="decimal", precision=7, scale=2, nullable=true)
     */
    private $valordespesalocalcobranca;

    /**
     * @var string
     *
     * @Column(name="ValorTaxaReImpressaoBoleto", type="decimal", precision=7, scale=2, nullable=true)
     */
    private $valortaxareimpressaoboleto;

    /**
     * @var string
     *
     * @Column(name="PercentualJurosDiarios", type="decimal", precision=7, scale=3, nullable=true)
     */
    private $percentualjurosdiarios;

    /**
     * @var string
     *
     * @Column(name="PercentualMulta", type="decimal", precision=7, scale=3, nullable=true)
     */
    private $percentualmulta;

    /**
     * @var integer
     *
     * @Column(name="DiasCarenciaMultaJuros", type="integer", nullable=true)
     */
    private $diascarenciamultajuros;

    /**
     * @var integer
     *
     * @Column(name="DiasCompensacao", type="integer", nullable=true)
     */
    private $diascompensacao;

    /**
     * @var integer
     *
     * @Column(name="DiasProtesto", type="integer", nullable=true)
     */
    private $diasprotesto;

    /**
     * @var integer
     *
     * @Column(name="DiasAvisoRegressivo", type="integer", nullable=true)
     */
    private $diasavisoregressivo;

    /**
     * @var integer
     *
     * @Column(name="ContraApresentacao", type="integer", nullable=true)
     */
    private $contraapresentacao;

    /**
     * @var integer
     *
     * @Column(name="CobrarMultaJurosProximaFatura", type="integer", nullable=true)
     */
    private $cobrarmultajurosproximafatura;

    /**
     * @var integer
     *
     * @Column(name="IdArquivoRetornoTipo", type="integer", nullable=true)
     */
    private $idarquivoretornotipo;

    /**
     * @var integer
     *
     * @Column(name="IdArquivoRemessaTipo", type="integer", nullable=true)
     */
    private $idarquivoremessatipo;

    /**
     * @var integer
     *
     * @Column(name="IdNotaFiscalTipo", type="integer", nullable=true)
     */
    private $idnotafiscaltipo;

    /**
     * @var string
     *
     * @Column(name="ValorCobrancaMinima", type="decimal", precision=7, scale=2, nullable=true)
     */
    private $valorcobrancaminima;

    /**
     * @var integer
     *
     * @Column(name="AtualizarVencimentoViaCDA", type="integer", nullable=false)
     */
    private $atualizarvencimentoviacda = '1';

    /**
     * @var integer
     *
     * @Column(name="BloquearGeracaoNotaFiscal", type="integer", nullable=false)
     */
    private $bloqueargeracaonotafiscal = '0';

    /**
     * @var integer
     *
     * @Column(name="RemessaAtualizarContaReceberViaCDA", type="integer", nullable=false)
     */
    private $remessaatualizarcontareceberviacda = '1';

    /**
     * @var integer
     *
     * @Column(name="RemessaAtualizarContaReceber", type="integer", nullable=false)
     */
    private $remessaatualizarcontareceber = '1';

    /**
     * @var integer
     *
     * @Column(name="IdLojaCobrancaUnificada", type="integer", nullable=true)
     */
    private $idlojacobrancaunificada;

    /**
     * @var integer
     *
     * @Column(name="IdLocalCobrancaUnificada", type="integer", nullable=true)
     */
    private $idlocalcobrancaunificada;

    /**
     * @var string
     *
     * @Column(name="MsgDemonstrativo", type="text", nullable=true)
     */
    private $msgdemonstrativo;

    /**
     * @var string
     *
     * @Column(name="ExtLogo", type="string", length=4, nullable=true)
     */
    private $extlogo;

    /**
     * @var integer
     *
     * @Column(name="AvisoFaturaAtraso", type="integer", nullable=true)
     */
    private $avisofaturaatraso;

    /**
     * @var string
     *
     * @Column(name="LoginCriacao", type="string", length=20, nullable=false)
     */
    private $logincriacao;

    /**
     * @var \DateTime
     *
     * @Column(name="DataCriacao", type="datetime", nullable=false)
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
     * @Column(name="DataAlteracao", type="datetime", nullable=true)
     */
    private $dataalteracao;

    /**
     * @var integer
     *
     * @Column(name="IdStatus", type="integer", nullable=false)
     */
    private $idstatus;

    /**
     * @var integer
     *
     * @Column(name="InicioNossoNumero", type="integer", nullable=false)
     */
    private $inicionossonumero = '0';



    /**
     * Set idloja
     *
     * @param integer $idloja
     * @return Localcobranca
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
     * Set idlocalcobranca
     *
     * @param integer $idlocalcobranca
     * @return Localcobranca
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
     * Set idtipolocalcobranca
     *
     * @param integer $idtipolocalcobranca
     * @return Localcobranca
     */
    public function setIdtipolocalcobranca($idtipolocalcobranca)
    {
        $this->idtipolocalcobranca = $idtipolocalcobranca;

        return $this;
    }

    /**
     * Get idtipolocalcobranca
     *
     * @return integer 
     */
    public function getIdtipolocalcobranca()
    {
        return $this->idtipolocalcobranca;
    }

    /**
     * Set idpessoa
     *
     * @param integer $idpessoa
     * @return Localcobranca
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
     * Set descricaolocalcobranca
     *
     * @param string $descricaolocalcobranca
     * @return Localcobranca
     */
    public function setDescricaolocalcobranca($descricaolocalcobranca)
    {
        $this->descricaolocalcobranca = $descricaolocalcobranca;

        return $this;
    }

    /**
     * Get descricaolocalcobranca
     *
     * @return string 
     */
    public function getDescricaolocalcobranca()
    {
        return $this->descricaolocalcobranca;
    }

    /**
     * Set abreviacaonomelocalcobranca
     *
     * @param string $abreviacaonomelocalcobranca
     * @return Localcobranca
     */
    public function setAbreviacaonomelocalcobranca($abreviacaonomelocalcobranca)
    {
        $this->abreviacaonomelocalcobranca = $abreviacaonomelocalcobranca;

        return $this;
    }

    /**
     * Get abreviacaonomelocalcobranca
     *
     * @return string 
     */
    public function getAbreviacaonomelocalcobranca()
    {
        return $this->abreviacaonomelocalcobranca;
    }

    /**
     * Set idlocalcobrancalayout
     *
     * @param integer $idlocalcobrancalayout
     * @return Localcobranca
     */
    public function setIdlocalcobrancalayout($idlocalcobrancalayout)
    {
        $this->idlocalcobrancalayout = $idlocalcobrancalayout;

        return $this;
    }

    /**
     * Get idlocalcobrancalayout
     *
     * @return integer 
     */
    public function getIdlocalcobrancalayout()
    {
        return $this->idlocalcobrancalayout;
    }

    /**
     * Set idduplicatalayout
     *
     * @param integer $idduplicatalayout
     * @return Localcobranca
     */
    public function setIdduplicatalayout($idduplicatalayout)
    {
        $this->idduplicatalayout = $idduplicatalayout;

        return $this;
    }

    /**
     * Get idduplicatalayout
     *
     * @return integer 
     */
    public function getIdduplicatalayout()
    {
        return $this->idduplicatalayout;
    }

    /**
     * Set valordespesalocalcobranca
     *
     * @param string $valordespesalocalcobranca
     * @return Localcobranca
     */
    public function setValordespesalocalcobranca($valordespesalocalcobranca)
    {
        $this->valordespesalocalcobranca = $valordespesalocalcobranca;

        return $this;
    }

    /**
     * Get valordespesalocalcobranca
     *
     * @return string 
     */
    public function getValordespesalocalcobranca()
    {
        return $this->valordespesalocalcobranca;
    }

    /**
     * Set valortaxareimpressaoboleto
     *
     * @param string $valortaxareimpressaoboleto
     * @return Localcobranca
     */
    public function setValortaxareimpressaoboleto($valortaxareimpressaoboleto)
    {
        $this->valortaxareimpressaoboleto = $valortaxareimpressaoboleto;

        return $this;
    }

    /**
     * Get valortaxareimpressaoboleto
     *
     * @return string 
     */
    public function getValortaxareimpressaoboleto()
    {
        return $this->valortaxareimpressaoboleto;
    }

    /**
     * Set percentualjurosdiarios
     *
     * @param string $percentualjurosdiarios
     * @return Localcobranca
     */
    public function setPercentualjurosdiarios($percentualjurosdiarios)
    {
        $this->percentualjurosdiarios = $percentualjurosdiarios;

        return $this;
    }

    /**
     * Get percentualjurosdiarios
     *
     * @return string 
     */
    public function getPercentualjurosdiarios()
    {
        return $this->percentualjurosdiarios;
    }

    /**
     * Set percentualmulta
     *
     * @param string $percentualmulta
     * @return Localcobranca
     */
    public function setPercentualmulta($percentualmulta)
    {
        $this->percentualmulta = $percentualmulta;

        return $this;
    }

    /**
     * Get percentualmulta
     *
     * @return string 
     */
    public function getPercentualmulta()
    {
        return $this->percentualmulta;
    }

    /**
     * Set diascarenciamultajuros
     *
     * @param integer $diascarenciamultajuros
     * @return Localcobranca
     */
    public function setDiascarenciamultajuros($diascarenciamultajuros)
    {
        $this->diascarenciamultajuros = $diascarenciamultajuros;

        return $this;
    }

    /**
     * Get diascarenciamultajuros
     *
     * @return integer 
     */
    public function getDiascarenciamultajuros()
    {
        return $this->diascarenciamultajuros;
    }

    /**
     * Set diascompensacao
     *
     * @param integer $diascompensacao
     * @return Localcobranca
     */
    public function setDiascompensacao($diascompensacao)
    {
        $this->diascompensacao = $diascompensacao;

        return $this;
    }

    /**
     * Get diascompensacao
     *
     * @return integer 
     */
    public function getDiascompensacao()
    {
        return $this->diascompensacao;
    }

    /**
     * Set diasprotesto
     *
     * @param integer $diasprotesto
     * @return Localcobranca
     */
    public function setDiasprotesto($diasprotesto)
    {
        $this->diasprotesto = $diasprotesto;

        return $this;
    }

    /**
     * Get diasprotesto
     *
     * @return integer 
     */
    public function getDiasprotesto()
    {
        return $this->diasprotesto;
    }

    /**
     * Set diasavisoregressivo
     *
     * @param integer $diasavisoregressivo
     * @return Localcobranca
     */
    public function setDiasavisoregressivo($diasavisoregressivo)
    {
        $this->diasavisoregressivo = $diasavisoregressivo;

        return $this;
    }

    /**
     * Get diasavisoregressivo
     *
     * @return integer 
     */
    public function getDiasavisoregressivo()
    {
        return $this->diasavisoregressivo;
    }

    /**
     * Set contraapresentacao
     *
     * @param integer $contraapresentacao
     * @return Localcobranca
     */
    public function setContraapresentacao($contraapresentacao)
    {
        $this->contraapresentacao = $contraapresentacao;

        return $this;
    }

    /**
     * Get contraapresentacao
     *
     * @return integer 
     */
    public function getContraapresentacao()
    {
        return $this->contraapresentacao;
    }

    /**
     * Set cobrarmultajurosproximafatura
     *
     * @param integer $cobrarmultajurosproximafatura
     * @return Localcobranca
     */
    public function setCobrarmultajurosproximafatura($cobrarmultajurosproximafatura)
    {
        $this->cobrarmultajurosproximafatura = $cobrarmultajurosproximafatura;

        return $this;
    }

    /**
     * Get cobrarmultajurosproximafatura
     *
     * @return integer 
     */
    public function getCobrarmultajurosproximafatura()
    {
        return $this->cobrarmultajurosproximafatura;
    }

    /**
     * Set idarquivoretornotipo
     *
     * @param integer $idarquivoretornotipo
     * @return Localcobranca
     */
    public function setIdarquivoretornotipo($idarquivoretornotipo)
    {
        $this->idarquivoretornotipo = $idarquivoretornotipo;

        return $this;
    }

    /**
     * Get idarquivoretornotipo
     *
     * @return integer 
     */
    public function getIdarquivoretornotipo()
    {
        return $this->idarquivoretornotipo;
    }

    /**
     * Set idarquivoremessatipo
     *
     * @param integer $idarquivoremessatipo
     * @return Localcobranca
     */
    public function setIdarquivoremessatipo($idarquivoremessatipo)
    {
        $this->idarquivoremessatipo = $idarquivoremessatipo;

        return $this;
    }

    /**
     * Get idarquivoremessatipo
     *
     * @return integer 
     */
    public function getIdarquivoremessatipo()
    {
        return $this->idarquivoremessatipo;
    }

    /**
     * Set idnotafiscaltipo
     *
     * @param integer $idnotafiscaltipo
     * @return Localcobranca
     */
    public function setIdnotafiscaltipo($idnotafiscaltipo)
    {
        $this->idnotafiscaltipo = $idnotafiscaltipo;

        return $this;
    }

    /**
     * Get idnotafiscaltipo
     *
     * @return integer 
     */
    public function getIdnotafiscaltipo()
    {
        return $this->idnotafiscaltipo;
    }

    /**
     * Set valorcobrancaminima
     *
     * @param string $valorcobrancaminima
     * @return Localcobranca
     */
    public function setValorcobrancaminima($valorcobrancaminima)
    {
        $this->valorcobrancaminima = $valorcobrancaminima;

        return $this;
    }

    /**
     * Get valorcobrancaminima
     *
     * @return string 
     */
    public function getValorcobrancaminima()
    {
        return $this->valorcobrancaminima;
    }

    /**
     * Set atualizarvencimentoviacda
     *
     * @param integer $atualizarvencimentoviacda
     * @return Localcobranca
     */
    public function setAtualizarvencimentoviacda($atualizarvencimentoviacda)
    {
        $this->atualizarvencimentoviacda = $atualizarvencimentoviacda;

        return $this;
    }

    /**
     * Get atualizarvencimentoviacda
     *
     * @return integer 
     */
    public function getAtualizarvencimentoviacda()
    {
        return $this->atualizarvencimentoviacda;
    }

    /**
     * Set bloqueargeracaonotafiscal
     *
     * @param integer $bloqueargeracaonotafiscal
     * @return Localcobranca
     */
    public function setBloqueargeracaonotafiscal($bloqueargeracaonotafiscal)
    {
        $this->bloqueargeracaonotafiscal = $bloqueargeracaonotafiscal;

        return $this;
    }

    /**
     * Get bloqueargeracaonotafiscal
     *
     * @return integer 
     */
    public function getBloqueargeracaonotafiscal()
    {
        return $this->bloqueargeracaonotafiscal;
    }

    /**
     * Set remessaatualizarcontareceberviacda
     *
     * @param integer $remessaatualizarcontareceberviacda
     * @return Localcobranca
     */
    public function setRemessaatualizarcontareceberviacda($remessaatualizarcontareceberviacda)
    {
        $this->remessaatualizarcontareceberviacda = $remessaatualizarcontareceberviacda;

        return $this;
    }

    /**
     * Get remessaatualizarcontareceberviacda
     *
     * @return integer 
     */
    public function getRemessaatualizarcontareceberviacda()
    {
        return $this->remessaatualizarcontareceberviacda;
    }

    /**
     * Set remessaatualizarcontareceber
     *
     * @param integer $remessaatualizarcontareceber
     * @return Localcobranca
     */
    public function setRemessaatualizarcontareceber($remessaatualizarcontareceber)
    {
        $this->remessaatualizarcontareceber = $remessaatualizarcontareceber;

        return $this;
    }

    /**
     * Get remessaatualizarcontareceber
     *
     * @return integer 
     */
    public function getRemessaatualizarcontareceber()
    {
        return $this->remessaatualizarcontareceber;
    }

    /**
     * Set idlojacobrancaunificada
     *
     * @param integer $idlojacobrancaunificada
     * @return Localcobranca
     */
    public function setIdlojacobrancaunificada($idlojacobrancaunificada)
    {
        $this->idlojacobrancaunificada = $idlojacobrancaunificada;

        return $this;
    }

    /**
     * Get idlojacobrancaunificada
     *
     * @return integer 
     */
    public function getIdlojacobrancaunificada()
    {
        return $this->idlojacobrancaunificada;
    }

    /**
     * Set idlocalcobrancaunificada
     *
     * @param integer $idlocalcobrancaunificada
     * @return Localcobranca
     */
    public function setIdlocalcobrancaunificada($idlocalcobrancaunificada)
    {
        $this->idlocalcobrancaunificada = $idlocalcobrancaunificada;

        return $this;
    }

    /**
     * Get idlocalcobrancaunificada
     *
     * @return integer 
     */
    public function getIdlocalcobrancaunificada()
    {
        return $this->idlocalcobrancaunificada;
    }

    /**
     * Set msgdemonstrativo
     *
     * @param string $msgdemonstrativo
     * @return Localcobranca
     */
    public function setMsgdemonstrativo($msgdemonstrativo)
    {
        $this->msgdemonstrativo = $msgdemonstrativo;

        return $this;
    }

    /**
     * Get msgdemonstrativo
     *
     * @return string 
     */
    public function getMsgdemonstrativo()
    {
        return $this->msgdemonstrativo;
    }

    /**
     * Set extlogo
     *
     * @param string $extlogo
     * @return Localcobranca
     */
    public function setExtlogo($extlogo)
    {
        $this->extlogo = $extlogo;

        return $this;
    }

    /**
     * Get extlogo
     *
     * @return string 
     */
    public function getExtlogo()
    {
        return $this->extlogo;
    }

    /**
     * Set avisofaturaatraso
     *
     * @param integer $avisofaturaatraso
     * @return Localcobranca
     */
    public function setAvisofaturaatraso($avisofaturaatraso)
    {
        $this->avisofaturaatraso = $avisofaturaatraso;

        return $this;
    }

    /**
     * Get avisofaturaatraso
     *
     * @return integer 
     */
    public function getAvisofaturaatraso()
    {
        return $this->avisofaturaatraso;
    }

    /**
     * Set logincriacao
     *
     * @param string $logincriacao
     * @return Localcobranca
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
     * @return Localcobranca
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
     * @return Localcobranca
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
     * @return Localcobranca
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

    /**
     * Set idstatus
     *
     * @param integer $idstatus
     * @return Localcobranca
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
     * Set inicionossonumero
     *
     * @param integer $inicionossonumero
     * @return Localcobranca
     */
    public function setInicionossonumero($inicionossonumero)
    {
        $this->inicionossonumero = $inicionossonumero;

        return $this;
    }

    /**
     * Get inicionossonumero
     *
     * @return integer 
     */
    public function getInicionossonumero()
    {
        return $this->inicionossonumero;
    }
}
