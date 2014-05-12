<?php

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Pessoa
 *
 * @Table(name="Pessoa")
 * @Entity
 */
class Pessoa
{
    /**
     * @var integer
     *
     * @Column(name="IdPessoa", type="integer")
     * @Id
     * @GeneratedValue(strategy="NONE")
     */
    private $idpessoa;

    /**
     * @var string
     *
     * @Column(name="TipoPessoa", type="string", length=1, nullable=true)
     */
    private $tipopessoa;

    /**
     * @var string
     *
     * @Column(name="Nome", type="string", length=100, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @Column(name="NomeRepresentante", type="string", length=100, nullable=true)
     */
    private $nomerepresentante;

    /**
     * @var string
     *
     * @Column(name="RazaoSocial", type="string", length=100, nullable=true)
     */
    private $razaosocial;

    /**
     * @var \DateTime
     *
     * @Column(name="DataNascimento", type="string", nullable=true)
     */
    private $datanascimento;

    /**
     * @var string
     *
     * @Column(name="Sexo", type="string", length=1, nullable=true)
     */
    private $sexo;

    /**
     * @var string
     *
     * @Column(name="RG_IE", type="string", length=30, nullable=true)
     */
    private $rgIe;

    /**
     * @var string
     *
     * @Column(name="OrgaoExpedidor", type="string", length=30, nullable=true)
     */
    private $orgaoexpedidor;

    /**
     * @var string
     *
     * @Column(name="CPF_CNPJ", type="string", length=18, nullable=true)
     */
    private $cpfCnpj;

    /**
     * @var string
     *
     * @Column(name="EstadoCivil", type="string", length=1, nullable=true)
     */
    private $estadocivil;

    /**
     * @var string
     *
     * @Column(name="InscricaoMunicipal", type="string", length=30, nullable=true)
     */
    private $inscricaomunicipal;

    /**
     * @var string
     *
     * @Column(name="Cob_FormaCorreio", type="string", length=1, nullable=true)
     */
    private $cobFormacorreio;

    /**
     * @var string
     *
     * @Column(name="Cob_FormaEmail", type="string", length=1, nullable=true)
     */
    private $cobFormaemail;

    /**
     * @var string
     *
     * @Column(name="Cob_FormaOutro", type="string", length=1, nullable=true)
     */
    private $cobFormaoutro;

    /**
     * @var integer
     *
     * @Column(name="Cob_CobrarDespesaBoleto", type="integer", nullable=false)
     */
    private $cobCobrardespesaboleto;

    /**
     * @var integer
     *
     * @Column(name="ForcarAtualizarDadosCDA", type="integer", nullable=false)
     */
    private $forcaratualizardadoscda = '2';

    /**
     * @var integer
     *
     * @Column(name="MonitorFinanceiro", type="integer", nullable=false)
     */
    private $monitorfinanceiro;

    /**
     * @var string
     *
     * @Column(name="NomePai", type="string", length=100, nullable=true)
     */
    private $nomepai;

    /**
     * @var string
     *
     * @Column(name="NomeMae", type="string", length=100, nullable=true)
     */
    private $nomemae;

    /**
     * @var string
     *
     * @Column(name="NomeConjugue", type="string", length=100, nullable=true)
     */
    private $nomeconjugue;

    /**
     * @var string
     *
     * @Column(name="Site", type="string", length=100, nullable=true)
     */
    private $site;

    /**
     * @var integer
     *
     * @Column(name="AgruparContratos", type="integer", nullable=false)
     */
    private $agruparcontratos = '1';

    /**
     * @var string
     *
     * @Column(name="Obs", type="text", nullable=true)
     */
    private $obs;

    /**
     * @var integer
     *
     * @Column(name="TipoUsuario", type="integer", nullable=true)
     */
    private $tipousuario;

    /**
     * @var integer
     *
     * @Column(name="TipoFornecedor", type="integer", nullable=true)
     */
    private $tipofornecedor;

    /**
     * @var integer
     *
     * @Column(name="TipoAgenteAutorizado", type="integer", nullable=true)
     */
    private $tipoagenteautorizado;

    /**
     * @var integer
     *
     * @Column(name="TipoVendedor", type="integer", nullable=true)
     */
    private $tipovendedor;

    /**
     * @var integer
     *
     * @Column(name="IdEnderecoDefault", type="integer", nullable=true)
     */
    private $idenderecodefault;

    /**
     * @var string
     *
     * @Column(name="SolicitacaoAlteracaoSenhaCDA", type="string", length=32, nullable=true)
     */
    private $solicitacaoalteracaosenhacda;

