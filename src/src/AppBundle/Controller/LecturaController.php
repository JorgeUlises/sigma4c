<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Lectura;
use AppBundle\Form\LecturaType;

/**
 * Lectura controller.
 *
 * @Route("/lectura")
 */
class LecturaController extends Controller
{
    /**
     * Lists all Lectura entities.
     *
     * @Route("/", name="lectura_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $lecturas = $em->getRepository('AppBundle:Lectura')->findAll();

        return $this->render('lectura/index.html.twig', array(
            'lecturas' => $lecturas,
        ));
    }

    /**
     * Creates a new Lectura entity.
     *
     * @Route("/new", name="lectura_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $lectura = new Lectura();
        $form = $this->createForm('AppBundle\Form\LecturaType', $lectura);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($lectura);
            $em->flush();

            return $this->redirectToRoute('lectura_show', array('id' => $lectura->getId()));
        }

        return $this->render('lectura/new.html.twig', array(
            'lectura' => $lectura,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Lectura entity.
     *
     * @Route("/{id}", name="lectura_show")
     * @Method("GET")
     */
    public function showAction(Lectura $lectura)
    {
        $deleteForm = $this->createDeleteForm($lectura);
        $em = $this->getDoctrine()->getManager();
        $pmetro = $em->getRepository('AppBundle:PuntoControl')->findById($lectura->getId());
        return $this->render('lectura/show.html.twig', array(
            'lectura' => $lectura,
            'pcontrl' => $pmetro,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Lectura entity.
     *
     * @Route("/{id}/edit", name="lectura_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Lectura $lectura)
    {
        $deleteForm = $this->createDeleteForm($lectura);
        $editForm = $this->createForm('AppBundle\Form\LecturaType', $lectura);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($lectura);
            $em->flush();

            return $this->redirectToRoute('lectura_edit', array('id' => $lectura->getId()));
        }

        return $this->render('lectura/edit.html.twig', array(
            'lectura' => $lectura,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Lectura entity.
     *
     * @Route("/{id}", name="lectura_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Lectura $lectura)
    {
        $form = $this->createDeleteForm($lectura);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($lectura);
            $em->flush();
        }

        return $this->redirectToRoute('lectura_index');
    }

    /**
     * Creates a form to delete a Lectura entity.
     *
     * @param Lectura $lectura The Lectura entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Lectura $lectura)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('lectura_delete', array('id' => $lectura->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
