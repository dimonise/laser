<?php

namespace AppBundle\Controller\Shop;

use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class SelectorMenuController
{

    public function indexAction(Request $request)
    {
        return $this->templatingEngine->renderResponse('@SyliusShop/Selector/index.html.twig');
    }
}