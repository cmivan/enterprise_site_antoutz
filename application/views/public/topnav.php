<?php /*?>网站导航栏<?php */?>
<div class="pageHeader">
  <div class="mainBody">
     <div class="topBtn"><h1><a href="javacript:void(0);">&nbsp;</a></h1></div>
     <div class="navMain">
       <h1>
        <object type="application/x-shockwave-flash" id="flag" width="100" height="120" data="<?php echo base_url();?>public/style/flag.swf">
            <param name="movie" value="<?php echo base_url();?>public/style/flag.swf">
            <param name="wmode" value="transparent">
            <param name="allowscriptaccess" value="always">
        </object>
       </h1>
	   <?php if(!empty($navAll)){?>
       <ul class="topNav">
	   <?php foreach($navAll as $key=>$val){?><li><a href="<?php echo site_url($key);?>" <?php if($navOn==$key){?>class="on"<?php }?>><p><?php echo $val;?></p></a></li><?php }?>
       </ul>
	   <?php }?>
     </div>
 </div>
</div>