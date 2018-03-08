<?php
/**
 * @Entity @Table(name="users")
 */
class User {
    /**
     * @Id @GeneratedValue @Column(type="integer")
     */
    protected $id;
}