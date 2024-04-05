<?php
class Account
{
    public $id;
    public $name;
    public $password;
    public $email;
    public $document;

    public function __construct($name, $document, $email, $password)
    {
        $this->name = $name;
        $this->document = $document;
        $this->email = $email;
        $this->password = $password;
    }
}
?>