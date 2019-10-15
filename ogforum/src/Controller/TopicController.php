<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Post;
class TopicController extends AbstractController
{
    /**
     * @Route("/topic", name="topic")
     */
    public function index()
    {
        $repository = $this->getDoctrine()->getRepository(Post::class);
        $posts = $repository->findAll();
        return $this->render('topic/index.html.twig', [
            'posts' => $posts,
        ]);
    }
    /**
     * @Route("/rejected", name="rejected_topic",  methods={"GET"})
     */
    public function rejectedTopics()
    {
        $repository = $this->getDoctrine()->getRepository(Post::class);
        $posts = $repository->findAll();
        return $this->render('topic/rejected.html.twig', [
            'posts' => $posts,
        ]);
    }
}