<html> 
 <head> 
 <title> Number squaring </title> 

 </head > 
 <body> 
 
 <?php
 
define( "PAGE_SIZE", 10 );
$start = 0;
if ( isset( $_GET["start"] ) and $_GET["start"] >= 0 and $_GET["start"] <=1000000 ) {
 $start = (int) $_GET["start"];
}
$end = $start + PAGE_SIZE - 1;
?> 
 <h2> Number squaring </h2 > 
 
 <p> Displaying the squares of the numbers <?php echo $start ?> to <?php echo$end ?> : </p > 
 <table cellspacing="0" border="2" style="width: 20em; border: 1px solid #666;border-collapse:collapse;" > 
 <tr > 
 <th > n </th > 
 <th > n <sup > 2 </sup > </th > 
 </tr > 
 <?php
for ( $i=$start; $i <= $end; $i++ )
{
?> 
 <tr <?php if ( $i % 2 != 0 )?> > 
 <td> <?php echo $i?> </td > 
 <td> <?php echo pow( $i, 2 )?> </td > 
 </tr> 
 <?php
}
?> 
 </table > 
 <p> 
 
 <?php if ( $start > 0 ) { ?> 
 <a href="sqrnum.php?start=<?php echo $start - PAGE_SIZE ?>" > &lt; Previous Page </a >|
 <?php } ?> 
 <a href="sqrnum.php?start=<?php echo $start + PAGE_SIZE ?> " > NextPage &gt; </a > 
 </p > 
 </body > 
 </html > 