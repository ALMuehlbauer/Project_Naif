<?php

class Exam{
    private $_id;
    private $_year;

    /**
     * Exam constructor.
     * @param $year
     */
    public function __construct($year)
    {
        $this->_year = $year;
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
    public function getYear()
    {
        return $this->_year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->_year = $year;
    }
}

?>