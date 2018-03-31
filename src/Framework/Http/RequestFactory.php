<?php

namespace Framework\Http;

class RequestFactory implements RequestInterface
{
    public static function fromGlobals(array $query = null, array $body = null): Request
    {
       return (new Request())
           ->withQueryParams($query ?: $_GET)
           ->withParsedBody($body ?: $_POST);
    }
}