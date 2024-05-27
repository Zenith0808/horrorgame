<?php
// create connection
$conn = mysqli_connect("localhost", "root", "", "Mahasonadb");

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>


<div class="container grid">			
				<div class="" data-aos="fade-up" data-aos-duration="3000">
					<h2 class="txt_newPosts">Posts and announcements</h2>
					<div class="postContent">
						<div class="splide" role="group" aria-label="Splide Basic HTML Example">
							<div class="splide__track Crd">
								  <ul class="splide__list">
                                  <?php
                                        // fetch data from the database
                                        $sql = "SELECT * FROM posts";
                                        $result = mysqli_query($conn, $sql);

                                        // check if any data exists
                                        if (mysqli_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysqli_fetch_assoc($result)) {
                                                // store the data in variables
                                                $id= $row["id"];
                                                $title = $row["title"];
                                                $description = $row["content"];
                                                $created_by = $row["created_by"];
                                                $date = $row["date"]; 
                                                ?>
                                                
                                                <li class="splide__slide crd_li">
                                                <div class="card">
                                                    <div class="profile">
                                                        <div class="profile_img" >
                                                            <i class="ri-user-3-fill"></i>
                                                        </div>
                                                        <div class="post_details"><p class="post_userName">Admin - <?php echo $created_by ?><br><span class="post_publicDate"><?php echo $date ?></span></div>
                                                    </div>
                                                    <div class="card-body">
                                                      <h5 class="card-title"><?php echo $title ?></h5>
                                                      <p class="card-text"><?php echo $description ?></p>
                                                      
                                                      <div class="post_feedBacks">
                                    
                                                        <div class="p_likes like-content">
                                                            <button class="btn-secondary like-review">
                                                                <i class="fa fa-heart" aria-hidden="true"></i> Like
                                                              </button>
                                                        </div>
                                                      </div>
                                                      
                                                    </div>
                                                  </div>
                                              </li>
                                            <?php }
                                            } 
                                        ?>

								  </ul>
							</div>
						  </div>
					</div>
					
				</div>
			</div>
			
		</div>
	</div>

