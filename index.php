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
      <div id="content-main" class="main">
        <div class="clear"></div>
        <div class="news">
          <h2>
            Release Factor Annotation
          </h2>
          <div class="clear"></div>
          <p>
          In majority of bacteria, release factor 2 is synthesized via +1 programmed ribosomal frameshifting. This complicates proper annotation of corresponding genes in bacterial genomes. Further hurdle is the existence of a conserved gene (known as prfH or RFH) in a small proportion of bacteria which is a homolog of standard factors RF1 and RF2. Frequently this gene is missannotated as an additional RF2.
To overcome these problems in annotation of release factors we developed ARFA.
          </p>
        </div>
        <div class="clear"></div>
        <div class="news">
          <h2>
            Automated Release Factor Annotation
          </h2>
          <div class="clear"></div>
          <p>
            <strong>Automated Release Factor Annotation</strong> (ARFA) is a software tool for identification of genes encoding class I bacterial release factors. As input, it takes nucleotide sequences in fasta format or Genbank accession numbers. If ARFA identifies a gene encoding release factor, it generates its annotation in genbank or XML formats. A unique feature of ARFA is its ability to predict programmed ribosomal frameshifting that takes place during expression of genes encoding bacterial release factor 2.
          </p>
          <ul>
            <li>
              <a href="examples">See example</a>
            </li>
          </ul>
          <p>
            You could use ARFA via the <a href="search">web interface</a>. It is also possible to <a href="download">download</a> and install it locally. You will need Bioperl, Fasta and HMMER.
          </p>
        </div>
        <div class="clear"></div>
       <div class="news">
          <h2>
            Citation and Commercial Use
          </h2>
          <div class="clear"></div>
          <p>
            If you use ARFA for your research, please cite the following paper: <em>Bekaert M, Atkins JF &amp; Baranov PV (2006) ARFA: A program for annotating bacterial release factor genes, including prediction of programmed ribosomal frameshifting. Bioinformatics, published on-line ahead of print (<a href="http://bioinformatics.oxfordjournals.org/cgi/content/abstract/btl430?ijkey=ZdS8X7Lx7ETTA1s&amp;keytype=ref">abstract</a>, <a href="http://bioinformatics.oxfordjournals.org/cgi/reprint/btl430?ijkey=ZdS8X7Lx7ETTA1s&amp;keytype=ref">PDF</a>).</em>
          </p>
          <p>
            If you plan to use ARFA for commercial purposes, please, contact the authors to arrange a proper permission.
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
