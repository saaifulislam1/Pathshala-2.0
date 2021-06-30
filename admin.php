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


      <div>
  <nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="h-8 w-8" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a  class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>

          
            </div>
          </div>
        </div>
        <div class="hidden md:block">
         
        </div>
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button type="button" class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!--
              Heroicon name: outline/menu

              Menu open: "hidden", Menu closed: "block"
            -->
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!--
              Heroicon name: outline/x

              Menu open: "block", Menu closed: "hidden"
            -->
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a  class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium">Dashboard</a>

      
        

      </div>
      
    </div>
  </nav>

  <header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold text-gray-900">
       Admin Panel
      </h1>
    </div>
  </header>
  <main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
      <!-- Replace with your content -->
     
      <div class="px-4 py-6 sm:px-0">
        <div class="border-4 border-dashed border-gray-100 rounded-lg h-500">
         <!-- Replace here -->
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
  <br>
</form>
        </div> 
      </div>
      <!-- /End replace -->
    </div>
  </main>
</div>
<div style="margin-bottom:200px;">
</br>
</br>
</div>






 <script src="js/jquery-3.4.1.min.js"></script>
 <script src="js/semantic.min.js"></script>
</body>
</html>