<?php

namespace Src\controller;

use Src\config\core\AbstractController;
use Src\repository\VendeurRepository;

class AuthController extends AbstractController
{
    private $vendeurRepo;

    public function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $this->vendeurRepo = new VendeurRepository();
    }

    public function index()
    {
        // Rediriger vers la page de login
        $this->showLoginForm();
    }

    /**
     * Afficher le formulaire de connexion
     */
    public function showLoginForm()
    {
        // Si déjà connecté, rediriger vers le dashboard
        if ($this->isAuthenticated()) {
            $this->redirect('/');
        }

        include __DIR__ . '/../../template/auth/login.html.php';
    }

    /**
     * Traiter la connexion
     */
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->redirect('/login');
        }

        $login = $_POST['login'] ?? '';
        $password = $_POST['password'] ?? '';

        if (empty($login) || empty($password)) {
            $error = "Veuillez remplir tous les champs";
            include __DIR__ . '/../../template/auth/login.html.php';
            return;
        }

        // Vérifier les identifiants
        $vendeur = $this->vendeurRepo->findByLogin($login);

        if ($vendeur && password_verify($password, $vendeur['password'])) {
            // Connexion réussie
            $_SESSION['vendeur_id'] = $vendeur['id'];
            $_SESSION['vendeur'] = [
                'id' => $vendeur['id'],
                'nom' => $vendeur['nom'],
                'prenom' => $vendeur['prenom'] ?? '',
                'login' => $vendeur['login']
            ];

            $this->redirect('/');
        } else {
            // Échec de la connexion
            $error = "Identifiants incorrects";
            include __DIR__ . '/../../template/auth/login.html.php';
        }
    }

    /**
     * Déconnexion
     */
    public function logout()
    {
        session_destroy();
        $this->redirect('/login');
    }
}