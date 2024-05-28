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
      <li class="nav-item">
        <a class="nav-link text-white" href="index.html">HOME</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownCategory" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CATEGORY
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownCategory">
          <a class="dropdown-item" href="category1.html">MAKE UP</a>
          <a class="dropdown-item" href="category2.html">SKINCARE</a>
          <a class="dropdown-item" href="category3.html">BODYCARE</a>
          <a class="dropdown-item" href="category4.html">HAIRCARE</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownRecomendation" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          RECOMMENDATION
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownRecomendation">
          <a class="dropdown-item" href="recommendation1.html">PRODUCT SKINCARE</a>
          <a class="dropdown-item" href="recommendation2.html">PRODUCT MAKE UP</a>
          <a class="dropdown-item" href="recommendation3.html">PRODUCT BODYCARE</a>
          <a class="dropdown-item" href="recommendation4.html">PRODUCT PERFUME</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownGRWU" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          GRWU
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownGRWU">
          <a class="dropdown-item" href="grwu1.html">SKINCARE ROUTINE</a>
          <a class="dropdown-item" href="grwu2.html">MAKE UP TUTORIAL</a>
          <a class="dropdown-item" href="grwu3.html">FASHION</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownJoinUs" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          JOIN US
        </a>
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
        <h1 class="text-center font-italic bold" style= color:#582f0e>Skincare Products</h1>
        <h3 class="text-center">Cleanser</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://i.pinimg.com/564x/1a/1b/31/1a1b311c95f22d6a07f89077148f60dd.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Bioderma</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Add Review</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://api.watsons.co.id/medias/zoom-back-56012.jpg?context=bWFzdGVyfHd0Y2lkL2ltYWdlc3w1MDUxMXxpbWFnZS9qcGVnfGFEUTBMMmc0TVM4eE1UWTVNalEwTWpBeU5qQXhOQzk2YjI5dExXSmhZMnN0TlRZd01USXVhbkJufDI4MThiYWJmMTIzNGIwODYzMTlkNWM4M2ZiZmFiYWZmYjIwZmMyZjI4ZmZhMTc0YTQ0MjNiYzhiNGExZmIwMzk" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Garnier</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Add Review</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://images.soco.id/da75843c-b741-4008-9b48-0e72db74763b-1783088346.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">The Originote</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Add Review</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://api.watsons.co.id/medias/NIVEA-PEARL-WHITE-MICELLAIR-SKIN-BREATHE-125ML-51021.jpg?context=bWFzdGVyfHd0Y2lkL2ltYWdlc3w0NTE4N3xpbWFnZS9qcGVnfGFHWTFMMmhtWWk4eE1UWTRNRGN5TVRRd016a3pOQzlPU1ZaRlFTQlFSVUZTVENCWFNFbFVSU0JOU1VORlRFeEJTVklnVTB0SlRpQkNVa1ZCVkVoRklERXlOVTFNTFRVeE1ESXhMbXB3Wnd8ZGI0ZDI4YTVmOGU0OTdiMDA0OGNiNjBmNjk2MGNmMjcyYmY3YzE0YzUxNDRiMmMzOGExY2VjNTY0MDNhNDgxYQ" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Nivea</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Add Review</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full/catalog-image/101/MTA-157275434/facetology_facetology_triple_care_hydra_cleanse_micellar_water_-_300ml_full01_97b3e6d9.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Facetology</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Add Review</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2022/4/12/abc9bfc1-a4f5-41ee-a55e-9898d8d6ec1a.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Dear Me Beauty</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Add Review</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://thumbor.prod.raenabeauty.com/unsafe/filters:format(webp)/https://d1dnhxm90ph8r2.cloudfront.net/products/images/SEA004/fef525f6-b6eb-4b1a-98fe-354eab19f979" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Sea Makeup</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Add Review</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://i.pinimg.com/474x/5e/26/49/5e2649916afbe3b5d49ecf6a350feb03.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Skin1004 Madagascar Centella Light Cleansing Oil</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Add Review</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://i.pinimg.com/474x/0e/e1/2c/0ee12ca6633f5741f4c56793514170c3.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Anua Cleansing Oil</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Add Review</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://i.pinimg.com/474x/f7/0f/d5/f70fd5a8925e1d4b85bc76eb05f06449.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Kose Soft Mo Speedy Cleaning Oil</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Add Review</button>
                    </div>
                </div>
            </div>
        </div>

    <div class="container my-5">
    <h3 class="text-center">Moisturaizer</h3>
    <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://i.pinimg.com/474x/f6/ab/87/f6ab87417fce059bc0c9e55e61fd6d28.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Skintific</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Add Review</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://i.pinimg.com/474x/20/8b/33/208b336f92c6bf5c1353f51ae2b9095c.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">The Originote</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Add Review</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://image.femaledaily.com/dyn/144/images/prod-pics/product_1698222044_azarine_ad_800x800.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Azarine</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Add Review</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://image.femaledaily.com/dyn/210/images/prod-pics/product_1680248071_Snapinsta._800x800.png" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Glad2Glow</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Add Review</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://www.beautyhaul.com/assets/uploads/products/thumbs/800x800/DORSKIN_Matcha_Glow_Dream_Mask.jpeg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Dorskin</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Add Review</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://i.pinimg.com/474x/a6/03/73/a6037346f1591d9695dc380b9fd162fc.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Anua</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Add Review</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://www.perfectbeautyshop.com/11737/2642.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Hadalabo</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Add Review</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://i.pinimg.com/474x/b2/23/73/b22373342c83cc93c523dd19e98198e4.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Cosrx</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Add Review</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://images.soco.id/58edd34e-207a-4fe3-ac4f-6d5fc0e724c8-image-0-1616398794515" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Dear Me Beauty</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Add Review</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://i.pinimg.com/474x/bd/1f/c1/bd1fc1e30c49ba18a94c4a655b398eef.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Somethinc</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Add Review</button>
                    </div>
                </div>
            </div>
        </div>

    <div class="container my-5">
    <h3 class="text-center">Toner</h3>
    <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://i.pinimg.com/474x/22/bc/a9/22bca98ee3944d2ea18893ff732467e5.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Skintific</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Add Review</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://i.pinimg.com/474x/a9/fc/dd/a9fcddaf5393ec5a474c0d1a3a618f89.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Anua</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Add Review</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://i.pinimg.com/564x/8e/36/23/8e36232b986dc5cc97637c0d8cee48b0.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Pixi</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Add Review</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://i.pinimg.com/474x/3b/85/56/3b855628b33f92f20cd0ff75479aea91.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">NPure</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Add Review</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://i.pinimg.com/474x/fc/21/e4/fc21e4ce6e45928fe30948a3cd37addb.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Pyunkang Yul</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Add Review</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://id-test-11.slatic.net/p/2dd07e82cc1b1ff79a18e9df50f73f27.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Eiem Beauty</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Add Review</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://i.pinimg.com/474x/ef/cd/28/efcd28ef894c30a75d24c65a100a75cf.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Whitelab</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Add Review</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://down-id.img.susercontent.com/file/2f015cbe5015e0ea4f708aaa069921bc" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Mineral Botanica</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Add Review</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://image.femaledaily.com/dyn/210/images/prod-pics/product_1589430159_8._Hyalu_H_800x800.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Pratista Hyalu</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Add Review</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://enviostore.com/media/product/155/product_image-1647421205.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Azarine</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Add Review</button>
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
                        <form action="add_review.php" method="POST" class="needs-validation" novalidate>
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
                            <button type="submit" class="btn btn-primary">Submit Review</button>
                        </form>
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
