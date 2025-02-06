<?php

namespace App\controller;

use App\core\Controller;
use App\config\DataBaseManager;
use App\model\Categorie;


class CategorieController extends Controller
{
    public function index() {
        $dbManager = new DataBaseManager();
        $categories = $dbManager->selectAll('categories');
        $this->view('categorie', ['categories' => $categories]) ;
    }
    public function affiche($arg) {
        $dbManager = new DataBaseManager();
        $newCategorie = new Categorie($dbManager, $arg );
        $data = ['id_categorie'=> $arg] ;
        $result = $dbManager->selectBy('categories',$data  ) ;
        $this->view('categorie',$arg);

    }

    public function Ajouter() {
        $dbManager = new DataBaseManager();
        $newCategorie = new Categorie($dbManager, 0, $_POST['name'], $_POST['description']);
        $result = $newCategorie->add();
        $this->view('categorie',$result);
    }



//if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST["add"])) {
//try {
//    // Votre code à exécuter
//if (empty($_POST['name'])) {
//throw new Exception("Le champ 'titre de categorie' est obligatoire.");
//}
//
//$newCategorie = new Categorie($dbManager, 0, $_POST['name'], $_POST['description']);
//
//$result = $newCategorie->add();
//
//if ($result) {
//    setSweetAlertMessage('Succès', ' La catégorie a été ajoutée avec succès', 'success', 'categorie.php');
//} else {
//    throw new Exception("Échec de l'ajout de la catégorie.");
//}
//} catch (Exception $e) {
//    setSweetAlertMessage('Erreur', $e->getMessage(), 'error', 'categorie.php');
//}
//}
//
//// Archive de catégorie
//if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST["archive"])) {
//    try {
//        $newCategorie = new Categorie($dbManager, $_POST['id_categorie']);
//        $result = $newCategorie->archived();
//        if ($result) {
//            setSweetAlertMessage('Succès', 'Categorie archivée avec succès.', 'success', 'categorie.php');
//        } else {
//            setSweetAlertMessage('Erreur', 'Aucun archivage n\'a eu lieu. veuillez contacter le superAdmin', 'error', 'categorie.php');
//        }
//    } catch (Exception $e) {
//        setSweetAlertMessage('Erreur', $e->getMessage(), 'error', 'categorie.php');
//    }
//}



}