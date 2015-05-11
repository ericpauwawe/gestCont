<?php

namespace gestCont\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
