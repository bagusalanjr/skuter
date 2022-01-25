<?php

class Skuter_model{
    private $db;
    private $table = "skuter";
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSkuter()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        $this->db->execute();
        return $this->db->resultSet();
    }
}