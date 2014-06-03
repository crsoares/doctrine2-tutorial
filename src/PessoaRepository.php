<?php

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class PessoaRepository extends EntityRepository
{
	public function fetchAllContasReceber()
	{
		//$dql = "SELECT p FROM Pessoa p WHERE p.idloja = 1";
		$dql = "SELECT p, c FROM Pessoa p JOIN p.pessoaConta c JOIN c.receberPessoa cr JOIN c.contaLocal lc WHERE p.idloja = 1";

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
			echo $i . ' ' . $teste->getNome() . '<br />';
			foreach($teste->getPessoaConta() as $val) {
				echo ' IdPessoa: ' . $val->getIdpessoa() . ' IdContaReceber: ' . $val->getIdContaReceber() . '<br />';

			}
			$i++; 
			//echo $teste->getIdcontareceber() . '<br />';
			echo '<br /><br />';
		}
		die;
		//print_r($query[0]->getPessoaConta()[0]->getContaLocal()->getAbreviacaonomelocalcobranca());die;
		$paginator = new Paginator($query, $fetchJoinCollection = false);

		return $paginator;
	}
}