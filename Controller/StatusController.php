<?php

namespace Tk\HealthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class StatusController extends Controller
{
    public function indexAction()
    {
        return new JsonResponse(
            array(
                'welcome' => 'affirmative'
            )
        );
    }
}
