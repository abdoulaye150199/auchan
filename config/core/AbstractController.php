<?php

namespace Src\config\core;

abstract class AbstractController
{
    /**
     * Méthode abstraite pour afficher la liste des ressources
     */
    abstract public function index();

    /**
     * Afficher le formulaire de création d'une nouvelle ressource
     */
    public function create()
    {
        // Implémentation par défaut - peut être surchargée
        throw new \Exception("Méthode create() non implémentée");
    }

    /**
     * Enregistrer une nouvelle ressource
     */
    public function store()
    {
        // Implémentation par défaut - peut être surchargée
        throw new \Exception("Méthode store() non implémentée");
    }

    /**
     * Afficher une ressource spécifique
     * @param int $id
     */
    public function show($id)
    {
        // Implémentation par défaut - peut être surchargée
        throw new \Exception("Méthode show() non implémentée");
    }

    /**
     * Afficher le formulaire d'édition d'une ressource
     * @param int $id
     */
    public function edit($id)
    {
        // Implémentation par défaut - peut être surchargée
        throw new \Exception("Méthode edit() non implémentée");
    }

    /**
     * Supprimer une ressource
     * @param int $id
     */
    public function destroy($id)
    {
        // Implémentation par défaut - peut être surchargée
        throw new \Exception("Méthode destroy() non implémentée");
    }

    /**
     * Vérifier si l'utilisateur est connecté
     */
    protected function requireAuth()
    {
        if (!$this->isAuthenticated()) {
            header('Location: /login');
            exit;
        }
    }

    /**
     * Vérifier si l'utilisateur est authentifié
     */
    protected function isAuthenticated()
    {
        return isset($_SESSION['vendeur_id']) && !empty($_SESSION['vendeur_id']);
    }

    /**
     * Obtenir l'utilisateur connecté
     */
    protected function getAuthenticatedUser()
    {
        return $_SESSION['vendeur'] ?? null;
    }

    /**
     * Rediriger vers une URL
     */
    protected function redirect($url)
    {
        header("Location: $url");
        exit;
    }

    /**
     * Afficher une vue avec des données
     */
    protected function view($viewPath, $data = [])
    {
        extract($data);
        include $viewPath;
    }
}