
<?php if($this->is('page','links')): ?>
<?php $this->need('page-links.php') ?>
<?php else: ?>
<?php $this->need('page-about.php') ?>
<?php endif ?>