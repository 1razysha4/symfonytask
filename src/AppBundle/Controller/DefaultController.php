<?php

namespace AppBundle\Controller;
use AppBundle\Entity\Books;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * to insert the book details
     * @return Response
     */
    public function createAction()
    {
        $books = new Books();
        $books->setName('Doctor with Big Eyes');
        $books->setReleasedate('01.02.2016');
        $books->setLength(200);
        $books->setGeneres('Police');

        $em = $this->getDoctrine()->getManager();

        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        $em->persist($books);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();

        return new Response('Saved new book with id '.$books->getId());
    }

    public function showAction($bookId)
    {
        $product = $this->getDoctrine()
            ->getRepository('AppBundle:Bookd')
            ->find($bookId);

        if (!$bookId) {
            throw $this->createNotFoundException(
                'No product found for id '.$bookId
            );
        }

        // ... do something, like pass the $product object into a template
    }
}



