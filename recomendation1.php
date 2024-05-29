<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRWU - WE SHINE!</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        .bg-section {
            background-image: url('img/bg2.png');
        }
    </style>
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-light" style="background-image: url('img/bottle.png');">
    <a class="navbar-brand" href="#">
        <img src="img/logo.png" class="align-center rounded-circle" style="height: 90px; width: 90px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link text-white" href="index.html">HOME</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownCategory" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CATEGORY</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownCategory">
                    <a class="dropdown-item" href="category1.html">MAKE UP</a>
                    <a class="dropdown-item" href="category2.html">SKINCARE</a>
                    <a class="dropdown-item" href="category3.html">BODYCARE</a>
                    <a class="dropdown-item" href="category4.html">HAIRCARE</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownRecomendation" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">RECOMMENDATION</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownRecomendation">
                    <a class="dropdown-item" href="recommendation1.html">PRODUCT SKINCARE</a>
                    <a class="dropdown-item" href="recommendation2.html">PRODUCT MAKE UP</a>
                    <a class="dropdown-item" href="recommendation3.html">PRODUCT BODYCARE</a>
                    <a class="dropdown-item" href="recommendation4.html">PRODUCT PERFUME</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownGRWU" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">GRWU</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownGRWU">
                    <a class="dropdown-item" href="grwu1.html">SKINCARE ROUTINE</a>
                    <a class="dropdown-item" href="grwu2.html">MAKE UP TUTORIAL</a>
                    <a class="dropdown-item" href="grwu3.html">FASHION</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownJoinUs" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">JOIN US</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownJoinUs">
                    <a class="dropdown-item" href="joinus1.html">LOGIN</a>
                    <a class="dropdown-item" href="joinus2.html">PROFILE</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div class="bg-section">
    <div class="container">
        <h1 class="text-center font-italic bold" style="color:#582f0e;">Skincare Products</h1>
        <h3 class="text-center">Cleanser</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://i.pinimg.com/564x/1a/1b/31/1a1b311c95f22d6a07f89077148f60dd.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Bioderma</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Add Review</button>
                        <button type="button" class="btn btn-primary" onclick="location.href='add_rc1_cl1.php'">See Review</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://api.watsons.co.id/medias/zoom-back-56012.jpg?context=bWFzdGVyfHd0Y2lkL2ltYWdlc3w1MDUxMXxpbWFnZS9qcGVnfGFEUTBMMmc0TVM4eE1UWTVNalEwTWpBeU5qQXhOQzk2YjI5dExXSmhZMnN0TlRZd01USXVhbkJufDI4MThiYWJmMTIzNGIwODYzMTlkNWM4M2ZiZmFiYWZmYjIwZmMyZjI4ZmZhMTc0YTQ0MjNiYzhiNGExZmIwMzk" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Garnier</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Add Review</button>
                        <button type="button" class="btn btn-primary" onclick="location.href='add_rc1.cl2.php'">See Review</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Review Modal -->
        <div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="reviewModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="reviewModalLabel">Add a Review</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Review form -->
                        <form action="add_rc1_cl1.php" method="POST" class="needs-validation" novalidate>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="skinType">Skin Type</label>
                                <input type="text" class="form-control" id="skinType" name="skinType" required>
                            </div>
                            <div class="form-group">
                                <label for="usageDuration">Usage Duration</label>
                                <input type="text" class="form-control" id="usageDuration" name="usageDuration" required>
                            </div>
                            <div class="form-group">
                                <label for="review">Review</label>
                                <textarea class="form-control" id="review" name="review" rows="3" required></textarea>
                            </div>
                            <input type="hidden" id="productId" name="productId" value="1"> <!-- Example product ID -->
                            <button type="submit" class="btn btn-primary">Submit Review</button>
                        </form>
                    </div>
                    <div class="modal-body">
                        <!-- Review form -->
                        <form action="add_rc1_cl2.php" method="POST" class="needs-validation" novalidate>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="skinType">Skin Type</label>
                                <input type="text" class="form-control" id="skinType" name="skinType" required>
                            </div>
                            <div class="form-group">
                                <label for="usageDuration">Usage Duration</label>
                                <input type="text" class="form-control" id="usageDuration" name="usageDuration" required>
                            </div>
                            <div class="form-group">
                                <label for="review">Review</label>
                                <textarea class="form-control" id="review" name="review" rows="3" required></textarea>
                            </div>
                            <input type="hidden" id="productId" name="productId" value="1"> <!-- Example product ID -->
                            <button type="submit" class="btn btn-primary">Submit Review</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
