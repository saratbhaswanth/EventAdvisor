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
    <?php echo file_get_contents( "header.php"); ?>
    <div class="body-index">
        <section class="main-search " name="main-search">
            <div class="container " name="main-container">
                <div class="search-heading ">
                    Find the perfect gift for your loved ones</div>
                <div class="search-subheading ">Search the best gift ideas from across the web</div>
                <div class="custom_search ">
                    <form id="custom-search-form" name="custom-search-form">
                        <select id="category_home" class="themes_home btn-group styled-select ">
                            <option value="category1">category 1</option>
                            <option value="category2">category 2</option>
                            <option value="category3">category 3</option>
                            <option value="category4">category 4</option>
                        </select>
                        <select id="subcategory_home" class="category_home btn-group styled-select ">
                            <option value="c1s1">C1S1</option>
                            <option value="c1s2">C1S2</option>
                            <option value="c1s3">C1S3</option>
                        </select>
                        <input class="search-submit-button " type="submit " value="Search ">
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