<?php
// class tu PHP5
class User
{
    protected $n1; //thay doi dc o lop con
    private $n2;
    public $name;
    public $email;
    public $age;
    public $password;

    // constructor: thuc thi ngay khi goi New
    public function __construct(
        $name,
        $email,
        $age,
        $password
    ) {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
        $this->password = $password;
    }

    // setter
    function setName($name)
    {
        $this->name = $name;
    }

    // getter
    function getName()
    {
        return $this->name;
    }
}

// init an object
$user1 = new User('Poo', 't1@gmail.com', 50, '123');
$user2 = new User('Phoong', 't2@gmail.com', 60, '123');
// $user1->name = "Poo";
// $user1->email = "test1@gmail.com";
// $user1->setName('Poo');
// $user2->setName('Phoong');

print_r($user1);
print_r($user2);

/**
 * KE THUA - INHERITANCE
 */

class Employee extends User
{
    public $title;
    public function __construct(
        $name,
        $email,
        $age,
        $password,
        $title //new
    ) {
        //tai su dung
        parent::__construct(
            $name,
            $email,
            $age,
            $password
        );
        #comment
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}

//tao user
$e1 = new Employee('a1', 'a@t.com', 44, 'abc123', 'Student');
echo "<br/>" . $e1->getTitle();
