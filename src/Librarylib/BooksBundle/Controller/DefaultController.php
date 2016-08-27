<?php

namespace Librarylib\BooksBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LibrarylibBooksBundle:Default:index.html.twig');
    }

    
    public function genreAction($slug)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository('LibrarylibBooksBundle:Books');
        $product = $repository->findByGeneres($slug);

        return $this->render('books/genres.html.twig', array('books' => $product));

    }

}
