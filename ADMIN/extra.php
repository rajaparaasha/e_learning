											<?php
												include('conn.php');
												$result = mysqli_query($conn, "SELECT * FROM tbl_blog_detail");
												while ($row = mysqli_fetch_array($result)) {
													echo "<tr>";
													echo "<td>".$row['blog_id']."</td>";
													echo "<td>".$row['blog_title'];
													// echo "<td>".$row['blog_img'];
													echo '<td><img src="blog_img/'.$row['img'].'" width="100px" height="110px"></td>';
													echo "<td>".$row['blog_description'];
													echo '<td>
															<a href="blog_delete.php?id='.$row['blog_id'].'&file='.$row['photo'].'" class="close" title="Delete">&#x2715</a>
															<a href="blog_update.php?id='.$row['roll_no'].'" class="edit" title="Edit"> &#x270E</a>
														</td>';
													echo '</tr>';
												}
												?>
