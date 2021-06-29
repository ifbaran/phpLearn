<?php
    declare(strict_types = 1);

    class MyConnection
    {
        public $link, $server, $user, $password;

        public function connect()
        {
            $this->link = mysql_connect($this->server, $this->user, $this->password);
        }

        public function __sleep()
        {
            return array('server', 'user', 'pass');
        }

        public function __wakeup()
        {
            if(isset($this->server, $this->user, $this->$pass))
                $this->connect();
        }
    }

    $obj = new MyConnection();
    
    $bin = serialize($obj);
    $obj = unserialize($bin);

    echo (string)$bin."<br>";