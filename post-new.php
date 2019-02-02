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
								<div class="mdl-card__media mdl-color-text--grey-50" style="background-image: url(<?php showThumbnail($this); ?>?imageView2/1/w/900/h/280/q/100);">
									<p class="article-headline-p">
										<?php $this->title() ?>
									</p>
								</div>
								<!-- Articli info -->
								<div class="mdl-color-text--grey-700 mdl-card__supporting-text meta">
									<!-- Author avatar -->
									<div id="author-avatar">
										<?php if (!empty($this->options->avatarURL)): ?>
										<img src="<?php $this->options->avatarURL() ?>" width="44px" height="44px" />
										<?php else: ?>
										<?php $this->author->gravatar(44); ?>
										<?php endif; ?>
									</div>

									<div>
										<!-- Author name -->
										<span class="author-name-span"><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></span>
										<!-- Articel date -->
										<span>
													<?php if ($this->options->langis == '0'): ?>
														<?php $this->date('F j, Y'); ?>
													<?php else: ?>
														<?php $this->dateWord(); ?>
													<?php endif; ?>
												</span>
									</div>
									<div class="section-spacer"></div>
									<!-- favorite -->
									<button id="article-functions-like-button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon btn-like" data-cid="<?php $this->cid();?>" data-num="<?php $this->likesNum();?>">
												<i class="fa fa-heart mdl-badge" role="presentation" data-badge="<?php $this->likesNum();?>"></i>
												<span class="visuallyhidden">favorites</span>
									</button>
									
									<!-- share -->
									<?php if (class_exists("TeStat_Plugin")): ?>
									<button id="article-fuctions-share-button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
												<i class="fa fa-eye mdl-badge" role="presentation" > </i>
												<span class="visuallyhidden">share</span>
									</button>
									<span><?php ($q=$this->viewsNum); if (($q%2)!=0) {
					echo($q-1)/2;
				} else {
					echo $q/2;
				} ?> </span>
									<?php endif; ?>
									<?php if ($this->user->hasLogin()):?>
										<a class="md-menu-list-a" target="_blank" href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php echo $this->cid;?>" target="_blank"> 编辑</a>
										<?php endif;?>
									
								</div>
								<!-- Articel content -->
								<div id="article-content-div" class="mdl-color-text--grey-700 mdl-card__supporting-text post-article-content <?php if (!empty($this->options->switch) && in_array('ShowLoadingLine', $this->options->switch)): ?>fade in<?php endif; ?>">
								
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