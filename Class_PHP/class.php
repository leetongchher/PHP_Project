<?php
    class Crud{
        public $db = "localhost";
        
        function insert(){
            echo "Insert into table SET...";
        }
        function select(){
            echo "Select * from table;";
        }
        function update(){
            echo "Update fields SET ... WHERE id=..;";
        }
        function delete(){
            echo "Delete from table WHERE id=..;";
        }
    }
    $ins = new Crud();
    echo $ins->db;
    echo "<br>";
    echo $ins->select();

?>