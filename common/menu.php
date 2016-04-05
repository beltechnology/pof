<?php /*?><h1 class="sof">POF</h1>
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
		 $pageInfo = $categoryInfo->getpagesByCategoryId($menu->category_id);
		 if($menuInfo != "" || $pageInfo != "")
		 {
			 $sumMenuFlag = true;
		 }
		 		 
 ?>
    <div class="Right-navigation"><li id="<?php echo $menu->category_id; ?>" class="category"><a href="#demo<?php echo $menu->category_id; ?>" data-toggle="collapse"><?php echo $menu->title; ?><?php if($sumMenuFlag){?><i class="fa fa-plus-square pull-right" ></i><?php } ?></a></li></div>
<?php
	 echo $categoryInfo->getSubmenu($menu->category_id);
	 echo $htmlFactory->createPages($menu->category_id);

	}
}
$singlePagesInfo = $categoryInfo->getpagesByCategoryId(0);
if($singlePagesInfo)
{
 	echo $htmlFactory->createPages(0);
}
?>
  </ul>

</div><?php */?>
 <div class="Index col-sm-3 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
           
                    <div class="Side_Menu">
              <h2>SOF</h2>
              <ul id="nav1">
    <li><a href="#">PMO – SYLLABUS GUIDANCE</a>
    <ul>
      <li><a href="#">PMO – Booklet</a></li>
      <li><a href="#">PMO – Syllabus</a></li>
      <li><a href="#">PMO – Sample Papers</a></li>
      <li><a href="#">PMO – Question Pattern with Marks</a></li>
    </ul>
    </li>
    <li><a href="#">PMO – EXAM GUIDLINE </a>
      <ul>
      <li><a href="#">PMO – Enrolment Procedure</a></li>
      <li><a href="#">PMO – Exam Detail (Level 1 & Level 2)</a></li>
      <li><a href="#">PMO – 2 Level Olympiad Instruction</a></li>
      <li><a href="#">PMO – Answer Key</a></li>
    </ul>
    </li>
    <li><a href="#">PMO – PRIZES</a>
    <ul>
      <li><a href="#">PMO – Ranks</a></li>
      <li><a href="#"> PMO – Prizes</a></li>
     
    </ul>
    </li>
    <li><a href="#">PLANET OLYMPIAD FOUNDATION</a>
    <ul>
      <li><a href="#">About POF</a></li>
      <li><a href="#">POF Mission & Vision</a></li>
      <li><a href="#">Advisory Committee</a></li>
    </ul>
    </li>
    <li><a href="#">DOWNLOAD PMO REGISTRATION FORM (ONLY FOR SCHOOLS)</a>
   <!-- <ul>
      <li><a href="#">Stage1</a></li>
      <li><a href="#">Stage2</a></li>
      <li><a href="#">Stage3</a></li>
      <li><a href="#">Stage4</a></li>
    </ul>-->
    </li>
   
    <li><a href="#">PMO – SCHOOL & STUDENT PROGRESS REPORT</a></li>
    
    <li><a href="#">PRINCIPAL/TEACHER/STUDENT/OTHERS – FEEDBACK</a></li>
    
    <li><a href="#">PMO FAQ’S</a></li>
    
    <li><a href="#">BECOME POF ASSOCIATE</a></li>
    
</ul>
    </div>
                 
            </div>
