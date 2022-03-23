<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type='text/javascript' src='script.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LPFT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="https://laplateforme.io/">Acceuil</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Units</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Jobs</a>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled">Skills</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid bg-secondary d-flex flex-column">
        <h1 class="text-center">LaPlateforme_</h1>
        <div class="d-flex flex-row justify-content-around">
            <!-- CARD -->
        <div>
            <div class="card m-2" style="width: 18rem;">
                <img src="img/papillon.jpeg" class="card-img-top" alt="papillon">
                <div class="card-body">
                    <h5 class="card-title">Un Papillon</h5>
                    <p class="card-text">Un papillon, c'est un peu comme une chenille, mais avec des ailes. <br> Ne pas ingerer.</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Commander votre popre papillon</button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Votre commande</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Merci d'avoir acheté ce papillon
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ALERT -->
        <div>
            <div class="alert alert-secondary m-2" role="alert">
                <h1 class="mt-4">Bonjour, monde!</h4>
                <p id="text" class="mt-3 mb-3">Il existe plusieurs visions du terme:
                    le monde est la matière, l'espace et les phénomènes qui nous sont accessibles par les sens, l'experience ou la raison.
                    Le sens le plus courant désigne notre planète, la Terre, avec ses habitants, et son environnement plus ou moins naturel.</p>
                <hr>
                <p class="mt-2 mb-0">Le sens etendu designe l'univers dans son ensemble.</p>
                <button id="button" type="button" class="btn btn-danger">Rebooter le monde</button>
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end mb-4">
                        <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                        </li>
                        <li class="page-item"><a class="page-link" id="1">1</a></li>
                        <li class="page-item"><a class="page-link" id="2">2</a></li>
                        <li class="page-item"><a class="page-link" id="3">3</a></li>
                        <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="container d-flex flex-column justify-content-center col-9 mt-4">
                <p class="text-end mb-0">Installation de AI 9000</p>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning " role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%"></div>
                </div>
            </div>
            <div class="container d-flex justify-content-between m-4">
                <div class="mb-5">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Login" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">@example.com</span>
                        </div>

                        <label for="basic-url" class="form-label">Your vanity URL</label>
                        <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                        </div>

                        <div class="input-group mb-3">
                        <span class="input-group-text">DogeCoin</span>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-text">.00</span>
                        </div>

                        <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                        <span class="input-group-text">@</span>
                        <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                        </div>

                        <div class="input-group">
                        <span class="input-group-text">With textarea</span>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                </div>
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>
        </div>
        <!-- LIST GROUP -->
        <div>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                    Limbes
                </a>
                <a href="#" class="list-group-item list-group-item-action">Luxure</a>
                <a href="#" class="list-group-item list-group-item-action">Gourmandise</a>
                <a href="#" class="list-group-item list-group-item-action">Avarice</a>
                <a href="#" class="list-group-item list-group-item-action">Colere</a>
                <a href="#" class="list-group-item list-group-item-action">Heresie</a>
                <a href="#" class="list-group-item list-group-item-action">Violence</a>
                <a href="#" class="list-group-item list-group-item-action">Ruse et Tromperie</a>
                <a href="#" class="list-group-item list-group-item-action">Trahison</a>
                <a href="#" class="list-group-item list-group-item-action">Internet explorer</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>