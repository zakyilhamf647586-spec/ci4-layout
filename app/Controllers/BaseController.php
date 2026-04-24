<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

abstract class BaseController extends Controller
{
    protected $helpers = ['url'];

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        $uri = uri_string();
        $allowed = ['login'];

        if (! session()->get('isLoggedIn') && ! in_array($uri, $allowed, true)) {
            redirect()->to(site_url('login'))->send();
            exit;
        }
    }
}
