<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<?php if ($this->checkSpotlight('spotlight-1', 'position-1, position-2, position-3, position-4')) : ?>
	<!-- SPOTLIGHT 1 -->
	<div class="t3-sl spotlight-1 t3-sl-1">
		<div class="container">
			<?php $this->spotlight('spotlight-1', 'position-1, position-2, position-3, position-4') ?>
		</div>
	</div>
	<!-- //SPOTLIGHT 1 -->
<?php endif ?>