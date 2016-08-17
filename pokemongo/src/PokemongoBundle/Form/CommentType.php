<?php

namespace PokemongoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PokemongoBundle\Entity\Feature;
use PokemongoBundle\Form\CommentType;

/**
 * commentaire controller.
 *
 */
class CommentController extends Controller
{
    public function newComAction()
    {
        $em = $this->getDoctrine()->getManager();

        $feature = $em->getRepository('PokemongoBundle:Feature')->findOneById();

        $commentaire = new Commentaire();
        $form = $this->createForm('PokemonBundle\Form\CommentType', $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($commentaire);
            $em->flush();

            return $this->redirectToRoute('pokemon_show', array(
                'id' => $feature->getId(),
            ));
        }

        return $this->render('PokemongoBundle:feature:show.html.twig', array(
            'feature' => $feature,
            'form' => $form->createView(),
        ));
    }
}