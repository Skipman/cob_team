<?php
/**
* coboda\cob_team\src\Resources\contao\config\config.php
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


use Coboda\ContaoTeamBundle\Content\Team;


/**
 * Coboda ContentElement
 */
array_insert(
    $GLOBALS['TL_CTE']['content'],
    4,
    [
        'team' => Team::class
    ]
);
