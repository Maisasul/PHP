<?php

class db{
    public $connection;
    public $query;
    public function __construct($server,$user,$paswword,$dbname)
    {
        $this->connection = mysqli_connect($server,$user,$paswword,$dbname);
    }

    public function select($table,$column){
        $this->query = mysqli_query($this->connection,"SELECT {$column} FROM {$table}");
        return $this;
    }

    public function delete($table,$id){
        $this->query = mysqli_query($this->connection,"DELETE FROM `{$table}` WHERE `id` = {$id}");
        return mysqli_affected_rows($this->connection);
    }

    public function update($table,$data,$id){
        $text = "";
        foreach($data as $key => $value){
            $text .= "`$key` = '$value',";
        }
        $new = rtrim($text,",");
        $this->query = mysqli_query($this->connection,"UPDATE `$table` SET $new WHERE `id` = $id");
        return mysqli_affected_rows($this->connection);
    }

    public function insert($table,$data){
        $column = "";
        $value = "";
        foreach($data as $k => $v){
            $column .= "`$k`,";
            $value .= "'$v',";
        }
        $newcolumn = rtrim($column,",");
        $newvalue = rtrim($value,",");
        $this->query = mysqli_query($this->connection,"INSERT INTO `$table` ($newcolumn) VALUES ($newvalue)");
        return mysqli_affected_rows($this->connection);
    }
    public function all(){
        return mysqli_fetch_all($this->query);
    }

    public function row(){
        return mysqli_fetch_assoc($this->query);
    }

}
?>