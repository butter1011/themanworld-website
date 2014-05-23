<?php
include('includes/common.php');
include('includes/news.php');
placeHeader("Home");
?>
<div>
<h3>The Mana World Project</h3>
<p style="font-size:14px;">The Mana World (TMW) is a serious effort to create an innovative free and open source MMORPG. TMW uses 2D graphics and aims to create a large and diverse interactive world. It is licensed under the GPL, making sure this game can't ever run away from you. <a class="more" href="/about.php">Read More >></a></p>
</div>
<div>
<h3>Recent News</h3>
</div>
<?php
echo printNews(1);
placeFooter();
?>
