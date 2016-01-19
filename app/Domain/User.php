<?php  namespace App\Domain;

/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 12/30/2015
 * Time: 12:28 AM
 */

class User
{
    private $ID;
    private $name;
    private $contactNo;
    private $password;
    private $role;


    /**
     * @return the ID
     */
    public function getID() {
        return $this->ID;
    }

    /**
     * @param ID the ID to set
     */
    public function setID($ID) {
        $this->ID = $ID;
    }

    /**
     * @return the Role
     */
    public function getRole() {
        return $this->role;
    }

    /**
     * @param ID the Role to set
     */
    public function setRole($Role) {
        $this->role = $Role;
    }

    /**
     * @return the name
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param name the name to set
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @return the contactNo
     */
    public function getContactNo() {
        return $this->contactNo;
    }

    /**
     * @param contactNo the contactNo to set
     */
    public function setContactNo($contactNo) {
        $this->contactNo = $contactNo;
    }

    /**
     * @return the password
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * @param password the password to set
     */
    public function setPassword($password) {
        $this->password = $password;
    }

}