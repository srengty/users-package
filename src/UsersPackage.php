<?php
namespace Ftsda3\UsersPackage;
class UsersPackage 
{
    public function __construct(private $app=null)
    {
        
    }
    public function ShowHello(){
        echo "Hello Users Package";
    }
}
