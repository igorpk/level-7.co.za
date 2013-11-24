<?php
defined('_JEXEC') or die;

$path = $this->baseurl.'/templates/'.$this->template;

/* Loads the MooTools JavaScript Library */
JHTML::_('behavior.framework', true);

/* Gets the application object for things like displaying the site name */
$app            = JFactory::getApplication();
$params         = $app->getTemplate(true)->params;
$logo           = $this->params->get('logo');

if($this->countModules('left')){
	$leftcol_width  = $this->params->get('leftcol');
	} else{
		$leftcol_width  = 0;
		}
		
if($this->countModules('right')){
	$rightcol_width  = $this->params->get('rightcol');
	} else{
		$rightcol_width  = 0;
		};
		
$content_width  = 960 - ($leftcol_width + $rightcol_width);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >

	<head>
		<!-- Loads the header and meta information from your site config and content. -->
			<jdoc:include type="head" />

		<!-- Loads the template CSS files located in the template folder. -->
        	<link rel="stylesheet" href="<?php echo $path ?>/css/general.css" type="text/css" />
			<link rel="stylesheet" href="<?php echo $path ?>/css/template.css" type="text/css" />
			
		<!-- Loads the Grid960 layout framework -->
			<link rel="stylesheet" href="<?php echo $path ?>/css/grid.css" type="text/css" />
        
       <!--[if lt IE 7]><script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script><![endif]-->
	   
        <!--[if IE 7]>
        	<link href="<?php echo $path ?>/css/ie7.css" rel="stylesheet" type="text/css" />
        <![endif]-->
        
        <!--Loads the template JavaScript files -->
			<script type="text/javascript" src="<?php echo $path ?>/scripts/jquery-1.5.js"></script>
			<script type="text/javascript" src="<?php echo $path ?>/scripts/jcarousel.js"></script>
            
            <script type="text/javascript">  
			jQuery(document).ready(function($){
				
				$("#featued-slider").jCarouselLite({
        			btnNext: "#next",
      				btnPrev: "#prev",
					circular: false
    			});

				
				$('#bottom .moduletable').addClass('grid_3');
				
				$('ul li:last-child').addClass('last-child');
				$('ul li:first-child').addClass('first-child');
				
				$('#top .block').hover(
					function(){
						$(this).addClass('active');
						$(this).siblings().removeClass('active');
					}
					)
					
				$('#top .block').eq(0).addClass('first');
				$('#top .block').eq(1).addClass('second');
				$('#top .block').eq(2).addClass('third active');
				$('#top .block').eq(3).addClass('fourth');
				
				});
			</script>
    <!--[if lt IE 9]>     
    <style type="text/css">   
    	p.button,
		div.button,
		#top .block.active
		{
			behavior: url('<?php echo $path ?>/scripts/pie.php');
		}
	</style>
	<![endif]-->


			
	</head>
    
	<body>
    	<div id="wrapper">
        
        <!--HEADER START-->
        
        	 <?php if($this->countModules('user-menu')) : ?>
        	<div id="header-row">
            	<div id="header-bg">
                	<div id="header" class="container_12">
                       
                        	<div id="user-menu">
                                <jdoc:include type="modules" name="user-menu"/><!-- USER MENU POSITION -->
                            </div>
                    </div>	
                </div>	
          	</div>
            
            <div class="clear">&nbsp;</div>
             <?php endif; ?>
            
        <!--HEADER END-->
            
          
            
        <!--TOP MENU START-->
        
            <?php if($this->countModules('top-menu')) : ?>
            <div id="top-menu-row">
            	<div id="top-menu-bg">
                	<div id="top-menu" class="container_12">
                    	<jdoc:include type="modules" name="top-menu"/><!-- TOP POSITION -->
                    </div>
                </div>
            </div>
            
            <div class="clear">&nbsp;</div>
            <?php endif; ?>
            
        <!--TOP MENU END-->
        
        
        <!--TOP START-->
        
            <div id="top-row">
            	<div id="top-bg">
                
							<div id="logo">
                            	<h1>
                                	<span class="logo-title">
                                		<?php if ($logo): ?>
                                			<a href="<?php echo $this->baseurl ?>">
                                            <img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($logo); ?>" alt="<?php echo htmlspecialchars($params->get('sitetitle'));?>" />
                                            </a>
                                		<?php endif;?>
                                
                                		<?php if (!$logo ): ?>
                                       		<a href="<?php echo $this->baseurl ?>">
                                				<?php echo htmlspecialchars($params->get('sitetitle'));?>
                                            </a>
                                		<?php endif; ?>
                                	</span>
                                        <br/>
                                    <span class="description">
                                    	<?php echo htmlspecialchars($params->get('sitedescription'));?>
                                    </span>
                                 </h1>
                            </div>
                    <?php if($this->countModules('top')) : ?>                        
                	<div id="top" class="container_12">
                    	<jdoc:include type="modules" name="top"/><!-- TOP POSITION -->
                    </div>
                    <?php endif; ?>
                </div>
            </div>

        <!--TOP END-->
        
            <div class="clear">&nbsp;</div>
            
        <!--MAIN START-->
            
            <div id="main-row">
            	<div id="main-bg" >
				<?php
					if($this->countModules('top')){
						$mainst = -60;
						}else{
							$mainst = 20;
						};
						
						?>

                	<div id="main" class="container_12" style="margin-top:<?php echo $mainst ?>px">
                    
                    	<div id="breadcrumbs">
                        	<jdoc:include type="modules" name="breadcrumbs"/><!-- BREADCRUMBS POSITION -->
                        </div>
                    
                    	 <!--LEFT COLUMN START-->
                         
                        <?php if($this->countModules('left')) : ?>
                        <div id="left-col" style="width:<?php echo $leftcol_width?>px">
                        	<div id="left-col-bg">
                            	<div id="left">
                                	<jdoc:include type="modules" name="left" style="xhtml"/><!-- LEFT POSITION -->
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        
                        <!--LEFT COLUMN END-->
                        
                        
                        <!--CONTENT COLUMN START-->
                        
                        <div id="content" style="width:<?php echo $content_width?>px">
                        	<div id="content-bg">
                            	<div id="container">
                                
									<?php if ($this->getBuffer('message')) : ?>
										<div class="error">
											<jdoc:include type="message" />
										</div>
									<?php endif; ?>

									<jdoc:include type="component" />
                            
                                </div>
                            </div>
                        </div>
                        
                        <!--CONTENT COLUMN END-->
                        
                        
                        <!--RIGHT COLUMN START-->
                        
                        <?php if($this->countModules('right')) : ?>
                        <div id="right-col" style="width:<?php echo $rightcol_width?>px">
                        	<div id="right-col-bg">
                            	<div id="right">
                                	<jdoc:include type="modules" name="right" style="xhtml"/><!-- RIGHT POSITION -->
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        
                        <!--RIGHT COLUMN END-->
                    </div>
                </div>
            </div> 
            
        <!--MAIN END-->
        
        	<div class="clear">&nbsp;</div>
        
        <!--BOTTOM START-->
        
        	<?php /*if($this->countModules('bottom')) :*/ ?>
        	<div id="bottom-row">
        		<div id="bottom-bg">
            		<div id="bottom" class="container_12">
                    	<jdoc:include type="modules" name="bottom" style="xhtml"/>
                	</div>
            	</div>
        	</div>
            <?php /*endif;*/ ?>
        
        <!--BOTTOM END-->
        
        <div class="push">&nbsp;</div>
        
        </div><!--wrapper-->
       
        <div class="clear">&nbsp;</div>
        
        <!--FOOTER START-->
        
        <?php if($this->countModules('footer')) : ?>
        	<div id="footer-row">
            	<div id="footer-bg">
                	<div id="footer" class="container_12">
                        	<jdoc:include type="modules" name="footer"/>More <a  rel='nofollow' href='http://www.templatemonster.com/category/hosting-joomla-themes/' target='_blank'>Hosting Joomla Themes at TemplateMonster.com</a>
                    </div>
                </div>
            </div>
         <?php endif; ?>        
        <!--FOOTER END-->
        
        <!--Debug-->
        <jdoc:include type="modules" name="debug" />
        <!--**-->
        
	</body>
</html>