<html>

<head>
  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="./s.scss">
  <link rel="stylesheet" href="_modal.scss">
  <style>
    .modal-backdrop {
      --bs-backdrop-zindex: none !important;
    }

    .offcanvas-backdrop.show {
      opacity: 0;
    }

    #exampleModal {
      margin-right: 560px !important;
      margin-top: 180px !important;
    }

    .compose {
      margin-top: 250px !important;
      margin-right: 35px !important;
    }
  </style>

</head>

<body>
  <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <div>
        <button class="ms-1 navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"><span class="navbar-toggler-icon "></span>
        </button>
      </div>
      <a class="navbar-brand" href="inbox.php">My Message Board</a>
      <div class="btn-group dropstart">
        <img class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" src="./id.png" alt="account" height="50px" width="50px">
        <ul class="dropdown-menu">
          <li><button class="dropdown-item" type="button"><input type="text" value="">User Name</button></li>
          <li><button class="dropdown-item" type="button"><a href="logout.php">Log Out</a></button></li>
        </ul>
      </div>
      <div class="offcanvas offcanvas-start text-bg-dark" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end pe-3">
            <li class="nav-item">
              <a class="nav-link" href="inbox.php"><i class="bi bi-envelope m-3" style="font-size:22px;"></i>Inbox</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="important.php"><i class="bi bi-star m-3" style="font-size:22px;"></i>Important</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sent.php"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-send me-4 ms-3" viewBox="0 0 16 16">
                  <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
                </svg>Sent</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="draft.php"><i class="bi bi-file-earmark m-3" style="font-size:22px;"></i>Draft</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="all_mail.php"><i class="bi bi-stack m-3" style="font-size:22px;"></i>All Mail</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="spam.php"><i class="bi bi-shield-exclamation m-3" style="font-size:22px;"></i>Spam</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="bin.php"><i class="bi bi-trash m-3" style="font-size:22px;"></i>Bin</a>
            </li>
            </li>
          </ul>
        </div>
  </nav>
  <br><br><br><br>
</body>

</html>