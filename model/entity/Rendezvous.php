<?php

class Rendezvous
{
  protected $id;
  protected $dateHour;
  protected $idPatients;

  public function __construct(?array $data = null)
  {
    if($data) {
      foreach($data as $key => $value) {
        $setter= "set". ucfirst($key);
        if(method_exists($this, $setter)) {
          $this->$setter(htmlspecialchars($value));
        }
      }
    }
  }

  /**
   * @return mixed
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * @param mixed $id
   */
  public function setId($id): void
  {
    $this->id = $id;
  }

  /**
   * @return mixed
   */
  public function getDateHour()
  {
    return $this->dateHour;
  }

  /**
   * @param mixed $dateHour
   */
  public function setDateHour($dateHour): void
  {
    $this->dateHour = $dateHour;
  }

  /**
   * @return mixed
   */
  public function getIdPatients()
  {
    return $this->idPatients;
  }

  /**
   * @param mixed $idPatients
   */
  public function setIdPatients($idPatients): void
  {
    $this->idPatients = $idPatients;
  }

}
