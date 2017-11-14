<?php

class movie {
    private $name=null;
    private $duration=120;
    private $description="description ";
    
    public function __construc($name = " ")
    {
        $this->name = $name;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name = " ")
    {
        $this->name=$name;
    }
    
    public function getDuration()
    {
        return $this->duration;
    }
    
    public function setDuration($duration = " ")
    {
        $this->duration=$duration;
    }
    
    public function getDescription()
    {
        return $this->description;
    }
    
    public function setDescription($description = " ")
    {
        $this->description=$description;
    }
    
}

$movie = new movie;

echo $movie->getName();
$movie->setName("Taxi 3 ");
echo $movie->getName();
echo $movie->getDescription();
$movie->setDescription("c'est caca ");
echo $movie->getDescription();
echo $movie->getDuration();


?>