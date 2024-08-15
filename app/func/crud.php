<?php

class CRUD extends DB
{
    public function create($table, $col, $value)
    {
        return mysqli_query(
            $this->con,
            "INSERT INTO $table ($col) VALUES ($value)"
        );
    }

    public function read($table, $opsi = "")
    {
        return mysqli_query(
            $this->con,
            "SELECT * FROM $table $opsi"
        );
    }

    public function update($table, $value, $where)
    {
        return mysqli_query(
            $this->con,
            "UPDATE $table SET $value WHERE $where"
        );
    }

    public function delete($table, $key, $value)
    {
        return mysqli_query(
            $this->con,
            "DELETE FROM $table WHERE $key = '$value'"
        );
    }
}
