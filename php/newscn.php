<?php 
$query = mysqli_query($dbconnect,"SELECT * FROM recentnews");
while ($row = mysqli_fetch_array($query)) {
	//Variables
	$image = $row['image'];
	$title = $row['title'];
	$content = $row['content'];
	$month = $row['month'];
	$day = $row['day'];
	$year = $row['year'];

	//Ejecucion

	echo "  <div class='post-item'>
                                    <div class='row'>
                                        <div class='col-md-4'>
                                            <div class='img-hover'>
                                               <img src='img/blog/1.jpg' alt='' class='img-responsive'>
                                               <div class='overlay'><a href='single-news.html'>+</a></div>
                                            </div>
                                        </div>
                                        <div class='col-md-8'>
                                            <h4><a href='single-news.html'>$title</a></h4>
                                            <p class='data-info'>$month $day, $year  / <i class='fa fa-comments'></i><a href='#'>0</a></p>
                                            <p>$content </br><a href='single-news.html'>Read More [+]</a></p>                                            
                                        </div>
                                   </div>
                                </div>

        ";
	
};

 ?>