<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations

class VpsController extends Controller
{
    /**
	 * @Rest\View()
     * @Rest\Get("/vps")
     */
    public function vpsAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$listeVps = $em->getRepository('AppBundle:Vps')->findAll();
		if(!empty($listeVps)){
			return $listeVps;
                    }
	}
}
