<?php
# src/AppBundle/Controller/DefaultController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
/**
 * @Route("/", name="homepage")
 */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

/**
 * @Route("/hello/{name}", name="hello_world")
 */
    public function greetingsAction(Request $request)
    {
        $name = $request->get('name');

        $twigParameters = ['greetings' => 'Hi! Hello', 'name' => $name];

        return $this->render('AppBundle:default:index.html.twig', $twigParameters);
    }
}
