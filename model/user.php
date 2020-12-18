<?php
class User{
    private $id_user; 
    private $email_user;
    private $passwd_user;

    public function __construct($email_user, $passwd_user){
        $this->email_user=$email_user;
        $this->passwd_user=$passwd_user;
    }


    /**
     * Get the value of id_user
     */ 
    public function getId_user()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     *
     * @return  self
     */ 
    public function setId_user($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Get the value of email_user
     */ 
    public function getEmail_user()
    {
        return $this->email_user;
    }

    /**
     * Set the value of email_user
     *
     * @return  self
     */ 
    public function setEmail_user($email_user)
    {
        $this->email_user = $email_user;

        return $this;
    }

    /**
     * Get the value of passwd_user
     */ 
    public function getPasswd_user()
    {
        return $this->passwd_user;
    }

    /**
     * Set the value of passwd_user
     *
     * @return  self
     */ 
    public function setPasswd_user($passwd_user)
    {
        $this->passwd_user = $passwd_user;

        return $this;
    }
}