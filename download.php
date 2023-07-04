<?php
 ob_start("ob_gzhandler");
 require_once('config.inc');

 header('Powered by: '.$config['powered']);
 header('ARFA: '.$config['version']);
 print '<?xml version="1.0" encoding="ISO-8859-1"?>'."\n";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <meta name="keywords" content="RF_Bot, Release Factor, RF2, RF1, RF0, prfA, prfB, prfH, sequence, DNA, RNA, Tools, Perl, Bioperl, FASTA, HMM, HMMER, bacteria, ARFA, Automated Release Factor Annotation" />
    <meta name="description" content="Automated Release Factor Annotation (ARFA) is a software tool for identification of genes encoding bacterial release factors. A unique feature of ARFA is its ability to predict programmed ribosomal frameshifting that takes place during expression of genes encoding bacterial release factor 2." />
    <meta name="robots" content="all" />
    <link rel="stylesheet" type="text/css" media="all" title="main style sheet" href="css/main.css" />
    <title>
      ARFA - Automated Release Factor Annotation
    </title>
  </head>
  <body>
    <div id="container">
      <div id="header"></div>
      <div id="menu">
        <a href="." title="ARFA - Automated Release Factor Annotation"><span>home</span></a>
      </div>
      <div id="submenu">
        <ul>
          <li id="home">
            <a href="." title="Main menu"><span>home</span></a>
          </li>
          <li id="search">
            <a href="search" title="Direct web search"><span>search</span></a>
          </li>
          <li id="download">
            <a href="download" title="Download standalone package"><span>download</span></a>
          </li>
          <li id="contact">
            <a href="contact" title="Contact us"><span>contact</span></a>
          </li>
        </ul>
      </div>
      <div id="content-download" class="download">
        <p>
          Here are the latest versions of Automated Release Factor Annotation (ARFA). Perl is Open Source software. It's free for you to download and use as you wish. ARFA's license is a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/2.5/">Creative Commons Attribution-NonCommercial-ShareAlike 2.5 License</a>. Read it if you aren't sure what you can or can't do. 
        </p>
        <div class="clear"></div>
        <div class="news">
          <h2>
            Download
          </h2>
          <div class="clear"></div>
          <p>
            You can download and install locally all versions of ARFA. The latter is the better!
          </p>
          <ul>
<?php 
 $d = dir('release');
 $release=array();
 while (false !== ($entry = $d->read())) {
   if (is_file('release/'.$entry) && preg_match("/arfa-(.+).tar.bz2/",$entry,$match)) {
     $release[filemtime('release/'.$entry)]="            <li>\n              <a href=\"release/$entry\">version $match[1] (".date("F jS, Y",filemtime('release/'.$entry)).")</a>\n            </li>\n";
   }
 }
 krsort($release);
 print implode('',$release)
?>
          </ul>
          <p>
            Since ARFA is a Perl/Bioperl script you need both <a href="http://www.perl.com/">Perl</a> and <a href="http://www.bioperl.org/">bioperl</a>. Fast filtering from GenBank request requires <a href="ftp://ftp.ebi.ac.uk/pub/software/unix/fasta/">FASTA</a>, and accurate estimation of ARFA needs also <a href="http://hmmer.wustl.edu/">HMMER</a>. :-p
          </p>
        </div>
        <div class="clear"></div>
        <div class="news">
          <h2>
            Installation Howto
          </h2>
          <div class="clear"></div>
          <p>  
            Download, then unpack the tar file. For example:<br />
            <code>
              >bunzip2 arfa-x.x.tar.bz2<br />
              >tar xvf arfa-x.x.tar<br />
              >cd ARFA-x.x<br />
            </code><br />
            Now issue the make commands:<br />
            <code>
              >perl Makefile.PL<br />
              >make<br />
              >make install<br />
            </code><br />
            To 'make install' you need write permission in the perl5/site_perl/source area. Usually this will require you becoming root, so you will want to talk to your system administrator if you don't have the necessary privileges.
          </p>
        </div>
        <div class="clear"></div>
      </div>
      <div id="validation">
        <a href="http://validator.w3.org/check?uri=referer" title="W3C XHTML Validation Service">xhtml</a> - <a href="http://jigsaw.w3.org/css-validator/" title="W3C CSS Validation Service">css</a>
      </div>
      <div id="footer">
        This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/2.5/">Creative Commons License</a>.<br />
      </div>
    </div>
  </body>
<!-- <rdf:RDF xmlns="http://web.resource.org/cc/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><Work rdf:about=""><license rdf:resource="http://creativecommons.org/licenses/by-nc-sa/2.5/" /></Work><License rdf:about="http://creativecommons.org/licenses/by-nc-sa/2.5/"><permits rdf:resource="http://web.resource.org/cc/Reproduction"/><permits rdf:resource="http://web.resource.org/cc/Distribution"/><requires rdf:resource="http://web.resource.org/cc/Notice"/><requires rdf:resource="http://web.resource.org/cc/Attribution"/><prohibits rdf:resource="http://web.resource.org/cc/CommercialUse"/><permits rdf:resource="http://web.resource.org/cc/DerivativeWorks"/><requires rdf:resource="http://web.resource.org/cc/ShareAlike"/></License></rdf:RDF> -->
</html>
