<!--IT 23241732 A M K B Adikari-->

<?php session_start(); ?>

<html>
<head>
        <title>Blog Post Submit Page - PetPulse Care Hub </title>
        <link rel="stylesheet" href="css/bloguserwrite.css">
        <script src="script.js"></script>
</head>
<?php include 'header.php' ?>
<body>
    <div class="container">

            <div class="container1">
                <div class="p1">
                    <img src="images/wer.jpg" width="100%">
                </div>
            
                <div class="p2">
            
                    <h2>Here are 3 guidelines for you to post a blog on PetPulse Care Hub's blog<br><br><br></h2>
            
                    <button onclick="TermsConditions()">Read Guidelines</button>
                    
                </div>
            
                <div id="Terms"><br>
                        <h3> <ul><li>You'll need to create a free account on PetPulse Care Hub's platform. This will give you access to your own profile and allow you to submit blog posts for review.</li>
                        <br><br><li>Once registered, you can create a new blog post and craft your content. Ensure your post adheres to PetPulse Care Hub's content guidelines, which might include topic relevance, post length, and formatting.</li>
                        <br><br><li>After finalizing your blog post, submit it for review by PetPulse Care Hub's administrators. An admin will review your post for quality and ensure it aligns with the platform's goals. Once approved, your blog post will be published on the PetPulse Care Hub blog.</li></ul>
                        <br><br></h3>
                </div>       
            </div>



            <div class="container1">

                <div class="p1">
                    <img src="images/bbb.jpeg" width="100%">
					<br>
                    <form method="post" action="insertBlog.php" enctype="multipart/form-data">
					<div class="q2">                        
                                    <h3><label for="Post Content">Post Content :</label></h3>        
                                    <textarea id="PostContent" name="PostContent" value="Post Content" placeholder="Blog Post Content"> 
                                             </textarea>       
                                    <h3><label for="Post Preview">Post Preview :</label></h3>
                                    <input type="text" name="PreviewText"  placeholder="Blog Post Preview ">
                            </div>
                </div>
                <div class="p2">
                    <h1>Blog Post Submit Form</h1>
                    
                        
                            <h3>Blog Post Information : </h3>
                            <div class="q1">
                                <input type="text" name="BlogTitle" placeholder="Blog Post Title "><br><br>
                            </div>

                            <div class="q1">
                                <h3><label>Tags : <br></h3>
                                    <input type="checkbox" id="" name="Tag" value="Pet Health">
                                    <label for="Pet Health">Pet Health</label><br>
                                    <input type="checkbox" id="" name="Tag" value="Training Tips">
                                    <label for="Training Tips">Training Tips</label><br>
                                    <input type="checkbox" id="" name="Tag" value="Pet Behaviour">
                                    <label for="Pet Behaviour">Pet Behaviour</label><br>
                                    <input type="checkbox" id="" name="Tag" value="Pet Care">
                                    <label for="Pet Care">Pet Care</label><br>
                                    <input type="checkbox" id="" name="Tag" value="DIY Pet Enrichment">
                                    <label for="DIY Pet Enrichment">DIY Pet Enrichment</label><br><br>
                                </label>
                            </div>
                            
                            <div class="q1"><br>
                                <h3><label for="Attachments">Attachments :</label></h3>      
                                    <input type="file" id="" name="image1" >
									<input type="file" id="" name="image2" ><br>
                            </div>
                            
                            <input type="Submit" value="Submit" id="Submit">
                        
                    </form>
                </div>
            </div>
        </div>
        <script>
            alert ("Welcome to Blog Post Submit Page  - PetPulse Care Hub ");

                function TermsConditions() {
                    var x = document.getElementById("Terms");
                    if (x.style.display === "none") {
                    x.style.display = "block";
                    } else {
                    x.style.display = "none";
                    }
                }
        </script>
    </body>

    <?php include 'footer.php'?>
</html>