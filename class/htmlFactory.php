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
			if($count >= 0 && $count <= 4)
			{
				if($ele == 0)
				{
					$carouselHTML = $carouselHTML."<div class='item active'>
	 <img class='center-block img-responsive' src='/vibhor/admin/upload/".$carousel->sliderImage."' alt='...'>
      <div class='carousel-caption'>
		<h1 class='text-center'>".$carousel->text."</h1>   
	 </div>
    </div>";
				}
				else
				{
					$carouselHTML = $carouselHTML."<div class='item'>
	 <img class='center-block img-responsive' src='/vibhor/admin/upload/".$carousel->sliderImage."'  alt='...'>
      <div class='carousel-caption'>
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
			if($count >= 5 && $count <= 8)
			{
				if($ele == 0)
				{
					$carouselHTML = $carouselHTML."<div class='item active'> <img class='center-block img-responsive' src='/vibhor/admin/upload/".$carousel->sliderImage."' alt='...' width='100%'>
                <div class='carousel-caption slider-heading'>
				".$carousel->text."
                </div>
              </div>";
				}
				else
				{
					$carouselHTML = $carouselHTML."<div class='item'> <img class='center-block img-responsive' src='/vibhor/admin/upload/".$carousel->sliderImage."' alt='...' width='100%'>
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
			$moreinformationHTML = $moreinformationHTML."<div class='col-lg-3 col-md-3 text'>
			<img class='img-responsive' src='/vibhor/admin/upload/".$moreinformation->upload."'>
        <div class='written'>
          <h2 class='center-block'>".$moreinformation->title."</h2>
          <a href='".$moreinformation->link."'><span class='glyphicon glyphicon-play-circle' aria-hidden='true'></span></a> </div>
      </div>";
		
		} 
		return $moreinformationHTML;
	}



	function  aboutPof()
	{
		$aboutPofHTML = "";
		$aboutPofDetials = $this->getDataFromServer("aboutpof");
		foreach($aboutPofDetials as $aboutPofDetail)
		{
			$aboutPofHTML = $aboutPofHTML."<div class='col-md-4 col-lg-4 grey-1'>
		     <img class='center-block img-responsive' src='/vibhor/admin/upload/".$aboutPofDetail->upload."' alt='pencil-photo'>
			 <div class='heading'><h2>".$aboutPofDetail->title."</h2></div>
			 <div>&nbsp;</div>
			 <p>". substr(strip_tags($aboutPofDetail->description),0,110). "..."."</p>
			 <a class='second center-block' href='#'>READ MORE &gt;&gt;</a>
			 </div>";
		
		} 
		return $aboutPofHTML;
	}

function createPages($categoryId)
{
	$pageLinkHTML = "";
	$pages = $this->getPageDataByCategoryId($categoryId);
	if($pages != "")
	{
		foreach($pages as $page)
		{
			$pageLinkHTML =$pageLinkHTML."<li><a href='http://".$_SERVER['SERVER_NAME']."/vibhor/pages/index.php?categoryId=".$categoryId."&pageId=".$page->pageId."'>".$page->pageTitle."</a></li>";
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
	//var_dump($allMenu);
		foreach($allMenu as $menu)
		{
			
			if(strtoupper($menu->title) == "NCO")
			{
			$homeMenu .= "<div class='col-lg-3 col-md-3 first-b col-md-offset-1 col-lg-offset-1'><a href='http://".$_SERVER['SERVER_NAME']."/vibhor/pages/index.php?categoryId=".$menu->category_id."'>NCO</a></div>";
			$count++;
			}
			elseif(strtoupper($menu->title) == "NSO")
			{
			$homeMenu .= "<div class='col-lg-3 col-md-3 second-b col-md-offset-1 col-lg-offset-1'><a href='http://".$_SERVER['SERVER_NAME']."/vibhor/pages/index.php?categoryId=".$menu->category_id."'>NSO </a></div>";
			$count++;
			}
			elseif(strtoupper($menu->title) == "IEO")
			{
			$homeMenu .= "<div class='col-lg-3 col-md-3 third-b col-md-offset-1 col-lg-offset-1'><a href='http://".$_SERVER['SERVER_NAME']."/vibhor/pages/index.php?categoryId=".$menu->category_id."'>IEO</a> </div>";
			$count++;
			}
			elseif(strtoupper($menu->title) == "IMO")
			{
			$homeMenu .= "<div class='col-lg-3 col-md-3 fourth-b col-md-offset-1 col-lg-offset-1'><a href='http://".$_SERVER['SERVER_NAME']."/vibhor/pages/index.php?categoryId=".$menu->category_id."'>IMO </a></div>";
			$count++;
			}
			elseif(strtoupper($menu->title) == strtoupper("Ask Expert"))
			{
			$homeMenu .= "<div class='col-lg-3 col-md-3 fifth-b col-md-offset-1 col-lg-offset-1'><a href='http://".$_SERVER['SERVER_NAME']."/vibhor/pages/index.php?categoryId=".$menu->category_id."'>Ask Expert</a></div>";
			$count++;
			}
			elseif(strtoupper($menu->title) == "FAQ")
			{
			$homeMenu .= "<div class='col-lg-3 col-md-3 sixth-b col-md-offset-1 col-lg-offset-1'><a href='http://".$_SERVER['SERVER_NAME']."/vibhor/pages/index.php?categoryId=".$menu->category_id."'>FAQ</a></div>";
			$count++;
			}
			
			
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
				<div class='row'>
				<div class='stage col-lg-12 col-md-12'>
				<p class='first-line'>Lorem Ispum Dummy
				<p>
				<p>1 July 2014</p>
				<p><a href='".$olympaidInfo->link."'>Read Full Story &gt;&gt;</a></p>
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
				
				$testimonialHTML .= "<div class='col-lg-12 col-md-12 item ".$active."'> <img class='center-block img-responsive' src='/vibhor/admin/upload/".$testimonial->upload."'>
        <h1 class='text-center'>".$testimonial->title."</h1>
        <p class='text-center'".$testimonial->description."</p>
      </div>";
			$active = "";
			}
			return $testimonialHTML;
			
		}


}
?>