<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/semantic.min.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <?php    require_once('config.php');           ?>

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

<h2>Admin panel</h2>

<form class="ui form" action="insert.php">
  <div class="field">
    <label>BOOK ID</label>
    <input type="text" name="id_key" placeholder="BOOK ID">
  </div>
  <div class="field">
    <label>BOOK NAME</label>
    <input type="text" name="name_key" placeholder="BOOK NAME">
  </div>
  <div class="field">
    <label>AUTHOR NAME</label>
    <input type="text" name="auth_key" placeholder="AUTHOR NAME">
  </div>
  <div class="field">
    <label>LANGUAGE</label>
    <input type="text" name="lang_key" placeholder="LANGUAGE">
  </div>
  <div class="field">
    <label>REALESED YEAR</label>
    <input type="text" name="rel_key" placeholder="REALESED YEAR">
  </div>
  <div class="field">
    <label>SHELF_NO</label>
    <input type="text" name="shelf_key" placeholder="SHELF NO">
  </div>
 
  <button  class="ui button" type="submit">Submit</button>
</form>

 <script src="js/jquery-3.4.1.min.js"></script>
 <script src="js/semantic.min.js"></script>
</body>
</html>