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

    public function __toString()
    {
        return $this->id.$this->text;
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
         * @ORM\Column(name="text", type="text", nullable=false)
         */
        private $text;


        /**
        * @ORM\ManyToOne(targetEntity="User")
        * @ORM\JoinColumn(nullable=false)
        */
        private $userRated;

        /**
        * @ORM\ManyToOne(targetEntity="User", inversedBy="reviews")
        * @ORM\JoinColumn(nullable=false)
        */
        private $reviewAuthor;

        /**
        * @ORM\OneToMany(targetEntity="WCS\CoavBundle\Entity\User", mappedBy="reviews")
        */
        private $reviewss;

        /**
         * @var \DateTime
         *
         * @ORM\Column(name="publicationDate", type="datetime", nullable=false)
         */
        private $publicationDate;

        /**
         * @var int
         *
         * @ORM\Column(name="note", type="smallint", nullable=false)
         */
        private $note;


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
            $this->reviewss = new \Doctrine\Common\Collections\ArrayCollection();
        }

        /**
         * Add reviewss
         *
         * @param \WCS\CoavBundle\Entity\User $reviewss
         *
         * @return Review
         */
        public function addReviewss(\WCS\CoavBundle\Entity\User $reviewss)
        {
            $this->reviewss[] = $reviewss;

            return $this;
        }

        /**
         * Remove reviewss
         *
         * @param \WCS\CoavBundle\Entity\User $reviewss
         */
        public function removeReviewss(\WCS\CoavBundle\Entity\User $reviewss)
        {
            $this->reviewss->removeElement($reviewss);
        }

        /**
         * Get reviewss
         *
         * @return \Doctrine\Common\Collections\Collection
         */
        public function getReviewss()
        {
            return $this->reviewss;
        }

}
