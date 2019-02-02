<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<?php $this->need('menu.php'); ?>
<main class="content-row">
				<div class="page-title-wrapp" >
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<h1 class="page-title-01"></h1>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<ul class="breadcrumbs">
									<li class="active">
										<a href="<?php $this->options->siteUrl(); ?>">Home</a>
									</li>
									<li>									
									<?php if ($this->is('index')): ?><!-- 页面为首页时 -->
										Latest Post
									</li>
									<?php elseif ($this->is('post')): ?><!-- 页面为文章单页时 -->
										<?php $this->category(","); ?>
									</li> 
									<span><?php $this->title() ?></span>
									<?php elseif ($this->is('page')): ?><!-- 页面为文章单页时 -->									 
									<span><?php $this->title() ?></span>
									</li>
									<?php else: ?><!-- 页面为文章单页时 -->
										<?php if(count($category->children) === 0): ?><?php $this->category(","); ?>
										<?php else: ?><?php $this->archiveTitle(' &raquo; ','',''); ?>
										<?php endif; ?>
									</li>																	
									<?php endif; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="single-course <?php if (!empty($this->options->switch) && in_array('ShowLoadingLine', $this->options->switch)): ?>fade out<?php endif; ?>">
					<div class="container">
						<div class="row">
							<div class="page-line">
								<div class="page-content box-shadow-medium"><?php $this->content(); ?></div>
							</div>
						</div>
					</div>
				</div>
</main>

<?php $this->need('footer.php'); ?>