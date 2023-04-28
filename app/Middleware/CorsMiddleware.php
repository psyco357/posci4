<?php

namespace App\Middleware;

use CodeIgniter\Config\Services;
use CodeIgniter\HTTP\ResponseInterface;

class CorsMiddleware implements \CodeIgniter\Middleware\MiddlewareInterface
{
    public function before(\CodeIgniter\HTTP\RequestInterface $request, $arguments = null)
    {
        $response = Services::response();
        $response->setHeader('Access-Control-Allow-Origin', 'http://localhost:8083');
        $response->setHeader('Access-Control-Allow-Headers', 'Origin, X-Requested-With, Content-Type, Accept');
        $response->setHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');

        if ($request->getMethod() == 'OPTIONS') {
            return $response;
        }

        return null;
    }

    public function after(\CodeIgniter\HTTP\RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do nothing
    }
}
