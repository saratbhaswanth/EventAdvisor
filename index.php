<?php
include "settings.php";

$connection=new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $connection->connect_error);
    exit();
}
ob_start();
$json = "{";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Our Solution for your Occasion | Event Advisor</title>
    <meta charset="utf-8">
    <link href="css/stylesheet.css" rel='stylesheet' type='text/css' />

    <script src="scripts/jquery-2.1.3.min.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Lato:400,300,100,300italic" rel="stylesheet" type="text/css">

    <script type=" text/javascript " src="scripts/application.js "></script>
    <meta name="viewport " content="width=device-width, initial-scale=1 ">
    <script type="application/x-javascript ">
        addEventListener("load ", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        };
        

    </script>
    <!--webfonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
    <!--//webfonts-->
</head>

<body>
    <?php 
        echo file_get_contents( "header.php"); 
        $cat_query = "select * from cat_list order by popularity desc";
        $cat_result = $connection->query($cat_query);
    ?>
    <div class="body-index">
        <section class="main-search " name="main-search">
            <div class="container " name="main-container">
                <div class="search-heading ">
                    Find the perfect gift for your loved ones</div>
                <div class="search-subheading ">Search the best gift ideas from across the web</div>
                <div class="custom_search ">
                    <form id="custom-search-form" name="custom-search-form">
                        <select id="category_home" class="themes_home btn-group styled-select ">
                            <?php
                                $first_tag = 0;
                                $cat_count = 0;
                                while($cat_row = $cat_result->fetch_assoc()){
                                    $cat_count = $cat_count + 1;
                                    $cat_id = $cat_row['cat_id'];
                                    $json .= '"'.$cat_row['cat_name'].'":{';
                                    $subcat_query = "select * from subcat_list where cat_id=$cat_id order by popularity desc";
                                    $subcat_result = $connection->query($subcat_query);
                                    $subcat_count = 0;
                                    while($subcat_row = $subcat_result->fetch_assoc()){
                                        $subcat_count = $subcat_count + 1;
                                        $json .= '"'.$subcat_row['subcat_name'].'":"'.$subcat_row['display_name'].'"';
                                        if($subcat_count < $subcat_result->num_rows){
                                            $json .= ',';
                                        }
                                    }
                                    $json .= '}';
                                    if($cat_count < $cat_result->num_rows){
                                        $json .= ",";
                                    }
                                    if($first_tag==0){
                                        $category_first = $cat_row['cat_id'];
                                        $first_tag = 1;
                                    }
                                    echo "<option value=".$cat_row['cat_name'].">".$cat_row['cat_display']."</option>";
                                }
                                $json .= '}';
                            ?>
                        </select>
                        <select id="subcategory_home" class="category_home btn-group styled-select ">
                            <?php
                                $subcat_query = "select * from subcat_list where cat_id=$category_first order by popularity desc";
                                $subcat_result = $connection->query($subcat_query);
                                while($subcat_row = $subcat_result->fetch_assoc()){
                                    echo "<option value=".$subcat_row['subcat_name'].">".$subcat_row['display_name']."</option>";
                                }
                            ?>
                        </select>
                        <input class="search-submit-button" id="search-submit-button" name="search-submit-button" type="submit" value="Search ">
                    </form>
                </div>
            </div>
        </section>
        <section class="main-categories ">
            <div class="main-categories-heading ">
                Write some matter here
            </div>
            <div class="group ">
                <div class="sub-group category-1 " name="category-1 ">
                    <div class="group-title ">category-1<span class="group-more "><a href="# ">more</a>
                </span>
                    </div>

                    <div class="col span_1_of_4 ">
                        1 of 4
                    </div>
                    <div class="col span_1_of_4 ">
                        1 of 4
                    </div>
                    <div class="col span_1_of_4 ">
                        1 of 4
                    </div>
                    <div class="col span_1_of_4 ">
                        1 of
                    </div>
                </div>
                <div class="sub-group category-2 " name="category-2 ">
                    <div class="group-title ">category-2<span class="group-more "><a href="# ">more</a>
                </span>
                    </div>
                </div>
                <div class="col span_1_of_4 ">
                    1 of 4
                </div>
                <div class="col span_1_of_4 ">
                    1 of 4
                </div>
                <div class="col span_1_of_4 ">
                    1 of 4
                </div>
                <div class="col span_1_of_4 ">
                    1 of
                </div>
            </div>
    </div>
    </section>
    </div>
    <?php echo file_get_contents( "footer.php"); ?>
</body>

</html>
<?php
$content = ob_get_contents();
ob_end_clean();
echo $content;

$filename="index.html";
$fh = fopen($filename, 'w') or die("can't open file\n");
fwrite($fh, $content);
fclose($fh);

$jsonname="search-data.json";
$jh = fopen($jsonname, 'w') or die("can't open file\n");
fwrite($jh, $json);
fclose($jh);
$connection->close();
?>

