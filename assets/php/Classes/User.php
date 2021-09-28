<?php
class User {

    private $_username ;
    private $_password ;

    /**
     * Get the value of _username
     */ 
    public function get_username()
    {
        return $this->_username;
    }

    /**
     * Set the value of _username
     *
     * @return  self
     */ 
    public function set_username($_username)
    {
        $this->_username = $_username;

        return $this;
    }

    /**
     * Get the value of _password
     */ 
    public function get_password()
    {
        return $this->_password;
    }

    /**
     * Set the value of _password
     *
     * @return  self
     */ 
    public function set_password($_password)
    {
        $this->_password = $_password;

        return $this;
    }
}

?>