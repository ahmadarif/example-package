<?php 

namespace AhmadArif\Example\Facade;
 
use Illuminate\Support\Facades\Facade;
 
class Example extends Facade {
 
    protected static function getFacadeAccessor() { return 'example'; }
 
}