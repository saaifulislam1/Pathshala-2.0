<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/semantic.min.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>


<header class="text-gray-700 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">PATHSHALA</span>
          </a>
          <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a href="allbooks.php" class="mr-5 hover:text-gray-900">BOOKS</a>
            <a href="request_book.php" class="mr-5 hover:text-gray-900">REQUEST A BOOK</a>
            <a href="search.php" class="mr-5 hover:text-gray-900">SEARCH</a>
            <a  href="admin.php" class="mr-5 hover:text-gray-900">ADMIN PANEL</a>
            <a href="connect.php" class="ui inverted orange button">HOME</a>
          </nav>
         
          
        </div>
      </header>



<?php    require_once('config.php');           ?>
    <?php

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    printf("Connect failed: %s\n", $conn->connect_error);
    exit();

}
printf("HERE ARE THE RECORDS:");

$query = "SELECT ID, BOOK_NAME,AUTHOR_NAME,LANGUAGE,REALESED_YEAR, SHELF_NO FROM all_books";
if ($result = $conn->query($query)) {
printf("<br><strong><mark>%d</mark></strong> records found!<br>", $result->num_rows);
/* fetch associative array */

printf("<table>");
printf("<tr>");
printf("<th>BOOK ID</th><th>Book Name</th> <th>Author name</th> <th>LANGUAGE</th> <th>RELEASED YEAR</th><th>SHELF NO</th>");

printf("</tr>");

while ($row = $result->fetch_assoc()) {

    printf("<tr>");
    printf("<td>%s </td> <td> %s </td> <td>%s </td> <td> %s </td> <td>%s </td> <td> %s </td>" ,$row["ID"],$row["BOOK_NAME"], $row["AUTHOR_NAME"],$row["LANGUAGE"],$row["REALESED_YEAR"],$row["SHELF_NO"]);
   printf(" </tr> ");  
}

printf("</table>");
$result->free(); //free result set
}
else
{
	printf("No record found!");
}
$conn->close();


?>


<script src="js/jquery-3.4.1.min.js"></script>
 <script src="js/semantic.min.js"></script>
</body>
</html>