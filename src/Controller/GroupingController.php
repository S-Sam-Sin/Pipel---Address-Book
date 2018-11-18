<?php

namespace App\Controller;

use App\Entity\Grouping;
use App\Form\GroupingType;
use App\Repository\GroupingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/group")
 */
class GroupingController extends AbstractController
{
    /**
     * @Route("/", name="group_index", methods="GET")
     */
    public function index(GroupingRepository $groupRepository): Response
    {
        return $this->render('group/index.html.twig', ['groups' => $groupRepository->findAll()]);
    }

    /**
     * @Route("/new", name="group_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $group = new Grouping();
        $form = $this->createForm(GroupingType::class, $group);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($group);
            $em->flush();

            return $this->redirectToRoute('group_index');
        }

        return $this->render('group/new.html.twig', [
            'group' => $group,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="group_show", methods="GET")
     */
    public function show(Grouping $group): Response
    {
        return $this->render('group/show.html.twig', ['group' => $group]);
    }

    /**
     * @Route("/{id}/edit", name="group_edit", methods="GET|POST")
     */
    public function edit(Request $request, Grouping $group): Response
    {
        $form = $this->createForm(GroupingType::class, $group);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('group_index', ['id' => $group->getId()]);
        }

        return $this->render('group/edit.html.twig', [
            'group' => $group,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="group_delete", methods="DELETE")
     */
    public function delete(Request $request, Grouping $group): Response
    {
        if ($this->isCsrfTokenValid('delete'.$group->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($group);
            $em->flush();
        }

        return $this->redirectToRoute('group_index');
    }
}
