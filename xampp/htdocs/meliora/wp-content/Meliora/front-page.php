<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="assets/plugins/bootstrap5.0.2/bootstrap.min.css">
    <script src="assets/plugins/jquery2.2.4/jquery-2.2.4.min.js"></script>
    
    <meta name="title" content="@Html.Raw(ViewBag.MetaTitle)" />
    <meta name="keywords" content="@Html.Raw(ViewBag.Keywords)" />
    <meta name="description" content="@Html.Raw(ViewBag.Description)">

    <?php 
        wp_head();
    ?>
</head>
<body>
    <?php 
        get_header();
    ?>

    <?php 
        get_footer();
    ?>

    <?php 
        wp_footer();
    ?>
</body>
</html>