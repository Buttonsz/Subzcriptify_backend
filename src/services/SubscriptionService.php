<?php
require_once "bootstrap.php";

class SubscriptionService {

    public function __construct($entityManager) {
        $this->entityManager = $entityManager;
    }

    protected $entityManager;

    public function createSubscription(string $name, string $iconUrl, string $hexColor) {
        $subscription = new Subscription($name, $iconUrl, $hexColor);
        $entityManager->persist($subscription);
    }



}