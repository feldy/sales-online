<?php 
    include '../system/config_service.php'; 
    session_start();
    if (empty($_SESSION['username']) || empty($_SESSION['password']) ) {
        echo "<script>window.location.href='../'</script>";
    } else {
?>
<!DOCTYPE html>
<html>
<head>
    <title>PO Online</title>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="../lib/chosen/style.css"> -->
    <!-- <link rel="stylesheet" href="../lib/chosen/prism.css"> -->
    <link rel="stylesheet" href="../lib/chosen/chosen.css">
    <style type="text/css" media="all">
        /* fix rtl for demo */
        .chosen-rtl .chosen-drop { left: -9000px; }
    </style>

    <link rel="stylesheet" href="../lib/metro/css/metro-bootstrap.css">
    <link rel="stylesheet" href="../lib/metro/css/metro-bootstrap-responsive.css">
    <script src="../lib/metro/js/jquery/jquery.min.js"></script>
    <script src="../lib/metro/js/jquery/jquery.widget.min.js"></script>
    <script src="../lib/metro/min/metro.min.js"></script>
</head>
<body class="metro">
    <nav class="navigation-bar">
        <nav class="navigation-bar-content">
            <a href="?page=home" class="element"><img src="../images/logo-gku.jpeg" width="128px"></a>
            <span class="element-divider"></span>
            <a class="element" href="?page=produk_baru"><span class="icon-newspaper"></span> Input Produk Baru</a>
            <span class="element-divider"></span>
            <a class="element" href="?page=review_selling"><span class="icon-shipping"></span> Review Selling</a>
            <span class="element-divider"></span>
        </nav>
    </nav>
    <table width="100%" border="0">
        <tr align="right" height="30px">
            <td colspan="2" style="border-bottom: solid 1px black;">
                <strong><?php echo $_SESSION['nama']." | "; ?><a href="../system/logout_service.php">LOGOUT</a></strong>&emsp;
            </td>
        </tr>
        <tr align="center">
            <?php
                if (isset($_GET['page'])) {
                    if ($_GET['page'] == "produk_baru") {
                        include 'produk_baru.php';
                    } elseif ($_GET['page'] == "review_selling") {
                        include 'review_selling.php';
                    } else {
                        echo '<td colspan="2"><img src="../images/utama.jpg" width=""></td>';
                    }
                } else {
                    echo '<td colspan="2"><img src="../images/utama.jpg" width=""></td>';
                }
            ?>
        </tr>
    </table>
</body>
</html>
<script src="../lib/chosen/chosen.jquery.js" type="text/javascript"></script>
<script src="../lib/chosen/prism.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
var config = {
  '.chosen-select'           : {},
  '.chosen-select-deselect'  : {allow_single_deselect:true},
  '.chosen-select-no-single' : {disable_search_threshold:10},
  '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
  '.chosen-select-width'     : {width:"95%"}
}
for (var selector in config) {
  // $(selector).chosen(config[selector]);
}
</script>
<script src="../js/main.js"></script>
<?php } ?>