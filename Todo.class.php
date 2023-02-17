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
    public function getTodo () : array {
        $sql = "SELECT * FROM todo ORDER BY date";
        $result = $this->db->query($sql);

        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    //destructor
}


?>