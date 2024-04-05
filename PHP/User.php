<?php
require_once('account.php');
class User extends Account
{
    public function __construct($name, $document, $email, $password)
    {
        parent::__construct($name, $document, $email, $password);
    }

    public function printDataUser()
    {
        echo "<br>";
        echo "Users: ";
        echo "<br>";
        echo "Name: $this->name, Document: $this->document, Email: $this->email, Password: " . $this->password;
        echo "<br>";
    }
}
?>