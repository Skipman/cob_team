/**
* coboda\cob_team\src\Resources\contao\dca\tl_content.php
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


/*
 * Palettes
 */

$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'addTeamImage';

$GLOBALS['TL_DCA']['tl_content']['palettes']['team'] =
    '{type_legend},type,headline;'
    . '{text_legend},team_name,team_position,team_email,team_description;'
    . '{image_legend},addTeamImage;'
    . '{template_legend:hide},customTpl;'
    . '{protected_legend:hide},protected;'
    . '{expert_legend:hide},guests,cssID,space;'
    . '{invisible_legend:hide},invisible,start,stop';


/*
 * Subpalettes
 */
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['addTeamImage'] = 'singleSRC,size,alt,imageTitle,caption';


/*
 * Fields
 */

// name
$GLOBALS['TL_DCA']['tl_content']['fields']['team_name'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['team_name'],
    'exclude'   => true,
    'search'    => true,
    'flag'      => 1,
    'inputType' => 'text',
    'eval'      => [
        'mandatory' => true,
        'maxlength' => 255,
        'tl_class'  => 'w50'
    ],
    'sql'       => "varchar(255) NOT NULL default ''"
];

// position
$GLOBALS['TL_DCA']['tl_content']['fields']['team_position'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['team_position'],
    'exclude'   => true,
    'search'    => true,
    'flag'      => 1,
    'inputType' => 'text',
    'eval'      => [
        'maxlength' => 255,
        'tl_class'  => 'w50'
    ],
    'sql'       => "varchar(255) NOT NULL default ''"
];

// position
$GLOBALS['TL_DCA']['tl_content']['fields']['team_email'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['team_email'],
    'exclude'   => true,
    'search'    => true,
    'inputType' => 'text',
    'eval'      => [
        'maxlength'      => 255,
        'rgxp'           => 'email',
        'decodeEntities' => true,
        'tl_class'       => 'w50'
    ],
    'sql'       => "varchar(255) NOT NULL default ''"
];

// description
$GLOBALS['TL_DCA']['tl_content']['fields']['team_description'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['team_description'],
    'exclude'   => true,
    'search'    => true,
    'inputType' => 'textarea',
    'eval'      => [
        'rte'      => 'tinyMCE',
        'tl_class' => 'clr'
    ],
    'sql'       => 'mediumtext NULL'
];

$GLOBALS['TL_DCA']['tl_content']['fields']['addTeamImage'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['addTeamImage'],
    'exclude'   => true,
    'inputType' => 'checkbox',
    'eval'      => [
        'submitOnChange' => true
    ],
    'sql'       => "char(1) NOT NULL default ''"
];