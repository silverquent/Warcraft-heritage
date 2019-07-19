<?php 

class Unit {


  protected $pv ;
  protected $position;
  protected $speed ;

  public function __construct()
  {
      $this->pv= 100;
      $this->speed = 1 ;
      $this->position = [0,0];

  }
 
  public function info()
  {
    return  "j'ai "  . $this->pv . "pv" . $this->speed  ;
  }

  public function walk($direction)
  {
    $tableau=['right', 'left', 'top', 'bottom'];
    for ($i=0 ; $i< count($tableau); $i++)
    {
      if ($direction == $tableau[$i]){
        return $tableau[$i];
      }

    }
return "entrée non valide ";

  }

public function position()
{
  return $this->position[0];
}

public function attack() 
{
  return "A l'atttaque ";
}

}

?>
 