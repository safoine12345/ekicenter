<?php
function ajoutercontact($nom, $email, $tel, $msg)
{
  if(require("connexion.php"))
  {
    $req = $access->prepare("INSERT INTO contact (nom, email, tel, msg) VALUES (?, ?, ?, ?)");

    $req->execute(array($nom, $email, $tel, $msg));

    return true;

    $req->closeCursor();
  }
}

// function getUsers($email, $password){
  
//   if(require("connexion.php")){

//     $req = $access->prepare("SELECT * FROM utilisateur ");

//     $req->execute();

//     if($req->rowCount() == 1){
      
//       $data = $req->fetchAll(PDO::FETCH_OBJ);

//       foreach($data as $i){
//         $mail = $i->email;
//         $mdp = $i->motdepasse;
//       }

//       if($mail == $email AND $mdp == $password)
//       {
//         return $data;
//       }
//       else{
//           return false;
//       }

//     }

//   }

// }


?>