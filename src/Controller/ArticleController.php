<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleController extends Controller
{
    //To add methods accepted by the function:
    // @method({"GET", "POST"})
    /**
     *@Route("/")
     *@Method({"GET"})
     */
    public function index()
    {
        return $this->render('articles/index.html.twig');
    }

}