<?php
/**
* coboda\cob_team\src\ContaoManager\Plugin.php
*/
/**
 * * This file is part of Coboda/cob_team.
 *
 * (c) 2022 CO/BODA e.U.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package    cob_team
 * @author     Ronald Boda
 * @copyright  2022 CO/BODA e.U.
 * @license    LICENSE LGPL-3.0
 * @filesource
 */

namespace Coboda\ContaoTeamBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Coboda\ContaoTeamBundle\CobodaContaoTeamBundle;

/**
 * Contao Manager plugin.
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(CobodaContaoTeamBundle::class)
                ->setLoadAfter(
                    [
                        ContaoCoreBundle::class
                    ]
                )
        ];
    }
}
