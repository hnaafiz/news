asds
<?php include "./includes/header.php" ?>
<?php include "./includes/connection.php" ?>

<body>

    <!-- Navigation -->
    <?php include "./includes/navbar.php" ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8"> 
                <?php
                $sql = "SELECT * FROM post";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $title = $row['post_title'];
                    $author = $row['post_author'];
                    $date = $row['post_date'];
                    $image = $row['post_image'];
                    $content = $row['post_content'];
                    ?>
                <h2>
                    <a href="#"><?php echo $title; ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $author; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $date; ?> at 10:00 PM</p>
                <hr>
                <img class="img-responsive" src="<?php echo $image; ?>" alt="">
                <hr>
                <p><?php echo $content; ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>


                <?php }
                ?>
                

                <!-- First Blog Post -->
                
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "./includes/sidenav.php" ?>
            

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <?php include "./includes/footer.php" ?>

    