    /**
     * @var string
     *
     * @Column(name="CampoExtra1", type="string", length=255, nullable=true)
     */
    private $campoextra1;

    /**
     * @var string
     *
     * @Column(name="CampoExtra2", type="string", length=255, nullable=true)
     */
    private $campoextra2;

    /**
     * @var string
     *
     * @Column(name="CampoExtra3", type="string", length=255, nullable=true)
     */
    private $campoextra3;

    /**
     * @var string
     *
     * @Column(name="CampoExtra4", type="string", length=255, nullable=true)
     */
    private $campoextra4;

    /**
     * @var string
     *
     * @Column(name="Senha", type="string", length=255, nullable=true)
     */
    private $senha;

    /**
     * @var integer
     *
     * @Column(name="IdLoja", type="integer", nullable=true)
     */
    private $idloja;

    /**
     * @var integer
     *
     * @Column(name="Resumido", type="integer", nullable=false)
     */
    private $resumido = '2';

    /**
     * @var integer
     *
     * @Column(name="IdContabil", type="integer", nullable=true)
     */
    private $idcontabil;

    /**
     * @var integer
     *
     * @Column(name="IdNaturezaJuridica", type="integer", nullable=true)
     */
    private $idnaturezajuridica;

    /**
     * @var integer
     *
     * @Column(name="IdRegimeApuracao", type="integer", nullable=true)
     */
    private $idregimeapuracao;

    /**
     * @var integer
     *
     * @Column(name="IdCategoriaEstabelecimento", type="integer", nullable=true)
     */
    private $idcategoriaestabelecimento;

    /**
     * @var integer
     *
     * @Column(name="IdInscricaoSuframa", type="integer", nullable=true)
     */
    private $idinscricaosuframa;

    /**
     * @var integer
     *
     * @Column(name="InterdependenciaEmpresa", type="integer", nullable=true)
     */
    private $interdependenciaempresa;

    /**
     * @var string
     *
     * @Column(name="LoginCriacao", type="string", length=20, nullable=false)
     */
    private $logincriacao = '';

    /**
     * @var \DateTime
     *
     * @Column(name="DataCriacao", type="string", nullable=true)
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

    public function __construct()
    {
        $this->idpessoa = new ArrayCollection();
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
    
    public function setIdpessoa($id)
    {
        $this->idpessoa = $id;
        return $this;
    }

    /**
     * Set tipopessoa
     *
     * @param string $tipopessoa
     * @return Pessoa
     */
    public function setTipopessoa($tipopessoa)
    {
        $this->tipopessoa = $tipopessoa;

        return $this;
    }

