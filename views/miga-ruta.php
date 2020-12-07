<header class="page-header">
    <h2><?php echo $_SESSION['section']?></h2>
    <div class="right-wrapper pull-right pr-3">
        <ol class="breadcrumbs">
            <li>
                <a href="index.php">
                    <i class="fa fa-home"></i>
                </a>
            </li>
            <li><span><?php echo $_SESSION['module']?></span></li>
            <li><span><?php echo $_SESSION['section']?></span></li>
        </ol>
    </div>
</header>