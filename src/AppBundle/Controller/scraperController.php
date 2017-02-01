<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class scraperController extends Controller {
    /**
    * @Route("/scraper/{scrapeWhat}")
    */
    public function showAction($scrapeWhat) {
        return $this->render('scraper/show.html.twig', array(
            'facebook' => $scrapeWhat
        ));
    }
}
?>
