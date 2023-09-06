<?php
class Book{
        private $id;
        private $title;
        private $description;
        private $author;
        private $category;
        private $publishYear;
        private $front_page;

        //Constructor
        public function __construct($id,$title,$description,$author,$category,$publishYear,$front_page){
                $this->id=$id;
                $this->title=$title;
                $this->description=$description;
                $this->author=$author;
                $this->category=$category;
                $this->publishYear=$publishYear;
                $this->front_page=$front_page;
        }

        //Setters
        public function __set($propriety,$value){
                $this->$propriety = $value;
        }

        public function setId($id){
                $this->id=$id;
        }

        public function setTitle($title){
                $this->title=$title;
        }

        public function setDescription($description){
                $this->description=$description;
        }

        public function setAuthor($author){
                $this->author=$author;
        }

        public function setCategory($category){
                $this->category=$category;
        }

        public function setPublishYear($publishYear){
                $this->publishYear=$publishYear;
        }

        public function setFrontPage($front_page){
                $this->front_page=$front_page;
        }

        //Getters
        public function __get($propriety){
                return $this->$propriety;
        }

        public function getId($id){
                return $this->id;
        }

        public function getTitle($title){
                return $this->title;
        }

        public function getDescription($description){
                return $this->description;
        }

        public function getAuthor($author){
                return $this->author;
        }

        public function getCategory($category){
                return $this->category;
        }

        public function getPublishYear($publishYear){
                return $this->publishYear;
        }

        public function getFrontPage($front_page){
                return $this->front_page;
        }
}
?>