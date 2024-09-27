<?php
require_once "data.php";
$xhtml = "";
foreach($arrMenu as $menu) {
    $xhtml .= "<li><a href='{$menu['link']}'>{$menu['name']}</a></li>";
}
?>
<div class="menuBackground">
    <div class="center">
        <ul class="dropDownMenu">
            <?php echo $xhtml; ?>
        </ul>
    </div>
</div>
