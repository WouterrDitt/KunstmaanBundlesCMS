<?php

namespace Kunstmaan\DashboardBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * AnalyticsGoalRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AnalyticsGoalRepository extends EntityRepository
{
    /**
     * Get a goal
     *
     * @param int id
     */
    public function getGoal($id)
    {
        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb->select('g')
            ->from('KunstmaanDashboardBundle:AnalyticsGoal', 'g')
            ->where('g.id = :id')
            ->orderBy('g.name', 'asc')
            ->setParameter('id', $id);

        $results = $qb->getQuery()->getResult();
        if ($results) {
            return $results[0];
        }

        return false;
    }

}
