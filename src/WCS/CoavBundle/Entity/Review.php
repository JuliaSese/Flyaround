<?php

namespace WCS\CoavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Review
 *
 * @ORM\Table(name="review")
 * @ORM\Entity(repositoryClass="WCS\CoavBundle\Repository\ReviewRepository")
 */
class Review
{

    /*Adding personnal methods */
    public function __toString()
    {
            //Return the user object with "[FIRST NAME] - [LAST NAME]" format when __toString is called.
            return $this->text . " test ";
    }

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text")
     */
    private $text;

    /**
    * @ORM\OneToMany(targetEntity="WCS\CoavBundle\Entity\User", mappedBy="reviews")
    * @ORM\JoinColumn(nullable=false)
    */
    private $userRated;


    /**
    * @ORM\OneToMany(targetEntity="WCS\CoavBundle\Entity\User", mappedBy="reviews")
    * @ORM\JoinColumn(nullable=false)
    */

    private $reviewAuthor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publicationDate", type="datetime")
     */
    private $publicationDate;

    /**
     * @var int
     *
     * @ORM\Column(name="note", type="smallint")
     */
    private $note;

    // /**
    // * @ORM\OneToMany(targetEntity="WCS\CoavBundle\Entity\Review", mappedBy="reviews")
    // * @ORM\JoinColumn(nullable=false)
    // */
    // private $user;



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
     * Set text
     *
     * @param string $text
     *
     * @return Review
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set userRated
     *
     * @param integer $userRated
     *
     * @return Review
     */
    public function setUserRated($userRated)
    {
        $this->userRated = $userRated;

        return $this;
    }

    /**
     * Get userRated
     *
     * @return int
     */
    public function getUserRated()
    {
        return $this->userRated;
    }

    /**
     * Set reviewAuthor
     *
     * @param integer $reviewAuthor
     *
     * @return Review
     */
    public function setReviewAuthor($reviewAuthor)
    {
        $this->reviewAuthor = $reviewAuthor;

        return $this;
    }

    /**
     * Get reviewAuthor
     *
     * @return int
     */
    public function getReviewAuthor()
    {
        return $this->reviewAuthor;
    }

    /**
     * Set publicationDate
     *
     * @param \DateTime $publicationDate
     *
     * @return Review
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;

        return $this;
    }

    /**
     * Get publicationDate
     *
     * @return \DateTime
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * Set note
     *
     * @param integer $note
     *
     * @return Review
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
     * Constructor
     */
    public function __construct()
    {
        $this->reviews = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add review
     *
     * @param \WCS\CoavBundle\Entity\User $review
     *
     * @return Review
     */
    public function addReview(\WCS\CoavBundle\Entity\User $review)
    {
        $this->reviews[] = $review;

        return $this;
    }

    /**
     * Remove review
     *
     * @param \WCS\CoavBundle\Entity\User $review
     */
    public function removeReview(\WCS\CoavBundle\Entity\User $review)
    {
        $this->reviews->removeElement($review);
    }

    /**
     * Get reviews
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * Add userRated
     *
     * @param \WCS\CoavBundle\Entity\User $userRated
     *
     * @return Review
     */
    public function addUserRated(\WCS\CoavBundle\Entity\User $userRated)
    {
        $this->userRated[] = $userRated;

        return $this;
    }

    /**
     * Remove userRated
     *
     * @param \WCS\CoavBundle\Entity\User $userRated
     */
    public function removeUserRated(\WCS\CoavBundle\Entity\User $userRated)
    {
        $this->userRated->removeElement($userRated);
    }

    /**
     * Set user
     *
     * @param \WCS\CoavBundle\Entity\User $user
     *
     * @return Review
     */
    public function setUser(\WCS\CoavBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \WCS\CoavBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add user
     *
     * @param \WCS\CoavBundle\Entity\Review $user
     *
     * @return Review
     */
    public function addUser(\WCS\CoavBundle\Entity\Review $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \WCS\CoavBundle\Entity\Review $user
     */
    public function removeUser(\WCS\CoavBundle\Entity\Review $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Add reviewAuthor
     *
     * @param \WCS\CoavBundle\Entity\Review $reviewAuthor
     *
     * @return Review
     */
    public function addReviewAuthor(\WCS\CoavBundle\Entity\Review $reviewAuthor)
    {
        $this->reviewAuthor[] = $reviewAuthor;

        return $this;
    }

    /**
     * Remove reviewAuthor
     *
     * @param \WCS\CoavBundle\Entity\Review $reviewAuthor
     */
    public function removeReviewAuthor(\WCS\CoavBundle\Entity\Review $reviewAuthor)
    {
        $this->reviewAuthor->removeElement($reviewAuthor);
    }
}
