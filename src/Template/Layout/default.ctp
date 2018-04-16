<html lang="en">
<head>
    <title>Responsive website template for products</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,900,900italic,300italic,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="/assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="/assets/plugins/flexslider/flexslider.css">
    <!-- Theme CSS -->



    <style>

        .jumbotron { background-image: url(https://placeimg.com/640/480/arch);
            background-size: cover;
            color: white;
        }

        .upcoming-festivals .card-header { width: 100%}

        footer { }

        /* green: 8bc34a , metal blue: 607d8b */
    </style>




    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<?= $this->Flash->render() ?>

<?= $this->fetch('content') ?>

<!-- Javascript -->
<script type="text/javascript" src="/assets/plugins/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/assets/plugins/popper.min.js"></script>
<script type="text/javascript" src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="/assets/plugins/flexslider/jquery.flexslider-min.js"></script>

<!-- blog specific js starts -->
<script type="text/javascript" src="/assets/plugins/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="/assets/plugins/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="/assets/js/blog.js"></script>
<!-- blog specific js ends -->

<script type="text/javascript" src="/assets/js/main.js"></script>

</body>
</html>