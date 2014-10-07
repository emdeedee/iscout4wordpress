<div class="newmaintable2home"> 
            <div class="hpContainer"> 
                <div style="background-image:url(<?php echo get_template_directory_uri() ?>/images/front.gif);" id="topblock" class="topblock"> 
                    <div class="leftpanel"> 
                        <div id="lpanel1" class="activepanelleft Dark"> 

<div class="featured"><div style="margin-top:220px">
<div align="float:left"><img src="<?php echo get_template_directory_uri() ?>/images/latest-news.PNG"></div>
<?php query_posts("showposts=3&category_name=News"); $i = 1; ?>
	
      	<?php while (have_posts()) : the_post(); ?>
<div class="info2"><div style="padding-top="10px"><h3><a href="<?php the_permalink() ?>" rel="bookmark" class="title"><?php the_title(); ?></h3></a>
<div class="meta2"><?php the_time('j M Y') ?></div></div>
	<?php $values = get_post_custom_values("Image");
	if (isset($values[0])) { ?>
      <b><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"></b>
	<img src="<?php $values = get_post_custom_values("Image"); echo $values[0]; ?>"&w=200&h=120&zc=1&q=100
alt="<?php the_title(); ?>" class="left" width="200px" height="120px" /></a>
</div>
      <?php } ?>
 <?php endwhile; ?>
<div class="clearfloat">
<div align="float:left"><div style="margin-top:190px">
<A HREF="http://www.scouts.org.uk/join" target="_blank" onmouseover="document.but.src='<?php echo get_template_directory_uri() ?>/images/join-mouseover.gif'" onmouseout="document.but.src='<?php echo get_template_directory_uri() ?>/images/join.gif'">
<IMG SRC="<?php echo get_template_directory_uri() ?>/images/join.gif" NAME="but" BORDER="0" ALT="Join the adventure!"></A>
</div></div>
</div>
</div>
                        </div> 
<div rel="earth,2," id="rpanel2" class="rightpanelcontent"> 
                            <h2 class="Dark"> 
                              
                            </h2> 
                            <p></p> 
                        </div> 
                        <div rel="aubergine,3," id="rpanel3" class="rightpanelcontent">
                            <h2 class="Dark"> 
                              
                            </h2> 
                            <p></p> 
                        </div> 
                       <div rel="ocean,4," id="rpanel4" class="rightpanelcontent lastpanel">
                            <h2 class="Dark"> 
                             
                            </h2> 
                            <p></p>
                        </div> 
                    </div> 
                </div> 
</div>
</div>
</div>