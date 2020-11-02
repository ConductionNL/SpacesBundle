<?php

// Controller/DefaultController.php

namespace Conduction\SpacesBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

/**
 * The index test handles any calls that have not been picked up by another test, and wel try to handle the slug based against the wrc.
 *
 * Class DefaultController
 *
 * @Route("/")
 */
class DefaultController
{
    /**
     * This function serves the base (home) path for this template
     *
     * "/", name="conduction_rocket_default_index"
     * @Route("/", name="conduction_spaces_default_index", priority=1)
     * @Template
     */
    public function indexAction(Session $session, Request $request)
    {
        $variable = [];

        return $variable;
    }
}
