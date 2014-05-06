<?php
namespace Application\Repository;

use Doctrine\ORM\EntityRepository;

class KeyboardRepository extends EntityRepository {

	public function findFromSearch($params) {
		$qb = $this->createQueryBuilder('search');
		$qb->select('kb');
		$qb->from('Application\Entity\Keyboard', 'kb');
		if(array_key_exists('name', $params)) {
			$qb->andWhere($qb->expr()->like('kb.name', ':name'));
			$qb->setParameter('name', '%' . $params['name'] . '%');
		}
		if(array_key_exists('switch', $params)) {
			$qb->andWhere($qb->expr()->eq('kb.switch', ':switch'));
			$qb->setParameter('switch', $params['switch']);
		}
		if(array_key_exists('backlighting', $params)) {
			$qb->andWhere($qb->expr()->eq('kb.backlighting', ':backlighting'));
			$qb->setParameter('backlighting', $params['backlighting']);
		}
		if(array_key_exists('price', $params)) {
			$qb->andWhere($qb->expr()->lt('kb.price', ':price'));
			$qb->setParameter('price', $params['price']);
		}

		return $qb->getQuery()->getResult();
	}

}
