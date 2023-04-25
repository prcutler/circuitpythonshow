<?php

declare(strict_types=1);

namespace Modules\Fediverse\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AllowCorsFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null): void
    {
        // Do something here
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null): void
    {
        $response->setHeader('Access-Control-Allow-Origin', '*') // for allowing any domain, insecure
            ->setHeader('Access-Control-Allow-Headers', '*') // for allowing any headers, insecure
            ->setHeader('Access-Control-Allow-Methods', 'GET, OPTIONS') // allows GET and OPTIONS methods only
            ->setHeader('Access-Control-Max-Age', '86400')
            ->setHeader('Cache-Control', 'public, max-age=86400')
            ->setStatusCode(200);
    }
}
