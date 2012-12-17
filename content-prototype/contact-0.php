<!doctype html>

<html>
<head>  
  <title>Contact Sparkbox</title>
  <meta name="description" content="From deep in the American heartland, our team of craftsmen answers the call for a better web. Driven by a deep belief in the freedom of a web liberated from device constraints, Sparkbox labors with conviction toward a higher standard as we write, educate, and build.">
  <link rel="stylesheet" href="style.css" media="screen">
</head>

<body>
  <header>
  <!--Main navigation would be included here.-->
<?php include("navigation.php") ?>
  </header>

<!-- form zero collects the person's name (to use to customize page language), and gives them options about why they are contacting us... selecting an option does not reload the page, but give them another short form relating to their reason for contact.-->

<section>
<h1>Contact Sparkbox</h1>
<p>As far as we're concerned, our relationship starts now. We want to serve you well, and filling out this quick form helps to do that. Let's go!</p> 

<label for="">Your First Name</label><br />
<input type="text" name="First Name" value="" /><br />

<label for="">Last Name</label><br />
<input type="text" name="Last Name" value="" />

<ol>
  <p>I'm interested in...</p>
  <li><a href="../contact-1.php">working with Sparkbox on a project.</a></li>
  <li><a href="../contact-2.php">requesting Sparkbox to consult.</a></li> 
  <li><a href="../contact-2.php">inviting Sparkbox to speak.</a></li> 
  <li><a href="#">working for Sparkbox.</a></li>
  <li><a href="#">something different, but equally amazing.</a></li>
</ol>
</section>

<!--Footer featured some of our past clients' logos, but we only show logos for clients for whom we have work in our work section.	-->

<?php include("footer.php") ?>

</body>
</html>