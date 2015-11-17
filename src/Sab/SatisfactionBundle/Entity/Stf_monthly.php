<?php

namespace Sab\SatisfactionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stf_monthly
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class Stf_monthly
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\ManyToOne(targetEntity="Sab\SatisfactionBundle\Entity\Stf_user", cascade={"persist"})
     */
    private $user;

    /**
     * @var integer
     *
     * @ORM\Column(name="humor_id", type="integer")
     * @ORM\ManyToOne(targetEntity="Sab\SatisfactionBundle\Entity\Stf_humor", cascade={"persist"})
     */
    private $humor;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="equilibrium_id", type="integer")
     * @ORM\ManyToOne(targetEntity="Sab\SatisfactionBundle\Entity\Stf_equilibruim", cascade={"persist"})
     */
    private $equilibrium;
    
    
    /**
     *
     * @var string
     * @ORM\Column(name="irritant", type="string")
     */
    private $irritant;
    
    
    /**
     * @var integer
     *
     * @ORM\Column(name="month", type="integer", nullable=true)
     */
    private $month;

    /**
     * @var integer
     *
     * @ORM\Column(name="year", type="integer", nullable=true)
     */
    private $year;
    
    
    /**
     * @var \DateTime
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;
    
    /**
     * constructeur 
     */
    public function __construct() {
        $this->dateCreation = new \DateTime();
        $this->month = $this->dateCreation->format("m");
        $this->year = $this->dateCreation->format("Y");
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

   

    /**
     * Set user
     *
     * @param integer $user
     *
     * @return Stf_monthly
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return integer
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set humor
     *
     * @param integer $humor
     *
     * @return Stf_monthly
     */
    public function setHumor($humor)
    {
        $this->humor = $humor;

        return $this;
    }

    /**
     * Get humor
     *
     * @return integer
     */
    public function getHumor()
    {
        return $this->humor;
    }

    /**
     * Set equilibrium
     *
     * @param integer $equilibrium
     *
     * @return Stf_monthly
     */
    public function setEquilibrium($equilibrium)
    {
        $this->equilibrium = $equilibrium;

        return $this;
    }

    /**
     * Get equilibrium
     *
     * @return integer
     */
    public function getEquilibrium()
    {
        return $this->equilibrium;
    }

    /**
     * Set irritant
     *
     * @param string $irritant
     *
     * @return Stf_monthly
     */
    public function setIrritant($irritant)
    {
        $this->irritant = $irritant;

        return $this;
    }

    /**
     * Get irritant
     *
     * @return string
     */
    public function getIrritant()
    {
        return $this->irritant;
    }

    /**
     * Set month
     *
     * @param integer $month
     *
     * @return Stf_monthly
     */
    public function setMonth($month)
    {
        $this->month = $month;

        return $this;
    }

    /**
     * Get month
     *
     * @return integer
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Set year
     *
     * @param integer $year
     *
     * @return Stf_monthly
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Stf_monthly
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }
}
