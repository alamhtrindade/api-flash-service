<?php

class User{
  public $id;
  public $name;
  public $email;
  public $phone;
  public $photo;
  public $password;
  public $street;
  public $district;
  public $city;
  
  public function __construct() { }
  
  public function setId($id){
    $this->id = $id;
  }
  public function getId(){
    return $this->id;
  }

  public function setName($name){
    $this->name = $name;
  }
  public function getName(){
    return $this->name;
  }

  public function setEmail($email){
    $this->email = $email;
  }
  public function getEmail(){
    return $this->email;
  }

  public function setPhone($phone){
    $this->phone = $phone;
  }
  public function getPhone(){
    return $this->phone;
  }

  public function setAddress($address){
    $this->address = $address;
  }
  public function getAddress(){
    return $this->address;
  }

  public function setPhoto($photo){
    $this->photo = $photo;
  }
  public function getPhoto(){
    return $this->photo;
  }

  public function setPassword($password){
    $this->password = $password;
  }
  public function getPassword(){
    return $this->password;
  }

  public function setStreet($street){
    $this->street = $street;
  }
  public function getStreet(){
    return $this->street;
  }

  public function setDistrict($district){
    $this->district = $district;
  }
  public function getDistrict(){
    return $this->district;
  }

  public function setCity($city){
    $this->city = $city;
  }
  public function getCity(){
    return $this->city;
  }
}