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
    <script type="text/javascript" src="css/main.js"></script>
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
      <div id="content-contact" class="contact">
        <div class="clear"></div>
        <div class="news">
          <h2>
            Development
          </h2>
          <div class="clear"></div>
          <p>
            <img src="about/arfa.png" alt="arfa" width="80" height="15" /><br />
            ARFA was developed by efforts of <script type="text/javascript">
/*<![CDATA[*/
 zulu('mbekaert','Micha&euml;l Bekaert','gmail.com');
/*]]>*/</script>, <script type="text/javascript">
/*<![CDATA[*/
 zulu('atkins','John Atkins','genetics.utah.edu');
/*]]>*/</script> and <script type="text/javascript">
/*<![CDATA[*/
 zulu('baranov','Pasha Baranov','genetics.utah.edu');
/*]]>*/</script>. <br />
            <script type="text/javascript">
/*<![CDATA[*/
 zulu('mbekaert','Micha&euml;l Bekaert','gmail.com');
/*]]>*/</script> wrote a source code for ARFA, designed its algorithm, the web interface and graphics.
          </p>
          <h3>
            Automated Release Factor Annotation
          </h3>
          <p>
             <img src="about/perl.png" alt="perl" width="80" height="15" /> Release Factor Finder developed using <abbr title="Practical Extraction and Report Language">Perl</abbr><br />
             <img src="about/bioperl.png" alt="bioperl" width="80" height="15" /> Release Factor Finder is a <abbr title="Perl modules for biology">Bioperl</abbr> module<br />
             <img src="about/hmmer.png" alt="hmmer" width="80" height="15" /> Release Factor Finder developed using <abbr title="profile HMMs for protein sequence analysis">HMMER</abbr>
          </p>            
          <h3>
            Web Framework
          </h3>
          <p>
            <img src="about/xhtml11.png" alt="XHTML 1.1 valid" width="80" height="15" /> Conform to the <abbr title="Extensible HyperText Markup Language">XHTML</abbr> 1.1 standard recommended by the <abbr title="World Wide Web Consortium">W3C</abbr><br />
            <img src="about/css.png" alt="CSS 2.0 valid" width="80" height="15" /> Conform to the <abbr title="Cascading Style Sheets">CSS</abbr> 2.0 standard recommended by the <abbr title="World Wide Web Consortium">W3C</abbr><br />
            <img src="about/waiaaa.png" alt="WAI-Triple A valid" width="80" height="15" /> Conform to the <abbr title="Web Accessibility Initiative">WAI</abbr>-Triple A 1.0 standard recommended by the <abbr title="World Wide Web Consortium">W3C</abbr><br />
            <img src="about/browsers.png" alt="All browers valid" width="80" height="15" /> Optimized for all browsers
          </p>
          <h3>
            Implementation
          </h3>
          <p>
            <img src="about/gimp.png" alt="The GIMP" width="80" height="15" /> Graphics developed with The GIMP<br />
            <img src="about/php.png" alt="PHP" width="80" height="15" /> Site developed using <abbr title="recursive acronym for PHP: Hypertext Preprocessor">PHP</abbr>
          </p>
          <h3>
            License
          </h3>
          <p>
            <img src="about/cc.png" alt="Creative common" width="80" height="15" /> This work is licensed under a Creative Commons License<br />
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
