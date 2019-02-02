        <!-- Floating Action Button -->
        <footer class="wrapp-footer">
				<div class="footer-box-01">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12">
								<a href="<?php $this->options->siteUrl(); ?>" class="footer-logo">
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
								<ul class="widget-contact">
									<li>
										<?php if ($this->options->langis == '0'): ?>
										<h4 class="widget-contact__title">Location:</h4>
										<?php else: ?>
										<h4 class="widget-contact__title">地址：</h4>
										<?php endif; ?>
										<p class="widget-contact__text"><?php $this->options->address() ?></p>
									</li>
									<li>
										<?php if ($this->options->langis == '0'): ?>
										<h4 class="widget-contact__title">Telephone:</h4>
										<?php else: ?>
										<h4 class="widget-contact__title">电话：</h4>
										<?php endif; ?>
										<p class="widget-contact__text"><?php $this->options->tel() ?></p>
									</li>
									<li>
										<?php if ($this->options->langis == '0'): ?>
										<h4 class="widget-contact__title">Email:</h4>
										<?php else: ?>
										<h4 class="widget-contact__title">电子邮箱：</h4>
										<?php endif; ?>
										<p class="widget-contact__text">
											<a class="widget-contact__text-email" href="mailto:<?php $this->options->email() ?>"><?php $this->options->email() ?></a>
										</p>
									</li>
								</ul>
							</div>
							
							
							
						</div>
					</div>
				</div>
				<div class="footer-box-02">
					<div class="container">
						<div class="row">
							<div class="col-sm-4 col-md-4 col-lg-4">
								<p class="copy-info">© <?php echo date("Y"); ?> <?php $this->options->title(); ?>. All Rights Reserved</p>
							</div>
							<div class="col-sm-4 col-md-4 col-lg-4 text-center">
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
							<div class="col-sm-4 col-md-4 col-lg-4">
								<div class="footer-info">
									<a class="footer-info__01" href="http://www.miitbeian.gov.cn"><?php $this->options->beian(); ?></a>
									<a class="footer-info__02" href="<?php $this->options->Terms(); ?>">网站声明</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<a href="#" class="back2top" title="Back to Top" >Back to Top</a>
			</footer>
		</div>


		<!--Analysis code-->
		<?php $this->options->analysis(); ?>
		</body>
		<script src="https://cdn.staticfile.org/jquery/2.2.4/jquery.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="https://livewp.site/html/smartedu/js/plugins/jquery.typed.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="https://livewp.site/html/smartedu/js/plugins/jquery.superfish.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="https://cdn.bootcss.com/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
		<script src="<?php $this->options->themeUrl('js/js.min.js'); ?>"></script>
		<script src="<?php $this->options->themeUrl('js/jquery.pjax.js'); ?>"></script>
		<script type="text/javascript">
			var doc = document;
			// Typed
			if ($('.info-box-title').size() > 0) {
				var typed = new Typed('.info-box-title__text', {
					strings: [<?php $this->options->catchword(); ?>],
					typeSpeed: 300,
					backSpeed: 50,
					smartBackspace: true,
					loop: true
				});
			}

			// Back to Top
			$(window).on('scroll', function() {
				if ($(window).scrollTop() > 0) {
					$('.back2top').fadeIn();
				} else {
					$('.back2top').fadeOut();
				}
				var bottom_pad = parseInt($('.footer_wrapper').height()) + parseInt($('.footer_wrapper').attr('data-pad-top')) +
					parseInt($('.footer_wrapper').attr('data-pad-bottom')) + 30;
				if ($(window).scrollTop() > $(doc).height() - $(window).height() - bottom_pad) {
					$('.back2top').css({
						'bottom': bottom_pad + 'px'
					});
				} else {
					$('.back2top').css({
						'bottom': '30px'
					});
				}
			});
			$('.back2top').on('click', function() {
				$('body,html').animate({
					scrollTop: 0
				}, 400);
				return false;
			});

			// Main navigation:
			$('.main-nav__list').superfish({
				hoverClass: 'sfHover',
				delay: 800,
				animation: {
					opacity: 'show'
				},
				animationOut: {
					opacity: 'hide'
				},
				cssArrows: true
			});
			$('.main-nav__btn').on('click', function() {
				$(this).toggleClass('open');
				if ($('.main-nav__list').hasClass('open')) {
					$('.main-nav__list').removeClass('open');

				} else {
					$('.main-nav__list').addClass('open');
				}
			});
		</script>
		<script> 
			var options={
				text        : '<?php $this->permalink() ?>', //设置二维码内容  
				render      : "canvas",//设置渲染方式  
				width       : 150,     //设置宽度  
				height      : 150,     //设置高度  
				typeNumber  : -1,      //计算模式  
				background  : "#ffffff",//背景颜色  
				foreground  : "#a0ce4e" //前景颜色  
			};
			jQuery('#qrcodeContent').qrcode(options);  
		</script>

