<?php
/**
 * Created by PhpStorm.
 * User: mst
 * Date: 04-Dec-16
 * Time: 7:02 PM
 */

namespace AppBundle\DTO;


class LoginUserBindingModel
{
    private $username;

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
    private $password;
}