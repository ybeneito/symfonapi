<?php

namespace App\Entity;

/**
 * Class User
 * @package App\Entity
 */

 class User
 {
     /**
      * @var integer|null
      */
     private ?int $id;
     /**
      * @var string
      */
     private string $email;
     /**
      * @var string
      */
     private string $password;
     /**
      * @var string
      */
     private string $name;

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
      * Get the value of email
      *
      * @return  string
      */ 
     public function getEmail()
     {
          return $this->email;
     }

     /**
      * Set the value of email
      *
      * @param  string  $email
      *
      * @return  self
      */ 
     public function setEmail(string $email)
     {
          $this->email = $email;

          return $this;
     }

     /**
      * Get the value of password
      *
      * @return  string
      */ 
     public function getPassword()
     {
          return $this->password;
     }

     /**
      * Set the value of password
      *
      * @param  string  $password
      *
      * @return  self
      */ 
     public function setPassword(string $password)
     {
          $this->password = $password;

          return $this;
     }

     /**
      * Get the value of name
      *
      * @return  string
      */ 
     public function getName()
     {
          return $this->name;
     }

     /**
      * Set the value of name
      *
      * @param  string  $name
      *
      * @return  self
      */ 
     public function setName(string $name)
     {
          $this->name = $name;

          return $this;
     }
 }

