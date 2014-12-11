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
 * @Route("/")
 */
class SeguridadController extends Controller {

    /**
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

    /**
     * Contrasenia.
     *
     * @Route("/contrasenia", name="contrasenia")
     * @Method("GET")
     */
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

            return $this->render('CensoBundle:Seguridad:correo_no_valido.html.twig', array('correo' => $email));
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
            $message->setFrom('profa1131@gmail.com');
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

}
