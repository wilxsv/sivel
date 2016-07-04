<?php

namespace Redes\SivelBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Redes\SivelBundle\Entity\FosGroup;
use Redes\SivelBundle\Form\FosGroupType;

/**
 * FosGroup controller.
 *
 */
class FosGroupController extends Controller
{
    /**
     * Lists all FosGroup entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $fosGroups = $em->getRepository('RedesSivelBundle:FosGroup')->findAll();

        return $this->render('fosgroup/index.html.twig', array(
            'fosGroups' => $fosGroups,
        ));
    }

    /**
     * Creates a new FosGroup entity.
     *
     */
    public function newAction(Request $request)
    {
        $fosGroup = new FosGroup();
        $form = $this->createForm('Redes\SivelBundle\Form\FosGroupType', $fosGroup);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($fosGroup);
            $em->flush();

            return $this->redirectToRoute('admin_grupo_show', array('id' => $fosGroup->getId()));
        }

        return $this->render('fosgroup/new.html.twig', array(
            'fosGroup' => $fosGroup,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a FosGroup entity.
     *
     */
    public function showAction(FosGroup $fosGroup)
    {
        $deleteForm = $this->createDeleteForm($fosGroup);

        return $this->render('fosgroup/show.html.twig', array(
            'fosGroup' => $fosGroup,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing FosGroup entity.
     *
     */
    public function editAction(Request $request, FosGroup $fosGroup)
    {
        $deleteForm = $this->createDeleteForm($fosGroup);
        $editForm = $this->createForm('Redes\SivelBundle\Form\FosGroupType', $fosGroup);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($fosGroup);
            $em->flush();

            return $this->redirectToRoute('admin_grupo_edit', array('id' => $fosGroup->getId()));
        }

        return $this->render('fosgroup/edit.html.twig', array(
            'fosGroup' => $fosGroup,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a FosGroup entity.
     *
     */
    public function deleteAction(Request $request, FosGroup $fosGroup)
    {
        $form = $this->createDeleteForm($fosGroup);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($fosGroup);
            $em->flush();
        }

        return $this->redirectToRoute('admin_grupo_index');
    }

    /**
     * Creates a form to delete a FosGroup entity.
     *
     * @param FosGroup $fosGroup The FosGroup entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(FosGroup $fosGroup)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_grupo_delete', array('id' => $fosGroup->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
