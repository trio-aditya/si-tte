<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class FilterAuth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session()->get('login') != true) {
            $uri = current_url(true);
            // var_dump($uri);die;
            if ($uri->getPath() == "/syaratketentuan") {
            } else if ($uri->getPath() == "/disclaimer") {
            } else if ($uri->getPath() == "/home" || $uri->getPath() == "//") {
            } else {
                return redirect()->to(base_url('auth'));
            }
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        if (session()->get('login') == true) {
            return redirect()->to(base_url('home'));
        }
    }
}
