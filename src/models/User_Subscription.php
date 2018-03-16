<?php
/**
 * @Entity @Table(name="user_subscriptions")
 */
class User_Subscription {
    /**
     * @Id @GeneratedValue @Column(type="integer")
     */
    protected $id;

    /**
     * @ManyToOne(targetEntity="Subscription")
     */
    protected $subscription;

    /**
     * @ManyToOne(targetEntity="Bank")
     */
    protected $bank;

    /**
     * @ManyToOne(targetEntity="User")
     */
    protected $user;

    /**
     * @Column(type="datetime")
     */
    protected $startDate;

    /**
     * @Column(type="smallint")
     */
    protected $renewalFrequency;

    /**
     * @Column(type="float")
     */
    protected $cost;

    public function getId() {
        return $this->id;
    }

    public function getSubscription() {
        return $this->subscription;
    }

    public function setSubscription(Subscription $subscription) {
        $this->subscription = $subscription;
    }

    public function getBank() {
        return $this->bank;
    }

    public function setBank(Bank $bank) {
        $this->bank = $bank;
    }

    public function getUser() {
        return $this->user;
    }

    public function setUser(User $user) {
        $this->user = $user;
    }

    public function setStartDate(DateTime $startDate) {
        $this->startDate = $startDate;
    }

    public function setRenewalFrequency(integer $renewalFrequency) {
        $this->renewalFrequency = $renewalFrequency;
    }

    public function setCost(float $cost) {
        $this->cost = $cost;
    }
}