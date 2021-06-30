
<!DOCTYPE html>
<html lang="en">
<head>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>PHP Search</title>
	
</head>
<body>




	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
				<div class="row">
                <?php
                   $connection=mysqli_connect('localhost','saiful','123','pathshala');
                  
            if(isset($_POST['search'])){
                $searchkey=$_POST['search'];
                $sql="SELECT * FROM bangla_books WHERE BOOK_NAME LIKE '%$searchkey%' or AUTHOR_NAME LIKE  '%$searchkey%'  ";
            }
            else
            $sql="SELECT * FROM bangla_books";
            $result= mysqli_query($connection,$sql);

                ?>

				<form action="" method="POST"> 
					<div class="col-md-6">
						<input type="text" name="search" class='form-control' placeholder="Search By Name" value="" > 
					</div>
					<div class="col-md-6 text-left">
						<button class="btn">Search</button>
            <a href="connect.php" class="btn btn-success">Back to Home</a>
					</div>
				</form>

				<br>
				<br>
				</div>
				<table class="table table-bordered">
					<tr>
                     <th></th>
                        <th></th>
                        <th></th>
						<th></th>
                        <th></th>
                        <th></th>
					</tr>
                    <?php   while($row=mysqli_fetch_object($result)){ ?>
					<tr>
                    <td> <?php echo $row->ID ?></td>
                        <td> <?php echo $row->BOOK_NAME ?></td>
                        <td> <?php echo $row->AUTHOR_NAME ?></td>
                        <td> <?php echo $row->LANGUAGE ?></td>
                        <td> <?php echo $row->REALESED_YEAR ?></td>
                        <td> <?php echo $row->SHELF_NO ?></td>
						
					</tr>
                    <?php } ?>

				</table>
			</div>
		</div>
	</div>
</body>
</html>