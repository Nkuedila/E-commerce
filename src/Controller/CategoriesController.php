<?php

namespace App\Controller;

use App\Entity\Categories;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


#[Route('/categories', name: 'app_categories_')]
final class CategoriesController extends AbstractController
{
    #[Route('/{slug}', name: 'list')]
    public function list(Categories $category): Response
    {
        //on va voir la liste des produits de la categories
        $products = $category->getProducts();
        return $this->render('categories/list.html.twig', compact('category', 'products'));
        //syntaxe alternative


       /*  return $this->render('categories/list.html.twig', [
            'category' => $category,
            'products' => $products

        ]); */
    }
}
