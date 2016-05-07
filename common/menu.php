           
                    <div class="Side_Menu">
              <h2>POF</h2>
 <style type="text/css">
/* Menu container */
.menu	{
	padding:10px 5px 10px 5px;
	margin:12px 12px 12px 50px;
	}

/* Menu styles */
.menu ul
	{
	margin:0px;
	padding:0px;
	text-decoration:none;
	}
.menu li
	{
	margin:0px 0px 0px 5px;
	padding:0px;
	list-style-type:none;
	text-align:left;
	font-family:Arial,Helvetica,sans-serif;
	font-size:13px;
	font-weight:normal;
	}

/* Submenu styles */
.menu ul ul 
	{
	background-color:#F6F6F6;
	}
.menu li li
	{
	margin:0px 0px 0px 16px;
	}

/* Symbol styles */
.menu .symbol-item,
.menu .symbol-open,
.menu .symbol-close
	{
	float:left;
	width:16px;
	height:1em;
	background-position:left center;
	background-repeat:no-repeat;
	}
.menu .symbol-item  { background-image:url(/vibhor/pof/icons/page.png); }
.menu .symbol-close { background-image:url(/vibhor/pof/icons/plus.png);}
.menu .symbol-open  { background-image:url(/vibhor/pof/icons/minus.png); }
.menu .symbol-item.last  { }
.menu .symbol-close.last { }
.menu .symbol-open.last  { }

/* Menu line styles */
.menu li.item  { font-weight:normal; }
.menu li.close { font-weight:normal; }
.menu li.open  { font-weight:bold; }
.menu li.item.last  { }
.menu li.close.last { }
.menu li.open.last  { }

a.go:link, a.go:visited, a.go:active
        {
        display:block;
        height:26px;
        width:100px;
        background-color:#FFFFFF;
        color:#333333;
        font-family:Arial,Helvetica,sans-serif;
        font-size:12px;
        font-weight:bold;
        text-align:right;
        text-decoration:none;
        line-height:26px;
        padding-right:30px;
        background-image:url(go.gif);
        background-position:right;
        background-repeat:no-repeat;
        }
a.go:hover
        {
        text-decoration:none;
        color:#488400;
        }
#example3 { width:40%; background-color:#F9F9F9; padding:0px; margin-left:24px; }
#example3 li { list-style:none; margin:1px 0px; }
#example3 li a { display:block; height:16px; padding:0px 4px; background-color:#EEEEFF; }
#example3 li ul { margin:0px; padding:0px; }
#example3 li ul li a { background-color:#F9F9F9; border-bottom: solid #ECECEC 1px; padding-left:20px; }
.close {
    color: #000;
    float: left;
    font-size: 21px;
    font-weight: 700;
    line-height: 1;
    opacity: 1;
    text-shadow: 0 1px 0 #fff;
}
</style>

<script src="/vibhor/pof/TreeMenu.js" type="text/javascript"></script>

<div class="menu" style="float:left;">
<ul id="example2">
<?php
$query = "select * from  category where deleted=0 and parentid= 0 and status=0 ORDER BY sort_order ASC ";
		$result = mysql_query($query);
		while($obj=mysql_fetch_object($result))
		{
		$allData[] = $obj;
		}
		$categoryData = $allData;
	//	var_dump($categoryData);
foreach($categoryData as $category)
{?>
	<li><a href="#"><?php echo $category->title; ?></a>
		<?php
		echo getSubCategory($category->category_id) ;
		echo "<ul>".createPagesMenu($category->category_id)."</ul>";
		?>
	</li>
<?php	
}

function getSubCategory($parentid)
{
$querySubCat = "select * from  category where deleted=0 and parentid= '$parentid' and status=0 ORDER BY sort_order ASC  ";
		$results = mysql_query($querySubCat);
		$subUlOpen = "<ul>";
		$subUlClose = "</ul>";
		$subMenuHtml = "";
		$subMenu = "";
		$SubCategoryData = "";
		while($obj=mysql_fetch_object($results))
		{
		$SubCategoryData[] = $obj;
		}
		if($SubCategoryData !="")
		{
			foreach( $SubCategoryData as $subcategory)
			{
				$subMenuHtml = $subMenuHtml."<li><a href='#'>".$subcategory->title."</a>".getSubCategory($subcategory->category_id)."</li>";
				$subMenuHtml = $subMenuHtml.createPagesMenu($subcategory->category_id);
			}
			
			$subMenu =   $subUlOpen.$subMenuHtml.$subUlClose;
			
		}
		
		
		return $subMenu;
}


function createPagesMenu($categoryid)
{
$query = "select * from  pages where deleted=0 and categoryId= '$categoryid' and status=0 ORDER BY sort_order ASC ";
		$result = mysql_query($query);
		$pagesData = "";
		$pagesHtml = "";
		while($obj=mysql_fetch_object($result))
		{
		$pagesData[] = $obj;
		}
		
		$pagesHtml = "";
		if($pagesData !="")
		{
			foreach($pagesData as $pages)
			{
				$pagesHtml .= "<li><a href='#'>".$pages->pageTitle."</a></li>";
				
			}
		}
		
		return $pagesHtml;
}
		
?>

</div>
<script type="text/javascript">make_tree_menu('example2');</script>

