<?php

class User
{
    private $email;
    private $password;
    private $name;
    private $surname;
    private $phone;
    private $city;
    private $adress;
    private $postCode;
    private $admin;
    private $id;




    public function __construct(string $email,string $password, bool $admin,int $id=0,string $name="",string $surname="",string $phone="",string $city="",string $adress="",string $zip=""){
        $this->email = $email;
        $this->password = $password;
        $this->admin = $admin;
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->phone = $phone;
        $this->city = $city;
        $this->adress = $adress;
        $this->postCode = $zip;
    }

    public function getId() : int{
        return $this->id;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    
    public function isAdmin(){
        return $this->admin;
    }
    
    public function getName(){
        return $this->name;
    }
    public function getSurname(){
        return $this->surname;
    }
    public function getPhone(){
        return $this->phone;
    }
    public function getCity(){
        return $this->city;
    }
    public function getAdress(){
        return $this->adress;
    }
    public function getPostCode(){
        return $this->postCode;
    }

    public function setId(int $id){
        $this->id = $id;
    }
    public function setEmail(string $email){
        $this->email = $email;
    }
    public function setPassword(string $password){
        $this->password = $password;
    }
    public function setName(string $name){
        $this->name = $name;
    }
    public function setSurname(string $surname){
        $this->surname = $surname;
    }
    public function setPhone(string $phone){
        $this->phone = $phone;
    }
    public function setCity(string $city){
        $this->city = $city;
    }
    public function setAdress(string $adress){
        $this->adress = $adress;
    }
    public function setPostCode(string $code){
        $this->postCode = $code;
    }


}