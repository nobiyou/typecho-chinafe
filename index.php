<?php
/**
 * 这是dongzuren的第一个typecho模板，参考了很多资料，感谢开源。
 *
 * @package chinafe网站主题
 * @author dongzuren
 * @version 1.0.0
 * @link http//yibo365.cn
 */

$this->need('header.php');?>

    <header class="wrapp-header index">
				<div class="info-box-01">
					<div class="container">
						<div class="row">
							<div class="col-sm-4 col-md-4 col-lg-4 text-sm-center">
								<ul class="social-list-01">
									
									<?php if (!empty($this->options->footersns) && in_array('ShowTwitter', $this->options->footersns)) : ?>
									<li>
										<a href="<?php $this->options->TwitterURL() ?>" aria-hidden="true">
										<i class="fa fa-twitter" aria-hidden="true"></i>                                            
										</a>
									</li>
									<?php endif;?>
									<?php if (!empty($this->options->footersns) && in_array('ShowFacebook', $this->options->footersns)) : ?>
									<li>
										<a href="<?php $this->options->FacebookURL() ?>" aria-hidden="true">
										<i class="fa fa-facebook" aria-hidden="true"></i>                                            
										</a>
									</li>
									<?php endif;?>
									<?php if (!empty($this->options->footersns) && in_array('ShowGooglePlus', $this->options->footersns)) : ?>
									<li>
										<a href="<?php $this->options->GooglePlusURL() ?>" aria-hidden="true">
										<i class="fa fa-google-plus" aria-hidden="true"></i>                                            
										</a>
									</li>
									<?php endif;?>
									<?php if (!empty($this->options->footersns) && in_array('ShowWeibo', $this->options->footersns)) : ?>
									<li>
										<a href="<?php $this->options->WeiboURL() ?>" aria-hidden="true">
										<i class="fa fa-weibo" aria-hidden="true"></i>                                            
										</a>
									</li>
									<?php endif;?>
									<?php if (!empty($this->options->footersns) && in_array('ShowInstagram', $this->options->footersns)) : ?>
									<li>
										<a href="<?php $this->options->InstagramURL() ?>" aria-hidden="true">
										<i class="fa fa-instagram" aria-hidden="true"></i>                                            
										</a>
									</li>
									<?php endif;?>
									<?php if (!empty($this->options->footersns) && in_array('ShowGithub', $this->options->footersns)) : ?>
									<li>
										<a href="<?php $this->options->GithubURL() ?>" aria-hidden="true">
										<i class="fa fa-github" aria-hidden="true"></i>                                            
										</a>
									</li>
									<?php endif;?>
									<?php if (!empty($this->options->footersns) && in_array('ShowTumblr', $this->options->footersns)) : ?>
									<li>
										<a href="<?php $this->options->TumblrURL() ?>" aria-hidden="true">
										<i class="fa fa-tumblr" aria-hidden="true"></i>                                            
										</a>
									</li>
									<?php endif;?>
									<?php if (!empty($this->options->footersns) && in_array('ShowTelegram', $this->options->footersns)) : ?>
									<li>
										<a href="<?php $this->options->TelegramURL() ?>" aria-hidden="true">
										<i class="fa fa-telegram" aria-hidden="true"></i>                                            
										</a>
									</li>
									<?php endif;?>
									<?php if (!empty($this->options->footersns) && in_array('ShowLinkedin', $this->options->footersns)) : ?>
									<li>
										<a href="<?php $this->options->LinkedinURL() ?>" aria-hidden="true">
										<i class="fa fa-linkedin" aria-hidden="true"></i>                                            
										</a>
									</li>
									<?php endif;?>
									
								</ul>
							</div>
							<div class="col-sm-8 col-md-8 col-lg-8 text-sm-center text-right">
								<div class="contact-block-01">
									<a class="contact-block-01__email" href="mailto:<?php $this->options->email() ?>"><?php $this->options->email() ?></a>
									<p class="contact-block-01__phone"><?php $this->options->tel() ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="info-box-02">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 text-center">
								<a href="<?php $this->options->siteUrl(); ?>" class="logo">
									<?php if (!empty($this->options->avatarURL)): ?>
									<img src="<?php $this->options->avatarURL() ?>">
									<?php else: ?>
									<?php if (!empty($this->options->logo)): ?>
									<img src="<?php $this->options->logo() ?>">
									<?php else: ?>
									<?php if (!empty($this->options->CDNURL)): ?>
									<img src="<?php $this->options->CDNURL() ?>/MaterialCDN/img/logo_white.png">
									<?php else: ?>
									<img src="<?php $this->options->themeUrl('img/logo_white.png') ?>">
									<?php endif; ?>
									<?php endif; ?>
									<?php endif; ?>
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 text-center">
								<div class="main-nav__btn">
									<div class="icon-left"></div>
									<div class="icon-right"></div>
								</div>


								<ul class="main-nav__list sf-js-enabled sf-arrows" style="touch-action: pan-y;">
									<li class="active">
										<a href="<?php $this->options->siteUrl(); ?>" class="">
											<?php if ($this->options->langis == '0'): ?> Homepage
											<?php elseif ($this->options->langis == '1'): ?> 主页
											<?php elseif ($this->options->langis == '2'): ?> 首頁
											<?php endif; ?>
										</a>
									</li>
									<!--li class="">
										<a href="#" class="sf-with-ul">
										<?php if ($this->options->langis == '0'): ?> Archives
										<?php elseif ($this->options->langis == '1'): ?> 归档
										<?php elseif ($this->options->langis == '2'): ?> 過往
										<?php endif; ?>
										</a>
										<ul style="display: none;">
											<?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')->parse('
											<li>
												<a href="{permalink}" tabindex="-1">
													{date}
												</a>
											</li>
											'); ?>
										</ul>
									</li-->
									
									<?php $this->widget('Widget_Metas_Category_List')->to($categorys); ?>
									<?php while($categorys->next()): ?>
									<?php if ($categorys->levels === 0): ?>
									<?php $children = $categorys->getAllChildren($categorys->mid); ?>
									<?php if (empty($children)) { ?>
									<li <?php if($this->is('category', $categorys->slug)): ?> class="active"<?php endif; ?>>
										<a href="<?php $categorys->permalink(); ?>" title="<?php $categorys->name(); ?>"><?php $categorys->name(); ?>
										</a>
									</li>
									<?php } else { ?>
									<li>
										<a class="sf-with-ul"  href="#"><?php $categorys->name(); ?> </a>
										<ul style="display: none;">
											<?php foreach ($children as $mid) { ?>
											<?php $child = $categorys->getCategory($mid); ?>
											<li <?php if($this->is('category', $mid)): ?> class="active"<?php endif; ?>>
												<a href="<?php echo $child['permalink'] ?>" title="<?php echo $child['name']; ?>"><?php echo $child['name']; ?>
												</a>
											</li>				
											<?php } ?>
										</ul>
									</li>
									
									<?php } ?><?php endif; ?><?php endwhile; ?>
										
									<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
									<?php while ($pages->next()): ?>
									<?php if ($pages->cid != '5'): ?>
									<li>
										<a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>" tabindex="-1">
											<?php $pages->title(); ?>
										</a>
									</li>
									<?php endif; ?>
									<?php endwhile; ?>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="info-box-03">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<h3 class="info-box-subtitle">您可以在这里</h3>
								<p class="info-box-title">
									学习
									<span class="info-box-title__text"></span>
								</p>
								<div class="info-box-text">
									<p><?php $this->options->Introduction(); ?> </p>
								</div>
								<a href="<?php $this->options->siteUrl(); ?>index.php/category/Parental_curriculum/" class="btn-01">开始学习</a>
								<a href="<?php $this->options->siteUrl(); ?>index.php/category/Learning_Courses/" class="btn-03">了解更多</a>
							</div>
						</div>
					</div>
				</div>
			</header>

            <main class="content-row">
				<div class="content-box-01 padding-top-100 padding-sm-top-50">
					<div class="container">
						<div class="row">
							<?php Links_Plugin::output('
							<div class="col-sm-4 col-md-4 col-lg-4">
								<div class="servises-item serv-item-01">
									<img src="{image}" alt="{name}" width="50px"/>
									<h3 class="servises-item__title">{name}</h3>
									<div class="servises-item__text">
										<p>{description}</p>
									</div>
								</div>
							</div>
							', 6, "list"); ?>

						</div>
						
					</div>
				</div>
				<div class="parallax parallax_01 " data-type="background" data-speed="10" style="background-image: url(<?php $this->options->themeUrl(); ?><?php $this->options->parallaxbg() ?>);">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="parallax-content-01">
									<?php Links_Plugin::output('
									<h3 class="parallax-title">{name}</h3>
									<div class="parallax-text">
										<p>{description}</p>
									</div>
									<a href="{url}" class="parallax-btn">进入了解</a>
									
									', 1, "num"); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="content-box-01 padding-top-93 padding-bottom-63 <?php if (!empty($this->options->switch) && in_array('ShowLoadingLine', $this->options->switch)): ?>fade out<?php endif; ?>" >
					<div class="container">
						<div class="row">
							<div class="col-lg-12 text-center">
								<h3 class="title-05"><?php $this->options->indexlist(); ?></h3>
								<p class="subtitle-01"><?php $this->options->listtion(); ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 col-md-6 col-lg-6">
								<ul class="news-block">
									<?php if ($this->is('post')): ?>
										<?php
											$db = Typecho_Db::get();
											$prefix = $db->getPrefix();
											$sticky_posts = $db->fetchAll($this->db
												->select()->from($prefix.'contents')
												->orWhere('cid = ?', $this->options->sticky_1)
												->orWhere('cid = ?', $this->options->sticky_2)
												->where('type = ? AND status = ? AND password IS NULL', 'post', 'publish'));
												rsort($sticky_posts);//对数组逆向排序，即大ID在前
												foreach ($sticky_posts as $sticky_posts) {
													$result = Typecho_Widget::widget('Widget_Abstract_Contents')->push($sticky_posts);
													var_dump($result);
													$post_views = number_format($result['views']);
													$post_title = htmlspecialchars($result['title']);
													if ($this->options->langis == '0'){
														$post_date = date('M d, Y G:i', $result['created']);
														$readmore = 'Read More';
													}else{
														$post_date = date('Y-m-d H:i', $result['created']); 
														$readmore = '查看详情';
													}
													
													$permalink = $result['permalink'];
													$post_img = $result['text'];
													//echo $post_img;
													$pattern = '/(http:\/\/)[^>]*?.(jpg|jpeg|gif|bmp|png)/i';
													preg_match_all( $pattern, $post_img, $thumbUrl);  //通过正则式获取图片地址
													
													//var_dump($thumbUrl);
													$img_src = $thumbUrl[0][0]; 
													//echo $img_src;						

													/*if($post_views > $this->options->view_num){echo 'HOT';} else {echo ''.$post_views.''' VIEW';};*/
													echo '
													<!-- Article module -->
													<li class="news-item">
																<figure class="news-item__img">
																	<a href="'.$permalink.'" title="'.$post_title .'">	
																		<img src="'.$img_src.'?imageView2/1/w/210/h/186/q/75" alt="'.$post_title .'">
																		
																	</a>
																</figure>
																<div class="news-item__content">
																	<p class="news-item__date">'.$post_date.'</p>
																	<h3 class="news-item__title">
																		<a href="'.$permalink.'">'.$post_title .'</a>
																	</h3>
																	<a href="'.$permalink.'" class="news-item__btn">'.$readmore.'</a>
																</div>
															</li>
													'."\n\r";
												}
											?>
											<?php endif; ?>
											<?php

												header('Access-Control-Allow-Origin:*');//注意！跨域要加这个头 上面那个没有
												$postdata = file_get_contents("http://www.yibo365.cn/api.php?op=get_list_view&moreinfo=1&catid=113&num=4"); 
												$request = json_decode($postdata,true);
												//var_dump($request);
												//$title = $request[0]['title'];
												//echo $title;
												for($i=0;$i<count($request);$i++){
													// echo '<div class="col-md-6">';
													// echo '<div class="mdl-card article-module">';
													// echo '<div class="mdl-card__media mdl-color-text--grey-50 " style="background-image:url('.$request[$i][thumb].')">';
													// echo '<p class="article-headline-p"><a href="'.$request[$i][url].'" target="_blank">'.$request[$i][title].'</a></p></div>';
													// echo '<div class="mdl-color-text--grey-600 mdl-card__supporting-text index-article-content">';
													// echo '<p style="display: inline-block;">课程时长：'.$request[$i][p_time].'</p>';
													// echo '<span class="pull-right">参加对象：'.$request[$i][duixiang].'</span>';
													// echo '</div></div></div>';
													echo '
													<!-- Article module -->
													<li class="news-item">
																<figure class="news-item__img">
																	<a href="'.$request[$i][url].'" title="'.$request[$i][title].'">	
																		<img src="'.$request[$i][thumb].'" alt="'.$request[$i][title].'">
																		
																	</a>
																</figure>
																<div class="news-item__content">
																	<p class="news-item__date">'.$post_date.'</p>
																	<h3 class="news-item__title">
																		<a href="'.$request[$i][url].'">'.$request[$i][title].'</a>
																	</h3>
																	<p style="display: inline-block;">课程时长：'.$request[$i][p_time].'</p>
																</div>
															</li>
													'."\n\r";
												}

											?>
								</ul>
							</div>
							<div class="col-sm-6 col-md-6 col-lg-6">
								<div class="news-info">
								<?php if ($this->is('post')): ?>
								<?php
								$this->widget('Widget_Archive@index', 'pageSize=3&type=category', 'mid=3')->to($list);
								while($list->next()):
								?>
									<div class="news-info__post">
										<div class="news-info__date-block">
											<p> <?php $list->date('j'); ?></p>
											<?php if ($list->options->langis == '0'): ?>
											<span> <?php $list->date('M '); ?></span>
											<?php else: ?>
											<span> <?php $list->date('m '); ?>月</span>
											<?php endif; ?>
										</div>
										<h4 class="news-info__title">
											<a href="<?php $list->permalink() ?>">
												<?php $list->title() ?>
											</a>
										</h4>
										<div class="news-info__text">
											<p><?php $list->excerpt(30, '...'); ?> &nbsp;&nbsp;&nbsp;</p>
										</div>
										<?php if ($list->options->langis == '0'): ?>
										<a href="<?php $list->permalink() ?>" class="news-info__btn">View Event</a>
										<?php else: ?>
										<a href="<?php $list->permalink() ?>" class="news-info__btn">查看详情</a>
										<?php endif; ?>
									</div>
								<?php endwhile; ?>
								<?php endif; ?>
									<?php

												header('Access-Control-Allow-Origin:*');//注意！跨域要加这个头 上面那个没有
												$postdata = file_get_contents("http://www.yibo365.cn/api.php?op=get_list_view&moreinfo=1&catid=80&num=4"); 
												$request = json_decode($postdata,true);
												//var_dump($request);
												//$title = $request[0]['title'];
												//echo $title;
												for($i=0;$i<count($request);$i++){
													// echo '<div class="col-md-6">';
													// echo '<div class="mdl-card article-module">';
													// echo '<div class="mdl-card__media mdl-color-text--grey-50 " style="background-image:url('.$request[$i][thumb].')">';
													// echo '<p class="article-headline-p"><a href="'.$request[$i][url].'" target="_blank">'.$request[$i][title].'</a></p></div>';
													// echo '<div class="mdl-color-text--grey-600 mdl-card__supporting-text index-article-content">';
													// echo '<p style="display: inline-block;">课程时长：'.$request[$i][p_time].'</p>';
													// echo '<span class="pull-right">参加对象：'.$request[$i][duixiang].'</span>';
													// echo '</div></div></div>';
													echo '
													<!-- Article module -->
													<div class="news-info__post">
													<div class="news-info__date-block">
														<p> '.date('d',$request[$i][updatetime]).'</p>
														<span> '.date('m月',$request[$i][updatetime]).'</span>
													</div>
													<h4 class="news-info__title">
														<a href="'.$request[$i][url].'">
															'.$request[$i][title].'
														</a>
													</h4>
													<div class="news-info__text">
														<p>'.mb_substr($request[$i][description],0,30)."...".'</p>
													</div>
													<a href="'.$request[$i][url].'" class="news-info__btn">查看详情</a>
												</div>
													'."\n\r";
												}

											?>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>	
<?php include('footer.php'); ?>
