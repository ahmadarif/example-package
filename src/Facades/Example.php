<?php 

namespace AhmadArif\Example\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class Example extends Facade {
 
    protected static function getFacadeAccessor() { return 'example'; }
 
}