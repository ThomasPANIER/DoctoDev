<?php

// Classe représentant les rendez-vous stockés en base de données

class Rendezvous
{
  protected int $id;
  protected string $dateHour;
  protected mixed $idPatients;

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
   * @return int
   */
  public function getId(): int
  {
    return $this->id;
  }

  /**
   * @param $id
   * @return void
   */
  public function setId($id): void
  {
    $this->id = $id;
  }

  /**
   * @return string
   */
  public function getDateHour(): string
  {
    return $this->dateHour;
  }

  /**
   * @param $dateHour
   * @return void
   */
  public function setDateHour($dateHour): void
  {
    $this->dateHour = $dateHour;
  }


  /**
   * @return int
   */
  public function getIdPatients(): int
  {
    return $this->idPatients;
  }


  /**
   * @param $idPatients
   * @return void
   */
  public function setIdPatients($idPatients)
  {
    $this->idPatients = $idPatients;
  }

}
