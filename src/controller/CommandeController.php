<?php
namespace Src\controller;

use Src\repository\CommandeRepository;
use Src\repository\ClientRepository;
use Src\repository\ProduitRepository;

class CommandeController
{
    private $commandeRepo;
    private $clientRepo;


    public function __construct()
    {
        $this->commandeRepo = new CommandeRepository();
        $this->clientRepo = new ClientRepository();
    }

    public function showForm()
    {
        $clients = $this->clientRepo->findAllClients();
        include __DIR__ . '/../../template/commande/form.html.php';
    }

    public function enregistrerCommande($commandeData, $produits)
    {
        $this->commandeRepo->enregistrerCommandeProduits($commandeData, $produits);
        header('Location: index.php?success=1');
        exit;
    }
    public function showList()
    {
        $commandes = $this->commandeRepo->findAll();
        include __DIR__ . '/../../template/commande/commande.html.php';
    }
    public function create()
    {
        // Exemple : récupération des données du formulaire
        $data = [
            'numero' => $_POST['numero'] ?? '',
            'date' => $_POST['date'] ?? date('Y-m-d'),
            'montant' => $_POST['montant'] ?? 0,
            'client_id' => $_POST['client_id'] ?? 0,
            'vendeur_id' => $_POST['vendeur_id'] ?? 0,
        ];

        // Enregistrement de la commande
        $id = $this->commandeRepo->enregistrerCommande($data);

        // Redirection vers la facture de la commande créée
        header("Location: /facture?id=$id");
        exit;
    }
    public function showFacture()
    {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $commande = $this->commandeRepo->findById($id);
            include __DIR__ . '/../../template/commande/facture.html.php';
        } else {
            echo "Commande introuvable";
        }
    }
}