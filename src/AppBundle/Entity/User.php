<?php
/**
 * Created by PhpStorm.
 * User: razysha
 * Date: 8/24/16
 * Time: 12:27 PM
 */

// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Propel\User as User;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")

class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
/**  protected $id;

    public function __construct()
    {
        parent::__construct();

    }
}
*/