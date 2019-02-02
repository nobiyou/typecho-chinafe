<?php $this->need('header.php'); ?>
<?php $this->need('menu.php'); ?>
			<main class="content-row ">
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
							<?php while ($this->next()): ?>

							<!-- Article fragment -->
							<div class="col-md-6">
								<div class="mdl-card article-module">

									<!-- Article link & title -->
									<?php if ($this->options->ThumbnailOption == '1'): ?>
									<div class="mdl-card__media mdl-color-text--grey-50 " style="background-image:url(<?php showThumbnail($this); ?>)">
										<p class="article-headline-p"><a href="<?php $this->permalink() ?>" target="_self"><?php $this->title() ?></a></p>
									</div>
									<?php elseif ($this->options->ThumbnailOption == '2'): ?>
									<div class="mdl-card__media mdl-color-text--grey-50" style="background-color:<?php $this->options->TitleColor()?> !important;color:#757575 !important;">
										<p class="article-headline-p-nopic">
											<a href="<?php $this->permalink() ?>" target="_self">
															“</br><?php $this->title() ?></br>”
														</a>
										</p>
									</div>
									<?php elseif ($this->options->ThumbnailOption == '3'): ?>
									<div class="mdl-card__media mdl-color-text--grey-50 " style="background-image:url(<?php randomThumbnail($this); ?>)">
										<p class="article-headline-p"><a href="<?php $this->permalink() ?>" target="_self"><?php $this->title() ?></a></p>
									</div>
									<?php endif; ?>

									<!-- Article content -->
									<div class="mdl-color-text--grey-600 mdl-card__supporting-text index-article-content">
										<!--  $this->content('Continue Reading...');  -->
										<?php $this->excerpt(30, '...'); ?> &nbsp;&nbsp;&nbsp;
										<span>
													<a href="<?php $this->permalink(); ?>" target="_self">
														<?php if ($this->options->langis == '0'): ?>
															Continue Reading
														<?php elseif ($this->options->langis == '1'): ?>
															继续阅读
														<?php elseif ($this->options->langis == '2'): ?>
															繼續閱讀
														<?php endif; ?>
													</a>
												</span>
									</div>

									<!-- Articli info-->
									<div id="article-info">
										<div class="mdl-card__supporting-text meta mdl-color-text--grey-600 " id="article-author-date">
											<!-- Author avatar -->
												<div id="author-avatar">
													<?php if (!empty($this->options->avatarURL)): ?>
													<img src="<?php $this->options->avatarURL() ?>" width="44px" height="44px" />
													<?php else: ?>
													<?php $this->author->gravatar(44); ?>
													<?php endif; ?>
												</div>
											<div>
												<span class="author-name-span"><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></span>
												<span>
															<?php if ($this->options->langis == '0'): ?>
																<?php $this->date('F j, Y'); ?>
															<?php else: ?>
																<?php $this->dateWord(); ?>
															<?php endif; ?>
														</span>
											</div>
										</div>
										
										<div id="article-category-comment" style="color:<?php $this->options->alinkcolor(); ?>">
										<?php $this->category(', '); ?> |
											<a href="<?php $this->permalink() ?>">
												<!-- 使用多说评论 -->
												<?php if ($this->options->commentis == '1'): ?><span class="ds-thread-count" data-thread-key="<?php echo $this->cid;?>" data-count-type="comments"></span>
												<!-- 使用原生评论 -->
												<?php else: ?>
												<?php $this->commentsNum('%d 评论'); ?>
												<?php endif; ?>
											</a>
											<?php if (class_exists("Stat_Plugin")): ?> |&nbsp;
												<?php $this->views(); ?>
												<?php $this->sticky(); ?>
												<?php if ($this->options->langis == '0'): ?>Views
												<?php elseif ($this->options->langis == '1'): ?>浏览
												<?php elseif ($this->options->langis == '2'): ?>流覽
												<?php endif; ?>
											<?php endif; ?>
										</div>
									</div>

								</div>
							</div>

							<?php endwhile; ?>
							
								<nav class="demo-nav mdl-cell mdl-cell--12-col">
								<?php $this->pageLink('
										<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
											<!-- For modern browsers. -->
											<i class="material-icons" role="presentation">arrow_back</i>
										</button>
										'); ?>
								<div class="section-spacer"></div>
								 <span class="page">
                                <?php if ($this->_currentPage>1) {
                            echo $this->_currentPage;
                        } else {
                            echo 1;
                        }?> /
                                <?php echo   ceil($this->getTotal() / $this->parameter->pageSize); ?></span>
								<div class="section-spacer"></div>
								<?php $this->pageLink('
										<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
											<!-- For modern browsers. -->
											<i class="material-icons" role="presentation">arrow_forward</i>
										</button>
										', 'next'); ?>
							</nav>
						</div>
					</div>
				</div>
			</main>


        <?php include('footer.php'); ?>
