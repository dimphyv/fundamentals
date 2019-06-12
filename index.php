<?php
require_once 'models/message.class.php';
//get all posts from database
$blogs = new message();
$messages = $blogs->getAllMessages('messages');

//check if form is send, new message object and call method to add a post.
require_once 'models/message.class.php';
if(isset($_POST['submit'])){
  //if(!isset['naam']){

 // }
$naam = $_POST['naam'];
$titel = $_POST['titel'];
$bericht = $_POST['message'];
$new = new message();
$new->addPost('messages', $naam, $titel, $bericht);
header("location: index.php");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Mijn blog!</title>
  </head>
  <body>
  <div class="container">
  <div class="row">

  <div class="col-lg-10 offset-1" >
  <div><a href="feed.php"><img src='rss.png' width="100" heigth="50" class="col-lg-2 offset-9"></a>  </div>   
    <h1 class="text-center bg-secondary text-white mb-3 font-weight-lighter mt-4">Welkom op mijn blog</h1>
   
    <table class="table table-hover table-dark table-borderless mt-4">
          <thead class="thead-light">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Titel</th>
              <th scope="col">Naam</th>
              <th scope="col">Bericht</th>
              <th scope="col">Datum</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php if(count($messages)>0): ?>
              <?php $counter=0; ?>

              <?php while($counter<count($messages)) :?>
                <?php $row = $messages[$counter]; ?>
                
                <tr>
                  <td><?php echo $row['message_id']; ?></td>
                  <td><?php echo $row['titel']; ?></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php $big = $row['message']; echo substr($big, 0, 30)." ..."; ?></td>
                  <td><?php $var = $row['date'];
                            $date = str_replace('-', '/', $var);
                            echo date('d-m-Y', strtotime($date)); ?></td>
                  <td><a type="button" class="btn btn-primary"  href="read.php?message_id=<?php echo $row['message_id']; ?>">Lees meer...</a></td>
                 
                </tr>
                <?php $counter++ ; ?>

              <?php endwhile; ?>
            <?php endif; ?>
          </tr>
          </tbody>
        </table>
        <h4 class="text-center bg-secondary text-white mb-3 font-weight-lighter mt-4">Nieuw bericht invoeren</h4>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        
  <div class="form-group">
    <label for="Naam">Naam<span>*<span></label>
    <input type="text" class="form-control" id="naam" aria-describedby="naam" placeholder="Naam" name='naam' required>
    
  </div>
  <div class="form-group">
    <label for="titel">Titel<span>*<span></label>
    <input type="text" class="form-control" id="titel" placeholder="Titel" name='titel'required>
  </div>
  <div class="form-group">
    <label for="message">Bericht<span>*<span></label>
    <textarea class="form-control" id="message" rows="3" name='message' required></textarea>
  </div>
  <div><span>*verplichte velden<span></div>
  
  <button type="submit" name='submit' class="btn btn-primary" mb-4>Toevoegen</button>
  <p></p>
</form>
        

    </div>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>