<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GroceryController extends AbstractController
{
    
    #[Route('/grocery-list', name:'grocery-list')]
    public function listAction(): Response
    {
        return $this->render("grocery/list.html.twig");
    }
}