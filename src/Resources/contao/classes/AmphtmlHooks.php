<?php

/*
 * Copyright pdir / digital agentur <develop@pdir.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pdir;

/**
 * Amphtml for Contao Open Source CMS
 *
 * Copyright (C) 2016 pdir / digital agentur
 *
 * @package    amphtml
 * @link       https://github.com/pdir/amphtml-bundle
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 * @author Philipp Seibt <seibt@pdir.de>
 *
 * Configures the Amphtml hooks.
 *
 */

class AmphtmlHooks extends \Controller
{
    /*
     * if amp is set, load the given layout from page root
     */
    public function ampGetPageLayout($objPage, &$objLayout, $objPageRegular)
    {
        $amphtml = (int) \PageModel::findByPk($objPage->rootId)->amphtml;
        if ($amphtml && ($page = \PageModel::findByPk($objPage->id)) !== null) {
            $strUrl = \Controller::generateFrontendUrl($page->row());
            $objLayout->head .= '<link rel="amphtml" href="' . $strUrl . '?amp" />';
        }

        if(isset($_GET['amp'])) {

            $ampLayout = (int) \PageModel::findByPk($objPage->rootId)->ampLayout;
            $ampUseInLayout = \PageModel::findByPk($objPage->rootId)->ampUseInLayout;

            $objLayout = \LayoutModel::findById($ampLayout);

            // load inline css from file or use user custom
            if(file_exists("../files/amphtml/amphtml_custom.css")) {
                $amphtmlCss = file_get_contents("http://".$_SERVER['HTTP_HOST']."/files/amphtml/amphtml_custom.css");
            } else {
                $amphtmlCss = file_get_contents("http://".$_SERVER['HTTP_HOST']."/files/amphtml/amphtml.css");
            }
            $objLayout->head = "<style amp-custom>".$amphtmlCss."</style>";
            $objLayout->head .= '<link rel="canonical" href="'.$strUrl.'" />';

        }

    }
    /*
     * if amp is set, add amp param to all urls
     */
    public function ampGenerateFrontendUrl($arrRow, $strParams, $strUrl)
    {
        if(isset($_GET['amp'])) {
            return $strUrl = $strUrl . '?amp';
        }
        return $strUrl;
    }
}