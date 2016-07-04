<?php

namespace Redes\SivelBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Redes\SivelBundle\Entity\Servicio;
use Redes\SivelBundle\Form\ServicioType;

/**
 * Servicio controller.
 *
 */
class ServicioController extends Controller
{
    /**
     * Lists all Servicio entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $servicios = $em->getRepository('RedesSivelBundle:Servicio')->findAll();

        return $this->render('servicio/index.html.twig', array(
            'servicios' => $servicios,
        ));
    }

    /**
     * Creates a new Servicio entity.
     *
     */
    public function newAction(Request $request)
    {
        $servicio = new Servicio();
        $form = $this->createForm('Redes\SivelBundle\Form\ServicioType', $servicio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
                $uploadPath = $this->container->getParameter('kernel.root_dir') . '/../web/assets/uploaded/';
                $file = $servicio->getImg0Servicio();
                $fileName = md5(uniqid()).'.'.$file->getClientOriginalName();
                $form['img0Servicio']->getData()->move($uploadPath, $fileName);
                $servicio->setImg0Servicio( "assets/uploaded/servicio.$fileName" );
                $file = $servicio->getImg1Servicio();
                $fileName = md5(uniqid()).'.'.$file->getClientOriginalName();
                $form['img1Servicio']->getData()->move($uploadPath, $fileName);
                $servicio->setImg1Servicio( "assets/uploaded/servicio.$fileName" );
                $file = $servicio->getImg2Servicio();
                $fileName = md5(uniqid()).'.'.$file->getClientOriginalName();
                $form['img2Servicio']->getData()->move($uploadPath, $fileName);
                $servicio->setImg2Servicio( "assets/uploaded/servicio.$fileName" );
            $em = $this->getDoctrine()->getManager();
            $em->persist($servicio);
            $em->flush();

            return $this->redirectToRoute('admin_servicios_show', array('id' => $servicio->getId()));
        }

        return $this->render('servicio/new.html.twig', array(
            'servicio' => $servicio,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Servicio entity.
     *
     */
    public function showAction(Servicio $servicio)
    {
        $deleteForm = $this->createDeleteForm($servicio);

        return $this->render('servicio/show.html.twig', array(
            'servicio' => $servicio,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Servicio entity.
     *
     */
    public function editAction(Request $request, Servicio $servicio)
    {
        $deleteForm = $this->createDeleteForm($servicio);
        $editForm = $this->createForm('Redes\SivelBundle\Form\ServicioType', $servicio);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($servicio);
            $em->flush();

            return $this->redirectToRoute('admin_servicios_edit', array('id' => $servicio->getId()));
        }

        return $this->render('servicio/edit.html.twig', array(
            'servicio' => $servicio,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Servicio entity.
     *
     */
    public function deleteAction(Request $request, Servicio $servicio)
    {
        $form = $this->createDeleteForm($servicio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($servicio);
            $em->flush();
        }

        return $this->redirectToRoute('admin_servicios_index');
    }

    /**
     * Creates a form to delete a Servicio entity.
     *
     * @param Servicio $servicio The Servicio entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Servicio $servicio)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_servicios_delete', array('id' => $servicio->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
