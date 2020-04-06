<?php
    include "connection.php";
    include "header.php";
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                      <h3></h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <?php
                                    $res=mysqli_query($db,"SELECT * FROM `books`");
                                    echo "<table class='table table-bordered'>";
                                    echo "<tr>";
                                    echo "<th>"; echo "ISBN"; echo "</th>";
                                    echo "<th>"; echo "Name"; echo "</th>";
                                    echo "<th>"; echo "Author"; echo "</th>";
                                    echo "<th>"; echo "Edition"; echo "</th>";
                                    echo "<th>"; echo "Price"; echo "</th>";
                                    echo "<th>"; echo "Quantity"; echo "</th>";
                                    echo "<th>"; echo "Image"; echo "</th>";
                                    echo "<th>"; echo "Availability"; echo "</th>";
                                    echo "</tr>";
                                    while ($row=mysqli_fetch_array($res)){
                                        echo "<tr>";
                                        echo "<td>"; echo $row["isbn"]; echo "</td>";
                                        echo "<td>"; echo $row["name"]; echo "</td>";
                                        echo "<td>"; echo $row["author"]; echo "</td>";
                                        echo "<td>"; echo $row["edition"]; echo "</td>";
                                        echo "<td>"; echo $row["price"]; echo "</td>";
                                        echo "<td>"; echo $row["qty"]; echo "</td>";
                                        echo "<td>"; ?> <img src="<?php echo $row["img"]; ?> " height="100" width="100" > <?php echo "</td>";
                                        echo "<td>"; echo $row["availability"]; echo "</td>";
                                        echo "</tr>";
                                    }
                                    
                                    echo "</table>";



                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->


<?php
    include "footer.php";
?>