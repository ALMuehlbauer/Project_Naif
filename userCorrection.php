<?php

class UserCorrection extends Correction{
    private $_idUser;
    private $_userAnswer;

    /**
     * UserCorrection constructor.
     * @param $idExam
     * @param $idUser
     * @param $questionNum
     * @param $answer
     * @param $userAnswer
     */
    public function __construct($idExam, $idUser, $questionNum, $answer, $userAnswer)
    {
        $this->_idUser = $idUser;
        $this->_userAnswer = $userAnswer;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->_idUser;
    }
    
    /**
     * @return mixed
     */
    public function getUserAnswer()
    {
        return $this->_userAnswer;
    }

    /**
     * @param mixed $userAnswer
     */
    public function setUserAnswer($userAnswer)
    {
        $this->_userAnswer = $userAnswer;
    }
}

?>