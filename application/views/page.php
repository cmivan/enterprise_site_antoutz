<?php $this->load->view('public/header');?>
<body>
<!--顶部栏目-->
<?php $this->load->view('public/topnav');?>

<div class="mainBody">
 <!--主体内容-->
 <div class="pageBody">
    <div class="pageTop">&nbsp;</div>
    <div class="pageMain">
       <div class="pageMainLeft">
	     <?php $this->load->view('public/leftnav');?>
       </div>
       <div class="pageMainRight">
          <div id="pageContent">
              <div class="content_header">
			      <?php if(!empty($location)){?>
                  <!-- page_location -->
                  <div class="page_location">
                      <ol>
					  <?php foreach($location as $lo){
					  if(!empty($lo[0])&&!empty($lo[1])&&!empty($lo[2])){?>
					  <li class="<?php echo $lo[2];?>"><a href="<?php echo site_url($lo[1]);?>"><?php echo $lo[0];?></a></li>
					  <?php }else if(!empty($lo[0])&&!empty($lo[1])){?>
                      <li><a href="<?php echo site_url($lo[1]);?>"><?php echo $lo[0];?></a></li>
					  <?php }}?>
                      </ol>
                  </div>
				  <?php }?>
                  <!-- content_title -->
                  <h2><img src="<?php echo base_url();?>public/images/page/h_info.gif"/></h2>
              </div>
              <div class="content_section">
			  <?php if(!empty($view)){ echo $view->content; };?></div>
          </div>
       </div>
    </div>
    <div class="pageFooter">&nbsp;</div>
 </div>
</div>


<!--底部内容-->
<div class="footer">
 <div class="footerBody">&nbsp;</div>
</div>

</body>
</html>
