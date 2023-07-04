<?php
 ob_start("ob_gzhandler");
 require_once('config.inc');

 if(!function_exists("file_put_contents")){
  function file_put_contents($filename,$data) {
   if(($f=fopen($filename,'w'))) {
    $r=fwrite($f,$data);
    fclose($f);
    return $r;
   } else {
    return false;
   }
  }
 }

 if ((!(empty($_POST['seq'])) || (isset($_FILES['upfile']) && $_FILES['upfile']['error']==UPLOAD_ERR_OK && $_FILES['upfile']['size']<20000))) {
   $result=$path_bin;
   $tmpfname=tempnam($path_tmp, 'rf_bot');
   if (!(empty($_POST['seq']))) {
     $_POST['seq']=preg_replace('/\r/','',trim($_POST['seq']));
     if ($_POST['seq']{0}=='>') {
       list($header,$body)=split("\n",$_POST['seq'],2);
     } else {
       $header='>noname';
       $body=$_POST['seq'];
     }
     $body=preg_replace('/\W/','',$body);
     $body=strtoupper(preg_replace('/\d/','',$body));
     file_put_contents($tmpfname,$header."\n".strtoupper($body));
     $result.=" --in=$tmpfname";
   } elseif (isset($_FILES['upfile']) && is_uploaded_file($_FILES['upfile']['tmp_name'])) {
     file_put_contents($tmpfname,file_get_contents($_FILES['upfile']['tmp_name']));
     $result.=" --in=$tmpfname";
   }
   if (!empty($_POST['name'])) $result.=' --name='.rawurlencode(trim($_POST['name']));
   if (isset($_POST['force'])) $result.=' -f';
   if (isset($_POST['xml'])) $result.=' -x';
   if (isset($_POST['translation'])) $result.=' --table='.intval($_POST['translation']);
   if (strstr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 'zu')) $result.=' -v';
   if (isset($_POST['evalue'])) $result.=' -e=1e-'.intval($_POST['evalue']);
 }
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
    <meta name="robots" content="none" />
    <link rel="stylesheet" type="text/css" media="all" title="main style sheet" href="css/main.css" />
<?php if (!(isset($result))) { ?> 
    <script type="text/javascript">
//<![CDATA[
  function arobaceok(){
   var b=document.forms[0].upfile.value;
   var c=document.forms[0].seq.value;
   if( (b == "") && (c == "")){
    alert("You need to enter a sequence or upload a file !");
    return false;
   }
   if(b != "" && c != ""){
    alert("You cannot enter a sequence and upload a file !");
    return false;
   }
   return true;
  }
//]]>
    </script>
<?php } ?> 
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
      <div id="content-search" class="search">
        <div class="clear"></div>
        <div class="news">
          <h2>
            Automated Release Factor Annotation
          </h2>
          <div class="clear"></div>
<?php if (isset($result)) { ?> 
          <pre><code>
<?php
  if (strstr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 'zu')) print $result."\n";
  if (isset($_POST['xml'])) print htmlentities('<!DOCTYPE arfaxml PUBLIC "-//ARFAXML//DTD ARFAXML 1.1/EN" "http://'.$_SERVER['SERVER_NAME'].'/arfa/dtd/arfaxml.dtd">'."\n");
  $handle = popen($result, 'r');
#  fpassthru($handle);
  while (!feof($handle)) {
   print htmlentities(fgets($handle, 4096));
  }
  pclose($handle);
  if (isset($tmpfname)) unlink($tmpfname);
?>
          </code></pre>
          <p>
            We hope you are happy with that. You can <a href="search">try again</a>...
          </p>
<?php } else { ?> 
          <p>
            All fields are optional, but you need at least a sequence in FASTA format.
          </p>
          <div id="contact_form">
            <form method="post" action="search" class="rfform" onsubmit="return arobaceok();" enctype="multipart/form-data">
              <p>
                <label for="name">Enter a <strong>name</strong> for the sequence</label> <em>(optional)</em>:<br />
                <input type="text" name="name" id="name" size="20" value="" /><br />
                <label for="upfile"><strong>Upload</strong> a file</label>:<br />
                <input type="file" name="upfile" id="upfile" accept="text/plain" value="" /><br />
                or<br />
                <label for="seq"><strong>paste</strong> your DNA sequence in <a href="examples">FASTA</a> format</label>:<br />
                <textarea name="seq" id="seq" rows="15" cols="30"></textarea><br />
                <label for="evalue">Select <strong><em>e</em>-evalue</strong> threshold</label>:<br />
                <select name="evalue" id="evalue"><?php for ($i=0; $i<100;$i++) { print "\n                  <option value=\"$i\"".(($i==20)?' selected="selected"':'').">\n                    1e-$i\n                  </option>"; } ?> 
                </select><br />
                <label for="translation">Select <strong>translation table</strong></label>:<br />
                <select name="translation" id="translation">
                  <option value="1">
                    Standard Code
                  </option>
                  <option value="2">
                    Vertebrate Mitochondrial
                  </option>
                  <option value="3">
                    Yeast Mitochondrial
                  </option>
                  <option value="4">
                    Mitochondrial an Mycoplasma/Spiroplasma
                  </option>
                  <option value="5">
                    Invertebrate Mitochondrial
                  </option>
                  <option value="6">
                    Ciliate, Dasycladacean and Hexamita Nuclear
                  </option>
                  <option value="9">
                    Echinoderm Mitochondrial
                  </option>
                  <option value="10">
                    Euplotid Nuclear
                  </option>
                  <option value="11" selected="selected">
                    Bacterial and Plant Plastid
                  </option>
                  <option value="12">
                    Alternative Yeast Nuclear
                  </option>
                  <option value="13">
                    Ascidian Mitochondrial
                  </option>
                  <option value="14">
                    Flatworm Mitochondrial
                  </option>
                  <option value="15">
                    Blepharisma Macronuclear
                  </option>
                  <option value="16">
                    Chlorophycean Mitochondrial
                  </option>
                  <option value="21">
                    Trematode Mitochondrial
                  </option>
                </select><br />
                <input type="checkbox" name="force" id="force" value="" />&nbsp;<label for="force">Force <strong>ATG</strong> as start codon</label><br />
                <input type="checkbox" name="xml" id="xml" value="" />&nbsp;<label for="xml">Format output in <strong>XML</strong></label><br />
                <br />
                <input type="reset" value="Reset" /> <input type="submit" value="Submit" /><br />
              </p>
            </form>
          </div>
<?php } ?> 
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
