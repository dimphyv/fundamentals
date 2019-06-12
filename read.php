<?php
require_once 'models/message.class.php';

$blogs = new message();
$id = $_GET['message_id'];
$messages = $blogs->getPostById('messages', $id);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Mijn blog!</title>
  </head>
  <body>
  <div class="container">
  <div class="row">

  <div class="col-lg-10 offset-1" >
  <div><a type="button" class="btn btn-secondary"  href="index.php"; ?>Terug naar Home</a> </div>
    <h3 class="text-center bg-secondary text-white mt-3 font-weight-lighter"><?php echo $messages[0]['titel'];?></h3>
   
    <table class="table table-hover table-dark table-borderless mt-4">
          <thead class="thead-light">
            <tr>
              
              <th scope="col">Naam</th>
              <th scope="col">Datum</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php if(count($messages)>0): ?>
              <?php $counter=0 ; ?>

              <?php while($counter<count($messages)) :?>
                <?php $row = $messages[$counter]; ?>
                <tr>
                  
                  <td><?php echo $row['name']; ?></td>
                  <td><?php $var = $row['date'];
                            $date = str_replace('-', '/', $var);
                            echo date('d-m-Y', strtotime($date)); ?></td>
                </tr>
    
                
                <?php $counter++ ; ?>

             
          </tr>
          </tbody>
        </table>
        <p class="mr-3"><?php echo $row['message']; ?></p>
                <p><a type="button" class="btn btn-primary"  href="edit.php?message_id=<?php echo $row['message_id']; ?>">Wijzig</a>
                <a type="button" class="btn btn-danger"  href="delete.php?message_id=<?php echo $row['message_id']; ?>">Delete</a></p>
                
                <?php endwhile; ?>
            <?php endif; ?>
    </div>
    
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>