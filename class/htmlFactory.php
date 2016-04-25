<?php include("dataFactory.php"); 
class  htmlFactory extends  dataFactory
{
	
// get header carousel	
	function getHeaderCarousel()
	{
		$count = 0;
		$ele = 0;
		$carouselHTML ="";
		$carousels = $this->getDataFromServerBytableName("slider");
		foreach($carousels as $carousel)
		{
			$count ++;
			if($count >= 0 && $count <= 5)
			{
				
				if($ele == 0)
				{
					$carouselHTML = $carouselHTML."<div class='item active'>
	 <img class='center-block img-responsive first-slider bottom-text' src='".BaseUrl."upload/".$carousel->sliderImage."' alt='...'>
      <div class='carousel-caption bottom-indicators'>
	 </div>
    </div>";
				}
				else
				{
					$carouselHTML = $carouselHTML."<div class='item'>
	 <img class='center-block img-responsive first-slider bottom-text' src='".BaseUrl."upload/".$carousel->sliderImage."'  alt='...'>
      <div class='carousel-caption bottom-indicators'>
	 </div>
    </div>";
				}
				$ele++;
			}
			
			
		} 
		
		return $carouselHTML;
		
	}
// get index carousel	
	function getIndexCarousel()
	{
		$count = 0;
		$ele = 0;
		$carouselHTML ="";
		$carousels = $this->getDataFromServerBytableName("slider");
		foreach($carousels as $carousel)
		{
			$count ++;
			if($count >= 6 && $count <= 10)
			{
				if($ele == 0)
				{
					$carouselHTML = $carouselHTML."<div class='item active'> <img class='center-block img-responsive big-slide' src='".BaseUrl."upload/".$carousel->sliderImage."' alt='...' width=''>
              </div>";
				}
				else
				{
					$carouselHTML = $carouselHTML."<div class='item'> <img class='center-block img-responsive big-slide' src='".BaseUrl."upload/".$carousel->sliderImage."' alt='...' width=''>
              </div>";
				}
				$ele++;
			}
			
			
		} 
		
		return $carouselHTML;
		
	}
// get  Indicators	
	function getIndicators($start,$end)
	{
		$count = 0;
		$ele = 0;
		$indicatiorHTML ="";
		$indicators = $this->getDataFromServerBytableName("slider");
		foreach($indicators as $indicator)
		{
			$count ++;
			if($count >= $start && $count <= $end)
			{
				if($ele == 0)
				{
					$indicatiorHTML = $indicatiorHTML."<li data-target='#carousel-example-generic' data-slide-to='".$ele."' class='active'></li>";
				}
				else
				{
					$indicatiorHTML = $indicatiorHTML."<li data-target='#carousel-example-generic' data-slide-to='".$ele."'></li>";
				}
				$ele++;
			}
			
			
		} 
		
		return $indicatiorHTML;
		
	}
	function  moreInformation()
	{
		$moreinformationHTML = "";
		$moreinformations = $this->getDataFromServerBytableName("moreinformation");
		foreach($moreinformations as $moreinformation)
		{
			$moreinformationHTML = $moreinformationHTML."<div class='col-xs-2 col-sm-2'><a href='".BaseUrl."upload/".$moreinformation->upload."' class='fancybox'  data-fancybox-group='gallery' >
			<img class='img-responsive person' src='".BaseUrl."upload/".$moreinformation->upload."'></a></div>";
		
		} 
		return $moreinformationHTML;
	}

