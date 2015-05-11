<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.3&appId=248518518505771";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<?php
global $base_url;
global $user;
?>
<!-- top -->
<div class="row full line1">
    <div class="col-md-6">
        <a href="#" title="<?php print t("fallow Solange Arruda in Facebook"); ?>"><img
                src="<?php print $base_url . '/' . path_to_theme() . '/img/f.png' ?>" alt="Facebook" class="f"/></a>
        <a href="#" title="<?php print t("fallow Solange Arruda in Instagram"); ?>"><img
                src="<?php print $base_url . '/' . path_to_theme() . '/img/i.png' ?>" alt="Instagram" class="i"/></a>
        <?php
        print t("Welcome, ");
        if ($user->uid == 0) {
            ?>
            <a href="<?php print $base_url . '/user'; ?>"><?php print t("Sign in"); ?></a>
        <?php
        } else {
            print $user->name;
        }
        ?>
    </div>
    <div class="col-md-6 r">  <?php print t("Likes my new site on Facebook? "); ?>
        <div class="fb-like" data-href="<?php echo $base_url ?>" data-layout="button" data-action="like"
             data-show-faces="false" data-share="true"></div>

    </div>
</div>
<!-- content -->
<div class="full all">
    <!--logo, opinions & links -->
    <div class="row">
        <div class="col-md-5">
            <div class="logo"><a href="<?php print $base_url; ?>" title="<?php print $site_name; ?>"><img
                        src="<?php print $logo; ?>" alt="<?php print $site_name; ?>"/></a></div>
            <div class="name_slogan">
                <h1><?php print $site_name; ?></h1><br/>

                <h3><?php print $site_slogan; ?></h3>
            </div>
        </div>
		<div class="col-md-5"><?php print render($page['testimony']); ?> </div>
		<div class="col-md-2"><?php print render($page['options-top']); ?></div>
	</div>
<!-- main menu only for desktop-->
	<div class="row">
		<div class="col-md-12 mainmenu <?php if($is_front) { print 'menu-front'; }?>">
			<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline')))); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<?php if ($tabs): ?>
				<?php print render($tabs); ?>
			<?php endif; ?>
			<?php print render($tabs2); ?>
			<?php print $messages; ?>
			<?php print render($page['content']); ?>
		</div>
	</div>
<br /><br />
</div>
<div class="clear"></div>
<div class="row down" <?php if($is_front) { print "style='padding-top:40px;'"; } ?>>
	<?php print render($page['footer']); ?>
	<?php print render($page['contact']); ?>	
</div>
<div class="row footmsg">
	<?php print render($page['fmsg']); ?>
</div>