<?php

  class Movie {

    public $title;
    public $year;
    public $rating;

    private $boxOffice = 0;
    private $recommended = "no";

    static $counter = 0;

    // PUBLIC METHODS
    public function __construct($_title, $_year, $_rating = 0)
    {
      $this->title = $_title;
      $this->year = $_year;
      $this->rating = $_rating;
      $this->setRecommended();
      self::$counter++;
    }

    public function setBoxOffice($_boxOffice) 
    {
      $this->boxOffice = number_format($_boxOffice, 0, ',', '.');
    }

    public function getBoxOffice()
    {
      if ($this->boxOffice > 0) {
        return $this->boxOffice;
      } else {
        return "[not_registered]";
      }
    }

    public function getRecommended() {
      return $this->recommended;
    }

    // PRIVATE METHODS
    private function setRecommended()
    {
      if ($this->rating == 0) {
        $this->recommended = "uncertain";
      } elseif ($this->rating > 6) {
        $this->recommended = "yes";
      } 
    }

    // STATIC METHODS
    static function getCounter() 
    {
      return self::$counter;
    }

  }