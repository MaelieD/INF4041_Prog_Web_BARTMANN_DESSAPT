<?php

// src/Esiea/BlogBundle/Controller/AdvertController.php

namespace Esiea\BlogBundle\Controller;

// Nouveau use pour heriter du DefaultController
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
	public function indexAction()
	{
		$content = $this
			->get('templating')
			->render('EsieaBlogBundle:Advert:index.html.twig',
				array('nom' => 'winzou')
		);
		return new Response($content);
	}
	
	public function indexEndAction()
	{
		$content = $this
			->get('templating')
			->render('EsieaBlogBundle:Advert:indexEnd.html.twig');
		return new Response($content);
	}
}