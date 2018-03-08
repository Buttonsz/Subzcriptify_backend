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


    protected $user;
}