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
    <div class="black-line"><li id="<?php echo $menu->category_id; ?>" class="category"><a href="#demo<?php echo $menu->category_id; ?>" data-toggle="collapse"><?php echo $menu->title; ?><?php if($sumMenuFlag){?><i class="fa fa-plus-square pull-right" ></i><?php } ?></a></li></div>
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
