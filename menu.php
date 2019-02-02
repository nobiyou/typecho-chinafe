<?php if ($this->options->BGbanner =='0') : ?>
			<style>
                .page-title-wrapp{
                    <?php if (!empty($this->options->bgcolor)): ?>
                        background-color: <?php $this->options->bgcolor() ?>;
                    <?php else: ?>
                        background-color: #F5F5F5;
                    <?php endif; ?>
                }
            </style>
<?php elseif ($this->options->BGbanner == '1'): ?>
		<style>
            .page-title-wrapp{
                <?php if ($this->options->GradientType == '0'): ?>
                    background-image:
                        -moz-radial-gradient(0% 100%, ellipse cover, #96DEDA 10%,rgba(255,255,227,0) 40%),
                        -moz-linear-gradient(-45deg,  #1fddff 0%,#FFEDBC 100%)
                        ;
                    background-image:
                        -o-radial-gradient(0% 100%, ellipse cover, #96DEDA 10%,rgba(255,255,227,0) 40%),
                        -o-linear-gradient(-45deg,  #1fddff 0%,#FFEDBC 100%)
                        ;
                    background-image:
                        -ms-radial-gradient(0% 100%, ellipse cover, #96DEDA 10%,rgba(255,255,227,0) 40%),
                        -ms-linear-gradient(-45deg,  #1fddff 0%,#FFEDBC 100%)
                        ;
                    background-image:
                        -webkit-radial-gradient(0% 100%, ellipse cover, #96DEDA    10%,rgba(255,255,227,0) 40%),
                        -webkit-linear-gradient(-45deg,  #1fddff 0%,#FFEDBC 100%)
                        ;
                <?php elseif ($this->options->GradientType == '1'): ?>
                    background-image:
                        -moz-radial-gradient(-20% 140%, ellipse ,  rgba(255,144,187,.6) 30%,rgba(255,255,227,0) 50%),
                        -moz-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%),
                        -moz-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                        -moz-linear-gradient(-45deg,  rgba(18,101,101,.8) -10%,#d9e3e5 80% )
                        ;
                    background-image:
                        -o-radial-gradient(-20% 140%, ellipse ,  rgba(255,144,187,.6) 30%,rgba(255,255,227,0) 50%),
                        -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%),
                        -o-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                        -o-linear-gradient(-45deg,  rgba(18,101,101,.8) -10%,#d9e3e5 80% )
                        ;
                    background-image:
                        -ms-radial-gradient(-20% 140%, ellipse ,  rgba(255,144,187,.6) 30%,rgba(255,255,227,0) 50%),
                        -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%),
                        -ms-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                        -ms-linear-gradient(-45deg,  rgba(18,101,101,.8) -10%,#d9e3e5 80% )
                        ;
                    background-image:
                        -webkit-radial-gradient(-20% 140%, ellipse ,  rgba(255,144,187,.6) 30%,rgba(255,255,227,0) 50%),
                        -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%),
                        -webkit-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                        -webkit-linear-gradient(-45deg,  rgba(18,101,101,.8) -10%,#d9e3e5 80% )
                        ;
                <?php elseif ($this->options->GradientType == '2'): ?>
                    background-image:
                        -moz-radial-gradient(-20% 140%, ellipse ,  rgba(235,167,171,.6) 30%,rgba(255,255,227,0) 50%),
                        -moz-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                        -moz-linear-gradient(-45deg,  rgba(62,70,92,.8) -10%,rgba(220,230,200,.8) 80% )
                        ;
                    background-image:
                        -o-radial-gradient(-20% 140%, ellipse ,  rgba(235,167,171,.6) 30%,rgba(255,255,227,0) 50%),
                        -o-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                        -o-linear-gradient(-45deg,  rgba(62,70,92,.8) -10%,rgba(220,230,200,.8) 80% )
                        ;
                    background-image:
                        -ms-radial-gradient(-20% 140%, ellipse ,  rgba(235,167,171,.6) 30%,rgba(255,255,227,0) 50%),
                        -ms-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                        -ms-linear-gradient(-45deg,  rgba(62,70,92,.8) -10%,rgba(220,230,200,.8) 80% )
                        ;
                    background-image:
                        -webkit-radial-gradient(-20% 140%, ellipse ,  rgba(235,167,171,.6) 30%,rgba(255,255,227,0) 50%),
                        -webkit-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                        -webkit-linear-gradient(-45deg,  rgba(62,70,92,.8) -10%,rgba(220,230,200,.8) 80% )
                        ;
                <?php elseif ($this->options->GradientType =='3'): ?>
                    background-image:
                        -moz-radial-gradient(-20% 140%, ellipse ,  rgba(143,192,193,.6) 30%,rgba(255,255,227,0) 50%),
                        -moz-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                        -moz-linear-gradient(-45deg,  rgba(143,181,158,.8) -10%,rgba(213,232,211,.8) 80% )
                    ;
                    background-image:
                        -o-radial-gradient(-20% 140%, ellipse ,  rgba(143,192,193,.6) 30%,rgba(255,255,227,0) 50%),
                        -o-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                        -o-linear-gradient(-45deg,  rgba(143,181,158,.8) -10%,rgba(213,232,211,.8) 80% )
                    ;
                    background-image:
                        -ms-radial-gradient(-20% 140%, ellipse ,  rgba(143,192,193,.6) 30%,rgba(255,255,227,0) 50%),
                        -ms-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                        -ms-linear-gradient(-45deg,  rgba(143,181,158,.8) -10%,rgba(213,232,211,.8) 80% )
                    ;
                    background-image:
                        -webkit-radial-gradient(-20% 140%, ellipse ,  rgba(143,192,193,.6) 30%,rgba(255,255,227,0) 50%),
                        -webkit-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                        -webkit-linear-gradient(-45deg,  rgba(143,181,158,.8) -10%,rgba(213,232,211,.8) 80% )
                        ;
                <?php elseif ($this->options->GradientType =='4'): ?>
                    background-image:
                        -moz-radial-gradient(-20% 140%, ellipse ,  rgba(214,195,224,.6) 30%,rgba(255,255,227,0) 50%),
                        -moz-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                        -moz-linear-gradient(-45deg, rgba(97,102,158,.8) -10%,rgba(237,187,204,.8) 80% )
                        ;
                    background-image:
                        -o-radial-gradient(-20% 140%, ellipse ,  rgba(214,195,224,.6) 30%,rgba(255,255,227,0) 50%),
                        -o-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                        -o-linear-gradient(-45deg, rgba(97,102,158,.8) -10%,rgba(237,187,204,.8) 80% )
                        ;
                    background-image:
                        -ms-radial-gradient(-20% 140%, ellipse ,  rgba(214,195,224,.6) 30%,rgba(255,255,227,0) 50%),
                        -ms-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                        -ms-linear-gradient(-45deg, rgba(97,102,158,.8) -10%,rgba(237,187,204,.8) 80% )
                        ;
                    background-image:
                        -webkit-radial-gradient(-20% 140%, ellipse ,  rgba(214,195,224,.6) 30%,rgba(255,255,227,0) 50%),
                        -webkit-radial-gradient(60% 40%,ellipse,   #d9e3e5 10%,rgba(44,70,76,.0) 60%),
                        -webkit-linear-gradient(-45deg, rgba(97,102,158,.8) -10%,rgba(237,187,204,.8) 80% )
                        ;
                <?php elseif ($this->options->GradientType =='5'): ?>
                    background-image: #DAD299; /* fallback for old browsers */
                    background-image: -webkit-linear-gradient(to left, #DAD299 , #B0DAB9); /* Chrome 10-25, Safari 5.1-6 */
                    background-image: linear-gradient(to left, #DAD299 , #B0DAB9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                <?php elseif ($this->options->GradientType =='6'): ?>
                    background-image: linear-gradient(-20deg, #d0b782 20%, #a0cecf 80%);
                <?php elseif ($this->options->GradientType =='7'): ?>
                    background: #F1F2B5; /* fallback for old browsers */
                    background: -webkit-linear-gradient(to left, #F1F2B5 , #135058); /* Chrome 10-25, Safari 5.1-6 */
                    background: linear-gradient(to left, #F1F2B5 , #135058); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ *
                <?php elseif ($this->options->GradientType =='8'): ?>
                    background: #02AAB0; /* fallback for old browsers */
                    background: -webkit-linear-gradient(to left, #02AAB0 , #00CDAC); /* Chrome 10-25, Safari 5.1-6 */
                    background: linear-gradient(to left, #02AAB0 , #00CDAC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                <?php elseif ($this->options->GradientType =='9'): ?>
                    background: #C9FFBF; /* fallback for old browsers */
                    background: -webkit-linear-gradient(to left, #C9FFBF , #FFAFBD); /* Chrome 10-25, Safari 5.1-6 */
                    background: linear-gradient(to left, #C9FFBF , #FFAFBD); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                <?php endif; ?>
            }
            </style>
<?php endif; ?>
<header class="wrapp-header">
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
				<div class="main-nav">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<a href="<?php $this->options->siteUrl(); ?>" class="logo">
									<?php if (!empty($this->options->avatarURL)): ?>
									<img src="<?php $this->options->avatarURL() ?>">
									<?php else: ?>
									<?php if (!empty($this->options->logo)): ?>
									<img src="<?php $this->options->logo() ?>">
									<?php else: ?>
									<?php if (!empty($this->options->CDNURL)): ?>
									<img src="<?php $this->options->CDNURL() ?>/MaterialCDN/img/logo_dark.png">
									<?php else: ?>
									<img src="<?php $this->options->themeUrl('img/logo_dark.png') ?>">
									<?php endif; ?>
									<?php endif; ?>
									<?php endif; ?>
								</a>
								<div class="main-nav__btn">
									<div class="icon-left"></div>
									<div class="icon-right"></div>
								</div>
								


								<ul class="main-nav__list sf-js-enabled sf-arrows" >
									<li >
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
									
									<li <?php if(count($this->category) !== null ): ?>
									<?php if($this->is('category', $categorys->slug)): ?> class="active"<?php endif; ?>
									<?php else: ?> class="active" 
									<?php endif; ?>>
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
									<?php //var_dump($pages->slug); ?>
									<li <?php if ($this->is('page', $pages->slug)): ?> class="active"<?php endif; ?>>
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
				
			</header>