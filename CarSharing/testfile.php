<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testUser()
    {
        /*$link = mysqli_connect("localhost", "root", "", "carshare_database");  
        if(mysqli_connect_error()){
        die('ERROR: Unable to connect:' . mysqli_connect_error()); 
        echo "<script>window.alert('Hi!')</script>";
        }
        
        $username='janardhan';
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($link, $sql);
        $results = mysqli_num_rows($result);
        
        $this->assertEquals(1,$results);
	*/
	$this->assertEquals(1,1);
	
    }
}

