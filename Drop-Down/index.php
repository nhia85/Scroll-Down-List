<!DOCTYPE html>
<head>
    <meta charset="uft-8">
    <title>PHP examples</title>
    <link rel="stylesheet" href="styles.css" media="screen"/>
    <!-- /* ways to use php*/ -->
    <style>

    </style>
    <script>
        
    </script>
</head>
<body>
    <h3>Test for Drop Down List</h3>
    <select name="mySel" id="mySel" onchange="showValue(this, eleId)">
        <option value="0">Select</option>
    <?php
    //This is connected to a database
	include('connect.php');
    //Using query from phpmyadmin to grab the information
	$result = $db->prepare("SELECT title FROM down");
	$result->execute();
    //It's running in a loop of the selected query
	for($i=0; $row = $result->fetch(); $i++)
	{
		$title = $row['title'];
        //Below is showing the specific title like
        //Java, PHP, JSON, language name in a scroll down list
    ?>
        <option value="<?php echo $title; ?>"><?php echo $title; ?></option>
    <?php
        }
    ?>
    </select>
    <?php
    //Trying to grab the rest of the information from the same table
    //By it's title name which is from above
    //Also, running from a loop too
	$result = $db->prepare("SELECT content, ref FROM down WHERE title = '$title'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
        $content = $row['content'];
        $ref = $row['ref'];
    ?>
		<form method="post" action="">
			<h3>Modifiy Content</h3>
            
            <!--
            Below where the php code is, where I'm supposed to output the content and all from the
            database into there.
            -->
				<textarea readonly type="text" rows="6" cols="60" class="format" name="myInp" id="myInp"><?php echo $content; ?></textarea>
				<textarea name="java" type="text" rows="6" cols="60" class="format"><?php echo $content; ?></textarea>
			<br/>
			<h3>Modifiy Links</h3>
				<textarea readonly type="text" rows="6" cols="60" class="format" name="myInp" id="myInp"><?php echo $ref; ?></textarea>
				<textarea name="java" type="text" rows="6" cols="60" class="format"><?php echo $ref; ?></textarea>
			<br/>
            
            <!--
            Like I said where the drop down list is suppose to show the language and then click on the language.
            Then it shows the different values for each language in content and references.
            -->
				<button name="submit" onclick="if (confirm('Are you sure you want to continue?')) commentDelete(1); return false" >Submit</button>
				<br/>
				<br/>
		</form>
    <?php
    }
    ?>
	</div>
		<?php
        //Ignore this part.
        //This just update the stuff on top so do mind this
			if(isset($_POST['submit']))
			{
				try
				{
					include('../db/connect.php');
					$work = $db->prepare("UPDATE tutorials SET image = :Image WHERE tutorials.tutorial_id = ".$tid.";");
					$work->execute(array(":Image" => $_POST['name']));
					echo $work;
				}
				catch(PDOException $e)
				{
					echo 'ERROR: '. $e -> getMessage();
				}
			}
		?>
</body>
</html>