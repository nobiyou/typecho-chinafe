<?php
/**
 * 友情链接页面
 *
 * @package custom
 */
$this->need('header.php');
$this->need('menu.php');
 ?>

    <style>
        .md-links {
            min-height: calc(100% - 120px - 5pc - 6em);
            text-align: center;
            width: 55%;
            min-width: 300px;
            max-width: 500px;
            margin: auto;
        }
        
        .md-links-item {
            background: #fff;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .14), 0 3px 1px -2px rgba(0, 0, 0, .2), 0 1px 5px 0 rgba(0, 0, 0, .12);
            min-height: 100px;
            line-height: 15px;
            margin: 20px 0;
            padding:10px;
            transition: box-shadow 0.25s;
        }
        
        .md-links a {
            color: #333;
            text-decoration: none;
        }
        
        .md-links li {
            list-style: none;
        }
        
        .md-links-item img {
            float: left;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .14), 0 3px 11px -2px rgba(0, 0, 0, .2), 0 1px 5px 0 rgba(0, 0, 0, .12);
        }
        
        .md-links-item:hover {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            cursor: pointer;
        }
        
        .md-links-title {
            font-size: 20px;
            line-height: 50px;
        }
    </style>

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

							<div class="md-links">
								<?php if (class_exists("Links_Plugin")): ?>
								<?php Links_Plugin::output('
								<a href="{url}" title="{title}" target="_blank">
									<li class="md-links-item">
										<img src="{image}" alt="{name}" width="72px"/>
										<span  class="md-links-title">{name}</span><br />
										<span>{description}</span>
										
									</li>
								</a>
								', 8, "links"); ?>
								<?php endif; ?>
								<?php Links_Plugin::output("SHOW_MIX", 1, "tt"); ?>
								<?php Links_Plugin::output("SHOW_MAX", 1, "tt"); ?>
							</div>
						</div>
					</div>
				</div>
			</main>

    <?php include('footer.php'); ?>