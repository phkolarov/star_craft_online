<?php
/**
 * Created by PhpStorm.
 * User: mst
 * Date: 04-Dec-16
 * Time: 9:36 PM
 */

namespace AppBundle\DTO;


class RegisterUserBindingModel
{
    private $name;
    private $password;
    private $email;
    private $dateTime;
    private $raceId;


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $username
     */
    public function setName($name)
    {
        $this->name = $name;
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

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * @param mixed $dateTime
     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;
    }

    /**
     * @return mixed
     */
    public function getRaceId()
    {
        return $this->raceId;
    }

    /**
     * @param mixed $raceId
     */
    public function setRaceId($raceId)
    {
        $this->raceId = $raceId;
    }
}