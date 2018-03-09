<?php
/**
 * @Entity @Table(name="users")
 */
class User {
    /**
     * @Id @GeneratedValue @Column(type="integer")
     */
    protected $id;

    /**
     * @Column(type="string")
     */
    protected $username;

    /**
     *@Column(type="string")
     */
    protected $email;

    /**
     *@Column(type="string")
     */
    protected $firstName;

    /**
     *@Column(type="string")
     */
    protected $lastName;
}