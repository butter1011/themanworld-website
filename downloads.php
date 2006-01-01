<?php
  include("includes/common.php");
  placeHeader("Downloads");
?>

<h3>Current client release</h3>

<div class="releases">
<div class="release"><img src="images/ico-win.png"/> <a href="http://prdownloads.sourceforge.net/themanaworld/tmw-0.0.18.1-win32.exe?download"><b>Windows installer</b> 0.0.18.1</a></div>
<div class="release"><img src="images/ico-src.png"/> <a href="http://prdownloads.sourceforge.net/themanaworld/tmw-0.0.18.1.tar.gz?download"><b>Source code</b> 0.0.18.1</a></div>
<div class="release"><img src="images/ico-osx.png"/> <a href="http://prdownloads.sourceforge.net/themanaworld/tmw-0.0.17-mac.dmg.zip?download">MacOS X package 0.0.17</a></div>
<div class="release"><img src="images/ico-slackware.png"/> <a href="http://prdownloads.sourceforge.net/themanaworld/tmw-0.0.18.1-i686-1.tgz?download"><b>Slackware 10.2 package</b> 0.0.18.1</a></div>
<div class="release"><img src="images/ico-deb.png"/> <a href="http://prdownloads.sourceforge.net/themanaworld/tmw_0.0.16-1_i386.deb?download">Debian package 0.0.16</a> (see below for repository)</div>
<div class="release"><img src="images/ico-deb.png"/> <a href="http://prdownloads.sourceforge.net/themanaworld/tmw-data_0.0.16-1_all.deb?download">Debian package 0.0.16 (data)</a></div>
<div class="release"><img src="images/ico-gentoo.png"/> <a href="http://packages.gentoo.org/packages/?category=games-rpg;name=tmw"><b>Gentoo eBuild</b></a></div>
</div>

<p>For older versions please see our <a
href="http://sourceforge.net/project/showfiles.php?group_id=106790">files
page</a> on SourceForge. Note however that they are no longer supported and
likely to no longer work.</p>

<h3>CVS access</h3>

<p>The latest version is always available from CVS, see the
<a href="http://sourceforge.net/cvs/?group_id=106790">CVS instructions</a> at
SourceForge. The client module is named <i>tmw</i>. For anonymouse users this
means to use the command:<br/>
<br/>
<i>cvs -z3 -d:pserver:anonymous@cvs.themanaworld.org:/cvsroot/themanaworld co -P tmw</i><br/>
<br/>
For more instructions you can also read our small guide on
<a href="cvs-tutorial.txt">how to use CVS</a>. Use the CVS version only if
you're interested in testing the latest changes.

<h3>Debian repository</h3>

<p>For convenience to Debian users, a Debian package repository has been set up
here on SourceForge. The repository will also contain any dependencies of The
Mana World that are not in the standard Debian repositories yet, which at the
moment includes <a href="http://guichan.sourceforge.net/">Guichan</a>.  To use
this repository, add the following line to your sources.list file:</p>

<p><i>
deb http://bertram.ifrance.com ./<br/>
deb-src http://bertram.ifrance.com ./
</i></p>

<p>Then to install TMW do:</p>

<p><b>apt-get update<br/>
apt-get install tmw</b></p>

<p><i><b>Note:</b> This repository currently only works with Debian testing and
unstable because it's compiled to use libCURL with OpenSSL 0.9.8. If you're on
Debian stable or Ubuntu, you'll need take the 0.0.16 debs above or compile
Guichan and TMW yourself (the Guichan deb on their website won't work with
Breezy because of incompatible GCC versions).</i></p>

<?php
  placeFooter();
?>
