<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\FuenteHidrica;
use AppBundle\Form\FuenteHidricaType;

/**
 * FuenteHidrica controller.
 *
 * @Route("/fuentehidrica")
 */
class FuenteHidricaController extends Controller
{
    /**
     * Lists all FuenteHidrica entities.
     *
     * @Route("/", name="fuentehidrica_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $fuenteHidricas = $em->getRepository('AppBundle:FuenteHidrica')->findAll();

        return $this->render('fuentehidrica/index.html.twig', array(
            'fuenteHidricas' => $fuenteHidricas,
        ));
    }

    /**
     * Creates a new FuenteHidrica entity.
     *
     * @Route("/new", name="fuentehidrica_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $fuenteHidrica = new FuenteHidrica();
        $form = $this->createForm('AppBundle\Form\FuenteHidricaType', $fuenteHidrica);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($fuenteHidrica);
            $em->flush();

            return $this->redirectToRoute('fuentehidrica_show', array('id' => $fuenteHidrica->getId()));
        }

        return $this->render('fuentehidrica/new.html.twig', array(
            'fuenteHidrica' => $fuenteHidrica,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a FuenteHidrica entity.
     *
     * @Route("/{id}", name="fuentehidrica_show")
     * @Method("GET")
     */
    public function showAction(FuenteHidrica $fuenteHidrica)
    {
        $deleteForm = $this->createDeleteForm($fuenteHidrica);

        return $this->render('fuentehidrica/show.html.twig', array(
            'fuenteHidrica' => $fuenteHidrica,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing FuenteHidrica entity.
     *
     * @Route("/{id}/edit", name="fuentehidrica_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, FuenteHidrica $fuenteHidrica)
    {
        $deleteForm = $this->createDeleteForm($fuenteHidrica);
        $editForm = $this->createForm('AppBundle\Form\FuenteHidricaType', $fuenteHidrica);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($fuenteHidrica);
            $em->flush();

            return $this->redirectToRoute('fuentehidrica_edit', array('id' => $fuenteHidrica->getId()));
        }

        return $this->render('fuentehidrica/edit.html.twig', array(
            'fuenteHidrica' => $fuenteHidrica,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a FuenteHidrica entity.
     *
     * @Route("/{id}", name="fuentehidrica_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, FuenteHidrica $fuenteHidrica)
    {
        $form = $this->createDeleteForm($fuenteHidrica);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($fuenteHidrica);
            $em->flush();
        }

        return $this->redirectToRoute('fuentehidrica_index');
    }

    /**
     * Creates a form to delete a FuenteHidrica entity.
     *
     * @param FuenteHidrica $fuenteHidrica The FuenteHidrica entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(FuenteHidrica $fuenteHidrica)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fuentehidrica_delete', array('id' => $fuenteHidrica->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
