<?php namespace Rajagonda\Gondapay\Facades;

use Illuminate\Support\Facades\Facade;

class Gondapay extends Facade {

    protected static function getFacadeAccessor() { return 'gondapay'; }

}