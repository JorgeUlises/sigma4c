<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\PuntoControl;
use AppBundle\Form\PuntoControlType;

/**
 * PuntoControl controller.
 *
 * @Route("/puntocontrol")
 */
class PuntoControlController extends Controller
{
    /**
     * Lists all PuntoControl entities.
     *
     * @Route("/", name="puntocontrol_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $puntoControls = $em->getRepository('AppBundle:PuntoControl')->findAll();

        return $this->render('puntocontrol/index.html.twig', array(
            'puntoControls' => $puntoControls,
        ));
    }

    /**
     * Creates a new PuntoControl entity.
     *
     * @Route("/new", name="puntocontrol_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $puntoControl = new PuntoControl();
        $form = $this->createForm('AppBundle\Form\PuntoControlType', $puntoControl);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($puntoControl);
            $em->flush();

            return $this->redirectToRoute('puntocontrol_show', array('id' => $puntoControl->getId()));
        }

        return $this->render('puntocontrol/new.html.twig', array(
            'puntoControl' => $puntoControl,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a PuntoControl entity.
     *
     * @Route("/{id}", name="puntocontrol_show")
     * @Method("GET")
     */
    public function showAction(PuntoControl $puntoControl)
    {
        $deleteForm = $this->createDeleteForm($puntoControl);

        return $this->render('puntocontrol/show.html.twig', array(
            'puntoControl' => $puntoControl,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing PuntoControl entity.
     *
     * @Route("/{id}/edit", name="puntocontrol_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, PuntoControl $puntoControl)
    {
        $deleteForm = $this->createDeleteForm($puntoControl);
        $editForm = $this->createForm('AppBundle\Form\PuntoControlType', $puntoControl);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($puntoControl);
            $em->flush();

            return $this->redirectToRoute('puntocontrol_edit', array('id' => $puntoControl->getId()));
        }

        return $this->render('puntocontrol/edit.html.twig', array(
            'puntoControl' => $puntoControl,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a PuntoControl entity.
     *
     * @Route("/{id}", name="puntocontrol_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, PuntoControl $puntoControl)
    {
        $form = $this->createDeleteForm($puntoControl);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($puntoControl);
            $em->flush();
        }

        return $this->redirectToRoute('puntocontrol_index');
    }

    /**
     * Creates a form to delete a PuntoControl entity.
     *
     * @param PuntoControl $puntoControl The PuntoControl entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(PuntoControl $puntoControl)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('puntocontrol_delete', array('id' => $puntoControl->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * Muestra un reporte de las muchas muestras que puede tener un punto de control.
     *
     * @Route("/{id}/muestras", name="puntocontrol_muestras")
     * @Method({"GET", "POST"})
     */
    public function reportAction(Request $request, PuntoControl $puntoControl)
    {
		    $em = $this->getDoctrine()->getManager();

        $muestras = $em->getRepository('AppBundle:Muestra')->findByIdPuntoControl($puntoControl->getId());
        $lecturasArray = array();
        foreach($muestras as $muestra) {
          // OJO revisar porque solo devuelve la primera lectura?
          $lecturas = $em->getRepository('AppBundle:Lectura')->findByIdMuestra($muestra->getId());
          $lecturasArray[$muestra->getId()] = $lecturas;
        }
        $parametros = $em->getRepository('AppBundle:Parametro')->findAll();

        return $this->render('puntocontrol/muestras.html.twig', array(
            'puntoControl' => $puntoControl,
            'muestras' => $muestras,
            'lecturasArray' => $lecturasArray,
            'parametros' => $parametros
        ));
    }
}
