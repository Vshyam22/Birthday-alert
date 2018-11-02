<?php
class PAGE {
    public static $field1;
	public static function pageHeader($type) {
        switch ($type) {
            case INDEX_PAGE:
                include_once(ROOTPATH . "header.php");
                break;
            case CHILD_PAGE:
                include_once(ROOTPATH . "header_alternative.php");
                break;
        }
    }
    public static function pageFooter($type) {
        switch ($type) {
            case INDEX_PAGE:
                include_once(ROOTPATH . "footer.php");
                break;
            case CHILD_PAGE:
                include_once(ROOTPATH . "footer_alternative.php");
                break;
        }
    }
    public static function include_js($jsArray) {

        if (is_array($jsArray)) {
            foreach ($jsArray as $jsFileName) {
                echo "<script type='text/javascript' language='javascript' src='" . JSPATH . $jsFileName . "' ></script>";
            }
        } else {
            echo "<script type='text/javascript' language='javascript' src='" . JSPATH . $jsArray . "' ></script>";
        }
    }
    public static function AddCSS($cssArray) {
        if (is_array($cssArray)) {
            foreach ($cssArray as $cssFileName) {
                echo '<link rel="stylesheet" type="text/css" href="' . CSSPATH . $cssFileName . '" />';
            }
        } else {
            echo '<link rel="stylesheet" type="text/css" href="' . CSSPATH . $cssArray . '" />';
        }
    }

}

?>