<?php if (!empty($this->options->switch) && in_array('ShowLoadingLine', $this->options->switch)): ?>
<?php if (!empty($this->options->CDNURL)): ?>
<script src="<?php $this->options->CDNURL() ?>/MaterialCDN/js/nprogress.js"></script>
<?php else: ?>
<script src="<?php $this->options->themeUrl('js/nprogress.js'); ?>"></script>
<?php endif; ?>

<script type="text/javascript">
    NProgress.configure({
        showSpinner: true
    });
    NProgress.start();
    $('#nprogress .bar').css({
        'background': '<?php $this->options->loadingcolor(); ?>'
    });
    $('#nprogress .peg').css({
        'box-shadow': '0 0 10px <?php $this->options->loadingcolor(); ?>, 0 0 15px <?php $this->options->loadingcolor(); ?>'
    });
    $('#nprogress .spinner-icon').css({
        'border-top-color': '<?php $this->options->loadingcolor(); ?>',
        'border-left-color': '<?php $this->options->loadingcolor(); ?>'
    });
    setTimeout(function() {
        NProgress.done();
        $('.fade').removeClass('out');
    }, <?php $this->options->loadingbuffer(); ?>);
</script>
<?php endif; ?>

<?php if (!empty($this->options->switch) && in_array('SmoothScroll', $this->options->switch)): ?>
<?php if (!empty($this->options->CDNURL)): ?>
<script src="<?php $this->options->CDNURL() ?>/MaterialCDN/js/smoothscroll.js" async></script>
<?php else: ?>
<script src="<?php $this->options->themeUrl('js/smoothscroll.js'); ?>" async></script>
<?php endif; ?>
<?php endif; ?>

<?php if (!empty($this->options->switch) && in_array('atargetblank', $this->options->switch)): ?>
<script>
    //Add target="_blank" to a tags
    $(document).bind('DOMNodeInserted', function(event) {
        $('a[href^="http"]').each(
            function() {
                if (!$(this).attr('target')) {
                    $(this).attr('target', '_blank')
                }
            }
        );
    });
</script>
<?php endif; ?>

<?php if (!empty($this->options->switch) && in_array('PJAX', $this->options->switch)) : ?>
<script>
    jQuery(document).ready(function() {
        var $ = jQuery;
        //绑定链接
        $.pjax({
            selector: "a[href^='<?php $this->options->siteUrl(); ?>'][href$='.html']",
            container: '.content-row', //内容替换的容器
            show: 'slide', //展现的动画，支持默认和fade, 可以自定义动画方式，这里为自定义的function即可。
            cache: true, //是否使用缓存
            storage: true, //是否使用本地存储
            // titleSuffix: ' | Ray', //标题后缀
            filter: function() {},
            callback: function(status) {
                $(".wrapp-header").addClass("animated fadeInUp");
            }
        });
        //绑定跳转开始事件
        $(".content-row").bind("pjax.start",
            function() {
                $(".content-row").css("opacity", "0.6");
                // $(".spinner").css("opacity","1");
                // $(".spinner").show();

            });
        //绑定跳转结束事件
        $(".content-row").bind("pjax.end",
            function() {
                // $(".spinner").hide();
                $(".content-row").css("opacity", "1");
                // Main
                initHeader();
                addListeners();
                if (navigator.userAgent.indexOf('Firefox') >= 0) {
                    document.documentElement.scrollTop = 120;
                } else {
                    $('body').animate({
                        scrollTop: 120
                    });
                }

            });

    });
</script>
<?php endif; ?>

<!-- Pangu js -->
<?php if (!empty($this->options->switch) && in_array('Pangu', $this->options->switch)): ?>
  <?php if (!empty($this->options->CDNURL)): ?>
      <script src="<?php $this->options->CDNURL() ?>/MaterialCDN/js/pangu.min.js"></script>
  <?php else: ?>
      <script src="<?php $this->options->themeUrl('js/pangu.min.js'); ?>"></script>
  <?php endif; ?>
  <script> pangu.spacingPage(); </script>
<?php endif; ?>
<?php $html_source = ob_get_contents(); ob_clean(); print compressHtml($html_source); ob_end_flush(); ?>
<?php $this->footer(); ?>
</html>
