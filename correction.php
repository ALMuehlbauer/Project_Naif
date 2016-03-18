<?php

class Correction{
    private $_idExam;
    private $_questionNum;
    private $_answer;

    /**
     * Correction constructor.
     * @param $idExam
     * @param $questionNum
     * @param $answer
     */
    public function __construct($idExam, $questionNum, $answer)
    {
        $this->_idExam = $idExam;
        $this->_questionNum = $questionNum;
        $this->_answer = $answer;
    }

    /**
     * @return mixed
     */
    public function getIdExam()
    {
        return $this->_idExam;
    }

    /**
     * @return mixed
     */
    public function getQuestionNum()
    {
        return $this->_questionNum;
    }

    /**
     * @param mixed $questionNum
     */
    public function setQuestionNum($questionNum)
    {
        $this->_questionNum = $questionNum;
    }

    /**
     * @return mixed
     */
    public function getAnswer()
    {
        return $this->_answer;
    }

    /**
     * @param mixed $answer
     */
    public function setAnswer($answer)
    {
        $this->_answer = $answer;
    }
}

?>