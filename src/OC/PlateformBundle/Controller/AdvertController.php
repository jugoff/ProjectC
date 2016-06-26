<?php
//scr/OC/PlateformBundle/Controller/AdvertController.php

namespace OC\PlateformBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class AdvertController {
    public function indexAction() {
        return new Response("Hello World !");
    }
}
