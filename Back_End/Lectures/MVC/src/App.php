<?php
// view controller model
namespace Hassan\Mvc;
class App{
    private $url;
    public function __construct($request){
        $this->url = $request->QueryString();
        echo $this->url;
    }
}