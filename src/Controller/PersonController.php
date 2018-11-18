<?php

namespace App\Controller;

use App\Entity\Person;
use App\Form\PersonType;
use App\Repository\PersonRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class PersonController extends AbstractController
{

    /**
     * @Route("/all", name="person_index", methods="GET")
     * @IsGranted("ROLE_ROOT")
     */
    public function list(PersonRepository $personRepository): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $view = $_GET['view'] ?? 'index';

        return $this->render('person/' . $view . '.html.twig',
            [
                'people' => $personRepository->findAll(),
                'user' => $this->getUser()
            ]);
    }

    /**
     * @Route("/new", name="person_new", methods="GET|POST")
     * @IsGranted("ROLE_ROOT")
     */
    public function new(Request $request): Response
    {
        $person = new Person();
        $form = $this->createForm(PersonType::class, $person);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($person);
            $em->flush();

            return $this->redirectToRoute('person_index');
        }

        return $this->render('person/new.html.twig', [
            'person' => $person,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="person_show", methods="GET", requirements={"id"="\d+"} )
     * @IsGranted("ROLE_ROOT")
     */
    public function show(Person $person): Response
    {
        return $this->render('person/show.html.twig',
            [
                'person' => $person,
                'related' => $this->getDoctrine()->getRepository(Person::class)->findByRelated($person),
                'relatedGroups' => $this->getDoctrine()->getRepository(Person::class)->findByGrouping(
                    $person->getId(), $person->getGroupings()->getValues()
                )
            ]);
    }

    /**
     * @Route("/{id}/edit", name="person_edit", methods="GET|POST")
     * @IsGranted("ROLE_ROOT")
     */
    public function edit(Request $request, Person $person): Response
    {
        $form = $this->createForm(PersonType::class, $person);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('person_index', ['id' => $person->getId()]);
        }

        return $this->render('person/edit.html.twig', [
            'person' => $person,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="person_delete", methods="DELETE")
     * @IsGranted("ROLE_ROOT")
     */
    public function delete(Request $request, Person $person): Response
    {
        if ($this->isCsrfTokenValid('delete' . $person->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($person);
            $em->flush();
        }

        return $this->redirectToRoute('person_index');
    }
}
