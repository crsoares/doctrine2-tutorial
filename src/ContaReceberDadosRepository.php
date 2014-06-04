<?php

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class ContaReceberDadosRepository extends EntityRepository
{
	public function fetchAllContasReceber()
	{
		//$dql = "SELECT p FROM Pessoa p WHERE p.idloja = 1";
		$dql = "SELECT c FROM ContaReceberDados c JOIN c.receberPessoa p JOIN c.contaLancamento cr WHERE c.idloja = 1 AND c.idcontareceber > 0";

		$query = $this->getEntityManager()
					  ->createQuery($dql)
					  //->useResultCache(true)
					  ->getResult();
					  //->setFirstResult(0)
				      //->setMaxResults(100);
		//echo $query[0]->getIdPessoa() . '<br />';
		//print_r($query);die;
		$i = 1;
		foreach($query as $teste) {
			echo $i . ' ' . $teste->getReceberPessoa()->getNome() . ' IdPessoa: ' . $teste->getIdpessoa() . ' IdContaReceber: ' . $teste->getIdcontareceber() . '<br />';
			$i++;
		}
		die;
		//print_r($query[0]->getPessoaConta()[0]->getContaLocal()->getAbreviacaonomelocalcobranca());die;
		$paginator = new Paginator($query, $fetchJoinCollection = false);

		return $paginator;
	}
}