    /**
     * Get tipopessoa
     *
     * @return string 
     */
    public function getTipopessoa()
    {
        return $this->tipopessoa;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Pessoa
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set nomerepresentante
     *
     * @param string $nomerepresentante
     * @return Pessoa
     */
    public function setNomerepresentante($nomerepresentante)
    {
        $this->nomerepresentante = $nomerepresentante;

        return $this;
    }

    /**
     * Get nomerepresentante
     *
     * @return string 
     */
    public function getNomerepresentante()
    {
        return $this->nomerepresentante;
    }

    /**
     * Set razaosocial
     *
     * @param string $razaosocial
     * @return Pessoa
     */
    public function setRazaosocial($razaosocial)
    {
        $this->razaosocial = $razaosocial;

        return $this;
    }

    /**
     * Get razaosocial
     *
     * @return string 
     */
    public function getRazaosocial()
    {
        return $this->razaosocial;
    }

    /**
     * Set datanascimento
     *
     * @param \DateTime $datanascimento
     * @return Pessoa
     */
    public function setDatanascimento($datanascimento)
    {
        $this->datanascimento = $datanascimento;

        return $this;
    }

    /**
     * Get datanascimento
     *
     * @return \DateTime 
     */
    public function getDatanascimento()
    {
        return $this->datanascimento;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     * @return Pessoa
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string 
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set rgIe
     *
     * @param string $rgIe
     * @return Pessoa
     */
    public function setRgIe($rgIe)
    {
        $this->rgIe = $rgIe;

        return $this;
    }

    /**
     * Get rgIe
     *
     * @return string 
     */
    public function getRgIe()
    {
        return $this->rgIe;
    }

    /**
     * Set orgaoexpedidor
     *
     * @param string $orgaoexpedidor
     * @return Pessoa
     */
    public function setOrgaoexpedidor($orgaoexpedidor)
    {
        $this->orgaoexpedidor = $orgaoexpedidor;

        return $this;
    }

    /**
     * Get orgaoexpedidor
     *
     * @return string 
     */
    public function getOrgaoexpedidor()
    {
        return $this->orgaoexpedidor;
    }

    /**
     * Set cpfCnpj
     *
     * @param string $cpfCnpj
     * @return Pessoa
     */
    public function setCpfCnpj($cpfCnpj)
    {
        $this->cpfCnpj = $cpfCnpj;

        return $this;
    }

    /**
     * Get cpfCnpj
     *
     * @return string 
     */
    public function getCpfCnpj()
    {
        return $this->cpfCnpj;
    }

    /**
     * Set estadocivil
     *
     * @param string $estadocivil
     * @return Pessoa
     */
    public function setEstadocivil($estadocivil)
    {
        $this->estadocivil = $estadocivil;

        return $this;
    }

    /**
     * Get estadocivil
     *
     * @return string 
     */
    public function getEstadocivil()
    {
        return $this->estadocivil;
    }

    /**
     * Set inscricaomunicipal
     *
     * @param string $inscricaomunicipal
     * @return Pessoa
     */
    public function setInscricaomunicipal($inscricaomunicipal)
    {
        $this->inscricaomunicipal = $inscricaomunicipal;

        return $this;
    }

    /**
     * Get inscricaomunicipal
     *
     * @return string 
     */
    public function getInscricaomunicipal()
    {
        return $this->inscricaomunicipal;
    }

    

    /**
     * Set cobFormacorreio
     *
     * @param string $cobFormacorreio
     * @return Pessoa
     */
    public function setCobFormacorreio($cobFormacorreio)
    {
        $this->cobFormacorreio = $cobFormacorreio;

        return $this;
    }

    /**
     * Get cobFormacorreio
     *
     * @return string 
     */
    public function getCobFormacorreio()
    {
        return $this->cobFormacorreio;
    }

    /**
     * Set cobFormaemail
     *
     * @param string $cobFormaemail
     * @return Pessoa
     */
    public function setCobFormaemail($cobFormaemail)
    {
        $this->cobFormaemail = $cobFormaemail;

        return $this;
    }

    /**
     * Get cobFormaemail
     *
     * @return string 
     */
    public function getCobFormaemail()
    {
        return $this->cobFormaemail;
    }

    /**
     * Set cobFormaoutro
     *
     * @param string $cobFormaoutro
     * @return Pessoa
     */
    public function setCobFormaoutro($cobFormaoutro)
    {
        $this->cobFormaoutro = $cobFormaoutro;

        return $this;
    }

    /**
     * Get cobFormaoutro
     *
     * @return string 
     */
    public function getCobFormaoutro()
    {
        return $this->cobFormaoutro;
    }

    /**
     * Set cobCobrardespesaboleto
     *
     * @param integer $cobCobrardespesaboleto
     * @return Pessoa
     */
    public function setCobCobrardespesaboleto($cobCobrardespesaboleto)
    {
        $this->cobCobrardespesaboleto = $cobCobrardespesaboleto;

        return $this;
    }

    /**
     * Get cobCobrardespesaboleto
     *
     * @return integer 
     */
    public function getCobCobrardespesaboleto()
    {
        return $this->cobCobrardespesaboleto;
    }

    /**
     * Set forcaratualizardadoscda
     *
     * @param integer $forcaratualizardadoscda
     * @return Pessoa
     */
    public function setForcaratualizardadoscda($forcaratualizardadoscda)
    {
        $this->forcaratualizardadoscda = $forcaratualizardadoscda;

        return $this;
    }

    /**
     * Get forcaratualizardadoscda
     *
     * @return integer 
     */
    public function getForcaratualizardadoscda()
    {
        return $this->forcaratualizardadoscda;
    }

    /**
     * Set monitorfinanceiro
     *
     * @param integer $monitorfinanceiro
     * @return Pessoa
     */
    public function setMonitorfinanceiro($monitorfinanceiro)
    {
        $this->monitorfinanceiro = $monitorfinanceiro;

        return $this;
    }

    /**
     * Get monitorfinanceiro
     *
     * @return integer 
     */
    public function getMonitorfinanceiro()
    {
        return $this->monitorfinanceiro;
    }

    /**
     * Set nomepai
     *
     * @param string $nomepai
     * @return Pessoa
     */
    public function setNomepai($nomepai)
    {
        $this->nomepai = $nomepai;

        return $this;
    }

    /**
     * Get nomepai
     *
     * @return string 
     */
    public function getNomepai()
    {
        return $this->nomepai;
    }

    /**
     * Set nomemae
     *
     * @param string $nomemae
     * @return Pessoa
     */
    public function setNomemae($nomemae)
    {
        $this->nomemae = $nomemae;

        return $this;
    }

    /**
     * Get nomemae
     *
     * @return string 
     */
    public function getNomemae()
    {
        return $this->nomemae;
    }

    /**
     * Set nomeconjugue
     *
     * @param string $nomeconjugue
     * @return Pessoa
     */
    public function setNomeconjugue($nomeconjugue)
    {
        $this->nomeconjugue = $nomeconjugue;

        return $this;
    }

    /**
     * Get nomeconjugue
     *
     * @return string 
     */
    public function getNomeconjugue()
    {
        return $this->nomeconjugue;
    }

    

    /**
     * Set site
     *
     * @param string $site
     * @return Pessoa
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string 
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set agruparcontratos
     *
     * @param integer $agruparcontratos
     * @return Pessoa
     */
    public function setAgruparcontratos($agruparcontratos)
    {
        $this->agruparcontratos = $agruparcontratos;

        return $this;
    }

    /**
     * Get agruparcontratos
     *
     * @return integer 
     */
    public function getAgruparcontratos()
    {
        return $this->agruparcontratos;
    }

    /**
     * Set obs
     *
     * @param string $obs
     * @return Pessoa
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
     * Set tipousuario
     *
     * @param integer $tipousuario
     * @return Pessoa
     */
    public function setTipousuario($tipousuario)
    {
        $this->tipousuario = $tipousuario;

        return $this;
    }

    /**
     * Get tipousuario
     *
     * @return integer 
     */
    public function getTipousuario()
    {
        return $this->tipousuario;
    }

    /**
     * Set tipofornecedor
     *
     * @param integer $tipofornecedor
     * @return Pessoa
     */
    public function setTipofornecedor($tipofornecedor)
    {
        $this->tipofornecedor = $tipofornecedor;

        return $this;
    }

    /**
     * Get tipofornecedor
     *
     * @return integer 
     */
    public function getTipofornecedor()
    {
        return $this->tipofornecedor;
    }

    /**
     * Set tipoagenteautorizado
     *
     * @param integer $tipoagenteautorizado
     * @return Pessoa
     */
    public function setTipoagenteautorizado($tipoagenteautorizado)
    {
        $this->tipoagenteautorizado = $tipoagenteautorizado;

        return $this;
    }

    /**
     * Get tipoagenteautorizado
     *
     * @return integer 
     */
    public function getTipoagenteautorizado()
    {
        return $this->tipoagenteautorizado;
    }

    /**
     * Set tipovendedor
     *
     * @param integer $tipovendedor
     * @return Pessoa
     */
    public function setTipovendedor($tipovendedor)
    {
        $this->tipovendedor = $tipovendedor;

        return $this;
    }

    /**
     * Get tipovendedor
     *
     * @return integer 
     */
    public function getTipovendedor()
    {
        return $this->tipovendedor;
    }

    /**
     * Set idenderecodefault
     *
     * @param integer $idenderecodefault
     * @return Pessoa
     */
    public function setIdenderecodefault($idenderecodefault)
    {
        $this->idenderecodefault = $idenderecodefault;

        return $this;
    }

    /**
     * Get idenderecodefault
     *
     * @return integer 
     */
    public function getIdenderecodefault()
    {
        return $this->idenderecodefault;
    }

    /**
     * Set solicitacaoalteracaosenhacda
     *
     * @param string $solicitacaoalteracaosenhacda
     * @return Pessoa
     */
    public function setSolicitacaoalteracaosenhacda($solicitacaoalteracaosenhacda)
    {
        $this->solicitacaoalteracaosenhacda = $solicitacaoalteracaosenhacda;

        return $this;
    }

    /**
     * Get solicitacaoalteracaosenhacda
     *
     * @return string 
     */
    public function getSolicitacaoalteracaosenhacda()
    {
        return $this->solicitacaoalteracaosenhacda;
    }

    /**
     * Set campoextra1
     *
     * @param string $campoextra1
     * @return Pessoa
     */
    public function setCampoextra1($campoextra1)
    {
        $this->campoextra1 = $campoextra1;

        return $this;
    }

    /**
     * Get campoextra1
     *
     * @return string 
     */
    public function getCampoextra1()
    {
        return $this->campoextra1;
    }

    /**
     * Set campoextra2
     *
     * @param string $campoextra2
     * @return Pessoa
     */
    public function setCampoextra2($campoextra2)
    {
        $this->campoextra2 = $campoextra2;

        return $this;
    }

    /**
     * Get campoextra2
     *
     * @return string 
     */
    public function getCampoextra2()
    {
        return $this->campoextra2;
    }

    /**
     * Set campoextra3
     *
     * @param string $campoextra3
     * @return Pessoa
     */
    public function setCampoextra3($campoextra3)
    {
        $this->campoextra3 = $campoextra3;

        return $this;
    }

    /**
     * Get campoextra3
     *
     * @return string 
     */
    public function getCampoextra3()
    {
        return $this->campoextra3;
    }

    /**
     * Set campoextra4
     *
     * @param string $campoextra4
     * @return Pessoa
     */
    public function setCampoextra4($campoextra4)
    {
        $this->campoextra4 = $campoextra4;

        return $this;
    }

    /**
     * Get campoextra4
     *
     * @return string 
     */
    public function getCampoextra4()
    {
        return $this->campoextra4;
    }

    /**
     * Set senha
     *
     * @param string $senha
     * @return Pessoa
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get senha
     *
     * @return string 
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set idloja
     *
     * @param integer $idloja
     * @return Pessoa
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
     * Set resumido
     *
     * @param integer $resumido
     * @return Pessoa
     */
    public function setResumido($resumido)
    {
        $this->resumido = $resumido;

        return $this;
    }

    /**
     * Get resumido
     *
     * @return integer 
     */
    public function getResumido()
    {
        return $this->resumido;
    }

    /**
     * Set idcontabil
     *
     * @param integer $idcontabil
     * @return Pessoa
     */
    public function setIdcontabil($idcontabil)
    {
        $this->idcontabil = $idcontabil;

        return $this;
    }

    /**
     * Get idcontabil
     *
     * @return integer 
     */
    public function getIdcontabil()
    {
        return $this->idcontabil;
    }

    /**
     * Set idnaturezajuridica
     *
     * @param integer $idnaturezajuridica
     * @return Pessoa
     */
    public function setIdnaturezajuridica($idnaturezajuridica)
    {
        $this->idnaturezajuridica = $idnaturezajuridica;

        return $this;
    }

    /**
     * Get idnaturezajuridica
     *
     * @return integer 
     */
    public function getIdnaturezajuridica()
    {
        return $this->idnaturezajuridica;
    }

    /**
     * Set idregimeapuracao
     *
     * @param integer $idregimeapuracao
     * @return Pessoa
     */
    public function setIdregimeapuracao($idregimeapuracao)
    {
        $this->idregimeapuracao = $idregimeapuracao;

        return $this;
    }

    /**
     * Get idregimeapuracao
     *
     * @return integer 
     */
    public function getIdregimeapuracao()
    {
        return $this->idregimeapuracao;
    }

    /**
     * Set idcategoriaestabelecimento
     *
     * @param integer $idcategoriaestabelecimento
     * @return Pessoa
     */
    public function setIdcategoriaestabelecimento($idcategoriaestabelecimento)
    {
        $this->idcategoriaestabelecimento = $idcategoriaestabelecimento;

        return $this;
    }

    /**
     * Get idcategoriaestabelecimento
     *
     * @return integer 
     */
    public function getIdcategoriaestabelecimento()
    {
        return $this->idcategoriaestabelecimento;
    }

    /**
     * Set idinscricaosuframa
     *
     * @param integer $idinscricaosuframa
     * @return Pessoa
     */
    public function setIdinscricaosuframa($idinscricaosuframa)
    {
        $this->idinscricaosuframa = $idinscricaosuframa;

        return $this;
    }

    /**
     * Get idinscricaosuframa
     *
     * @return integer 
     */
    public function getIdinscricaosuframa()
    {
        return $this->idinscricaosuframa;
    }

    /**
     * Set interdependenciaempresa
     *
     * @param integer $interdependenciaempresa
     * @return Pessoa
     */
    public function setInterdependenciaempresa($interdependenciaempresa)
    {
        $this->interdependenciaempresa = $interdependenciaempresa;

        return $this;
    }

    /**
     * Get interdependenciaempresa
     *
     * @return integer 
     */
    public function getInterdependenciaempresa()
    {
        return $this->interdependenciaempresa;
    }

    /**
     * Set logincriacao
     *
     * @param string $logincriacao
     * @return Pessoa
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
     * @return Pessoa
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
     * @return Pessoa
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
     * @return Pessoa
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
