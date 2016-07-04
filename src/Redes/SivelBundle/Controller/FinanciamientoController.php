<?php

namespace Redes\SivelBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Redes\SivelBundle\Entity\Financiamiento;
use Redes\SivelBundle\Form\FinanciamientoType;

/**
 * Financiamiento controller.
 *
 */
class FinanciamientoController extends Controller
{
    /**
     * Lists all Financiamiento entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $financiamientos = $em->getRepository('RedesSivelBundle:Financiamiento')->findAll();

        return $this->render('financiamiento/index.html.twig', array(
            'financiamientos' => $financiamientos,
        ));
    }

    /**
     * Creates a new Financiamiento entity.
     *
     */
    public function newAction(Request $request)
    {
        $financiamiento = new Financiamiento();
        $form = $this->createForm('Redes\SivelBundle\Form\FinanciamientoType', $financiamiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($financiamiento);
            $em->flush();

            return $this->redirectToRoute('admin_financiamiento_show', array('id' => $financiamiento->getId()));
        }

        return $this->render('financiamiento/new.html.twig', array(
            'financiamiento' => $financiamiento,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Financiamiento entity.
     *
     */
    public function showAction(Financiamiento $financiamiento)
    {
        $deleteForm = $this->createDeleteForm($financiamiento);

        return $this->render('financiamiento/show.html.twig', array(
            'financiamiento' => $financiamiento,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Financiamiento entity.
     *
     */
    public function editAction(Request $request, Financiamiento $financiamiento)
    {
        $deleteForm = $this->createDeleteForm($financiamiento);
        $editForm = $this->createForm('Redes\SivelBundle\Form\FinanciamientoType', $financiamiento);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($financiamiento);
            $em->flush();

            return $this->redirectToRoute('admin_financiamiento_edit', array('id' => $financiamiento->getId()));
        }

        return $this->render('financiamiento/edit.html.twig', array(
            'financiamiento' => $financiamiento,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Financiamiento entity.
     *
     */
    public function deleteAction(Request $request, Financiamiento $financiamiento)
    {
        $form = $this->createDeleteForm($financiamiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($financiamiento);
            $em->flush();
        }

        return $this->redirectToRoute('admin_financiamiento_index');
    }

    /**
     * Creates a form to delete a Financiamiento entity.
     *
     * @param Financiamiento $financiamiento The Financiamiento entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Financiamiento $financiamiento)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_financiamiento_delete', array('id' => $financiamiento->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