	function  moreInformationInnerPage()
	{
		$moreinformationHTML = "";
		$moreinformations = $this->getDataFromServerBytableName("moreinformation");
		foreach($moreinformations as $moreinformation)
		{
			$moreinformationHTML = $moreinformationHTML."<li><a href=''><img src='".BaseUrl."upload/".$moreinformation->upload."' alt=''></a></li>";
		
		} 
		return $moreinformationHTML;
	}
	function  aboutPof()
	{
		$aboutPofHTML = "";
		$abutArr = [2,3,1];
		$i=0;
		$aboutPofDetials = $this->getDataFromServer("aboutpof");
		foreach($aboutPofDetials as $aboutPofDetail)
		{
			$aboutPofHTML = $aboutPofHTML."<div class='col-sm-4 text-center padding wow fadeIn aboutpof".$abutArr[$i]."' data-wow-duration='1000ms' data-wow-delay='300ms'>
		     <div class='single-service'>
             <div class='wow scaleIn' data-wow-duration='500ms' data-wow-delay='300ms'>
			 <img src='".BaseUrl."upload/".$aboutPofDetail->upload."' alt='pencil-photo'>
			 </div>
			 <h2>".$aboutPofDetail->title."</h2>
			 <p>". substr(strip_tags($aboutPofDetail->description),0,110). "..."."</p>
			 <a class='btn btn-common Service_Btn' href='".BaseUrl."pages/index.php?aboutId=".$aboutPofDetail->aboutId."'>Know More..</a>
			 </div></div>";
		$i++;
		} 
		return $aboutPofHTML;
	}

function createPages($categoryId)
{
	$pageLinkHTML = "";
	$putStyle = "";
	$ulHTML = "<ul>";
	$pages = $this->getPageDataByCategoryId($categoryId);
	if($categoryId != 0)
	{
	 $putStyle = "style='display:block;'";
	 $ulHTML = "<ul>";
	 $ulHTMLClose = "</ul>";
	}
	else{
		$ulHTML = "";
		$ulHTMLClose = "";
	}
	if($pages != "")
	{
		foreach($pages as $page)
		{
			if($categoryId == 0)
			{		
			$pageLinkHTML =$pageLinkHTML."<li class='singlepages category pagesLi".$categoryId."' ".$putStyle."><a href='http://".$_SERVER['SERVER_NAME']."".BaseUrl."pages/index.php?categoryId=".$categoryId."&pageId=".$page->pageId."'>".$page->pageTitle."</a></li>";
			}
			else
			{
			$pageLinkHTML =$pageLinkHTML."<li class='pages pagesLi".$categoryId."' ".$putStyle."><a href='http://".$_SERVER['SERVER_NAME']."".BaseUrl."pages/index.php?categoryId=".$categoryId."&pageId=".$page->pageId."'>".$page->pageTitle."</a></li>";
			}
		}
	}
	return $ulHTML.$pageLinkHTML.$ulHTMLClose;
	
}


function getChildCategoryHTML($categoryId)
{
	$categoryLinkHTML = "";
	$categoryData = $this->getChildCategoryByCategoryId($categoryId);
	if($categoryId != 0)
	{
	 $putStyle = "style='display:block;'";
	}
	if($categoryData != "")
	{
		foreach($categoryData as $category)
		{
			$categoryLinkHTML =$categoryLinkHTML."<li><a href='http://".$_SERVER['SERVER_NAME']."".BaseUrl."pages/index.php?categoryId=".$category->category_id."'>".$category->title."</a></li>";
		}
	}
	return $categoryLinkHTML;
	
}


// create pages for inner page
function createPagesInnnerPages($categoryId)
{
	$pageLinkHTML = "";
	$putStyle = "";
	$pageLinkHTML = $this->getChildCategoryHTML($categoryId);
	$pages = $this->getPageDataByCategoryId($categoryId);
	if($categoryId != 0)
	{
	 $putStyle = "style='display:block;'";
	}
	if($pages != "")
	{
		foreach($pages as $page)
		{
			$pageLinkHTML =$pageLinkHTML."<li><span class='glyphicon glyphicon-hand-right' aria-hidden='true'></span><a href='http://".$_SERVER['SERVER_NAME']."".BaseUrl."pages/index.php?categoryId=".$categoryId."&pageId=".$page->pageId."'>".$page->pageTitle."</a></li>";
		}
	}
	return "<ul class='caregoryMenu'>".$pageLinkHTML."</ul>";
	
}



function getHomeMenu ()
{
	$allMenu = $this->getMenuData();
	$count = 0;
	$homeMenu = "";
	$loopCounter = 1;
	$cssArray = ["first","second","third","fourth","fifth","sixth"];
	//var_dump($allMenu);
	if($allMenu !="")
	{
		foreach($allMenu as $menu)
		{
			$title = $menu->title;
			$homeMenu .= "<li><a href='http://".$_SERVER['SERVER_NAME']."".BaseUrl."pages/index.php?categoryId=".$menu->category_id."' class='btn btn-common'>".$title."</a></li>";
			$count++;
			if($count == 6) $count=0;
			
		}
	}
	
	return $homeMenu;
}
               /* <div class="single-features">
                    <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>Olympaid Award</h2>
                        <P>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</P><a href="#">  READ FULL STORY</a>
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/home/image2.png" class="img-responsive single-img" alt="">
                    </div>
                </div>*/

 
		public  function createOlympaidInformation()
		{
			$olympaidInformation = $this->getOlympaidInformation();
			$olympaidInfoHTML = "";
			$i = 0;
			foreach ($olympaidInformation as $olympaidInfo)
			{
				if($i % 2 == 0)
				{
				$olympaidInfoHTML .= "<div class='single-features'>
				<div class='col-sm-5 wow fadeInLeft' data-wow-duration='500ms' data-wow-delay='300ms'>
                        <img src='".BaseUrl."upload/".$olympaidInfo->upload."' class='img-responsive single-img' alt=''>
                    </div>
				<div class='col-sm-6 wow fadeInRight' data-wow-duration='500ms' data-wow-delay='300ms'>
				<h2>".$olympaidInfo->title."</h2>
				<p>".strip_tags($olympaidInfo->description)."</p><a href='".BaseUrl."pages/index.php?olympaidInformationId=".$olympaidInfo->olympaidInformationId."'>  READ FULL STORY</a>
				</div>
				</div>";
				}
				else
				{
					$olympaidInfoHTML .= "<div class='single-features'>				
				<div class='col-sm-6 col-sm-offset-1 align-right wow fadeInLeft' data-wow-duration='500ms' data-wow-delay='300ms'>
				<h2>".$olympaidInfo->title."</h2>
				<p>".strip_tags($olympaidInfo->description)."</p><a href='".BaseUrl."pages/index.php?olympaidInformationId=".$olympaidInfo->olympaidInformationId."'>  READ FULL STORY</a>
				</div>
				<div class='col-sm-5 wow fadeInLeft' data-wow-duration='500ms' data-wow-delay='300ms'>
                     <img src='".BaseUrl."upload/".$olympaidInfo->upload."' class='img-responsive single-img' alt=''>
                    </div>
				</div>";
				}
			$i++;
			}
			return $olympaidInfoHTML;
			
			
		}
		function createTestimonialHtml()
		{
			$getTestimonialData = $this->getTestimonialData();
			$testimonialHTML = "";
			$count = 0;
			$active = "active";
			foreach ($getTestimonialData as $testimonial)
			{
				
				$testimonialHTML .= "<div class='media'><div class='pull-left Footer_Img'><a href='#'><img class='center-block img-responsive  fixed-size' src='".BaseUrl."upload/".$testimonial->upload."'></a></div>
                            <div class='media-body'>
							 <blockquote>".$testimonial->description."</blockquote>
                                <h3><a href='#'>".$testimonial->title."</a></h3>
                            </div>
                         </div>";
			$active = "";
			}
			return $testimonialHTML;
			
		}

