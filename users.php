<?php
    include_once "db.php";

    class Users extends Db{
        public $fullname;
        public $id_no;
        public $dob;
        public $gender;
        public $db_id;

        public function selectUser($id){
            $sql = "SELECT * FROM users WHERE id=\"".$id ."\"";
            $stmt = $this->connect()->query($sql);
            while($row = $stmt->fetch()){
                $this->fullname = $row['full_name'];
                $this->id_no = $row['ID_NO'];
                $this->dob = $row['date_of_birth'];
                $this->gender = $row['GENDER'];
                $this->db_id = $row['id'];
    
            }
        }
        
        public function deleteUser($id){
            $sql = "DELETE FROM users WHERE id=?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);
        }

        public function updateUser($column, $new_value, $id){
            $sql = "UPDATE users SET ".$column ."=? WHERE id=?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$new_value, $id]);
        }

    
    }
?>