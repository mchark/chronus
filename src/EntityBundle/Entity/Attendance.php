<?php

namespace EntityBundle\Entity;

/**
 * Attendance
 */
class Attendance
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $attendanceDate;

    /**
     * @var \DateTime
     */
    private $inTime;

    /**
     * @var \DateTime
     */
    private $outTime;

    /**
     * @var \DateTime
     */
    private $presence;

    /**
     * @var \DateTime
     */
    private $pause;
	
   /**
     * @var Person
     */
    private $person;
	
    /**
     * @var Transaction
     */
    private $transactions;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set attendanceDate
     *
     * @param \DateTime $attendanceDate
     *
     * @return Attendance
     */
    public function setAttendanceDate($attendanceDate)
    {
        $this->attendanceDate = $attendanceDate;

        return $this;
    }

    /**
     * Get attendanceDate
     *
     * @return \DateTime
     */
    public function getAttendanceDate()
    {
        return $this->attendanceDate;
    }

    /**
     * Set inTime
     *
     * @param \DateTime $inTime
     *
     * @return Attendance
     */
    public function setInTime($inTime)
    {
        $this->inTime = $inTime;

        return $this;
    }

    /**
     * Get inTime
     *
     * @return \DateTime
     */
    public function getInTime()
    {
        return $this->inTime;
    }

    /**
     * Set outTime
     *
     * @param \DateTime $outTime
     *
     * @return Attendance
     */
    public function setOutTime($outTime)
    {
        $this->outTime = $outTime;

        return $this;
    }

    /**
     * Get outTime
     *
     * @return \DateTime
     */
    public function getOutTime()
    {
        return $this->outTime;
    }

    /**
     * Set presence
     *
     * @param \DateTime $presence
     *
     * @return Attendance
     */
    public function setPresence($presence)
    {
        $this->presence = $presence;

        return $this;
    }

    /**
     * Get presence
     *
     * @return \DateTime
     */
    public function getPresence()
    {
        return $this->presence;
    }

    /**
     * Set pause
     *
     * @param \DateTime $pause
     *
     * @return Attendance
     */
    public function setPause($pause)
    {
        $this->pause = $pause;

        return $this;
    }

    /**
     * Get pause
     *
     * @return \DateTime
     */
    public function getPause()
    {
        return $this->pause;
    }
    /**
     * Set person
     *
     * @param Person $person
     *
     * @return Attendance
     */
    public function setPerson($person)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get person
     *
     * @return Person
     */
    public function getPerson()
    {
        return $this->pause;
    }
	
    /**
     * Set transactions
     *
     * @param Transaction $transactions
     *
     * @return Attendance
     */
    public function setTransactions($transactions)
    {
        $this->transactions = $transactions;

        return $this;
    }

    /**
     * Get transactions
     *
     * @return Transaction
     */
    public function getTransactions()
    {
        return $this->transactions;
    }
}

