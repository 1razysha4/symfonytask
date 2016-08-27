<?php

namespace Librarylib\BooksBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Librarylib\BooksBundle\Entity\Books;
use Librarylib\BooksBundle\Form\BooksType;

/**
 * Books controller.
 *
 * @Route("/books")
 */
class BooksController extends Controller
{
    /**
     * Lists all Books entities.
     *
     * @Route("/", name="books_index")
     * @Method({"GET","POST"})
     */

    public function indexAction(Request $request)
    {
        $data = $request->request->get('genre');

        if ($data) {

            return $this->redirectToRoute('librarylib_books_search', array('slug' => $data));
        }
        $em = $this->getDoctrine()->getManager();
        $books = $em->getRepository('LibrarylibBooksBundle:Books')->findAll();
        return $this->render('books/index.html.twig', array(
            'books' => $books,
        ));
    }

    /**
     * Creates a new Books entity.
     *
     * @Route("/new", name="books_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $book = new Books();
        $form = $this->createForm('Librarylib\BooksBundle\Form\BooksType', $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($book);
            $em->flush();

            return $this->redirectToRoute('books_show', array('id' => $book->getId()));
        }

        return $this->render('books/new.html.twig', array(
            'book' => $book,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Books entity.
     *
     * @Route("/{id}", name="books_show")
     * @Method("GET")
     */
    public function showAction(Books $book)
    {
        $deleteForm = $this->createDeleteForm($book);

        return $this->render('books/show.html.twig', array(
            'book' => $book,
            'delete_form' => $deleteForm->createView(),
        ));
    }


    /**
     * Displays a form to edit an existing Books entity.
     *
     * @Route("/{id}/edit", name="books_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Books $book)
    {

        $deleteForm = $this->createDeleteForm($book);
        $editForm = $this->createForm('Librarylib\BooksBundle\Form\BooksType', $book);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($book);
            $em->flush();

            return $this->redirectToRoute('books_edit', array('id' => $book->getId()));
        }

        return $this->render('books/edit.html.twig', array(
            'book' => $book,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }


    /**
     * Deletes a Books entity.
     *
     * @Route("/{id}", name="books_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Books $book)
    {
        $form = $this->createDeleteForm($book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($book);
            $em->flush();
        }

        return $this->redirectToRoute('books_index');
    }



    /**
     * Creates a form to delete a Books entity.
     *
     * @param Books $book The Books entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Books $book)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('books_delete', array('id' => $book->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }



}
