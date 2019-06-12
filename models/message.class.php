<?php

require_once 'db.php';

class message extends db
{
    public $id,$author,$date, $text;
    //get all posts in the database
    public function getAllMessages($table){
        $stmt = $this->conn->prepare("SELECT * FROM ".$table);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        $this->numOfRows = sizeof($result);
        return $result;
    }
    //add function (create), add message to blog
    public function addPost($table = null,$name=null, $titel = null, $bericht=null,$date=null){
        $date = date("Y/m/d");
        $stmt = $this->conn->prepare("INSERT INTO ".$table." (name, titel, message, date)
        VALUES ('".$name."','".$titel."','".$bericht."','".$date."')");
        $stmt->execute();
    }

    //delete function (delete), removes message from blog
    public function deletePostbyId($table = null,$id = null){
        $stmt = $this->conn->prepare("DELETE FROM ".$table." WHERE message_id=".$id);
        $stmt->execute();
    }
    //update function (update), alter message in blog
    public function updatePostbyId($table = null, $name=null,$titel=null, $message=null, $id = null) {
        $stmt = $this->conn->prepare("UPDATE ".$table." SET name = '".$name."',titel = '".$titel."', message = '".$message."' WHERE message_id= ".$id);
        $stmt->execute();
    }
    //fetch a post by its id
    public function getPostById($table = null, $id){
        $stmt = $this->conn->prepare("SELECT * FROM"." ".$table." "."WHERE message_id = " .$id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        $this->numOfRows = sizeof($result);
        return $result;

    }
}
