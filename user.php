<?php

class User{
    private $_id;
    private $_name;
    private $_surname;
    private $_password;
    private $_email;
    private $_ausbildungYear;
    private $_ausbildungType;
    private $_picture;
    private $_score;

    /**
     * User constructor.
     * @param $name
     * @param $surname
     * @param $password
     * @param $email
     * @param $ausbildungYear
     * @param $ausbildungType
     */
    public function __construct($name, $surname, $password, $email, $ausbildungYear, $ausbildungType)
    {
        $this->_name = $name;
        $this->_surname = $surname;
        $this->_password = $password;
        $this->_email = $email;
        $this->_ausbildungYear = $ausbildungYear;
        $this->_ausbildungType = $ausbildungType;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->_surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname)
    {
        $this->_surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->_password = $password;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * @return mixed
     */
    public function getAusbildungYear()
    {
        return $this->_ausbildungYear;
    }

    /**
     * @param mixed $ausbildungYear
     */
    public function setAusbildungYear($ausbildungYear)
    {
        $this->_ausbildungYear = $ausbildungYear;
    }

    /**
     * @return mixed
     */
    public function getAusbildungType()
    {
        return $this->_ausbildungType;
    }

    /**
     * @param mixed $ausbildungType
     */
    public function setAusbildungType($ausbildungType)
    {
        $this->_ausbildungType = $ausbildungType;
    }

    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->_picture;
    }

    /**
     * @param mixed $picture
     */
    public function setPicture($picture)
    {
        $this->_picture = $picture;
    }

    /**
     * @return mixed
     */
    public function getScore()
    {
        return $this->_score;
    }

    /**
     * @param mixed $score
     */
    public function setScore($score)
    {
        $this->_score = $score;
    }
}

?>
