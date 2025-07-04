<?php
namespace Src\controller;

use Src\config\core\AbstractController;
use Src\repository\CommandeRepository;
use Src\repository\ClientRepository;
use Src\repository\ProduitRepository;

class CommandeController extends AbstractController
{
    private $commandeRepo;
    private $clientRepo;

    public function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $this->commandeRepo = new CommandeRepository();
        $this->clientRepo = new ClientRepository();
    }

    /**
     * Afficher la liste des commandes (implémentation de la méthode abstraite)
     */
    public function index()
    {
        $this->requireAuth();
        $this->showList();
    }

    public function showForm()
    {
        $this->requireAuth();
        $clients = $this->clientRepo->findAllClients();
        include __DIR__ . '/../../template/commande/form.html.php';
    }

    public function enregistrerCommande($commandeData, $produits)
    {
        $this->requireAuth();
        $this->commandeRepo->enregistrerCommandeProduits($commandeData, $produits);
        header('Location: index.php?success=1');
        exit;
    }

    public function showList()
    {
        $this->requireAuth();
        $commandes = $this->commandeRepo->findAll();
        include __DIR__ . '/../../template/commande/commande.html.php';
    }

    /**
     * Créer une nouvelle commande (implémentation de la méthode héritée)
     */
    public function create()
    {
        $this->requireAuth();
        
        // Exemple : récupération des données du formulaire
        $data = [
            'numero' => $_POST['numero'] ?? '',
            'date' => $_POST['date'] ?? date('Y-m-d'),
            'montant' => $_POST['montant'] ?? 0,
            'client_id' => $_POST['client_id'] ?? 0,
            'vendeur_id' => $_SESSION['vendeur_id'] ?? 0,
        ];

        // Enregistrement de la commande
        $id = $this->commandeRepo->enregistrerCommande($data);

        // Redirection vers la facture de la commande créée
        header("Location: /facture?id=$id");
        exit;
    }

    public function showFacture()
    {
        $this->requireAuth();
        $id = $_GET['id'] ?? null;
        if ($id) {
            $commande = $this->commandeRepo->findById($id);
            include __DIR__ . '/../../template/commande/facture.html.php';
        } else {
            echo "Commande introuvable";
        }
    }

    /**
     * Afficher une commande spécifique (implémentation de la méthode héritée)
     */
    public function show($id)
    {
        $this->requireAuth();
        $commande = $this->commandeRepo->findById($id);
        if ($commande) {
            include __DIR__ . '/../../template/commande/show.html.php';
        } else {
            header('HTTP/1.0 404 Not Found');
            echo "Commande non trouvée";
        }
    }

    /**
     * Supprimer une commande (implémentation de la méthode héritée)
     */
    public function destroy($id)
    {
        $this->requireAuth();
        // Logique de suppression à implémenter
        throw new \Exception("Suppression de commande non implémentée");
    }
}