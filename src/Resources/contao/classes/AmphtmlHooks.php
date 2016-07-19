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
    public function getPageLayout(&$objPage, &$objLayout, $objPageRegular)
    {
        if(isset($_GET['amp'])) {

           /* $objLayout = \LayoutModel::findById(7);
            $objPage = \PageModel::findByLayout(5);

            //$objPage->template = ($objLayout->template != '') ? $objLayout->template : 'fe_page_amphtml';
            //$objPage->templateGroup = $objLayout->templates;

            //$objPage->layout = 5;
            echo "<pre>"; print_r($objPage); echo "</pre>";
            echo "<pre>"; print_r($objLayout); echo "</pre>";
           */

            //inline css
            if(file_exists("../files/amphtml/amphtml_custom.css")) {
                $amphtmlCss = file_get_contents("http://".$_SERVER['HTTP_HOST']."/files/amphtml/amphtml_custom.css");
            } else {
                $amphtmlCss = file_get_contents("http://".$_SERVER['HTTP_HOST']."/files/amphtml/amphtml.css");
            }
            $objLayout->head = "<style amp-custom>".$amphtmlCss."</style>";
        }

    }
}