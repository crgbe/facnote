<?php

namespace FacnoteBundle\Controller;

use FacnoteBundle\Form\ClientType;
use FacnoteBundle\Entity\Client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Client controller.
 *
 */
class ClientController extends Controller
{
    /**
     * Lists all client entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $clientRep = $em->getRepository('FacnoteBundle:Client');

//        $clients = $clientRep->findBy(['nomClient' => 'Dexter',]);
        $clients = $clientRep->myFindAll(1,10, 'nomClient', 'ASC');
        $totalClient = $clientRep->getTotalClient();

        return $this->render('@Facnote/client/index.html.twig', array(
            'clients' => $clients,
            'totalClient' => $totalClient,
        ));
    }

    /**
     * Finds and displays a client entity.
     *
     */
    public function showAction(Client $client)
    {

        return $this->render('@Facnote/client/show.html.twig', array(
            'client' => $client,
        ));
    }

    /**
     * Displays a form to edit an existing client entity.
     *
     */
    public function addAction(Request $request, $id = null)
    {
        $em = $this->getDoctrine()->getManager();
        $_editMod = 0;

        $translator = $this->get('translator');
        if(isset($id)) { // Edition
            $c = $em->getRepository('FacnoteBundle:Client')->find($id);
            if(!$c) {
                throw $this->createNotFoundException($translator->trans('Client non trouvé'));
            }
            $_editMod = 1;
        } else {
            $c = new client();
        }
        $form = $this->createForm('FacnoteBundle\Form\ClientType', $c);

        if($request->isMethod('POST')) {
            $form->handleRequest($request);
            if($form->isValid()) {
                $em->persist($c);
                $em->flush();
                $flashMsg = $translator->trans('lbl.success.operation');
                $this->get('session')->getFlashBag()->add('flashMessage', $flashMsg);
                return $this->redirect($this->generateUrl('client_index'));
            }
        }

        return $this->render('@Facnote/client/form.html.twig', array(
            'editMod' => $_editMod,
            'form' => $form->createView(),
        ));
    }

    /**
     * Deletes a client entity.
     *
     */
    public function deleteAction(Client $client)
    {
        $em = $this->getDoctrine()->getManager();
        $translator = $this->get('translator');

        $em->remove($client);
        $em->flush();

        if(!$client){
            throw $this->createNotFoundException($translator->trans('Client non trouvé'));
        }

        return $this->redirectToRoute('client_index');
    }
}
