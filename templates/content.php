<?php $this->layout('theme::layout/05_page') ?>
<article>
    <?php if ($params['html']['date_modified']) { ?>
        <div class="page-header sub-header clearfix">
            <h1><?php
                if ($page['breadcrumbs']) echo $this->get_breadcrumb_title($page, $base_page);
                else echo $page['title'];
                ?>
            </h1>
                    <span style="float: left; font-size: 10px; color: gray;">
                        <?php echo date("l, F j, Y", $page['modified_time']); ?>
                    </span>
                    <span style="float: right; font-size: 10px; color: gray;">
                        <?php echo date("g:i A", $page['modified_time']); ?>
                    </span>
        </div>
    <?php } else { ?>
        <div class="page-header">
            <h1><?php
                if ($page['breadcrumbs']) echo $this->get_breadcrumb_title($page, $base_page);
                else echo $page['title'];
                ?>
            </h1>
        </div>
    <?php } ?>

    <?php echo $page['content']; ?>
</article>

