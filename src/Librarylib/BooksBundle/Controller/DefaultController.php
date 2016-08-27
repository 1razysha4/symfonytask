<?php

namespace Librarylib\BooksBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LibrarylibBooksBundle:Default:index.html.twig');
    }
}
