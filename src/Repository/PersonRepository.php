<?php

namespace App\Repository;

use App\Entity\Person;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Person|null find($id, $lockMode = null, $lockVersion = null)
 * @method Person|null findOneBy(array $criteria, array $orderBy = null)
 * @method Person[]    findAll()
 * @method Person[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PersonRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Person::class);
    }

    /**
     * @param Person $person
     * @param string $order
     * @param int $limit
     * @return Person[]
     * Find other contacts based on the current persons last name.
     *
     * $this->getDoctrine()->getRepository(Person::class)->findByRelated($person);
     */
    public function findByRelated(Person $person, string $order = 'ASC', int $limit = 4): array
    {
        return $this->createQueryBuilder('p')
            ->select('
            p.id,
            p.title,
            p.firstName, 
            p.middleName,
            p.lastName,
            p.phoneNumber
            ')
            ->andWhere('p.lastName = :lastName')
            ->andWhere('p.id != :id')
            ->orderBy('p.firstName', $order)
            ->setMaxResults($limit)
            ->setParameter('lastName', $person->getLastName())
            ->setParameter('id', $person->getId())
            ->getQuery()
            ->getResult();
    }

    /**
     * @param int $id
     * @param array $grouping
     * @param string $order
     * @param int $limit
     * @return Person[]
     * Find other contacts based on the current persons id and single/multiple grouping a person is in.
     *
     * $this->getDoctrine()->getRepository(Person::class)->findByGrouping($person->getId(), $person->getGroupings()->getValues());
     */
    public function findByGrouping(int $id, array $grouping, string $order = 'ASC', int $limit = 4) :array
    {
        return $this->createQueryBuilder('p')
            ->innerJoin('p.groupings', 'g')
            ->addSelect('g')
            ->select('
            p.id,
            p.title,
            p.firstName, 
            p.middleName,
            p.lastName,
            p.phoneNumber
            ')
            ->andWhere('g.id IN (:grouping)')
            ->andWhere('p.id != :id')
            ->orderBy('p.firstName', $order)
            ->setMaxResults($limit)
            ->setParameter('grouping', $grouping)
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();
    }
}
