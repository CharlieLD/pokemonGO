<?php

namespace PokemongoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use PokemongoBundle\Entity\feature;
use PokemongoBundle\Form\FeatureType;
use PokemongoBundle\Entity\Comment;
use PokemongoBundle\Form\CommentType;

/**
 * feature controller.
 *
 */
class featureController extends Controller
{
    /**
     * Lists all feature entities.
     *
     */
    public function newComAction(Request $request)
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
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $features = $em->getRepository('PokemongoBundle:feature')->findAll();

        return $this->render('PokemongoBundle:feature:index.html.twig', array(
            'features' => $features,
        ));
    }

    /**
     * Creates a new feature entity.
     *
     */
    public function newAction(Request $request)
    {
        $feature = new feature();
        $form = $this->createForm('PokemongoBundle\Form\FeatureType', $feature);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $dateprise = $request->request->get('date');

            $photo = $feature->getFile();

            $photoName = md5(uniqid()).'.'.$photo->guessExtension();
            $photoDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/feature';
            $photo->move($photoDir, $photoName);

            $feature->setFile($photoName);
            $feature->setDateTaken($dateprise);

            $em->persist($feature);
            $em->flush();

            return $this->redirectToRoute('feature_show', array('id' => $feature->getId()));
        }

        return $this->render('PokemongoBundle:feature:new.html.twig', array(
            'feature' => $feature,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a feature entity.
     *
     */
    public function showAction(feature $feature)
    {
        $em = $this->getDoctrine()->getManager();


        $deleteForm = $this->createDeleteForm($feature);

        return $this->render('PokemongoBundle:feature:show.html.twig', array(
            'feature' => $feature,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing feature entity.
     *
     */
    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $feature = $em->getRepository('PokemongoBundle:Feature')->findOneById($id);

        $deleteForm = $this->createDeleteForm($feature);
        $editForm = $this->createForm('PokemongoBundle\Form\FeatureType', $feature);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($feature);
            $em->flush();

            return $this->redirectToRoute('feature_edit', array('id' => $id));
        }

        return $this->render('PokemongoBundle:feature:edit.html.twig', array(
            'feature' => $feature,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a feature entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $feature = $em->getRepository('PokemongoBundle:Feature')->findOneById($id);

        $form = $this->createDeleteForm($feature);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($feature);
            $em->flush();
        }

        return $this->redirectToRoute('feature_index');
    }

    /**
     * Creates a form to delete a feature entity.
     *
     * @param feature $feature The feature entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(feature $feature)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('feature_delete', array('id' => $feature->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
