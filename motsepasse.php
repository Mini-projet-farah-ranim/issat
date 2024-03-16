<?php

// Définir les variables
$cin=$_GET['cin'];
$email = $_POST['email'];
$password = $_POST['password'];

// Vérifier si le mot de passe est vide
if (empty($password)) {
  echo "Le mot de passe est obligatoire.";
  exit();
}

// Connexion à la base de données
$db = new PDO('mysql:host=localhost;dbname=gestion_cursus', 'root', '');

// Vérifier si l'utilisateur existe déjà
$sql = "SELECT * FROM etudiant WHERE cin = :cin";
$stmt = $db->prepare($sql);
$stmt->execute(['cin' => $cin]);
$etudiant = $stmt->fetch();

if ($etudiant) {
  // Insérer l'utilisateur
  $sql = "INSERT INTO etudiant (email, password) VALUES (:email, :password) where cin=:cin";
  $stmt = $db->prepare($sql);
  $stmt->execute(['email' => $email, 'password' => $password]);

  if ($stmt->rowCount() === 1) {
    // Démarrer la session
    session_start();

    // Stocker les informations de l'utilisateur dans la session
    $_SESSION['etudiant'] = $etudiant;

    // Redirection vers la page d'accueil
    header('Location: etudiant.php');
  } else {
    // Afficher un message d'erreur
    echo "Une erreur est survenue lors de l'insertion de l'utilisateur.";
  }
} 

?>
