<?php
/**
 * Contao 4 TinyMCE Abbr Plugin
 *
 * @copyright 2011, 2014, 2018 agentur fipps e.K.
 * @author    Arne Borchert
 * @package   fipps\contao-tinymceabbr-bundle
 * @license   LGPL 3.0+
 */

namespace Fipps\TinymceabbrBundle\ContaoManager;

use Fipps\TinymceabbrBundle\FippsTinymceabbrBundle;
use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Fipps\TinymcepluginsBundle\FippsTinymcepluginsBundle;

/**
 * Plugin for the Contao Manager.
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(FippsTinymceabbrBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class, FippsTinymcepluginsBundle::class])
                ->setReplace(['fipps_tinymceabbr']),
        ];
    }
}