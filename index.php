<?php
include 'connect.php';
include "menubar.php";

echo '
 <div class="width_div">
      <div id="slides-box" class="slides-box-table">
        <div class="container">
            <div id="featured">
               <ul class="ui-tabs-nav">
			      <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-1"><a href="#fragment-1" class="un"><span><strong>Top Sales</strong></span></a></li>
				  <li class="ui-tabs-nav-item" id="nav-fragment-2"><a href="#fragment-2"><span><strong>New Releases</strong></span></a></li>	
               </ul>
               <!-- First Content -->
               <div id="fragment-1" class="ui-tabs-panel" style=""><a href="" target="_self"><img src="images/banners/banner_slider1.jpg" border="0" alt="Banner3" title=" Banner3 " width="676" height="310"></a></div>
               <!-- Second Content -->
               <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide" style=""><a href="" target="_self"><img src="images/banners/banner_slider2.jpg" border="0" alt="Banner4" title=" Banner4 " width="676" height="310"></a></div>
               <!-- Third Content -->
               
            </div>
         </div>
      </div>
</div>';

include "catbar.php";
include "footer.php";				
?>
