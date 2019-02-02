<?php $this->need('header.php'); ?>
<?php $this->need('menu.php'); ?>
			<main class="content-row "  style="background-color: #f5f5f5;">
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
							<?php //$this->fields->othertitle(); 
								if($this->fields->jigoutag == '0'){
									$jigou = '幼儿园';
								}elseif($this->fields->jigoutag == '1'){
									$jigou = '课外辅导机构';
								}elseif($this->fields->jigoutag == '2') {
									$jigou = '培训机构';
								}else {
								
								}
							?>
							<div class="col-md-6">
								<div class="jigou">
									<div class="owl-theme-01__item">
										<figure class="owl-theme-01__item-img">
										<?php if($this->fields->jigoulogo):?>
											<img src="<?php echo $this->fields->jigoulogo; ?>" alt="">
										<?php else: ?>
											<img src="<?php randomThumbnail($this); ?>" alt="">
										<?php endif; ?>
										</figure>
										<div class="owl-theme-01__item-header">
											<h3 class="owl-theme-01__item-title"><?php $this->title() ?></h3>
											<p class="owl-theme-01__item-subtitle"><?php echo $jigou; ?></p>
										</div>
										<div class="owl-theme-01__item-content">
											<p>“<?php $this->excerpt(80, '...'); ?> &nbsp;&nbsp;&nbsp;”</p>
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
