<div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>        
    <nav class="yamm megamenu-horizontal" role="navigation">
  
        <ul class="nav">
            <li class="dropdown menu-item">
              <?php $sql=mysqli_query($con,"select id,categoryName  from category");
while($row=mysqli_fetch_array($sql))
{
    ?>
                <a href="category.php?cid=<?php echo $row['id'];?>" class="dropdown-toggle mr-2"><i class="fa fa-pagelines" aria-hidden="true" style="    margin-inline: 12px;"></i>
                <?php echo $row['categoryName'];?></a>
                <?php }?>
                        
</li>
</ul>
    </nav>
</div>