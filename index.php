<!DOCTYPE html>
<html>

<head>
    <title>Our Solution for your Occasion | Event Advisor</title>
    <meta charset="utf-8">
    <link href="/css/stylesheet.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--webfonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
    <!--//webfonts-->
</head>

<body>
    <?php echo file_get_contents( "header.php"); ?>
    <section class="main-search" name="main-search">
        <div class="container" name="main-container">
            <div class="search-heading">
                Find the perfect gift for your loved ones</div>
            <div class="search-subheading">Search the best gift ideas from across the web</div>
            <div class="custom_search">
                <form id="custom-search-form" name="custom-search-form">
                    <select id="themes_home" class="themes_home btn-group styled-select">
                        <option>theme 1</option>
                        <option>theme 2</option>
                        <option>theme 3</option>
                        <option>theme 4</option>
                    </select>
                    <select id="category_home" class="category_home btn-group styled-select">
                        <option>category 1</option>
                        <option>category 2</option>
                        <option>category 3</option>
                        <option>category 4</option>
                    </select>
                    <select id="type_home" class="type_home btn-group styled-select">
                        <option>type 1</option>
                        <option>type 2</option>
                        <option>type 3</option>
                        <option>type 4</option>
                    </select>
                    <input class="search-submit-button" type="submit" value="Search">
                </form>
            </div>
        </div>
    </section>
    <!--<section class="main-categories">
        The HTML
        <div class="group">
            <div class="col span_1_of_4">
                1 of 4
            </div>
            <div class="col span_1_of_4">
                1 of 4
            </div>
            <div class="col span_1_of_4">
                1 of 4
            </div>
            <div class="col span_1_of_4">
                1 of
            </div>
        </div>
    </section>-->
    <!--<?php echo file_get_contents( "footer.php"); ?>-->
</body>

</html>
