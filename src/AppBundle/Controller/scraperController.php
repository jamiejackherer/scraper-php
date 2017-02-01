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

        $info = ['We will soon be scraping Facebook',
                 'for all your info so we can display',
                 'it all nice and neat for you here!',
                 'Let\'s have soom fun!'];

        return $this->render('scraper/show.html.twig', array(
            'name' => $scrapeWhat,
            'info' => $info
        ));
    }
}
?>
