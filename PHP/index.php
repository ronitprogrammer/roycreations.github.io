<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>ROY COLLECTION</title>
</head>

<body data-bs-spy="scroll">
    <div class="container-fluid p-0" style="overflow-x: hidden;">
        <!--------------------------------------------------------- start navbar -------------------------------------------------->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand fs-2" href="#">Roy Creations</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item" id="top_services">
                            <a class="nav-link" href="#main_services">Services</a>
                        </li>
                        <li class="nav-item" id="top_gallery">
                            <a class="nav-link" href="#main_gallery">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#main_contact">Contact Us</a>
                        </li>
                        <li class="nav-item" id="top_about">
                            <a class="nav-link" href="#main_about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#main_signin">Signin</a>
                        </li>
                    </ul>
                    <form action="../PHP/login.php" class="d-flex">
                        <button class="btn btn-outline-success" type="submit">Login</button>
                    </a>
                    </form>
                </div>
            </div>
        </nav>
        <!--------------------------------------------------------- end navbar ------------------------------------------------------>


        <!----------------------------------------------------------Start slider --------------------------------------------------->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1300">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../image/APPS SLIDE 01 copy.jpg" class="d-block w-100 h-10 " id="slideimg"
                        style="height: 300px;" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../image/APPS SLIDE 02.jpg" class="d-block w-100 h-10" id="slideimg"
                        style="height: 300px;" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../image/APPS SLIDE 03.jpg" class="d-block w-100 h-10" id="slideimg"
                        style="height: 300px;" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
        <!--------------------------------------------------End slider -------------------------------------------------------------------------->

        <!------------------------------------------------- Start Gallery ----------------------------------------------------------------------->
        <a id="main_services">
            <div class="clearfix border border-2 border-dark mt-5 p-3" id="services">
                <img src="../image/oldronit2 (2).jpg" class="col-md-6 float-md-end mb-3 ms-md-3 w-25 rounded-3"
                    alt="...">
                <h2>Our Services</h2>
                <p>
                    Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue. Fusce
                    dapibus, tellus ac cursus commodo, tortor mauris paddenstoel nibh, ut fermentum massa justo sit amet
                    risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>

                <p>
                    Sed posuere consectetur est at lobortis. Etiam porta sem malesuada magna mollis euismod. Duis
                    mollis,
                    est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Id nullam tellus
                    relem amet commodo telemque olemit. Sed posuere consectetur est at lobortis. Maecenas sed diam eget
                    risus varius blandit sit amet non magna. Cras justo odio, dapibus ac facilisis in, egestas eget
                    quam.
                </p>

                <p>
                    Donec id elit non mi porta gravida at eget metus. Aenean eu leo quam. Pellentesque ornare sem
                    lantaarnpaal quam venenatis vestibulum. Donec sed odio dui. Maecenas faucibus mollis interdum.
                    Nullam
                    quis risus eget urna salsa tequila vel eu leo. Donec id elit non mi porta gravida at eget metus.
                </p>
                <div class="btn-group mt-4 w-100 d-flex justify-content-center" role="group"
                    aria-label="Basic mixed styles example">
                    <a name="gallery" href="#top_services">
                        <button type="button" class="border w-100 py-2 px-3 rounded">Read More</button>
                    </a>
                </div>
            </div>
        </a>
        <!------------------------------------------------- End Gallery ------------------------------------------------------------------------->
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
        $server = "localhost";
        $user = "root";
        $pass = "";
        $database = "finalweb";
        $conn = mysqli_connect($server, $user, $pass, $database);
        
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        $sql = "INSERT INTO `contact` (`Name`, `Email`, `Message`, `dt`) VALUES ('$name', '$email', '$message', current_timestamp())";
        $result = mysqli_query($conn, $sql);
    }
    ?>
        <!------------------------------------------------ Start Contact form --------------------------------------------------------------------->
        <div id="main_contact" class="pt-5">
        <h1 class="text-center">
            Please let me know you
        </h1>
            <div class="container border p-4 mb-5" id="container_box">
            <form action="../PHP/index.php" onsubmit="return validation()" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your Name" name="name">
                    <span class="text-danger fs-sm-8 ms-3 fw-bold" id="username"></span>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your valid E-mail" name="email">
                    <span class="text-danger fs-sm-8 ms-3 fw-bold" id="useremail"></span>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Write your comments here</label>
                    <textarea class="form-control" id="message" rows="3" name="message"></textarea>
                    <span class="text-danger fs-sm-8 ms-3 fw-bold" id="usermessage"></span>
                </div>
                <div class="btn-group mt-4 w-100" role="group" aria-label="Basic mixed styles example">
                    <a name="sendmessage" class="w-100">
                        <button class="border w-100 py-2 rounded" type="submit">Send Message</button>
                    </a>
                </div>
                </form>
            </div>
        </div>
        <!-------------------------------------------------End Contact form ------------------------------------------------------------>
        <!-- start gallery -->
        <div id="main_gallery" class="mx-4">
            <h1 class="text-center fs-1">Gallery</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
                <div class="col">
                    <div class="card">
                        <img src="../image/oldronit2 (2).jpg" class="card-img-top w-50 m-4 rounded-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="../image/newronit (2).jpg" class="card-img-top w-50 m-4 rounded-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="../image/laddo (2).jpg" class="card-img-top w-50 m-4 rounded-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="../image/laddo (2).jpg" class="card-img-top w-50 m-4 rounded-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="../image/oldronit2 (2).jpg" class="card-img-top w-50 m-4 rounded-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="../image/newronit (2).jpg" class="card-img-top w-50 m-4 rounded-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- end gallery -->
        
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
        $servername = "localhost";
        $users = "root";
        $passes = "";
        $databases = "finalweb";
        $conn = mysqli_connect($servername, $users, $passes, $databases);
        
        $username = $_POST["uname"];
        $userpass = $_POST["upass"];
        $usermail = $_POST["umail"];
        $webname = $_POST["uwebname"];
        $weburl = $_POST["uweburl"];
        
        $sql = "INSERT INTO `signin` (`Username`, `Password`, `Email`, `WebName`, `WebUrl`, `Dt`) VALUES ('$username', '$userpass', '$usermail', '$webname', '$weburl', current_timestamp())";
        $result = mysqli_query($conn, $sql);
    }
    ?>
        <!--------------------------------------------------Start SignIn -------------------------------------------------------------->
        <div id="main_signin" class="pt-5">
            <div class="container mt-0 border p-4 mb-5" id="container_box">
                <form action="../PHP/index.php" onsubmit="return validate()" method="post">
                    <div class="input-group mb-0">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" class="form-control" placeholder="Create Your New Username" id="signname"
                            aria-label="Username" name="uname" aria-describedby="basic-addon1">
                    </div>
                    <span id="uspan" class="text-danger fs-sm-8 ms-3 fw-bold"></span><br>

                    <div class="input-group mb-0">
                        <span class="input-group-text" id="basic-addon1">Password</span>
                        <input type="text" class="form-control" placeholder="Create a Your New Password" id="signpass"
                            aria-label="Password" name="upass" aria-describedby="basic-addon1">
                    </div>
                    <span id="pspan" class="text-danger fs-sm-8 ms-3 fw-bold"></span><br>

                    <div class="input-group mb-0">
                        <input type="text" class="form-control" placeholder="Enter your Email-Id" id="signmail"
                            aria-label="Recipient's username" name="umail" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">@example.com</span>
                    </div>
                    <span id="espan" class="text-danger fs-sm-8 ms-3 fw-bold"></span><br>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">Website Name</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                            id="signwebname" name="uwebname" placeholder="Enter your Webiste Name ( *Optional )">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">Website URL</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                            id="signweburl" name="uweburl" placeholder="Enter your Website URL ( *Optional )">
                    </div>
                    <div class="btn-group mt-4 w-100" role="group" aria-label="Basic mixed styles example">
                        <button class="border w-100 py-2 rounded" type="submit">SignIn</button>
                    </div>
                </form>
                <!------------------------------------------------------ End SignIn ----------------------------------------------------------->
            </div>
        </div>
        <div id="main_about" class="mb-3 pt-4 mx-5 ">
            <h1 class="text-center">About Us</h1>
            <div class="clearfix border border-dark border-4 p-3">
                <img src="../image/laddo (2).jpg" class="col-md-6 float-md-end mb-3 ms-md-3 w-25" alt="...">

                <p>
                    A paragraph of placeholder text. We're using it here to show the use of the clearfix class. We're
                    adding quite a few meaningless phrases here to demonstrate how the columns interact here with the
                    floated image.
                </p>

                <p>
                    As you can see the paragraphs gracefully wrap around the floated image. Now imagine how this would
                    look with some actual content in here, rather than just this boring placeholder text that goes on
                    and on, but actually conveys no tangible information at. It simply takes up space and should not
                    really be read.
                </p>

                <p>
                    And yet, here you are, still persevering in reading this placeholder text, hoping for some more
                    insights, or some hidden easter egg of content. A joke, perhaps. Unfortunately, there's none of that
                    here.
                </p>
                <p>
                    As you can see the paragraphs gracefully wrap around the floated image. Now imagine how this would
                    look with some actual content in here, rather than just this boring placeholder text that goes on
                    and on, but actually conveys no tangible information at. It simply takes up space and should not
                    really be read.
                </p>
                <div class="btn-group mt-4 w-100 d-flex justify-content-center" role="group"
                    aria-label="Basic mixed styles example">
                    <a name="gallery" href="#top_about">
                        <button type="button" class="border w-100 py-2 px-3 rounded">Read More</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="text-center">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p class="fs-2">We present you our beautiful and artistics photography</p>
                        <footer class="blockquote-footer fs-5 mb-0">Someone famous in <cite title="Source Title">Roy
                                Creations</cite>
                        </footer>
                        <p class="fs-6">&copy; ROY CREATIONS 2020</p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>





    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->

    <script src="../JS/contact.js"></script>
    <script src="../JS/signin.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
</body>

</html>