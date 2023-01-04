<?php include "includes-amin/header_admin.php" ?>

    <div id="wrapper">

    <!-- Navigation -->
<?php include "includes-amin/navigation_admin.php" ?>
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                        <h1 class="page-header">
                            Welcome to the Admin Page
                            <small>Author</small>
                        </h1>
<?php 
if (isset($_GET['source'])){
    $source = $_GET['source'];

}else{
    $source = '';
}

    switch ($source) {
    case 'add_post':
        include "includes-amin/add_post.php";
            break;
    case 'edit_post':
        include "includes-amin/edit_post.php";
            break;
    case 'lllll':
        echo "NICE add_post";
            break;


        default:
            include "includes-amin/veiw_all_post.php";
            break;
    }




?>
                       
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

<?php include "includes-amin/footer_admin.php" ?>
