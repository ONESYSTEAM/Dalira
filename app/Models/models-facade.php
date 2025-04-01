<?php

class ModelsFacade extends DBConnection
{

    function create($data)
    {
        $sql = $this->connect()->prepare("INSERT INTO dalira_table (data) VALUES (?)");
        $sql->execute([$data]);
        return $sql;
    }

    function read()
    {
        $sql = $this->connect()->prepare("SELECT * FROM dalira_table");
        $sql->execute();
        return $sql;
    }

    function update($data, $id)
    {
        $sql = $this->connect()->prepare("UPDATE dalira_table SET data = ? WHERE id = ?");
        $sql->execute([$data, $id]);
        return $sql;
    }

    function delete($id)
    {
        $sql = $this->connect()->prepare("DELETE FROM dalira_table WHERE id = ?");
        $sql->execute([$id]);
        return $sql;
    }
}
