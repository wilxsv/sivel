<?php

namespace Redes\SivelBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Redes\SivelBundle\Entity\UnidadMedida;
use Redes\SivelBundle\Form\UnidadMedidaType;

/**
 * UnidadMedida controller.
 *
 */
class UnidadMedidaController extends Controller
{
    /**
     * Lists all UnidadMedida entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $unidadMedidas = $em->getRepository('RedesSivelBundle:UnidadMedida')->findAll();

        return $this->render('unidadmedida/index.html.twig', array(
            'unidadMedidas' => $unidadMedidas,
        ));
    }

    /**
     * Creates a new UnidadMedida entity.
     *
     */
    public function newAction(Request $request)
    {
        $unidadMedida = new UnidadMedida();
        $form = $this->createForm('Redes\SivelBundle\Form\UnidadMedidaType', $unidadMedida);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($unidadMedida);
            $em->flush();

            return $this->redirectToRoute('admin_unidad_show', array('id' => $unidadMedida->getId()));
        }

        return $this->render('unidadmedida/new.html.twig', array(
            'unidadMedida' => $unidadMedida,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a UnidadMedida entity.
     *
     */
    public function showAction(UnidadMedida $unidadMedida)
    {
        $deleteForm = $this->createDeleteForm($unidadMedida);

        return $this->render('unidadmedida/show.html.twig', array(
            'unidadMedida' => $unidadMedida,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing UnidadMedida entity.
     *
     */
    public function editAction(Request $request, UnidadMedida $unidadMedida)
    {
        $deleteForm = $this->createDeleteForm($unidadMedida);
        $editForm = $this->createForm('Redes\SivelBundle\Form\UnidadMedidaType', $unidadMedida);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($unidadMedida);
            $em->flush();

            return $this->redirectToRoute('admin_unidad_edit', array('id' => $unidadMedida->getId()));
        }

        return $this->render('unidadmedida/edit.html.twig', array(
            'unidadMedida' => $unidadMedida,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a UnidadMedida entity.
     *
     */
    public function deleteAction(Request $request, UnidadMedida $unidadMedida)
    {
        $form = $this->createDeleteForm($unidadMedida);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($unidadMedida);
            $em->flush();
        }

        return $this->redirectToRoute('admin_unidad_index');
    }

    /**
     * Creates a form to delete a UnidadMedida entity.
     *
     * @param UnidadMedida $unidadMedida The UnidadMedida entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(UnidadMedida $unidadMedida)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_unidad_delete', array('id' => $unidadMedida->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
