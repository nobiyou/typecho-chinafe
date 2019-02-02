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
						<?php 
							$categoryids = array ('120' => 'Parental_curriculum','119' => 'Learning_Courses', '121' => 'Tutor_course');
							$a=$this->category;
							$isin = in_array($a,$categoryids);//数组中是否包含
							
							if($isin){
								//echo array_search($a,$categoryids);//查询返回键值
								$yibo_list= array_search($a,$categoryids) ;
							}else{
								
							}
						?>
						<?php

							header('Access-Control-Allow-Origin:*');//注意！跨域要加这个头 上面那个没有
							$postdata = file_get_contents("http://www.yibo365.cn/api.php?op=get_list_view&moreinfo=1&catid=".$yibo_list."&num=20"); 
							$request = json_decode($postdata,true);
							//var_dump($request);
							//$title = $request[0]['title'];
							//echo $title;
							for($i=0;$i<count($request);$i++){
								echo '<div class="col-md-6">';
								echo '<div class="mdl-card article-module">';
								echo '<div class="mdl-card__media mdl-color-text--grey-50 " style="background-image:url('.$request[$i][thumb].')">';
								echo '<p class="article-headline-p"><a href="'.$request[$i][url].'" target="_blank">'.$request[$i][title].'</a></p></div>';
								echo '<div class="mdl-color-text--grey-600 mdl-card__supporting-text index-article-content">';
								echo '<p style="display: inline-block;">课程时长：'.$request[$i][p_time].'</p>';
								echo '<span class="pull-right">参加对象：'.$request[$i][duixiang].'</span>';
								echo '</div></div></div>';
							}

						?>

							<?php while ($this->next()): ?>

							<!-- Article fragment -->
							<div class="col-md-6" style="display:none">
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
										<p  style="display: inline-block;"><?php $this->excerpt(30, '...'); ?> &nbsp;&nbsp;&nbsp;</p>
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
