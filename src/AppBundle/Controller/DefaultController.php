<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as FOSRest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class DefaultController
 *
 * @package AppBundle\Controller
 */
class DefaultController extends FOSRestController
{
    /**
     * @Route("/")
     *
     * @FOSRest\View
     */
    public function getHomeAction()
    {
        return [
            'message' => 'Hello world',
        ];
    }
}
