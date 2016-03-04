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
	 <img class='center-block img-responsive first-slider bottom-text' src='".BaseUrl."admin/upload/".$carousel->sliderImage."' alt='...'>
      <div class='carousel-caption bottom-indicators'>
		<h1 class='text-center carousel-heading'>".$carousel->text."</h1>   
	 </div>
    </div>";
				}
				else
				{
					$carouselHTML = $carouselHTML."<div class='item'>
	 <img class='center-block img-responsive first-slider bottom-text' src='".BaseUrl."admin/upload/".$carousel->sliderImage."'  alt='...'>
      <div class='carousel-caption bottom-indicators'>
		<h1 class='text-center'>".$carousel->text."</h1>   
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
					$carouselHTML = $carouselHTML."<div class='item active'> <img class='center-block img-responsive big-slide' src='".BaseUrl."admin/upload/".$carousel->sliderImage."' alt='...' width=''>
                <div class='carousel-caption slider-heading'>
				".$carousel->text."
                </div>
              </div>";
				}
				else
				{
					$carouselHTML = $carouselHTML."<div class='item'> <img class='center-block img-responsive big-slide' src='".BaseUrl."admin/upload/".$carousel->sliderImage."' alt='...' width=''>
                <div class='carousel-caption slider-heading'>
				".$carousel->text."
                </div>
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
			$moreinformationHTML = $moreinformationHTML."<li><div class='text'>
		 <div class='contain'>
			<img class='img-responsive image' src='".BaseUrl."admin/upload/".$moreinformation->upload."'>
        <div class='written'>
          
          <a href='".$moreinformation->link."' target='_blank'>
		  <!--<span class='glyphicon glyphicon-play-circle' aria-hidden='true'></span> this is comment coding-->
		  <h2 class='center-block'>".$moreinformation->title."</h2>
		  </a>
		  </div>
      </div></div></li>";
		
		} 
		return $moreinformationHTML;
	}

	function  moreInformationInnerPage()
	{
		$moreinformationHTML = "";
		$moreinformations = $this->getDataFromServerBytableName("moreinformation");
		foreach($moreinformations as $moreinformation)
		{
			$moreinformationHTML = $moreinformationHTML."<div class='col-lg-11 col-md-11 col-lg-offset-1 col-md-offset-1 text'><img class='img-responsive pull-left' src='".BaseUrl."admin/upload/".$moreinformation->upload."' style='width:290px; height:170px;'>
			   <div class='written'><a href='".$moreinformation->link."' target='_blank'> <h2 class='center-block'>".$moreinformation->title."</h2></a>
                
			   </div>
			  </div>
			  <div>&nbsp;</div>";
		
		} 
		return $moreinformationHTML;
	}



	function  aboutPof()
	{
		$aboutPofHTML = "";
		$aboutPofDetials = $this->getDataFromServer("aboutpof");
		foreach($aboutPofDetials as $aboutPofDetail)
		{
			$aboutPofHTML = $aboutPofHTML."<div class='col-md-4 col-lg-4 grey-1 aboutpof".$aboutPofDetail->aboutId."'>
		     <img class='center-block img-responsive' src='".BaseUrl."admin/upload/".$aboutPofDetail->upload."' alt='pencil-photo'>
			 <div class='heading'><h2>".$aboutPofDetail->title."</h2></div>
			 <div>&nbsp;</div>
			 <p>". substr(strip_tags($aboutPofDetail->description),0,110). "..."."</p>
			 <a class='second center-block' href='".BaseUrl."pages/index.php?aboutId=".$aboutPofDetail->aboutId."'>READ MORE &gt;&gt;</a>
			 </div>";
		
		} 
		return $aboutPofHTML;
	}

function createPages($categoryId)
{
	$pageLinkHTML = "";
	$putStyle = "";
	$pages = $this->getPageDataByCategoryId($categoryId);
	if($categoryId != 0)
	{
	 $putStyle = "style='display:none;'";
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
			$pageLinkHTML =$pageLinkHTML."<li class='pages pagesLi".$categoryId."' ".$putStyle."><span class='glyphicon glyphicon-ok' aria-hidden='true'></span> <a href='http://".$_SERVER['SERVER_NAME']."".BaseUrl."pages/index.php?categoryId=".$categoryId."&pageId=".$page->pageId."'>".$page->pageTitle."</a></li>";
			}
		}
	}
	return $pageLinkHTML;
	
}
// create pages for inner page
function createPagesInnnerPages($categoryId)
{
	$pageLinkHTML = "";
	$putStyle = "";
	$pages = $this->getPageDataByCategoryId($categoryId);
	if($categoryId != 0)
	{
	 $putStyle = "style='display:block;'";
	}
	if($pages != "")
	{
		foreach($pages as $page)
		{
			$pageLinkHTML =$pageLinkHTML."<li><span class='glyphicon glyphicon-ok' aria-hidden='true'></span> <a href='http://".$_SERVER['SERVER_NAME']."".BaseUrl."pages/index.php?categoryId=".$categoryId."&pageId=".$page->pageId."'>".$page->pageTitle."</a></li>";
		}
	}
	return $pageLinkHTML;
	
}





function getHomeMenu ()
{
	$allMenu = $this->getMenuData();
	$count = 0;
	$homeMenu = "";
	$loopCounter = 1;
	$cssArray = ["first","second","third","fourth","fifth","sixth"];
	//var_dump($allMenu);
		foreach($allMenu as $menu)
		{
			$title = $menu->title;
			if(strlen($title) >10)
			{
				$title = substr($title, 0, 10)."..";
				
			}

			$homeMenu .= "<div class='col-lg-3 col-md-3 ".$cssArray[$count]."-b col-md-offset-1 col-lg-offset-1'><a href='http://".$_SERVER['SERVER_NAME']."".BaseUrl."pages/index.php?categoryId=".$menu->category_id."'>".$title."</a></div>";
			$count++;
			if($count == 6) $count=0;
			
		}
	
	return $homeMenu;
}


		public  function createOlympaidInformation()
		{
			$olympaidInformation = $this->getOlympaidInformation();
			$olympaidInfoHTML = "";
			foreach ($olympaidInformation as $olympaidInfo)
			{
				
				$olympaidInfoHTML .= "<div class='col-lg-6 col-md-6'>
				<h2 class='text-center blue' style='margin-left:-10%;'>".$olympaidInfo->title."</h2>
				<div>&nbsp;</div>
				<div class=''>
				<div class='stage row".$olympaidInfo->olympaidInformationId."same-size-image'>
				 <div class='contain'>
					<img  src='".BaseUrl."admin/upload/".$olympaidInfo->upload."' alt='Norway' class='".$olympaidInfo->olympaidInformationId."medium-image'>
					<div class='alignment'><p class='first-line'>". substr(strip_tags($olympaidInfo->description),0,30)."</p>
					<p><a href='".$olympaidInfo->link."' target='_blank'>Read Full Story &gt;&gt;</a></p>
				</div>
				</div>
				</div>
				</div>
				</div>";
			
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
				
				$testimonialHTML .= "<div class='col-lg-12 col-md-12 item ".$active."'> <img class='center-block img-responsive img-circle fixed-size' src='".BaseUrl."admin/upload/".$testimonial->upload."'>
        <h1 class='text-center'>".$testimonial->title."</h1>
        <p class='text-center'".$testimonial->description."</p>
      </div>";
			$active = "";
			}
			return $testimonialHTML;
			
		}


}
?>