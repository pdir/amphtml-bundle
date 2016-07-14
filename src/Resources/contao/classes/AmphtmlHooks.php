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
        //$path = $_SERVER['REQUEST_URI'];
        //print_r("<div style='background:#fff'>".$path."</div>");
        if(isset($_GET['amp'])) {
            //print_r("<div style='background:#fff'>AMP HTML Parameter übergeben</div>");
            $objLayout->template = "fe_page_amphtml";
            //print_r("<div style='background:#fff'>".$objLayout->template."</div>");
        }

    }
}