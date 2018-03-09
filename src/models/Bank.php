<?php
/**#
 * @Entity @Table(name="banks")
 */
class Bank {

    /**
     * @Id @Column(type="integer") @GeneratedValue
     */
    protected $id;

    /**
     * @Column(type="string")
     */
    protected $name;

    /**
     * @Column(type="string")
     */
    protected $currency;

    /**
     * @OneToMany(targetEntity="User", mappedBy="id")
     * @var User
     */
    protected $user = null;

    public function getName() {
        return $this->name;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function getUser() {
        return $this->user;
    }

    public function setUser(User $user) {
        $this->user = $user;
    }
}