<?php

namespace gestCont\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class gestContUserBundle extends Bundle
{
      public function getParent()
    {
        return 'FOSUserBundle';
    }
}
