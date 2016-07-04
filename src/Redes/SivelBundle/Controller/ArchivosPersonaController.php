<?php

namespace Redes\SivelBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Redes\SivelBundle\Entity\ArchivosPersona;
use Redes\SivelBundle\Form\ArchivosPersonaType;

/**
 * ArchivosPersona controller.
 *
 */
class ArchivosPersonaController extends Controller
{
    /**
     * Lists all ArchivosPersona entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $archivosPersonas = $em->getRepository('RedesSivelBundle:ArchivosPersona')->findAll();

        return $this->render('archivospersona/index.html.twig', array(
            'archivosPersonas' => $archivosPersonas,
        ));
    }

    /**
     * Creates a new ArchivosPersona entity.
     *
     */
    public function newAction(Request $request)
    {
        $archivosPersona = new ArchivosPersona();
        $form = $this->createForm('Redes\SivelBundle\Form\ArchivosPersonaType', $archivosPersona);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($archivosPersona);
            $em->flush();

            return $this->redirectToRoute('admin_archivos_show', array('id' => $archivosPersona->getId()));
        }

        return $this->render('archivospersona/new.html.twig', array(
            'archivosPersona' => $archivosPersona,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ArchivosPersona entity.
     *
     */
    public function showAction(ArchivosPersona $archivosPersona)
    {
        $deleteForm = $this->createDeleteForm($archivosPersona);

        return $this->render('archivospersona/show.html.twig', array(
            'archivosPersona' => $archivosPersona,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ArchivosPersona entity.
     *
     */
    public function editAction(Request $request, ArchivosPersona $archivosPersona)
    {
        $deleteForm = $this->createDeleteForm($archivosPersona);
        $editForm = $this->createForm('Redes\SivelBundle\Form\ArchivosPersonaType', $archivosPersona);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($archivosPersona);
            $em->flush();

            return $this->redirectToRoute('admin_archivos_edit', array('id' => $archivosPersona->getId()));
        }

        return $this->render('archivospersona/edit.html.twig', array(
            'archivosPersona' => $archivosPersona,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ArchivosPersona entity.
     *
     */
    public function deleteAction(Request $request, ArchivosPersona $archivosPersona)
    {
        $form = $this->createDeleteForm($archivosPersona);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($archivosPersona);
            $em->flush();
        }

        return $this->redirectToRoute('admin_archivos_index');
    }

    /**
     * Creates a form to delete a ArchivosPersona entity.
     *
     * @param ArchivosPersona $archivosPersona The ArchivosPersona entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ArchivosPersona $archivosPersona)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_archivos_delete', array('id' => $archivosPersona->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
