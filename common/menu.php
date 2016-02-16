<h1 class="sof">POF</h1>
<div class="right-side">
  <ul class='mainUl'>

<?php 
$dataInfoInfo = new dataInfo();
$categoryInfo = new dataInfo();
$htmlFactory = new htmlFactory();
$allMenus = $dataInfoInfo->selectAll("category"); 
foreach($allMenus as $menu)
{
	if($menu->parentid == 0)
	{
		$sumMenuFlag = false;
		 $menuInfo = $categoryInfo->getCatagoryDataByParentId($menu->category_id);
		 if($menuInfo != "")
		 {
			 $sumMenuFlag = true;
		}
 ?>
    <li id="<?php echo $menu->category_id; ?>"><a href='"<?php $_SERVER['PHP_SELF']?>?category_id="<?php echo $menu->category_id; ?>"'><?php echo $menu->title; ?></a><?php if($sumMenuFlag){?><i class="fa fa-plus-square pull-right" href="#demo<?php echo $menu->category_id; ?>" data-toggle="collapse"></i><?php } ?></li>
    <?php
	 echo $categoryInfo->getSubmenu($menu->category_id);
	 echo $htmlFactory->createPages($menu->category_id);
	
    ?>
    
  <?php
	}
}
?>
  </ul>

</div>
<!--<div class="black-line">
    <li><a href="#"> About <i class="fa fa-plus-square pull-right"></i></a></li>
  </div>
  <div class="grey-line">
    <li><a href="#"> NCC <i class="fa fa-plus-square pull-right"></i></a></li>
  </div>
  <div class="grey-line">
    <li><a href="#"> NSC <i class="fa fa-plus-square pull-right"></i></a></li>
  </div>
  <div class="grey-line">
    <li><a href="#"> IMO <i class="fa fa-plus-square pull-right"></i></a></li>
  </div>
  <div class="grey-line">
    <li><a href="#"> IEO <i class="fa fa-plus-square pull-right"></i></a></li>
  </div>
  <div class="black-line">
    <li><a href="#"> Scholarships <i class="fa fa-plus-square pull-right"></i></a></li>
  </div>
  <li class="winners"><a href="#"> Winners 2014-15 <i class="fa fa-minus-square pull-right winners"></a></i></li>
  <li class="small-font"><a href="#"> <i class="fa fa-check"></i> INTERNATIONAL WINNERS 2014-15</a></li>
  <li class="small-font"><a href="#"> <i class="fa fa-check"></i> AES WINNERS 2014-15</a></li>
  <li class="small-font"><a href="#"> <i class="fa fa-check"></i> SEE WINNERS 2014-15</a></li>
  <div class="black-line">
    <li class="small-font"><a href="#"> <i class="fa fa-check"></i> Girl Child Scholarships Scheme:2015-16</a></li>
  </div>
  <div class="grey-line">
    <li><a href="#">Media Coverage</a></li>
  </div>
  <div class="grey-line">
    <li><a href="#">Download Registration Form</a></li>
  </div>
  <div class="grey-line">
    <li><a href="#">Register Your School</a></li>
  </div>
  <div class="black-line">
    <li><a href="#">Feedback</a></li>
  </div>
  <div class="black-line">
    <li><a href="#">Become Coordinators</a></li>
  </div>
  <div class="black-line">
    <li><a href="#">Awards Functions in Schools</a></li>
  </div>-->
  
  <style>
  ul ul{
    padding-left: 30px;
}
ul{list-style:none;}
li i.collapsed > a span {
    background: rgba(0, 0, 0, 0) url("https://perishablepress.com/wp/wp-content/images/2013/accordion-menu/icon_plus.png") no-repeat scroll 96% center;
}
  </style>