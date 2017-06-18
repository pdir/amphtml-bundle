<?php

/**
 * Amphtml for Contao Open Source CMS
 *
 * Copyright (C) 2016 pdir / digital agentur <develop@pdir.de>
 *
 * @package    amphtml
 * @link       https://github.com/pdir/amphtml-bundle
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 * @author Philipp Seibt <seibt@pdir.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pdir\AmphtmlBundle;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

class ContaoManagerPlugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(PdirAmphtmlBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
                ->setReplace(['amphtml']),
        ];
    }
}