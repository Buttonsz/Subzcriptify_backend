<?php

use Doctrine\ORM\EntityManagerInterface;

class SubscriptionService {

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager) {
        $this->entityManager = $entityManager;
    }

    public function createSubscription(string $name, string $iconUrl, string $hexColor) {
        $subscription = new Subscription($name, $iconUrl, $hexColor);
        $this->entityManager->persist($subscription);
        $this->entityManager->flush();
    }

}