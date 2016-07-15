<?php

/*
 * Copyright pdir / digital agentur <develop@pdir.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pdir;

/**
 * Configures the Amphtml hooks.
 *
 * @author Philipp Seibt <seibt@pdir.de>
 */

class AmphtmlHooks extends \Controller
{
    /*
     * if amp is set, load the new fe_page template
     */
    public function getPageLayout(\PageModel $objPage, \LayoutModel $objLayout, \PageRegular $objPageRegular)
    {
        if(isset($_GET['amp'])) {

            $objLayout->template = "fe_page_amphtml";
            $objLayout->templates = "templates/amphtml";
            //$objLayout->templates = "templates/amphtml";

            //$objLayout->pid->templates = "templates/amphtml";
            print_r($objLayout);

            //inline css
            echo "http://".$_SERVER['HTTP_HOST']."/files/amphtml/amphtml_custom.css";
            if(file_exists("../files/amphtml/amphtml_custom.css")) {
                $amphtmlCss = file_get_contents("http://".$_SERVER['HTTP_HOST']."/files/amphtml/amphtml_custom.css");
            } else {
                $amphtmlCss = file_get_contents("http://".$_SERVER['HTTP_HOST']."/files/amphtml/amphtml.css");
            }
            $objLayout->head = "<style amp-custom>".$amphtmlCss."</style>";
        }

    }
}