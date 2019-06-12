<?php
require_once 'models/message.class.php';
//var_dump($_GET);
$alter = new message();
$newmessage = $alter->getPostById('messages', $_GET['message_id']);
//var_dump($newmessage);


?>

<html>
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
     <link href="css/main.css">
     <title>Wijzig bericht</title>
   </head>

   <body>
       <div class="container">
         <div class="row">
           <div class="col-8 offset-2">
             <h1 class="text-center mt-2 pt-5 pb-2">Wijzig bericht</h1>
             <div class="row">
               <form action="edit2.php?message_id=<?php echo $newmessage[0]['message_id'];?>" method="POST" class="mb-3 pl-2 pr-2">
                 <div class="form-group">
                  <label for="datum">Naam</label>
                  <input value="<?php echo $newmessage[0]['name']; ?>" type="text" class="form-control" id="name" aria-describedby="" name="name" placeholder="Naam">
                </div>
                <div class="form-group">
                  <label for="title">Titel</label>
                  <input value="<?php echo $newmessage[0]['titel']; ?>" type="text" class="form-control" id="title" name="titel" placeholder="Titel">
                </div>
                <div class="form-group">
                  <label for="message">Bericht</label>
                  <input value="<?php echo $newmessage[0]['message']; ?>" type="text" class="form-control" id="message" name="message" placeholder="Message">
                </div>
                <input value="<?php $newmessage[0]['message_id']; ?>" name="message_id" type="hidden">
                <button type="submit" class="btn btn-primary" id="submit">Wijzigen</button>
                
                
               </form>
             </div>
           </div>
         </div>
     </div>
   </body>


</html>