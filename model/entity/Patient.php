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
   * @param int $id
   */
  public function setId(int $id): void
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
   * @param string $lastname
   */
  public function setLastname(string $lastname): void
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
   * @param string $firstname
   */
  public function setFirstname(string $firstname): void
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
   * @param string $birthdate
   */
  public function setBirthdate(string $birthdate): void
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
   * @param string $phone
   */
  public function setPhone(string $phone): void
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
   * @param string $mail
   */
  public function setMail(string $mail): void
  {
    $this->mail = $mail;
  }

}
