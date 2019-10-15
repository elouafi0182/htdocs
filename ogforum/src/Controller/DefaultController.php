<?php
namespace App\Controller;
use App\Entity\Post;
use App\Entity\Reaction;
use App\Entity\Image;
use App\Form\MakePostType;
use App\Form\MakeReactionType;
use App\Form\AddImageType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index(Request $request): Response
    {
        $repository = $this->getDoctrine()->getRepository(Post::class);
        $posts = $repository->findall();
        // $sql = "SELECT count(post.id) FROM post JOIN reaction WHERE post.id = reaction.post_id_id GROUP BY post.id ORDER BY count(post.id) DESC";
        // $em = $this->getDoctrine()->getManager();
        // $stmt = $em->getConnection()->prepare($sql);
        // $stmt->execute();
        // $result = $stmt->fetchAll();
        return $this->render('default/index.html.twig', [
            'posts' => $posts,
            // 'mostreplies' => $result,
        ]);
    }
    /**
     * @Route("/showpost/{id}", name="showpost_index", methods={"GET"})
     */
    public function showPost(Post $post, $id, Request $request): Response
    {
        $repository = $this->getDoctrine()->getRepository(Reaction::class);
        $reactionPost = $repository->findBy(['post_id' => $post]);
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $post = $this->getDoctrine()->getRepository(Post::class)->find($id);
        $reaction = new Reaction();
        $reaction->setCreatedAt(new \DateTime());
        $reaction->setUpdatedAt(new \DateTime());
        $reaction->setUserId($user);
        $reaction->setPostId($post);
        $form = $this->createForm(MakeReactionType::class, $reaction);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reaction);
            $em->flush();
            return $this->redirectToRoute('showpost_index', [
                'id' => $id,
            ]);
        }
        return $this->render('default/showpost.html.twig', [
            'post' => $post,
            'reactions' => $reactionPost,
            'reactionform' => $form->createView(),
            
        ]);
    }
    /**
     * @Route("/makepost", name="make_post", methods={"GET","POST"})
     */
    public function makePost(Request $request): Response
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $post = new Post();
        $post->setCreateAt(new \DateTime());
        $post->setUpdatedAt(new \DateTime());
        $post->setUserId($user);
        $post->setEnabled(false);
        $form = $this->createForm(MakePostType::class, $post);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();
            return $this->redirectToRoute('default');
        }
        return $this->render('default/makepost.html.twig', [
            'post' => $post,
            'form' => $form->createView(),
        ]);
    }
    // /**
    //  * @Route("/makereaction/{id}", name="make_reaction", methods={"GET","POST"})
    //  */
    // public function makeReaction(Request $request, $id): Response
    // {
    //     $user = $this->get('security.token_storage')->getToken()->getUser();
    //     $post = $this->getDoctrine()->getRepository(Post::class)->find($id);
    //     $reaction = new Reaction();
    //     $reaction->setCreatedAt(new \DateTime());
    //     $reaction->setUpdatedAt(new \DateTime());
    //     $reaction->setUserId($user);
    //     $reaction->setPostId($post);
    //     $form = $this->createForm(MakeReactionType::class, $reaction);
    //     $form->handleRequest($request);
    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $em = $this->getDoctrine()->getManager();
    //         $em->persist($reaction);
    //         $em->flush();
    //         return $this->redirectToRoute('showpost_index', [
    //             'id' => $id,
    //         ]);
    //     }
    //     return $this->render('default/makereaction.html.twig', [
    //         'reaction' => $reaction,
    //         'reactionform' => $form->createView(),
    //         'id' => $id,
    //     ]);
    // }
    /**
     * @Route("/addimage", name="add_image", methods={"GET","POST"})
     */
    public function makeImage(Request $request): Response
    {
        $image = new Image();
        $form = $this->createForm(AddImageType::class, $image);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($image);
            $entityManager->flush();
            return $this->redirectToRoute('make_post');
        }
        return $this->render('default/addimage.html.twig', [
            'image' => $image,
            'form' => $form->createView(),
        ]);
    }
}