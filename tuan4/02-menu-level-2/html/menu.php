<?php
require_once "data.php";
$xhtml = "";
foreach ($arrMenu as $key => $menuLevelOne) {
    $xhtml .= "<li><a href='{$menuLevelOne['link']}'>{$menuLevelOne['name']}</a>";
    if (isset($menuLevelOne['child'])) {
        $xhtml .= "<ul class='active'>";
        foreach ($menuLevelOne['child'] as $key => $menuLevelTwo) {
            $xhtml .= "<li><a href='{$menuLevelTwo['link']}'>{$menuLevelTwo['name']}</a></li>";
        }
        $xhtml .= "</ul>";
    }
    $xhtml .= "</li>";
}
?>
<div class="menuBackground">
    <div class="center">
        <ul class="dropDownMenu">
            <?php echo $xhtml ?>
        </ul>
    </div>
</div>
