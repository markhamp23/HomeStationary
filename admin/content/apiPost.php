<?php
class Post{

    // table columns
    public $description;
    public $city;
    public $country;
    public $imageown;
    public $link;
    public $imageurl;

    //Create
    public function create(){
		
    // sanitize
    $this->description=htmlspecialchars(strip_tags($this->description));
    $this->autor=htmlspecialchars(strip_tags($this->autor));
    $this->imageurl=htmlspecialchars(strip_tags($this->imageurl));
    $this->city=htmlspecialchars(strip_tags($this->city));
    $this->country=htmlspecialchars(strip_tags($this->country));
 
    // bind values
    $stmt->bindParam(":description", $this->description);
    $stmt->bindParam(":autor", $this->autor);
    $stmt->bindParam(":imageurl", $this->imageurl);
    $stmt->bindParam(":city", $this->city);
    $stmt->bindParam(":country", $this->country);
 
    return true;
    }
}