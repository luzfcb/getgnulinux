<?php load_header(); ?>

<div id="maincontent">

<h1><?php print _("Doh! Page Not Found"); ?></h1>

<p><?php print _("Sorry, but we couldn't find the page you were looking for. Either that page doesn't exist or the address contains a typo."); ?></p>

<h2><?php print _("Report broken link"); ?></h2>
<p><?php print _("If you think the link is broken, please <a href=\"/bug_tracker/\">report it</a> so we can fix it."); ?></p>

<br/><a href="<?php base_url(); ?>"><?php print _("Return to the home page"); ?></a>

</div><!-- end maincontent -->

<?php load_footer(); ?>
