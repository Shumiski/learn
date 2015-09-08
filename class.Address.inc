<?php

class Address {
    //Properties
    public $streetAddress1;
    public $streetAddress2;
    
    public $cityName;
    public $subdivisionName;
    
    public $postalCode;
    
    public $country;
    
    
    //protected properties
    protected $_addressId;
    protected $_timeCreated;
    protected $_timeUpdated;
    
    
    
    //Methods
    function display(){
        $output ="";
        
        //display street
        $output .= $this->streetAddress1;
        if($this->streetAddress2){
            $output .= "<br/>" . $this->streetAddress2;
        }
        
        //city, subd, postal code
        $output .= "<br/>";
        $output .= $this->cityName . ", " . $this->subdivisionName;
        $output .= " " . $this->postalCode;
        
        //country
        $output .= "<br/>";
        $output .= $this->country;
        
        //return
        return $output;
        
    }
}

?>