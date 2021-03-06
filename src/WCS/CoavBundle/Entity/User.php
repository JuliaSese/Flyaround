<?php

namespace WCS\CoavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="`user`")
 * @ORM\Entity(repositoryClass="WCS\CoavBundle\Repository\UserRepository")
 */
class User extends BaseUser
{

    public function __toString()
    {
        return $this->firstName." " . $this->lastName;
    }
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
    * @ORM\ManyToMany(targetEntity="WCS\CoavBundle\Entity\Reservation", inversedBy="passenger")
    * @ORM\JoinColumn(nullable=false)
    */
    private $reservations;


    /**
    * @ORM\OneToMany(targetEntity="WCS\CoavBundle\Entity\User", mappedBy="reviewAuthor")
    */
    private $reviewAuthors;

    // /**
    //  * @var string
    //  *
    //  * @ORM\Column(name="userName", type="string", length=32, nullable=false)
    //  */
    // private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=32, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=32, nullable=false)
     */
    private $lastName;

    // /**
    //  * @var string
    //  *
    //  * @ORM\Column(name="email", type="string", length=64, nullable=false)
    //  */
    // private $email;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthDate", type="date", nullable=false)
     */
    private $birthDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creationDate", type="datetime", nullable=false)
     */
    private $creationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=16, nullable=false)
     */
    private $role;

    /**
     * @var int
     *
     * @ORM\Column(name="note", type="smallint", nullable=true)
     */
    private $note;

    /**
     * @var int
     *
     * @ORM\Column(name="phoneNumber", type="integer", nullable=true)
     */
    private $phoneNumber;


    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="WCS\CoavBundle\Entity\Review", inversedBy="reviewss")
     * @ORM\JoinColumn(nullable=true)
     */
    private $reviews;
//
//     /**
//  * @ORM\OneToMany(targetEntity="Review", mappedBy="reviewAuthor")
//  */
// private $reviews;

    /**
     * @var bool
     *
     * @ORM\Column(name="isACertifiedPilot", type="boolean")
     */
    private $isACertifiedPilot;

    /**
     * @var bool
     *
     * @ORM\Column(name="isActive", type="boolean")
     */
    private $isActive;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    // /**
    //  * Set userName
    //  *
    //  * @param string $userName
    //  *
    //  * @return User
    //  */
    // public function setUserName($userName)
    // {
    //     $this->userName = $userName;
    //
    //     return $this;
    // }
    //
    // /**
    //  * Get userName
    //  *
    //  * @return string
    //  */
    // public function getUserName()
    // {
    //     return $this->userName;
    // }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return User
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     *
     * @return User
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set note
     *
     * @param integer $note
     *
     * @return User
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return int
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set reviews
     *
     * @param integer $reviews
     *
     * @return User
     */
    public function setReviews($reviews)
    {
        $this->reviews = $reviews;

        return $this;
    }

    /**
     * Get reviews
     *
     * @return int
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * Set isACertifiedPilot
     *
     * @param boolean $isACertifiedPilot
     *
     * @return User
     */
    public function setIsACertifiedPilot($isACertifiedPilot)
    {
        $this->isACertifiedPilot = $isACertifiedPilot;

        return $this;
    }

    /**
     * Get isACertifiedPilot
     *
     * @return bool
     */
    public function getIsACertifiedPilot()
    {
        return $this->isACertifiedPilot;
    }

    /**
     * Set isActive
     *
     * @param string $isActive
     *
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return string
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reservation = new \Doctrine\Common\Collections\ArrayCollection();
        $this->pilots = new \Doctrine\Common\Collections\ArrayCollection();
        $this->userRateds = new \Doctrine\Common\Collections\ArrayCollection();
        $this->reviewAuthors = new \Doctrine\Common\Collections\ArrayCollection();

        parent::__construct();
    }

    /**
     * Add reservation
     *
     * @param \WCS\CoavBundle\Entity\Reservation $reservation
     *
     * @return User
     */
    public function addReservation(\WCS\CoavBundle\Entity\Reservation $reservation)
    {
        $this->reservation[] = $reservation;

        return $this;
    }

    /**
     * Remove reservation
     *
     * @param \WCS\CoavBundle\Entity\Reservation $reservation
     */
    public function removeReservation(\WCS\CoavBundle\Entity\Reservation $reservation)
    {
        $this->reservation->removeElement($reservation);
    }

    /**
     * Get reservation
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReservation()
    {
        return $this->reservation;
    }

    /**
     * Add pilot
     *
     * @param \WCS\CoavBundle\Entity\Flight $pilot
     *
     * @return User
     */
    public function addPilot(\WCS\CoavBundle\Entity\Flight $pilot)
    {
        $this->pilots[] = $pilot;

        return $this;
    }

    /**
     * Remove pilot
     *
     * @param \WCS\CoavBundle\Entity\Flight $pilot
     */
    public function removePilot(\WCS\CoavBundle\Entity\Flight $pilot)
    {
        $this->pilots->removeElement($pilot);
    }

    /**
     * Get pilots
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPilots()
    {
        return $this->pilots;
    }

    /**
     * Add userRated
     *
     * @param \WCS\CoavBundle\Entity\User $userRated
     *
     * @return User
     */
    public function addUserRated(\WCS\CoavBundle\Entity\User $userRated)
    {
        $this->userRateds[] = $userRated;

        return $this;
    }

    /**
     * Remove userRated
     *
     * @param \WCS\CoavBundle\Entity\User $userRated
     */
    public function removeUserRated(\WCS\CoavBundle\Entity\User $userRated)
    {
        $this->userRateds->removeElement($userRated);
    }

    /**
     * Get userRateds
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUserRateds()
    {
        return $this->userRateds;
    }

    /**
     * Add reviewAuthor
     *
     * @param \WCS\CoavBundle\Entity\User $reviewAuthor
     *
     * @return User
     */
    public function addReviewAuthor(\WCS\CoavBundle\Entity\User $reviewAuthor)
    {
        $this->reviewAuthors[] = $reviewAuthor;

        return $this;
    }

    /**
     * Remove reviewAuthor
     *
     * @param \WCS\CoavBundle\Entity\User $reviewAuthor
     */
    public function removeReviewAuthor(\WCS\CoavBundle\Entity\User $reviewAuthor)
    {
        $this->reviewAuthors->removeElement($reviewAuthor);
    }

    /**
     * Get reviewAuthors
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReviewAuthors()
    {
        return $this->reviewAuthors;
    }

    /**
     * Get reservations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReservations()
    {
        return $this->reservations;
    }

    /**
     * Set phoneNumber
     *
     * @param integer $phoneNumber
     *
     * @return User
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return integer
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
}
