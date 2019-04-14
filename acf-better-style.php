<?php

function acf_better_style()
{
    ?>
    <style type="text/css">
        .acf-flexible-content .layout {
            border: 2px solid #0073aa !important;
        }

        .acf-flexible-content .layout:not(.-collapsed) .acf-fc-layout-handle {
            background-color: #0073aa;
            color: #fff;
        }

        .acf-repeater.-row > table > tbody > tr > td, .acf-repeater.-block > table > tbody > tr > td {
            border-top-color: #ca4a1f;
        }

        .acf-table {
            border: #ca4a1f solid 1px;
        }

        .acf-repeater .acf-row-handle.order, .acf-repeater .acf-row-handle.remove {
            background: rgba(202, 74, 31, .1);
            color: #666;
        }
    </style>
    <?php
}

add_action('acf/input/admin_head', 'acf_better_style');