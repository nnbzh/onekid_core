<?php

namespace App\Exceptions;

use Exception;

class RequestAnotherCode extends Exception
{
    protected $message  = 'Запросите код повторно.';
    protected $code     = 400;
}