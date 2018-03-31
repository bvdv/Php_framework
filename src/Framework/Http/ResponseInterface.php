<?php

namespace Framework\Http;

interface ResponseInterface
{
    public function getBody();

    public function withBody($body);

    public function getStatusCode();

    public function getReasonPhrase();

    public function withStatus($code, $reasonPhrase = '');

    public function getHeaders(): array;

    public function hasHeader($header): bool;

    public function getHeader($header);

    public function withHeader($header, $value);
}