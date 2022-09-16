<?php
// Classe représentant les patients stockés en base de données
class Patient
{
  protected $id;
  protected $lastname;
  protected $firstname;
  protected $birthdate;
  protected $phone;
  protected $mail;

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
  public function getLastname()
  {
    return $this->lastname;
  }

  /**
   * @param mixed $lastname
   */
  public function setLastname($lastname): void
  {
    $this->lastname = $lastname;
  }

  /**
   * @return mixed
   */
  public function getFirstname()
  {
    return $this->firstname;
  }

  /**
   * @param mixed $firstname
   */
  public function setFirstname($firstname): void
  {
    $this->firstname = $firstname;
  }

  /**
   * @return mixed
   */
  public function getBirthdate()
  {
    return $this->birthdate;
  }

  /**
   * @param mixed $birthdate
   */
  public function setBirthdate($birthdate): void
  {
    $this->birthdate = $birthdate;
  }

  /**
   * @return mixed
   */
  public function getPhone()
  {
    return $this->phone;
  }

  /**
   * @param mixed $phone
   */
  public function setPhone($phone): void
  {
    $this->phone = $phone;
  }

  /**
   * @return mixed
   */
  public function getMail()
  {
    return $this->mail;
  }

  /**
   * @param mixed $mail
   */
  public function setMail($mail): void
  {
    $this->mail = $mail;
  }

}
