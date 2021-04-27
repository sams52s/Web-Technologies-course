<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  	<h3>Hello, <?php echo $_SESSION['name']; ?></h3>
     
    <a class="navbar-brand" href="#">WELCOME G1_1 RESTURANT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="details.php">Profile Update</a>
         </li>
          <li class="nav-item">
          <a class="nav-link" href="index.php">About</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="search.php">Restutrant List</a>
          </li>

        
        <li class="nav-item">
           <a href="routers/logout.php"class="btn btn-primary">Logout</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
