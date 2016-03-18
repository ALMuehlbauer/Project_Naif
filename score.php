<?php

class Score{
    private $_idUser;
    private $_idExam;
    private $_scoreBWP;
    private $_scoreITS;
    private $_scoreAE;
    private $_scoreSK;

    /**
     * Score constructor.
     * @param $idUser
     * @param $idExam
     * @param $scoreBWP
     * @param $scoreITS
     * @param $scoreAE
     * @param $scoreSK
     */
    public function __construct($idUser, $idExam, $scoreBWP, $scoreITS, $scoreAE, $scoreSK)
    {
        $this->_idUser = $idUser;
        $this->_idExam = $idExam;
        $this->_scoreBWP = $scoreBWP;
        $this->_scoreITS = $scoreITS;
        $this->_scoreAE = $scoreAE;
        $this->_scoreSK = $scoreSK;
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
    public function getIdExam()
    {
        return $this->_idExam;
    }

    /**
     * @return mixed
     */
    public function getScoreBWP()
    {
        return $this->_scoreBWP;
    }

    /**
     * @param mixed $scoreBWP
     */
    public function setScoreBWP($scoreBWP)
    {
        $this->_scoreBWP = $scoreBWP;
    }

    /**
     * @return mixed
     */
    public function getScoreITS()
    {
        return $this->_scoreITS;
    }

    /**
     * @param mixed $scoreITS
     */
    public function setScoreITS($scoreITS)
    {
        $this->_scoreITS = $scoreITS;
    }

    /**
     * @return mixed
     */
    public function getScoreAE()
    {
        return $this->_scoreAE;
    }

    /**
     * @param mixed $scoreAE
     */
    public function setScoreAE($scoreAE)
    {
        $this->_scoreAE = $scoreAE;
    }

    /**
     * @return mixed
     */
    public function getScoreSK()
    {
        return $this->_scoreSK;
    }

    /**
     * @param mixed $scoreSK
     */
    public function setScoreSK($scoreSK)
    {
        $this->_scoreSK = $scoreSK;
    }
}

?>