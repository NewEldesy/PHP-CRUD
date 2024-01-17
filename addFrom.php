<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Demo CRUD, with PHP, MySql and Ajax</title>

        <!-- Bootstrap core CSS -->
        <link href="Assets/Css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <!-- <link href="dashboard.css" rel="stylesheet"> -->
    </head>

    <body>
        <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Demo CRUD</a>
            <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Deconnection</a>
                </li>
            </ul>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                                
                            </h6>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">
                                    Liste
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="addFrom.php">
                                Ajouter Utilisateur
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                        <h3 class="h3">Formulaire Enregistrements des Utilisateurs</h3>
                        <div class="btn-toolbar mb-2 mb-md-0">
                            <a href="#" class="btn btn-sm btn-outline-success" id="btn_add"> 
                                Enregistrer
                            </a>
                        </div>
                    </div>
                            
                    <div class="col-md-12 order-md-1">
                        <div id="result"></div>
                        <h5 class="mb-5">Nouvel Utilisateur</h5>
                        <form id="frm_add_user" class="needs-validation" novalidates>
                                <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="user_nom">Nom</label>
                                    <input type="text" class="form-control" id="user_nom" placeholder="" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="user_prenom">Prenom</label>
                                    <input type="text" class="form-control" id="user_prenom" placeholder="" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="user_email">Email</label>
                                    <input type="text" class="form-control" id="user_email" placeholder="" required>
                                </div>
                            </div>
                        </form>
                    </div>
                </main>
            </div>
        </div>

        <!-- Bootstrap core JavaScript -->
        <script src="Assets/Js/jquery-3.6.0.min.js"></script>
        <script src="Assets/Js/script.js"></script>
        <script src="Assets/Js/bootstrap.min.js"></script>
    </body>
</html>