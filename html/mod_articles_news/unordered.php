<?php
/**
 * @version		$Id: vertical.php 20196 2011-01-09 02:40:25Z ian $
 * @package		Joomla.Site
 * @subpackage	mod_articles_news
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>
<div class="newsflash<?php echo $moduleclass_sfx; ?>">
	<ul>
<?php foreach ($list as $item) :?>
	<li class="newsflash-item">
		<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_item');?>
	</li>
<?php endforeach; ?>
	</ul>
</div>
