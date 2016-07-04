<?php

namespace Redes\SivelBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Redes\SivelBundle\Entity\Persona;
use Redes\SivelBundle\Entity\Producto;
use Redes\SivelBundle\Entity\Servicio;

use Symfony\Component\HttpFoundation\Response;
use Redes\SivelBundle\Form\PersonaType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $repository = $this->getDoctrine()->getRepository('RedesSivelBundle:Persona');
        $all = $repository->createQueryBuilder('p')->select("p")->where("p.latitudPersona <> 0 AND p.longitudPersona <> 0")
            ->getQuery()->getResult();
        $hombre = $repository->createQueryBuilder('p')->select("COUNT( p.sexoPersona )")->where("p.sexoPersona = 1")->getQuery()->getResult();
        $mujer = $repository->createQueryBuilder('p')->select("COUNT( p.sexoPersona )")->where("p.sexoPersona = 0")->getQuery()->execute();
        $repository = $this->getDoctrine()->getRepository('RedesSivelBundle:Producto');
        $producto = $repository->createQueryBuilder('p')->select("COUNT( p.id )")->setMaxResults(6)->getQuery()->getResult();
        $producto6 = $repository->createQueryBuilder('p')->setMaxResults(6)->getQuery()->getResult();
        $repository = $this->getDoctrine()->getRepository('RedesSivelBundle:Servicio');
        $servicio = $repository->createQueryBuilder('p')->select("COUNT( p.id )")->setMaxResults(6)->getQuery()->getResult();
        $servicio6 = $repository->createQueryBuilder('p')->setMaxResults(6)->getQuery()->getResult();

        return $this->render('RedesSivelBundle:Default:index.html.twig', array('hombre' => $hombre,'mujer' => $mujer,'producto' => $producto,'producto6' => $producto6,'servicio' => $servicio,'servicio6' => $servicio6, 'all' => $all,));
    }

    public function resumenAction()
    {
        return $this->render('RedesSivelBundle:Default:resumen.html.twig');
    }


    public function agregaAction(Request $request)
    {
        $persona = new Persona();
        $form = $this->createForm('Redes\SivelBundle\Form\PersonaType', $persona);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
                        $em->persist($persona);
            $em->flush();
            return $this->render('RedesSivelBundle:Default:agregaPersona.html.twig', array('id' => $persona->getId()));
            } else {
                return $this->render('RedesSivelBundle:Default:agregaPersona.html.twig', array('form' => $form->createView(),));
            }
        }
        else
        {
            return $this->render('RedesSivelBundle:Default:agregaPersona.html.twig', array('form' => $form->createView(),));
        }
    }
}
