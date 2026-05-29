<?php
namespace Hassan\Mvc;
class Request{
    public function QueryString(){
        return $_SERVER['QUERY_STRING'];
    }
}