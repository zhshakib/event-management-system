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
    public function Create_User($email, $user_pass, $fname, $lname, $gender, $age, $role)
    {
        $sql = "INSERT INTO `users` (email, user_pass, firstName, lastName, age, gender, user_role) VALUES ('$email', '$user_pass', '$fname', '$lname', '$age', $gender, '$role')";
        $res = mysqli_query($this->connection, $sql);
        if ($res) {
            return true;
        }
        else {
            return false;
        }
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