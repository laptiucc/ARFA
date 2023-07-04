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
      <div id="content-help" class="help">
        <div class="clear"></div>
        <div class="news">
         <h2>
            Submission form
          </h2>
          <div class="clear"></div>
          <p>
            Your data set should include at least one distinct DNA sequence, and sequence should be in FASTA format. A sequence in FASTA format consists of a single-line description, followed by lines of sequence data. The first character of the description line is a greater-than ("&gt") symbol in the first column.
          </p>
          <p> 
            Example of FASTA format:
          </p>
          <pre><code>
     &gt;my_sequence
     ATGTTTGAAATTAATCCGGTAAATAATCGCATTCAGGACCTCACGGAACG
     CTCCGACGTTCTTAGGGGGTATCTTTGACTACGACGCCAAGAAAGAGCGT
     CTGGAAGAAGTAAACGCCGAGCTGGAACAGCCGGATGTCTGGAACGAACC
     CGAACGCGCACAGGCGCTGGGTAAAGAGCGTTCCTCCCTCGAAGCCGTTG
     TCGACACCCTCGACCAAATGAAACAGGGGCTGGAAGATGTTTCTGGTCTG
     CTGGAACTGGCTGTAGAAGCTGACGACGAAGAAACCTTTAACGAAGCCGT
     TGCTGAACTCGACGCCCTGGAAGAAAAACTGGCGCAGCTTGAGTTCCGCC
     GTATGTTCTCTGGCGAATATGACAGCGCCGACTGCTACCTCGATATTCAG
     GCGGGGTCTGGCGGTACGGAAGCACAGGACTGGGCGAGCATGCTTGAGCG
     TATGTATCTGCGCTGGGCAGAATCGCGTGGTTTCAAAACTGAAATCATCG
     AAGAGTCGGAAGGTGAAGTGGCGGGTATTAAATCCGTGACGATCAAAATC
     TCCGGCGATTACGCTTACGGCTGGCTGCGTACAGAAACCGGCGTTCACCG
     CCTGGTGCGTAAAAGCCCGTTTGACTCCGGCGGTCGTCGCCACACGTCGT
     TCAGCTCCGCGTTTGTTTATCCGGAAGTTGATGATGATATTGATATCGAA
     ATCAACCCGGCGGATCTGCGCATTGACGTTTATCGCACGTCCGGCGCGGG
     CGGTCAGCACGTTAACCGTACCGAATCTGCGGTGCGTATTACCCACATCC
     CGACCGGGATCGTGACCCAGTGCCAGAACGACCGTTCCCAGCACAAGAAC
     AAAGATCAGGCCATGAAGCAGATGAAAGCGAAGCTTTATGAACTGGAGAT
     GCAGAAGAAAAATGCCGAGAAACAGGCGATGGAAGATAACAAATCCGACA
     TCGGCTGGGGCAGCCAGATTCGTTCTTATGTCCTTGATGACTCCCGCATT
     AAAGATCTGCGCACCGGGGTAGAAACCCGCAACACGCAGGCCGTGCTGGA
     CGGCAGCCTGGATCAATTTATCGAAGCAAGTTTGAAAGCAGGGTTATGA
          </code></pre>
          <p>
            Lower-case and upper-case letters are both accepted. The full standard IUPAC nucleic acid code is not supported: only A, C, G, T and U symbols are recognized. Numerical digits 0, ..., 9, - and dot . symbols are not accepted.
          </p>
        </div>
        <div class="clear"></div>
        <div class="news">
          <h2>
            Output
          </h2>
          <div class="clear"></div>
          <p>
            For each sequence, Automated Release Factor Annotation returns a putative release factor. For each sequence, the result is formatted as <strong>GenBank entry fragment</strong> or an <strong>XML record</strong> with a <a href="dtd/arfaxml.dtd">Document Type Definition (DTD)</a>.
          </p>
          <p>
            If no release factor is detected, then the message <strong>No Hit</strong> is displayed. 
          </p>
          <pre><code>
     gene            1..1099
                     /locus_tag="my_sequence"
                     /gene="prfB"
     CDS             join(1..75,77..1099)
                     /gene="prfB"
                     /locus_tag="my_sequence"
                     /note="RF2 ORF0: 1.6e-09 ORF1: 2.2e-278"
                     /codon_start=1
                     /transl_table=11
                     /product="Bacterial release factor 2"
                     /translation="MFEINPVNNRIQDLTERSDVLRGYLDYDAKKERLEEVNAELEQP
                     DVWNEPERAQALGKERSSLEAVVDTLDQMKQGLEDVSGLLELAVEADDEETFNEAVAE
                     LDALEEKLAQLEFRRMFSGEYDSADCYLDIQAGSGGTEAQDWASMLERMYLRWAESRG
                     FKTEIIEESEGEVAGIKSVTIKISGDYAYGWLRTETGVHRLVRKSPFDSGGRRHTSFS
                     SAFVYPEVDDDIDIEINPADLRIDVYRTSGAGGQHVNRTESAVRITHIPTGIVTQCQN
                     DRSQHKNKDQAMKQMKAKLYELEMQKKNAEKQAMEDNKSDIGWGSQIRSYVLDDSRIK
                     DLRTGVETRNTQAVLDGSLDQFIEASLKAGL"
          </code></pre>
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
