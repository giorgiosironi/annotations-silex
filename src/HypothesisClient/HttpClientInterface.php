<?php

namespace eLife\HypothesisClient;

use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;

interface HttpClientInterface
{
    public function send(RequestInterface $request) : PromiseInterface;
}
