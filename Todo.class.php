<?php   

class Todo{
    //tododb - db
    // todo - tabell


    //properties
    private $db;
    private $todo;
    private $todoList = [];

    //constructor
    function __constructor() {
        $this->db = new mysqli('localhost', 'root', 'root', 'tododb');
        if ($this->db->connect_errno > 0) {
            die('fel vid anslutning: ' . $this->db->connect_errno);
        }
    }
    //add todo

    //get thing


    //destructor
}


?>