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
    public function getPageLayout($objPage, &$objLayout, $objPageRegular)
    {
        if(isset($_GET['amp'])) {

            $objLayout = \LayoutModel::findByPid(7);

            $objPage->layout = 5;
            print_r($objPage);


            //inline css
            /*echo "http://".$_SERVER['HTTP_HOST']."/files/amphtml/amphtml_custom.css";
            if(file_exists("../files/amphtml/amphtml_custom.css")) {
                $amphtmlCss = file_get_contents("http://".$_SERVER['HTTP_HOST']."/files/amphtml/amphtml_custom.css");
            } else {
                $amphtmlCss = file_get_contents("http://".$_SERVER['HTTP_HOST']."/files/amphtml/amphtml.css");
            }
            $objLayout->head = "<style amp-custom>".$amphtmlCss."</style>";*/
        }

    }
}