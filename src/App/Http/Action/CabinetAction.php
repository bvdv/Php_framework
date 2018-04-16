<?php

namespace App\Http\Action;

use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;

class CabinetAction
{
    public function __invok(ServerRequestInterface $request)
    {
        return new HtmlResponse('Cabinet.');
    }
}