		function createAboutHtml()
		{
			$aboutData = $this->getDataFromServer("about");
			$aboutHtml = "";
			$count = 0;
			if($aboutData)
			{
				
			foreach ($aboutData as $about)
			{
				$count++;
				if($count <=4)
				{
				$aboutHtml .= " <div class='col-sm-3 col-xs-6'>
                                <div class='team-single-wrapper'>
                                    <div class='team-single'>
                                        <div class='person-thumb'>
                                            <img src='".BaseUrl."upload/".$about->uploads."' class='img-responsive' alt=''>
                                        </div>
                                    </div>
                                    <div class='person-info'>
                                        <h2>".$about->name."</h2>
                                        <p>".$about->description."</p>
                                    </div>
                                </div>
                            </div>";
				}
				else if($count == 5)
				{
					$aboutHtml = $aboutHtml."</div><div class='item'>";
				$aboutHtml .= " <div class='col-sm-3 col-xs-6'>
                                <div class='team-single-wrapper'>
                                    <div class='team-single'>
                                        <div class='person-thumb'>
                                            <img src='".BaseUrl."upload/".$about->uploads."' class='img-responsive' alt=''>
                                        </div>
                                    </div>
                                    <div class='person-info'>
                                        <h2>".$about->name."</h2>
                                        <p>".$about->description."</p>
                                    </div>
                                </div>
                            </div>";
					$count = 0;
				}
				
			}
			}
			return $aboutHtml;
			
		}
	function getChildCategoryByCategory($categoryId)
	{
	    $subjectMenuHtml = "";
		$dataByParentData = $this->getDataByParentId($categoryId);
		
		if(count($dataByParentData)>0)
		{
			foreach($dataByParentData as $subjectMenu)
			{
				if(isset($_REQUEST['notesCategoryId']))
				{				
				 if($subjectMenu->notesCategoryId == $_REQUEST['notesCategoryId'] )
				 {
					$activeClass = "active"; 
				 }
				else{ $activeClass = ""; }
				}
				  $subjectMenuHtml =$subjectMenuHtml."<li class='".$activeClass."'><a href='viewNotes.php?notesCategoryId=".$subjectMenu->notesCategoryId."'><span aria-hidden='true' class='glyphicon  glyphicon-download-alt'></span>".$subjectMenu->CategoryName."</a></li>";
				  $subjectMenuHtml = $subjectMenuHtml.$this->getChildCategoryByCategory($subjectMenu->notesCategoryId);
				
			}
		}
		return $subjectMenuHtml;
	//	var_dump($dataByParentData);
	}

}
?>