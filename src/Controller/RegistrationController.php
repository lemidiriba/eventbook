<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/registration", name="registration")
     */
    public function index()
    {

        $user = new User();

        $form = $this->createForm(RegistrationType::class, $user);

        return $this->render(
            'registration/index.html.twig',
            [
                'controller_name' => 'RegistrationController',
                'form' => $form->createView(),
            ]
        );
    }
}