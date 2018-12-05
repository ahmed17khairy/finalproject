<?php
class user{
    private $ID = 0;    // each user has a unique ID its an auto increment 
    private $DOB;       // date of birth to 
    public $type;       //  user type (student or teacher)
    public $fName;      // user first name
    public $lName;      //user last name


    //create a user object 
    public function constructor($firstName,$lastName,$userType,$dateOfBirth){
        $newUser = new user ();
        $ID = $ID +1;
        $newUser ->fName = $firstName ;
        $newUser ->lname = $lastName;
        $newUser ->type = $userType;
        $newUser ->DOB = $dateOfBirth;
        $newUser->userID = $ID;

    }
    //function to add course materials 
    //function needs to be implemented 
    public function addCourse(){
        
    }
    //function to remove 
    //function needs to be implemented 
    public function removeCourse(){

    }
}
?>