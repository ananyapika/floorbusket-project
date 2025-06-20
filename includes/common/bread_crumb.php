<div class="breadcumb-section" style="background: url(<?php echo $breadcrumb_bg; ?>)">
    <div class="breadcumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">
                            <?php 
                                // Dynamic Page Title
                                echo isset($page_heading[$lastUriSegment]['page_heading']) 
                                    ? $page_heading[$lastUriSegment]['page_heading'] 
                                    : "Page Not Found";
                            ?>
                        </h1>
                        <ul class="breadcumb-menu">
                            <?php
                                if (isset($bread_cumbs[$lastUriSegment])) {
                                    $breadcrumbs = $bread_cumbs[$lastUriSegment];
                                    $lastItem = end($breadcrumbs);
                                    foreach ($breadcrumbs as $key => $value) {
                                        if (!empty($key)) {
                                            echo "<li><a href='{$key}'>{$value}</a></li>";
                                            echo "<li class='text-white'><i class='fa-solid fa-chevron-right'></i></li>";
                                        } else {
                                            echo "<li class='active'>{$value}</li>";
                                        }
                                    }
                                } else {
                                    echo "<li><a href='{$base_url}'>Home</a></li>";
                                    echo "<li class='text-white'><i class='fa-solid fa-chevron-right'></i></li>";
                                    echo "<li class='active'>404</li>";
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
