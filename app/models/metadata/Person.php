<?php
namespace app\models\metadata;

class Person
{
    private $id;
    private $first_name;
    private $last_name;
    private $email_address;

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getEmailAddress()
    {
        return $this->email_address;
    }

    public function setEmailAddress($email_address)
    {
        $this->email_address = $email_address;
    }


    public function getKeys()
    {
        return array("id", "first_name", "last_name", "email_address");
    }

    public function getValues()
    {
        return array($this->id, $this->first_name, $this->last_name, $this->email_address);
    }

}