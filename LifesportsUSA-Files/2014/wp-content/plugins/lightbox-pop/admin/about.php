<?php

require( dirname( __FILE__ ) . '/style.php' );
?>

<div style="width: 98%;text-align: justify;">
<h1  style="visibility:visible;">Lightbox Pop (V <?php echo xyz_lbx_plugin_get_version(); ?>)</h1>
<p>Lightbox Pop is a simple, attractive, non-annoying, extremely fast and light-weight popup for your WordPress blog. 
It allows you to edit your lightbox content using  WordPress content editor and supports various display mechanisms and custom design options.
 Lightbox Pop is developed and maintained by <a target="_blank" style="font-size: 15px;" href="http://xyzscripts.com">xyzscripts</a> 
</p>


<table  style=" width: 100%;" >
<tr>

<tr><td >
	<a class="xyz_lbx_link" style="margin-left:8px; font-size: 15px;" target="_blank" href="http://xyzscripts.com/wordpress-plugins/lightbox-pop/details">About Lightbox Pop</a>
</td></tr>
<tr><td >
	<a class="xyz_lbx_link" style="margin-left:8px; font-size: 15px;" target="_blank" href="http://kb.xyzscripts.com/wordpress-plugins/lightbox-pop/">Lightbox Pop FAQ</a>
</td></tr>
<tr><td >
	<a class="xyz_lbx_link" style="margin-left:8px; font-size: 15px;" target="_blank" href="http://docs.xyzscripts.com/wordpress-plugins/lightbox-pop/">Lightbox Pop Readme</a>
</td></tr>




</table>


<p>If you would like to have more popup layouts and more features in each layout, please try <a href="http://xyzscripts.com/wordpress-plugins/xyz-wp-popup/features" target="_blank">XYZ  WP Popup</a> which is a premium version of this plugin. 
   We have included a quick comparison of the free and premium plugins for your reference.
   </p> 

     <table    class="xyz-premium-comparison" cellspacing=0>
    <tr style="background-color: #EDEDED"><td ><h2>Feature group</h2></td><td><h2>Feature</h2></td><td><h2> Lightbox Pop</h2> </td> <td><h2>XYZ WP Popup</h2></td> </tr>
     <tr ><td rowspan="5"><h4>Display Layout</h4></td><td >As lightbox </td><td> <img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td> </tr>
        <tr><td>As fullscreen popup</td><td> <img src="<?php echo plugins_url("images/cross.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td>  </tr>
          <tr><td>As popup dialog box</td><td> <img src="<?php echo plugins_url("images/cross.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td>  </tr>
           <tr><td>As quick box popup</td><td> <img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td>  </tr>
              <tr><td>As quickbar</td><td> <img src="<?php echo plugins_url("images/cross.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td>  </tr>
     <tr ><td rowspan="3"><h4>Popup Content</h4></td><td >Content in editor </td><td> <img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td> </tr>
        <tr><td>Referrer URL based messages</td><td> <img src="<?php echo plugins_url("images/cross.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td>  </tr>
        <tr><td>Multiple popups with different content</td><td> <img src="<?php echo plugins_url("images/cross.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td>  </tr>
      <tr ><td rowspan="2"><h4>Position Settings</h4></td><td >Predefined positions </td><td> <img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td> </tr>
        <tr><td>Manual position settings</td><td> <img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td>  </tr>
     <tr ><td rowspan="2"><h4>Special Effects</h4></td><td >Popup sliding </td><td> -NA-</td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td> </tr>
        <tr><td>Popup dragging</td><td> -NA-</td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td>  </tr>                   
      <tr ><td rowspan="10"><h4>Display Logic</h4></td><td >Display based on number of pages browsed</td><td> <img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td> </tr>
        <tr><td>Display based on delay</td><td> <img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td>  </tr>
          <tr><td>Repeat interval for popup display</td><td> <img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td>  </tr>
           <tr><td>Onload display trigger method</td><td> <img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td>  </tr>
              <tr><td>Onclick display trigger method</td><td> <img src="<?php echo plugins_url("images/cross.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td>  </tr>
              <tr><td>Onexit display trigger method</td><td> <img src="<?php echo plugins_url("images/cross.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td>  </tr>
    <tr><td>Display contents using iframe</td><td> <img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td>  </tr>
     <tr><td>Enable scrollbar for larger contents</td><td> <img src="<?php echo plugins_url("images/cross.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td>  </tr>
     <tr><td>Target display on mobile devices only</td><td> <img src="<?php echo plugins_url("images/cross.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td>  </tr>
     <tr><td>Target display on desktop devices only</td><td> <img src="<?php echo plugins_url("images/cross.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td>  </tr>
     <tr ><td rowspan="5" ><h4>Popup Closing Logic</h4></td><td >Close when clicked on overlay</td><td> <img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td> </tr>
        <tr><td>Close when clicked on closebutton</td><td> <img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td>  </tr>
          <tr><td>Close when clicked on an element in the content</td><td><img src="<?php echo plugins_url("images/cross.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td>  </tr>
            <tr><td>Close button configurations</td><td> <img src="<?php echo plugins_url("images/cross.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td>  </tr>
           <tr><td>Auto close based on timeout</td><td> <img src="<?php echo plugins_url("images/cross.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td>  </tr>
        <tr ><td rowspan="2" ><h4>Javascript Callback</h4></td><td >Call back on popup display</td><td> <img src="<?php echo plugins_url("images/cross.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td> </tr>
        <tr><td>Callback on popup hide</td><td> <img src="<?php echo plugins_url("images/cross.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td>  </tr>
         <tr ><td rowspan="4" ><h4>Style Settings</h4></td><td >Overlay settings</td><td> <img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td> </tr>
        <tr><td>Overlay image configuration</td><td> <img src="<?php echo plugins_url("images/cross.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td>  </tr>  
        <tr><td>Color settings</td><td> <img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td>  </tr>  
     <tr><td>Border settings</td><td> <img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td>  </tr>  
    <tr ><td rowspan="3" ><h4>Placement Mechanism</h4></td><td >Display in all pages</td><td> <img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td> </tr>
        <tr><td>Display specifically in pages/posts/home page</td><td> <img src="<?php echo plugins_url("images/cross.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td>  </tr>  
     <tr><td>Display using shortcode</td><td> <img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td> <td><img src="<?php echo plugins_url("images/tick.png",__FILE__);?>"></td>  </tr>  
    
     </table>
   
</div>
