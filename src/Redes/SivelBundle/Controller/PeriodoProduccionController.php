<?php

namespace Redes\SivelBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Redes\SivelBundle\Entity\PeriodoProduccion;
use Redes\SivelBundle\Form\PeriodoProduccionType;

/**
 * PeriodoProduccion controller.
 *
 */
class PeriodoProduccionController extends Controller
{
    /**
     * Lists all PeriodoProduccion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $periodoProduccions = $em->getRepository('RedesSivelBundle:PeriodoProduccion')->findAll();

        return $this->render('periodoproduccion/index.html.twig', array(
            'periodoProduccions' => $periodoProduccions,
        ));
    }

    /**
     * Creates a new PeriodoProduccion entity.
     *
     */
    public function newAction(Request $request)
    {
        $periodoProduccion = new PeriodoProduccion();
        $form = $this->createForm('Redes\SivelBundle\Form\PeriodoProduccionType', $periodoProduccion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($periodoProduccion);
            $em->flush();

            return $this->redirectToRoute('admin_periodo_produccion_show', array('id' => $periodoProduccion->getId()));
        }

        return $this->render('periodoproduccion/new.html.twig', array(
            'periodoProduccion' => $periodoProduccion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a PeriodoProduccion entity.
     *
     */
    public function showAction(PeriodoProduccion $periodoProduccion)
    {
        $deleteForm = $this->createDeleteForm($periodoProduccion);

        return $this->render('periodoproduccion/show.html.twig', array(
            'periodoProduccion' => $periodoProduccion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing PeriodoProduccion entity.
     *
     */
    public function editAction(Request $request, PeriodoProduccion $periodoProduccion)
    {
        $deleteForm = $this->createDeleteForm($periodoProduccion);
        $editForm = $this->createForm('Redes\SivelBundle\Form\PeriodoProduccionType', $periodoProduccion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($periodoProduccion);
            $em->flush();

            return $this->redirectToRoute('admin_periodo_produccion_edit', array('id' => $periodoProduccion->getId()));
        }

        return $this->render('periodoproduccion/edit.html.twig', array(
            'periodoProduccion' => $periodoProduccion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a PeriodoProduccion entity.
     *
     */
    public function deleteAction(Request $request, PeriodoProduccion $periodoProduccion)
    {
        $form = $this->createDeleteForm($periodoProduccion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($periodoProduccion);
            $em->flush();
        }

        return $this->redirectToRoute('admin_periodo_produccion_index');
    }

    /**
     * Creates a form to delete a PeriodoProduccion entity.
     *
     * @param PeriodoProduccion $periodoProduccion The PeriodoProduccion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(PeriodoProduccion $periodoProduccion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_periodo_produccion_delete', array('id' => $periodoProduccion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
