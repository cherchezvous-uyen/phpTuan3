<?php
$arrMenu = array (
    'index' => array(
        "name"  => "Home",   "link"  => "index.php"
    ),
    'about' => array(
        "name"  => "About",
        "link"  => "data/about.php",
        "child" => array(
            'service'   => array(
                "name"  => "Service",
                "link"  => "service.php",
                "child" => array(
                    'sale'      => array("name" => "Sale", "link" => "sale.php"),
                    'training'  => array("name" => "Training", "link" => "training.php")
                )
            ),
            'company'   => array(
                "name" => "Company",
                "link" => "company.php",
                "child" => array(
                    'toyota' => array("name" => "Toyota", "link"   => "toyota.php")
                )
            )
        )
    ),
    'contact' => array(
        "name" => "Contact",
        "link" => "contact.php",
        "child" => array(
            'hotline'      => array("name" => "Hotline", "link" => "hotline.php")
        )
    )
);

//     // Yêu cầu: In ra tên của các menu cấp 2, 
//     // Output: Service - Company - Hotline
// $result = '';
// foreach ($arrMenu as $key => $menuLevelOne) {
//     if (isset($menuLevelOne['child'])){
//         foreach ($menuLevelOne['child'] as $key => $menuLevelTwo){
//             $result.= $menuLevelTwo['name']. " - ";
//         }
//     }
// }
// $result = substr($result, 0, -3);

// echo '<h3 style="color:red;font-weight:bold">' . $result . '</h3>';
?>