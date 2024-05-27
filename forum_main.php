<div class="comment_section" id="Comment_section">
		<div class="container grid" style="background-color: rgb(53, 54, 56); width: 85%; color: white; text-align: center; padding: 2rem; border-radius: 10px; margin-top: 10px;">
			<div class="row">
				<div class="forum_commentl ">
					<form method="post" action="forumsubmit.php">
						<h3>Comment to forum</h3>
						<center>
                        <table>
                            <tr>
                                <td>Username: </td>
                                <td><input type="text" placeholder="Enter nickname here" name="user" style="color:black; width:50rem;"/></td>
                            </tr>
                            <tr>
                                <td>Comment: </td>
                                <td><textarea id="comment" name="comment" style="color:black; width:50rem;" placeholder="Your comments appear in the global Mahasona Forum. Share your ideas here."></textarea></td>
                            </tr>
                        </table></center>
						
					  
						<input type="submit" class="button-7" value="Submit" style="color: black; background-color:#2596be; border: 0px; border-radius:10px; padding:10px;">
					  </form>
				</div>
				
			</div>
		</div>
		<div class="container grid" style="background-color: aliceblue;"id="scrolling">
			
			<div class="row">
				<div class="col" id="">
					<div class="media g-mb-30 media-comment">
					<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mahasonadb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve data from the forum table
$sql = "SELECT userName, date, comment, Likes, dislikes FROM forum";

// Execute the query
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    // Loop through each row and generate the HTML code
    while($row = $result->fetch_assoc()) {
        // Get the difference in days between the comment date and the current date
        $comment_date = new DateTime($row["date"]);
        $current_date = new DateTime();
        $interval = $comment_date->diff($current_date);
        $days_ago = $interval->format('%a');
		
		$likes = $row['Likes'];
    	$dislikes = $row['dislikes'];

        // Generate the HTML code using the provided format and the data from the database
        echo '<div class="media g-mb-30 media-comment">';
        echo '<img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15 user_image" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Image Description">';
        echo '<div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">';
        echo '<div class="g-mb-15">';
        echo '<h5 class="h5 g-color-gray-dark-v1 mb-0">' . $row["userName"] . '</h5>';
        echo '<span class="g-color-gray-dark-v4 g-font-size-12">' . $days_ago . ' days ago</span>';
        echo '</div>';
        echo '<p>' . $row["comment"] . '</p>';
        echo '<ul class="list-inline d-sm-flex my-0">';
        echo '<li class="list-inline-item g-mr-20">';
        echo '<a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">';
        echo '<i class="fa fa-thumbs-up g-pos-rel g-top-1 g-mr-3"></i>';
        echo $likes;
        echo '</a>';
        echo '</li>';
        echo '<li class="list-inline-item g-mr-20">';
        echo '<a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">';
        echo '<i class="fa fa-thumbs-down g-pos-rel g-top-1 g-mr-3"></i>';
        echo $dislikes;
        echo '</a>';
        echo '</li>';
        echo '<li class="list-inline-item ml-auto">';
        echo '<a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">';
        echo '<i class="fa fa-reply g-pos-rel g-top-1 g-mr-3"></i>';
        echo 'Reply';
        echo '</a>';
        echo '</li>';
        echo '</ul>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "No comments found.";
}

// Close the database connection
$conn->close();
?>


        


							
					</div>
				</div>
			</div>
			
			
		</div>
	</div>