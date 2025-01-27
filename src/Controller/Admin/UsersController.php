<?php

namespace App\Controller\Admin;

use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use symfony\Component\Routing\Annotation\Route;

#[Route('/admin/utilisateurs', name: 'admin_users_')]
class UsersController extends AbstractController
{
    #[route('/', name: 'index')]
    public function index(UsersRepository $usersRepository): Response
    {
        $users = $usersRepository->findBy([], ['firstname' => 'asc']);
        return $this->render('admin/users/index.html.twig', compact('users'));
    }
}



// namespace App\Controller;

// use App\Entity\Products;
// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\HttpFoundation\Response;
// use Symfony\Component\Routing\Annotation\Route;

// #[Route('/produits', name: 'app_products_')]
// final class ProductsController extends AbstractController
// {
//     #[Route('/', name: 'index')]
//     public function index(): Response
//     {
//         return $this->render('products/index.html.twig', [
//             'controller_name' => 'ProductsController',
//         ]);
//     }
//     #[Route('/{slug}', name: 'details')]
//     public function details(Products $product): Response
//     {
//         return $this->render('products/details.html.twig', compact('product'));
//     }
// }
