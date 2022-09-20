<?php

// Classe représentant les patients stockés en base de données

class Patient
{
  protected int $id;
  protected string $lastname;
  protected string $firstname;
  protected string $birthdate;
  protected string $phone;
  protected string $mail;

  public function __construct(?array $data = null)
  {
    if ($data) {
      foreach ($data as $key => $value) {
        $setter = "set" . ucfirst($key);
        if (method_exists($this, $setter)) {
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
  public function setId($id)
  {
    $this->id = $id;
  }


  /**
   * @return string
   */
  public function getLastname(): string
  {
    return $this->lastname;
  }


  /**
   * @param $lastname
   * @return void
   */
  public function setLastname($lastname)
  {
    $this->lastname = $lastname;
  }

  /**
   * @return string
   */
  public function getFirstname(): string
  {
    return $this->firstname;
  }

  /**
   * @param $firstname
   * @return void
   */
  public function setFirstname($firstname)
  {
    $this->firstname = $firstname;
  }

  /**
   * @return string
   */
  public function getBirthdate(): string
  {
    return $this->birthdate;
  }

  /**
   * @param $birthdate
   * @return void
   */
  public function setBirthdate($birthdate)
  {
    $this->birthdate = $birthdate;
  }

  /**
   * @return string
   */
  public function getPhone(): string
  {
    return $this->phone;
  }

  /**
   * @param $phone
   * @return void
   */
  public function setPhone($phone)
  {
    $this->phone = $phone;
  }

  /**
   * @return string
   */
  public function getMail(): string
  {
    return $this->mail;
  }

  /**
   * @param $mail
   * @return void
   */
  public function setMail($mail)
  {
    $this->mail = $mail;
  }

}
