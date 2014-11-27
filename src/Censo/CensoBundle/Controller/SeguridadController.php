<?php

namespace Censo\CensoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\SecurityContext;
use Censo\CensoBundle\Entity\Usuarios;

/**
 * Seguridad controller.
 * @author Ing. Oscar Velasquez
 * @Route("/")
 */
class SeguridadController extends Controller {

    /**
     * @author Ing. Ernest Barroso
     * @Route("/login", name="login")
     * @Route("/login_check", name="login_check")
     */
    public function loginAction() {
        $request = $this->getRequest();
        $session = $request->getSession();
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
        }
        return $this->render('CensoBundle:Seguridad:login.html.twig', array(
                    'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                    'error' => $error,
        ));
    }

    public function contraseniaAction() {
        return $this->render('CensoBundle:Seguridad:contrasenia.html.twig');
    }

    /**
     * Olvido contrasenia.
     *
     * @Route("/olvido_contrasenia", name="olvido_contrasenia")
     * @Method("POST")
     * @Template("login")
     */
    public function olvidoContraseniaAction(Request $request) {
        //Obtenemos el email suministrado por el usuario
        $email = $this->get('request')->request->get('email');
        
        //Verificamos si el email existe        
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CensoBundle:Usuarios')->findOneByEmail($email);

        if (!$entity) {          
            
          return $this->render('CensoBundle:Seguridad:correo_no_valido.html.twig', array('correo' => $email ));            
        }
        $nombre_completo = $entity->getNombre() . ', ' . $entity->getApellido();
        //Verificamos si el usuario está activo
        if ($entity->getIsActive()) {

            $id = base64_encode($entity->getId());
            $email = base64_encode($entity->getEmail());

            //Enviamos un email con los datos para la recupeción de contraseña
            $message = \Swift_Message::newInstance();
            $message->setSubject('Olvido de Contraseña');
            $imagen = $message->embed(\Swift_Image::fromPath('bundles/Censo/imagenes/ubv.jpeg'));
            $message->setFrom('intranet@ubv.edu.ve');
            $message->setTo($entity->getEmail());
            $message->setContentType("text/html");
            $message->setBody(
                    $this->renderView(
                            'CensoBundle:Seguridad:olvidoContrasenia.html.twig', array(
                        'id' => $id,
                        'email' => $email,
                        'imagen' => $imagen,
                        'nombre_completo' => $nombre_completo
                            )
                    )
            )
            ;

            $this->get('mailer')->send($message);

            return $this->redirect($this->generateUrl('mensaje_olvido_contrasenia'));
        }

        return $this->redirect($this->generateUrl('logout'));
    }

    public function mensajeOlvidoContraseniaAction() {
        return $this->render('CensoBundle:Seguridad:mensajeOlvidoContrasenia.html.twig');
    }

    /**
     * Verificar confirmacion.
     *
     * @Route("/confirmacion/{id}/{cod}", name="confirmacion")
     * @Method("POST|GET")
     * @Template("CensoBundle:Seguridad:login.html.twig")
     */
    public function confirmacionAction($id, $cod) {
        $id = base64_decode($id);
        $cod = base64_decode($cod);

        $em = $this->getDoctrine()->getManager();
        $entity = new Usuarios();

        $entity = $em->getRepository('CensoBundle:Usuarios')->find($id);
        

        if (!$entity) {
            return $this->render('CensoBundle:Seguridad:novalido.html.twig', array());
            //throw $this->createNotFoundException('Unable to find Usuarios entity.');
            
        }

        if ($entity->getIsActive() == false && $entity->getSalt() == $cod) {
            $entity->setIsActive(TRUE);
            $em->persist($entity);
            $em->flush();
        } //aqui va codigo en caso de error

        return $this->redirect($this->generateUrl('logout'));
    }

    /**
     * Restablecer contrasenia
     *
     * @Route("/restablecer_contrasenia/{id}/{email}", name="restablecer_contrasenia")
     * @Method("POST|GET")
     * @Template("CensoBundle:Seguridad:cambioContrasenia.html.twig")
     */
    public function restablecerContraseniaAction($id, $email) {
        //Decodificamos los parametros
        $id = base64_decode($id);
        $email = base64_decode($email);
        // echo $id." ".$email; die;

        $em = $this->getDoctrine()->getManager();
        $entity = new Usuarios();
        $entity = $em->getRepository('CensoBundle:Usuarios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Usuario No registrado');
        }

        //Verificamos que el Usuario este activo y el email sea el registrado
        if ($entity->getIsActive() && ($entity->getEmail() == $email)) {

            //Redirigimos a la vista de cambio de contraseña
            return $this->render('CensoBundle:Seguridad:cambioContrasenia.html.twig', array('id' => $id));
        }

        return $this->redirect($this->generateUrl('logout'));
    }

    /**
     * Cambio de Contraseña.
     *
     * @Route("/cambio_contrasenia", name="cambio_contrasenia")
     * @Method("POST")
     * @Template()
     */
    public function cambioContraseniaAction(Request $request) {

        //Obtenemos el email suministrado por el usuario
        $id = $this->get('request')->request->get('id');
        $clave = $this->get('request')->request->get('password');

        //echo $id." ".$clave; die;
        // $nombre_completo = $this->get('request')->request->get('nombre'); ', ' . $this->get('request')->request->get('apellido');
        //Verificamos si el email existe
        $entity = new Usuarios();
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CensoBundle:Usuarios')->find($id);


        $nombre_completo = $entity->getNombre() . ', ' . $entity->getApellido();

        //var_dump($nombre_completo); die;

        if (!$entity) {
            throw $this->createNotFoundException('Email no registrado');
        }

        //Verificamos si el usuario está activo
        if ($entity->getIsActive()) {
//        echo "activo";
//        var_dump($nombre_completo); die;

            $encoder = new \Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder('sha512', true, 10);
            $password = $encoder->encodePassword($clave, $entity->getSalt());

            //var_dump($password); die;
            $entity->setPassword($password);
//            echo"la clave: ";
//            var_dump($entity->getPassword()); die;
//        echo "<pre>"; debug_zval_dump($entity); echo "</pre>";die;

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            /*
              //Enviamos un email con los datos para la recupeción de contraseña
              $message = \Swift_Message::newInstance()
              ->setSubject('Cambio de Contraseña')
              ->setFrom('intranet@ubv.edu.ve')
              $imagen = $message->embed(\Swift_Image::fromPath('bundles/Censo/imagenes/ubv.jpeg'));
              ->setTo($entity->getEmail())
              ->setContentType("text/html")
              ->setBody(
              $this->renderView(
              'CensoBundle:Seguridad:mensajeCambioContrasenia.html.twig',
              array()
              )
              )
              ; */
            //Enviamos un email con los datos para la recupeción de contraseña
            $message = \Swift_Message::newInstance();
            $message->setSubject('Cambio de Contraseña');
            $imagen = $message->embed(\Swift_Image::fromPath('bundles/Censo/imagenes/ubv.jpeg'));
            $message->setFrom('intranet@ubv.edu.ve');
            $message->setTo($entity->getEmail());
            $message->setContentType("text/html");
            $message->setBody(
                    $this->renderView(
                            'CensoBundle:Seguridad:mensajeCambioContrasenia.html.twig', array(
                        'id' => $id,
                        'imagen' => $imagen,
                        'nombre_completo' => $nombre_completo
                            )
                    )
            )
            ;

            $this->get('mailer')->send($message);
            /* $this->renderView(
              'CensoBundle:Seguridad:mensajeRestablecimientoContrasenia.html.twig',
              array()
              ); */
        }

        //return $this->redirect($this->generateUrl('logout'));

        return $this->render('CensoBundle:Seguridad:mensajeRestablecimientoContrasenia.html.twig');
    }

    public function perfilContraseniaAction($id) {

        return $this->render('CensoBundle:Seguridad:perfilContrasenia.html.twig', array('id' => $id));
    }

}

?>