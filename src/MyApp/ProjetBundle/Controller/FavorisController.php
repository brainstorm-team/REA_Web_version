<?php

namespace MyApp\ProjetBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MyApp\ProjetBundle\Entity\Favoris;
use MyApp\ProjetBundle\Form\FavorisType;

/**
 * Favoris controller.
 *
 */
class FavorisController extends Controller
{

    /**
     * Lists all Favoris entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MyAppProjetBundle:Favoris')->findAll();

        return $this->render('MyAppProjetBundle:Favoris:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Favoris entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Favoris();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('favoris_show', array('id' => $entity->getId())));
        }

        return $this->render('MyAppProjetBundle:Favoris:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Favoris entity.
     *
     * @param Favoris $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Favoris $entity)
    {
        $form = $this->createForm(new FavorisType(), $entity, array(
            'action' => $this->generateUrl('favoris_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Favoris entity.
     *
     */
    public function newAction()
    {
        $entity = new Favoris();
        $form   = $this->createCreateForm($entity);

        return $this->render('MyAppProjetBundle:Favoris:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Favoris entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyAppProjetBundle:Favoris')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Favoris entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MyAppProjetBundle:Favoris:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Favoris entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyAppProjetBundle:Favoris')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Favoris entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MyAppProjetBundle:Favoris:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Favoris entity.
    *
    * @param Favoris $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Favoris $entity)
    {
        $form = $this->createForm(new FavorisType(), $entity, array(
            'action' => $this->generateUrl('favoris_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Favoris entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyAppProjetBundle:Favoris')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Favoris entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('favoris_edit', array('id' => $id)));
        }

        return $this->render('MyAppProjetBundle:Favoris:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Favoris entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MyAppProjetBundle:Favoris')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Favoris entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('favoris'));
    }

    /**
     * Creates a form to delete a Favoris entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('favoris_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
