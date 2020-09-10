<?php

class Db{
    private $host = "localhost";
    private $user = "root";
    private $pw = "";
    private $dbName = "Users";

    protected function connect(){
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pw);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }

    public function create($full_name, $id_no, $date_of_birth, $gender){
        $sql = "INSERT INTO users (full_name, ID_NO, date_of_birth, GENDER) VALUES (?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$full_name, $id_no, $date_of_birth, $gender]);
    }

    public function update($column, $new_value, $id){
        $sql = "UPDATE users SET ".$column ."=? WHERE id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$new_value, $id]);
    }

    public function delete($id){
        $sql = "DELETE FROM users WHERE id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }

    public function select(){
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()){
            //echo $row['full_name'] . $row['ID_NO'] .$row['date_of_birth'] .$row['GENDER'] .'<br>';

            echo "<tr>".
                "<td>".$row["id"]."</td>".
                "<td>".$row["full_name"]."</td>".
                "<td>".$row["ID_NO"]."</td>".
                "<td>////</td>".
                "<td>".$row["date_of_birth"]."</td>".
                "<td>".$row["GENDER"]."</td>".
                "<td><button class=\"table-button\">Pregled</button></td>".
                "</tr>";

        }
    }
    
}
?>