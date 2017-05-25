<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use PDO;

class DefaultController extends Controller
{
    private $dsn;
    private $user;
    private $password;
    private $dbh;

    public function __construct()
    {
        $this->dsn = 'mysql:dbname=;host=';
        $this->user = '';
        $this->password = '';

        try
        {
            $this->dbh = new PDO($this->dsn, $this->user, $this->password);
        }
        catch (PDOException $e)
        {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    /**
     * Matches / exactly
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * Matches /groups exactly
     * @Route("/groups", name="groups")
     */
    public function Groups(Request $request)
    {
        return $this->render('default/groups.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * Matches /contacts exactly
     * @Route("/contacts", name="contacts")
     */
    public function Contacts(Request $request)
    {
        $sth = $this->dbh->prepare('SELECT id, FirstName, LastName, Avatar
                                    FROM Contacts
                                    WHERE id = ?');
        $sth->execute(array(1));
        $me = $sth->fetch();

        $sth = $this->dbh->prepare('SELECT id, FirstName, LastName, Avatar
                                    FROM Contacts
                                    WHERE id > ?');
        $sth->execute(array(1));
        $contacts = $sth->fetchAll();

        dump($me);
        dump($contacts);

        return $this->render('default/contacts.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'me' => $me,
            'contacts' => $contacts
        ]);
    }

    /**
     * Matches /person/*
     * @Route("/person/{id}", name="person")
     */
    public function Person(Request $request, $id = 0)
    {
        return $this->render('default/person.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * Matches /addpipel exactly
     * @Route("/addpipel", name="addpipel")
     */
    public function Test(Request $request)
    {
        return $this->render('default/addpipel.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * Matches /settings exactly
     * @Route("/settings", name="settings")
     */
    public function Settings(Request $request)
    {
        return $this->render('default/settings.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
}
