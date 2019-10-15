<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CategoryRepository;
use App\Entity\Post;
use App\Entity\Category;
use App\Repository\PostRepository;
class CategoriesController extends AbstractController
{
    /**
     * @Route("/categories", name="categories")
     */
    public function index(CategoryRepository $categoryRepository)
    {
        return $this->render('categories/index.html.twig', [
            'categories' => $categoryRepository->findAll(),
        ]);
    }
    /**
     * @Route("/categories/{id}", name="categories_single", methods={"GET"})
     */
    public function singleCategory(Category $category)
    {
       $results = $category->getPosts();
        return $this->render('categories/single.html.twig', [
            'results' => $results,
        ]);
    }
}