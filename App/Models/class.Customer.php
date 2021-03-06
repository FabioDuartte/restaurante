<?php

namespace App\Models;

use App\Models\SystemUsers;
use App\Models\Database\CustomerDAO;
use App\Models\Database\LoginDAO;
use App\Models\Database\RegisterDAO;

class Customer extends SystemUsers
{
    private $customerId;
    private $customerBonus = 0;
    private $customerCards;
    private $customerCpf;
    
    public function __construct($userName, $userEmail, $customerCpf, $userPassword)
    {
        parent::__construct($userName, $userEmail, $userPassword);
        $this->customerCpf = $customerCpf;
    }

    public function loginCustomer()
    {
        $loginDAO = new LoginDAO();
        return $loginDAO->checkLoginCustomer($this);
    }

    public function getPassword()
    {
        $registerDAO = new RegisterDAO();
        return $registerDAO->getPassword($this);
    }

    public function registerCustomer()
    {
        $registerDAO = new RegisterDAO();
        return $registerDAO->createRegisterCustomer($this);
    }

    public function checkEmailInDB()
    {
        $registerDAO = new RegisterDAO();
        return $registerDAO->checkEmailInDB($this);
    }

    public function updateRegisterEmailCustomer()
    {
        $registerDAO = new RegisterDAO();
        return $registerDAO->updateRegisterEmailCustomer($this);
    }

    public function updateRegisterPasswordCustomer()
    {
        $registerDAO = new RegisterDAO();
        return $registerDAO->updateRegisterPasswordCustomer($this);
    }

    public function updateCustomerBonus($idCustomer, $newBonus)
    {
        $customerDAO = new CustomerDAO();
        return $customerDAO->updateCustomerBonus($idCustomer, $newBonus);
    }

    public function getCustomerId()
    {
        return $this->customerId;
    }

    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }
    
    public function getCustomerCards()
    {
        return $this->customerCards;
    }

    public function setCustomerCard($customerCard)
    {
        $this->customerCards = $customerCard;
    }

    public function getCustomerBonus()
    {
        return $this->customerBonus;
    }
    
    public function setCustomerBonus($customerBonus)
    {
        $this->customerBonus = $customerBonus;
    }

    public function getCustomerCpf()
    {
        return $this->customerCpf;
    }

    public function setCustomerCpf($customerCpf)
    {
        $this->customerCpf = $customerCpf;
    }

}