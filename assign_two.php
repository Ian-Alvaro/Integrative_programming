<?php
    class User
    {
        public $name;
        public $username;
        public $email;

        function __construct($name, $username, $email)
        {
            $this->name = $name;
            $this->uname = $username;
            $this->email = $email;
        }

        function addFriend(){
            echo  $this->name, " added a friend."; 
        }
        function postStatus(){
            echo  $this->name, " posted a status."; 
        }
    }

    $me = new User("Ian Colle Alvaro", "haikyuu16", "ian.alvaro16@gmil.com");
    $me->addFriend();
    echo "<br>";
    $me->postStatus();
?>