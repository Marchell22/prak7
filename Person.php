<?php
class Person
{
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli("localhost", "root", "", "data_mhs");

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function addPerson($name, $age, $address)
    {
        $name = $this->conn->real_escape_string($name);
        $age = (int)$age;
        $address = $this->conn->real_escape_string($address);

        $sql = "INSERT INTO persons (name, age, address) VALUES ('$name', $age, '$address')";
        $this->conn->query($sql);
    }

    public function getAllPersons()
    {
        $result = $this->conn->query("SELECT * FROM persons");

        $persons = array();

        while ($row = $result->fetch_assoc()) {
            $persons[] = $row;
        }

        return $persons;
    }
}
?>
