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
?>