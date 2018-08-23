<?php include_once 'header.php'; ?>

    <section class = "main-container">
        <div class ="main-wrapper">
            <h2> Home</h2>
            echo $_SESSION['u_id'];
        </div>
    </section>


<?php include_once 'footer.php'; ?>

<?php
/*
Steps:
1. set up database and tables
2. create the front end
3. connect to the  databases. 
    all the functionality based files are included in the includes folder - db.inc.php file
4. Create the sign up PHP scrip
    - action attribute to the form
    - method = post

*/