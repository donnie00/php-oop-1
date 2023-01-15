<?php

class Movie
{
   private $title;
   private $language;
   private $director;
   private $year;
   private $genre;
   private $rating;

   function __construct($_title, $_language, $_director, $_year, $_genre, $_rating)
   {
      $this->setTitle($_title);
      $this->setLanguage($_language);
      $this->setDirector($_director);
      $this->setYear($_year);
      $this->setGenre($_genre);
      $this->setRating($_rating);
   }

   public function getTitle()
   {
      return $this->title;
   }

   public function setTitle($_title)
   {
      $this->title = $_title;

      return $this;
   }

   public function getLanguage()
   {
      return $this->language;
   }

   public function setLanguage($_language)
   {
      $this->language = $_language;

      return $this;
   }

   public function getDirector()
   {
      return $this->director;
   }

   public function setDirector($_director)
   {
      $this->director = $_director;
   }

   public function getYear()
   {
      return $this->year;
   }

   public function setYear($_year)
   {
      $this->year = $_year;
   }

   public function getGenre()
   {
      return $this->genre;
   }

   public function setGenre($_genre)
   {
      $this->genre = $_genre;

      return $this;
   }

   public function getRating()
   {
      return $this->rating;
   }

   public function setRating($_rating)
   {
      $this->rating = $_rating;

      return $this;
   }

   public function convertRating()
   {
      $newRating = $this->rating / 2;

      $this->setRating($newRating);
   }
}
