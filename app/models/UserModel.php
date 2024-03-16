<?php
class UserModel {
    private $table = 'user';
    private $db;
    
    public function __construct() {
         $this->db = new Database;
    }

    public function getAllUser() { 
         $this->db->query("SELECT * FROM " . $this->table);
         return $this->db->resultAll();
    }
    
    
    public function getUserByEmail($email) {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE email = :email");
        $this->db->bind(':email', $email);
        return $this->db->resultSingle();
    }

    public function getUserById($userId) {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id = :id");
        $this->db->bind(':id', $userId);
        return $this->db->resultSingle();
    }
    
    public function getUser($email, $password) {
        $this->db->query("SELECT * FROM user WHERE email = :email AND password = :password");
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $password);
        return $this->db->resultAll();
    }


    // public function checkLogin($email, $password) {
    //     if ($email === 'admin@admin.com' && $password === 'admin') {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    public function tambahpetugas ($data) {
        $hashedPassword = password_hash($data['password'], PASSWORD_BCRYPT);
        $data['password'] = $hashedPassword;

        $query = "INSERT INTO user (nama, email, password, roles) VALUES (:nama, :email, :password, :roles)";
            $this->db->query($query);
            $this->db->bind(':nama', $data['nama']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':password', $data['password']);
            $this->db->bind(':roles', $data['roles']);
            $this->db->execute();
            return $this->db->rowCount();
    }

    public function deleteUser($id) {
        $query = "DELETE FROM user WHERE id = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    
    public function editUser($data) {
        $query = "UPDATE user SET nama = :nama, email = :email, password = :password, roles = :roles WHERE id = :id";
        $this->db->query($query);
        $this->db->bind(':nama', $data['nama']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':roles', $data['roles']);
        $this->db->bind(':id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    

}
    

?>