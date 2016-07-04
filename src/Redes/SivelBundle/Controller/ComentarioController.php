<?php

namespace Redes\SivelBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Redes\SivelBundle\Entity\Comentario;
use Redes\SivelBundle\Form\ComentarioType;

/**
 * Comentario controller.
 *
 */
class ComentarioController extends Controller
{
    /**
     * Lists all Comentario entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $comentarios = $em->getRepository('RedesSivelBundle:Comentario')->findAll();

        return $this->render('comentario/index.html.twig', array(
            'comentarios' => $comentarios,
        ));
    }

    /**
     * Creates a new Comentario entity.
     *
     */
    public function newAction(Request $request)
    {
        $comentario = new Comentario();
        $form = $this->createForm('Redes\SivelBundle\Form\ComentarioType', $comentario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($comentario);
            $em->flush();

            return $this->redirectToRoute('admin_comentarios_show', array('id' => $comentario->getId()));
        }

        return $this->render('comentario/new.html.twig', array(
            'comentario' => $comentario,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Comentario entity.
     *
     */
    public function showAction(Comentario $comentario)
    {
        $deleteForm = $this->createDeleteForm($comentario);

        return $this->render('comentario/show.html.twig', array(
            'comentario' => $comentario,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Comentario entity.
     *
     */
    public function editAction(Request $request, Comentario $comentario)
    {
        $deleteForm = $this->createDeleteForm($comentario);
        $editForm = $this->createForm('Redes\SivelBundle\Form\ComentarioType', $comentario);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($comentario);
            $em->flush();

            return $this->redirectToRoute('admin_comentarios_edit', array('id' => $comentario->getId()));
        }

        return $this->render('comentario/edit.html.twig', array(
            'comentario' => $comentario,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Comentario entity.
     *
     */
    public function deleteAction(Request $request, Comentario $comentario)
    {
        $form = $this->createDeleteForm($comentario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($comentario);
            $em->flush();
        }

        return $this->redirectToRoute('admin_comentarios_index');
    }

    /**
     * Creates a form to delete a Comentario entity.
     *
     * @param Comentario $comentario The Comentario entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Comentario $comentario)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_comentarios_delete', array('id' => $comentario->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
