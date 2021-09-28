<?php
include("User.php");
class UserManager 
{
    private $_db;

    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function setDb($db):UserManager
    {
        $this->_db = $db;
        return $this;
    }

    public function add(User $user):User
    {
        // TODO
        return $user;

    }

    public function delete(User $user)//:bool
    {
        // TODO
    }

    public function update(User $user)//:bool
    {
        // TODO
    }
    
    public function getOne(int $id)
    {
        $sth = $this->_db->prepare('SELECT id, email FROM users WHERE id = ?;');
        $sth->execute(array($id));
        $ligne = $sth->fetch();
        $user = new User($ligne);
        return $user;
    }
    
    public function getList():array
    {
        $userList = array();

        $request = $this->_db->query('SELECT id, email FROM users;');
        while ($ligne = $request->fetch(PDO::FETCH_ASSOC)) {
            $user = new User($ligne);
            $userList[] = $user;
        }
        return $userList;
    }
}

?>