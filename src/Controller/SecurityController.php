<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserRegisterType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{


    /**
     * @Route("/register", name="register")
     */
    public function register(Request $request, EntityManagerInterface $em, UserPasswordHasherInterface $passwordHasher): Response {

        //Création d'un nouvem utilisateur
        $user = new User();
        //On le fait via le formulaire USerRegister
        $form = $this->createForm(UserRegisterType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            //Si formulaire envoyé et valide, on hash le mot de passe et on définit le role sur USER
            $user->setPassword($passwordHasher->hashPassword($user, $user->getPlainPassword()));
            $user->setRoles(['ROLE_USER']);
            $em->persist($user);
            $em->flush();
            //Si cela se fait on revient sur la page de connexion
            return $this->redirectToRoute('app_login');
        }
        return $this->render("security/register.html.twig", ['registerForm'=> $form->createView()]);
    }


    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {       //Connexion de l'utilisateur
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout(): void
    {
        //Chemin vers la deconnection

        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
