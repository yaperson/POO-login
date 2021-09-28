<?php
include("User.php");
include "../conf.php";

class UserManager 
{
    private $_db;

    public function __construct(PDO $db)
    {
        $this->setDb($db);
    }

    public function setDb($db):UserManager
    {
        $this->_db = $db;
        return $this;
    }

    public function addUser(PDO $db):User
    {
        // Netoyge des donnés envoyées
        strip_tags($_POST['email']);
        strip_tags($_POST['password']);

        $stmt = $db->prepare("INSERT INTO users (name, password) VALUE (?, ?);");
        $stmt->bindParam(1, $user, PDO::PARAM_STR, 4000); 
        
        // Appel de la procédure stockée
        $stmt->execute();

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