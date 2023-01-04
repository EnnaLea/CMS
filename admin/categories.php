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

                        <div class="col-xs-6">

                        <?php

                        insert_categories();

                        ?>

                    <!-- Add Category -->
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="cat-title"> Add Category </label>
                                <input class="form-control" type="text" name="cat_title">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                            </div>
                        </form>

<!-- UPDATE  -->
<?php

updateCategories();

?>                      
                        </div> 
                    <!-- Add Category Form -->


                        <div class="col-xs-6">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
<!-- FIND ALL CATEGORIES QUERY -->
<?php

findAllCategories();

?>
                          
<!-- DELETE QUERY -->
<?php

deleteCategories();
                          
?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

<?php include "includes-amin/footer_admin.php" ?>
