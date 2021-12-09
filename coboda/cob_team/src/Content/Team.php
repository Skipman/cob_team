<?php
/**
* coboda\cob_team\src\Content\Team.php
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


namespace Coboda\ContaoTeamBundle\Content;

use Contao\Config;
use Contao\ContentElement;
use Contao\FilesModel;
use Contao\StringUtil;

class Team extends ContentElement
{

    /**
     * Template
     *
     * @var string
     */
    protected $strTemplate = 'ce_team';


    /**
     * Generate the content element
     */
    protected function compile(): void
    {
        // Clean the RTE output
        $this->text = StringUtil::toHtml5($this->text);

        // Add the static files URL to images
        if (TL_FILES_URL) {
            $path = Config::get('uploadPath') . '/';

            $this->text = str_replace(' src="' . $path, ' src="' . TL_FILES_URL . $path, $this->text);
        }

        $this->Template->text     = StringUtil::encodeEmail($this->text);
        $this->Template->addTeamImage = false;

        // Add an image
        if ($this->addTeamImage && $this->singleSRC) {
            $objModel = FilesModel::findByUuid($this->singleSRC);

            if ($objModel !== null && is_file(TL_ROOT . '/' . $objModel->path)) {
                $this->singleSRC = $objModel->path;
                $this->overwriteMeta = ($this->alt || $this->imageTitle || $this->caption);
                $this->addImageToTemplate($this->Template, $this->arrData, null, null, $objModel);
            }

            $this->Template->addTeamImage = true;
        }

		// Encode team email
		$this->Template->team_email     = StringUtil::encodeEmail($this->team_email);

		// Add team email link
		$this->Template->team_email_link = '&#109;&#97;&#105;&#108;&#116;&#111;&#58;' . StringUtil::encodeEmail($this->team_email);
    }
}
