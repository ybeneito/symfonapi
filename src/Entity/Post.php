<?php

namespace App\Entity;

use DateTimeImmutable;

/**
 * Class Post
 * @package App\Entity
 */

 class Post
 {
     /**
      * @var integer|null
      */
     private ?int $id;
     /**
      * @var string
      */
     private string $content;
     /**
      * @var \DateTimeInterface
      */
     private \DateTimeInterface $postedAt;
     /**
      * @var User
      */
     private User $author;
    /**
     * @var array
     */
     private array $likedBy;

	

	 public function __construct() {
        $this->postedAt = new DateTimeImmutable();
    }

     /**
      * Get the value of id
      *
      * @return  integer|null
      */ 
     public function getId()
     {
          return $this->id;
     }

     /**
      * Get the value of content
      *
      * @return  string
      */ 
     public function getContent()
     {
          return $this->content;
     }

     /**
      * Set the value of content
      *
      * @param  string  $content
      *
      * @return  self
      */ 
     public function setContent(string $content)
     {
          $this->content = $content;

          return $this;
     }
 }

