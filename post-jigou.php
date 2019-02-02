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
									<li <?php if ($this->is('post')): ?> class="active" <?php endif;?>>									
									<?php if ($this->is('index')): ?><!-- 页面为首页时 -->
										Latest Post
									</li>
									<?php elseif ($this->is('post')): ?><!-- 页面为文章单页时 -->
										<?php $this->category(","); ?>
									</li> <span><?php $this->title() ?></span>
									<?php else: ?><!-- 页面为其他页时 -->
										<span><?php $this->archiveTitle(' &raquo; ','',''); ?></span>
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
							<div class="blog-post">
								<!-- Article title -->
								<div class="mdl-card__media mdl-color-text--grey-50" >
									<p class="article-headline-p">
										<?php $this->title() ?>
									</p>
								</div>
								
								<!-- Articel content -->
								<div id="article-content-div" class="mdl-color-text--grey-700 mdl-card__supporting-text post-article-content <?php if (!empty($this->options->switch) && in_array('ShowLoadingLine', $this->options->switch)): ?>fade in<?php endif; ?>">
									<figure class="article-content-img">
										<?php if($this->fields->jigoulogo):?>
											<img src="<?php echo $this->fields->jigoulogo; ?>" alt="">
										<?php else: ?>
											<img src="<?php randomThumbnail($this); ?>" alt="">
										<?php endif; ?>
									</figure>
									<?php $this->content(); ?>
									
									<div style="text-align:center;">
										<div id="qrcodeContent" >
										</div> 
										<div style="padding:10px;">
											<span>扫描二维码,在手机阅读！</span>
										</div>
									</div>
								</div>
								<!-- Article comments -->
								<?php include('comments.php'); ?>
							</div>
						<!-- theNext thePrev button -->
							<nav class="demo-nav mdl-color-text--grey-50 mdl-cell mdl-cell--12-col">
								<?php $this->theNext('%s', null, array('title' => '
										<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900" role="presentation">
											<i class="fa fa-arrow-left"></i>
										</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Newer', 'tagClass' => 'prev-content')); ?>
								<div class="section-spacer"></div>
								<?php $this->thePrev('%s', null, array('title' => 'Older&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900" role="presentation">
											<i class="fa fa-arrow-right"></i>
										</button>', 'tagClass' => 'prev-content')); ?>
							</nav>
						</div>
					</div>
				</div>
			</main>
<?php include('footer.php'); ?>