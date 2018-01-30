<?php
// src/Controller/LuckyController.php
namespace App\Controller;
use App\Entity\Users;
use App\Form\UserType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class LuckyController extends Controller
{
     /**
      * @Route("/dashboard", name="dashboard")
      */
    public function dashboard()
    {
      $user = $this->getUser();
      $path = 'Dashboard';
      return $this->render('dashboard.html.twig', [
      'user' => $user,
      'path' => $path
      ]);
    }

    /**
     * @Route("/user", name="user")
     */

     public function user()
     {
       $user = $this->getUser();
       $path = 'User Profile';
       return $this->render('user.html.twig', [
       'user' => $user,
       'path' => $path
       ]);
     }

     /**
      * @Route("/table", name="table")
      */
    public function table()
    {
      $user = $this->getUser();
      $path = 'Table List';
      return $this->render('table.html.twig', [
      'user' => $user,
      'path' => $path
      ]);
    }

    /**
     * @Route("/typography", name="typography")
     */
   public function typography()
   {
     $user = $this->getUser();
     $path = 'Typography';
     return $this->render('typo.html.twig', [
     'user' => $user,
     'path' => $path
     ]);
   }

     /**
      * @Route("/icons", name="icons")
      */
      public function icons()
      {
        $user = $this->getUser();
        $path = 'Icons';
        return $this->render('icons.html.twig', [
          'user' => $user,
          'path' => $path
        ]);
      }

      /**
       * @Route("/maps", name="maps")
       */
     public function maps()
     {
       $user = $this->getUser();
       $path = 'Maps';
       return $this->render('maps.html.twig', [
       'user' => $user,
       'path' => $path
       ]);
     }

     /**
      * @Route("/notifications", name="notification")
      */
    public function notification()
    {
      $user = $this->getUser();
      $path = 'Notifications';
      return $this->render('notifications.html.twig', [
      'user' => $user,
      'path' => $path
      ]);
    }



     /**
      * @Route("/admin")
      */
      public function admin()
      {
        return $this->render('admin.html.twig');
      }

     /**
      * @Route("/login", name="login")
      */

    public function login(Request $request, AuthenticationUtils $authUtils)
    {
      $error = $authUtils->getLastAuthenticationError();
      $lastUsername = $authUtils->getLastUsername();

      return $this->render('login.html.twig', array(
        'last_username' => $lastUsername,
        'error'         => $error,
      ));
    }

    /**
     * @Route("/register", name="register")
     */

     public function registerAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
      {
          // 1) build the form
          $user = new Users();
          $form = $this->createForm(UserType::class, $user);

          // 2) handle the submit (will only happen on POST)
          $form->handleRequest($request);
          if ($form->isSubmitted() && $form->isValid()) {

              // 3) Encode the password (you could also do this via Doctrine listener)
              $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
              $user->setPassword($password);

              // 4) save the User!
              $em = $this->getDoctrine()->getManager();
              $em->persist($user);
              $em->flush();

              // ... do any other work - like sending them an email, etc
              // maybe set a "flash" success message for the user

              return $this->redirectToRoute('dashboard');
          }

          return $this->render(
              'register.html.twig',
              array('form' => $form->createView())
          );
      }
}

?>
