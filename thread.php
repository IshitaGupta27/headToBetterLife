<?php  session_start();
if(isset($_SESSION['username']) && !empty($_SESSION['username']))
{
    include './partials/_usernav.php';
}
else
{
    include './partials/_header.php' ;   
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        #ques{
            min-height: 433px;
        }
    </style>
    <title>Welcome to Discussion Forums</title>
</head>

<body>
    <?php include 'partials/_dbconnect.php';?>
    <?php
    $id = $_GET['threadid'];
    $sql = "SELECT * FROM `threads` WHERE thread_id=$id"; 
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];
    }?>

<?php
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
        $comment=$_POST['comment'];


        // ****************** api to detect bad word****************
        

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://api.promptapi.com/bad_words?censor_character={censor_character}",
		  CURLOPT_HTTPHEADER => array(
		    "Content-Type: text/plain",
		    "apikey: e26CwsLTmRYVh2stO6bI0qvt53ocR7UJ"
		  ),
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS =>"you are an asshole"
		));

		$response = curl_exec($curl);

		curl_close($curl);
		
		$arr = explode("\"",$response)[6];
		$numOfBadWords = (int)str_split($arr)[2];

		if($numOfBadWords>0)
		{
			echo"<script language='javascript'>
				alert('Bad Commenting Not Allowed!!! Please watch you comment!!!');
			</script>
			";
		}
		else
		{
			$sql = " INSERT INTO `comments` ( `comment_content`, `thread_id`, `comment_by`, `commet_time`) VALUES ('$comment', '$id','0',current_timestamp());   ";
	        $result = mysqli_query($conn, $sql);
	        $showAlert = true;
	        if($showAlert){
	            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
	                        <strong>Success!</strong> Your comment has been added! 
	                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                            <span aria-hidden="true">&times;</span>
	                        </button>
	                  </div>';
        } 
		}
    }
    ?>

    <!-- Category container starts here -->
    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4"><?php echo $title;?></h1>
            <p class="lead">  <?php echo $desc;?></p>
            <hr class="my-4">
            <p>This is a peer to peer forum. No Spam / Advertising / Self-promote 
            in the forums is not allowed. Do not post copyright-infringing material. 
            Do not post “offensive” posts, links or images. Do not cross post 
            questions. Remain respectful of other members at all times.</p>
            <p>Posted by:<b> Anonymous User</p>
        </div>
    </div>
    <div class="container">
<h1 class="py-2">Post Your Comment</h1>
<form action="<?php echo $_SERVER['REQUEST_URI']?>" method="post">
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Type your comment</label>
    <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    <div class="container mb-5" id="ques">
    <h1 class="py-2">Discussions</h1>
    <?php
    $id = $_GET['threadid'];
    $sql = "SELECT * FROM `comments` WHERE thread_id= $id"; 
    $result = mysqli_query($conn, $sql);
    $noResult=true;
    while($row = mysqli_fetch_assoc($result)){
        $noResult=false;
        $id = $row['comment_id'];
        $content = $row['comment_content'];
        $comment_time =$row['commet_time'];
         echo '<div class="media my-3">
            <img src="images/userdefault.png" width="54px" class="mr-3" alt="...">
            <div class="media-body">
            <p class="font-weight-bold my-0">Anonymous User at '. $comment_time  .'</p>
            <h6 class="mt-0">
              '. $content . '</h6>
                </div>
                </div>' ;
            }
            if($noResult){
                echo '<div class="jumbotron jumbotron-fluid">
                <div class="container">
                  <p class="display-4">No Threads Found</p>
                  <p class="lead">Be the first person to ask a question.</p>
                </div>
              </div>';
            }
        ?> 
    
    </div>

    
    <?php include 'partials/_footer.php';?>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>