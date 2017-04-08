<?php

namespace AppBundle\Controller;

require_once dirname(__FILE__).'/../../../vendor/autoload.php';
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Muestra;
use AppBundle\Form\MuestraType;

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

/**
 * Muestra controller.
 *
 * @Route("/muestra")
 */
class MuestraController extends Controller
{
    /**
     * Lists all Muestra entities.
     *
     * @Route("/", name="muestra_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $muestras = $em->getRepository('AppBundle:Muestra')->findAll();

        return $this->render('muestra/index.html.twig', array(
            'muestras' => $muestras,
        ));
    }

    /**
     * Creates a new Muestra entity.
     *
     * @Route("/new", name="muestra_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $muestra = new Muestra();
        $form = $this->createForm('AppBundle\Form\MuestraType', $muestra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($muestra);
            $em->flush();

            return $this->redirectToRoute('muestra_show', array('id' => $muestra->getId()));
        }

        return $this->render('muestra/new.html.twig', array(
            'muestra' => $muestra,
            'form' => $form->createView(),
        ));
    }

    /**
     * Lists all Muestra entities.
     *
     * @Route("/exportPdf", name="muestra_exportPdf")
     * @Method("GET")
     */
     public function exportPdfAction()
     {
        $em = $this->getDoctrine()->getManager();

        $muestras = $em->getRepository('AppBundle:Muestra')->findAll();

        try {

            $content = $this->renderView('muestra/ejem7.html.twig', array(
                'muestras' => $muestras,
            ));
            // $content .= $this->renderView('muestra/ejem7a.php', array(
            //     'muestras' => $muestras,
            // ));

            $html2pdf = new \Html2Pdf('P', 'A4', 'es');
            $html2pdf->setDefaultFont('Arial');
            $html2pdf->writeHTML($content);
            $html2pdf->Output('informe_muestras.pdf');
        } catch (Html2PdfException $e) {
            $formatter = new ExceptionFormatter($e);
            echo $formatter->getHtmlMessage();
        }
    }

    /**
     * Finds and displays a Muestra entity.
     *
     * @Route("/{id}", name="muestra_show")
     * @Method("GET")
     */
    public function showAction(Muestra $muestra)
    {
        $deleteForm = $this->createDeleteForm($muestra);
        $em = $this->getDoctrine()->getManager();
        $lecturas = $em->getRepository('AppBundle:Lectura')->findByIdMuestra($muestra->getId());

        return $this->render('muestra/show.html.twig', array(
            'muestra' => $muestra,
            'lecturas' => $lecturas,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Muestra entity.
     *
     * @Route("/{id}/edit", name="muestra_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Muestra $muestra)
    {
        $deleteForm = $this->createDeleteForm($muestra);
        $editForm = $this->createForm('AppBundle\Form\MuestraType', $muestra);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($muestra);
            $em->flush();

            return $this->redirectToRoute('muestra_edit', array('id' => $muestra->getId()));
        }

        return $this->render('muestra/edit.html.twig', array(
            'muestra' => $muestra,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Muestra entity.
     *
     * @Route("/{id}", name="muestra_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Muestra $muestra)
    {
        $form = $this->createDeleteForm($muestra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($muestra);
            $em->flush();
        }

        return $this->redirectToRoute('muestra_index');
    }

    /**
     * Creates a form to delete a Muestra entity.
     *
     * @param Muestra $muestra The Muestra entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Muestra $muestra)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('muestra_delete', array('id' => $muestra->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * Displays a form to query existing parameter for any Muestra entity.
     *
     * @Route("/{id}/parametros", name="muestra_parametros")
     * @Method({"GET", "POST"})
     */
    public function queryParAction(Request $request, Muestra $muestra)
    {
      $em = $this->getDoctrine()->getManager();
      $qb = $em->createQueryBuilder();
      // $qb->add('select', 'm.id,elemento_ambiental,tipo_muestreo, concat(prefijo,'-',nombre), metodo, mhm.concentracion, mhm.tec_analitica,mhm.lc, mhm.incertidumbre')
      //    ->add('from', 'parametro p, muestra m, many_muestra_has_many_parametro mhm')
      //    ->add('where', 'p.id = mhm.id_parametro and m.id = mhm.id_muestra AND m.id = 155525');
      // $query = $em->createQuery(
      //               "SELECT concentracion, tec_analitica, lc, incertidumbre
      //               FROM AppBundle:ManyMuestraHasManyParametro
      //               WHERE id_muestra = 155525
      //               "
      //           );
      // $q = $qb->getQuery();
      // $em = $this->getDoctrine()->getManager();
      // $repository = $em->getRepository('AppBundle:Parametro');
      // $query = $repository->createQueryBuilder('u')
      //         ->Join('u.idMuestra', 'p')
      //         //->where('g.id = :id_parametro')
      //         ->where('u.idMuestra = :id_muestra')
      //         ->setParameter('id_muestra', '155523')
      //         ->getQuery();
      // $params = $query->getResult();
      $em = $this->getDoctrine()->getEntityManager();
      $params = $em->createQuery("SELECT m FROM AppBundle:Muestra m
        JOIN m.idParametro p
        WHERE p.id = 2
        ")
          //->setParameter('id', $id)
          ->getResult();
      return $this->render('muestra/pruebas.html.twig', array(
            'muestra' => $muestra, 'parametros' => $params
        ));
    }


}
