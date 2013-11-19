<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    public function indexAction()
    {
        /*
         * The action's view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */

        return $this->render('AcmeDemoBundle:Home:index.html.twig');
    }

    public function aboutAction()
    {
        /*
         * The action's view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */

        return $this->render('AcmeDemoBundle:Home:about.html.twig');
    }

    public function contactAction()
    {
        /*
         * The action's view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */

        $contact_info = array(
            "https://github.com/ButenkoD",
            "butenko_d@yahoo.com"
        );

        return $this->render('AcmeDemoBundle:Home:contact.html.twig', array("contacts" => $contact_info));
    }

    public function renderAction()
    {
        /*
         * The action's view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */

        $tasklist = array(
            "Research Bootstrap",
            "Use Assetic"
        );

        return $this->render('AcmeDemoBundle:Home:task.html.twig', array("tasks" => $tasklist));
    }
}
