<?php

namespace App\Entity;

use DateTimeImmutable;

/**
 * Class Comment
 * @package App\Entity
 */

 class Comment
 {
     /**
      * @var integer|null
      */
     private ?int $id;

     /**
      * @var string
      */
     private string $message;
     /**
      * @var \DateTimeInterface
      */
     private \DateTimeInterface $postedAt;
     /**
      * @var User
      */
     private User $author;
    /**
     * @var Post
     */
     private Post $post;


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
      * Get the value of message
      *
      * @return  string
      */ 
     public function getMessage()
     {
          return $this->message;
     }

     /**
      * Set the value of message
      *
      * @param  string  $message
      *
      * @return  self
      */ 
     public function setMessage(string $message)
     {
          $this->message = $message;

          return $this;
     }

     /**
      * Get the value of author
      *
      * @return  User
      */ 
     public function getAuthor()
     {
          return $this->author;
     }

     /**
      * Set the value of author
      *
      * @param  User  $author
      *
      * @return  self
      */ 
     public function setAuthor(User $author)
     {
          $this->author = $author;

          return $this;
     }

     /**
      * Get the value of post
      *
      * @return  Post
      */ 
     public function getPost()
     {
          return $this->post;
     }

     /**
      * Set the value of post
      *
      * @param  Post  $post
      *
      * @return  self
      */ 
     public function setPost(Post $post)
     {
          $this->post = $post;

          return $this;
     }

     public function __construct() {
        $this->postedAt = new DateTimeImmutable();
    }
 }

