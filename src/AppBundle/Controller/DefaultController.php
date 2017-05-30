<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use PDO;
use Doctrine\DBAL\Driver\PDOException;

class DefaultController extends Controller
{
    private $dsn;
    private $user;
    private $password;
    private $dbh;

    private $_baseUrl;


    public function __construct()
    {
        $this->dsn = 'mysql:dbname=pipel;host=82.196.0.174';
        $this->user = 'remote';
        $this->password = '2Kupoisdabest!';

        try
        {
            $this->dbh = new PDO($this->dsn, $this->user, $this->password);
        }
        catch (PDOException $e)
        {
            echo 'Connection failed: ' . $e->getMessage();
        }
        $this->_baseUrl = "";
        #$this->_baseUrl = realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR;
    }

    /**
     * Matches / exactly
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => $this->_baseUrl
        ]);
    }

    /**
     * Matches /groups exactly
     * @Route("/groups", name="groups")
     */
    public function Groups(Request $request)
    {
        # select all groups
        $sth = $this->dbh->prepare('SELECT *
                                              FROM Groups');
        $sth->execute();
        $groups = $sth->fetchAll(PDO::FETCH_ASSOC);

        $count = count($groups);

        # counting contacts
        for($i=0; $i < $count; $i++)
        {
            $sth = $this->dbh->prepare('SELECT Count(Groups_idGroups) AS count
                                                  FROM Contacts_Groups
                                                  WHERE Groups_idGroups = ?');
            $sth->execute(array($groups[$i]["idGroups"]));
            array_push($groups[$i], $sth->Fetch(PDO::FETCH_ASSOC));
        }

        return $this->render('default/groups.html.twig', [
            'base_dir' => $this->_baseUrl,
            'groups' => $groups
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

        return $this->render('default/contacts.html.twig', [
            'base_dir' => $this->_baseUrl,
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
        if($id == 1)
        {
            echo 'test';
        }
        return $this->render('default/person.html.twig', [
            'base_dir' => $this->_baseUrl,
        ]);
    }

    /**
     * Matches /addpipel exactly
     * @Route("/addpipel", name="addpipel")
     */
    public function Test(Request $request)
    {
        return $this->render('default/addpipel.html.twig', [
            'base_dir' => $this->_baseUrl,
        ]);
    }

    /**
     * Matches /settings exactly
     * @Route("/settings", name="settings")
     */
    public function Settings(Request $request)
    {
        return $this->render('default/settings.html.twig', [
            'base_dir' => $this->_baseUrl,
        ]);
    }


}
