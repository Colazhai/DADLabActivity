<?php
if(isset($_GET['id'])&&$_GET['id']!=null){
    // echo urlencode($_GET['q']);
    $json_str = file_get_contents('https://kitsu.io/api/edge/anime?filter[text]='.urlencode($_GET['id']));
    $var = json_decode($json_str);
    // echo $var->items[0]->volumeInfo->title;
    // echo $var->error->errors[0]->message;
}
?>
<html>
    <head>
        <title>Kitsu Api</title>
</head>
<body>
    <h3>Name of the Anime</h3>
    <form method="get">
        <input type="text" name="id" id="kitsuapi" autocomplete="off"/>
        <input type="submit" value="Search"/>
    </form><br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Type</th>
            <th>Image</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Rating</th>
        </tr>
    <?php
	if(isset($_GET['id'])&&$_GET['id']!=null){
     foreach($var->data as $v){
         echo "<tr>";

        echo "<td>".$v->id."</td>";
		echo "<td>".$v->attributes->slug."</td>";
		echo "<td>".$v->attributes->subtype."</td>";
		echo "<td>"."<img src='".$v->attributes->posterImage->tiny."'>"."</td>";
		echo "<td>".$v->attributes->startDate."</td>";
		echo "<td>".$v->attributes->endDate."</td>";
		echo "<td>".$v->attributes->averageRating."</td>";
        echo "</tr>";
     }
	}
    ?>
    </table>
</body>
</html>