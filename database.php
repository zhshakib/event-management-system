<?php
class Database
{

    private $connection;
    public function connect_db()
    {
        $this->connection = mysqli_connect('localhost', 'root', '', 'CRUD');
        if (mysqli_connect_error()) {
            die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_errno());
        }
    }
    public function sanitize($var)
    {
        $return = mysqli_real_escape_string($this->connection, $var);
        return $return;
    }
    public function create($fname, $lname, $email, $gender, $age)
    {
        $sql = "INSERT INTO `crud` (email, password, firstName, lastName, age, gender, user_role, date_created,) VALUES ('$fname', '$lname', '$email', '$gender', '$age')";
        $res = mysqli_query($this->connection, $sql);
        if ($res) {
            return true;
        }
        else {
            return false;
        }
    }
    public function read()
    {
        $sql = "SELECT * FROM `crud`";
        $res = mysqli_query($this->connection, $sql);
        return $res;
    }

    public function Check_User($email, $password)
    {
        $sql = "SELECT `firstName` FROM `users` WHERE email='$email' AND user_pass='$password'";
        $res = mysqli_query($this->connection, $sql);
        if ($res) {
            return mysqli_fetch_assoc($res);
        }
    }



}

$database = new Database();
$database->connect_db();

?>