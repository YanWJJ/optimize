<?php

$dbaddress = "127.0.0.1";
$dbuser = "root";
$dbpass = "111";
$dbname = "ceshi1";
$page_id1 = $_POST['page'];
$conn = mysqli_connect($dbaddress, $dbuser, $dbpass, $dbname);


// $query_select_id = "SELECT id FROM pictures ORDER BY id DESC LIMIT 1";
// $result_select_id = mysqli_query($conn, $query_select_id);
// $row_id = mysqli_fetch_array($result_select_id);
// $id = $row_id['id'];
// echo 'id ';
// echo $id;
// echo '<br />';

$query_select_address = "SELECT address FROM pictures WHERE name=$page_id1";
$result_select_address = mysqli_query($conn, $query_select_address);
// echo '<br />';
// echo "address";
// echo '<br />';
$biaoji = 0;
echo "{";
while ($row_address = mysqli_fetch_array($result_select_address)) {
	echo " \"$biaoji\" : \"{$row_address['address']}\" ";
    if($biaoji<9){
        echo ",";
    }
    $biaoji++;

}
echo "}";




// $page = 0;
// for ($pageno = 1 ; $pageno < 1848; $pageno ++) {
//     $content = file_get_contents('http://www.haha.mx/topic/1/new/'.$pageno);//指定网页链接
//     preg_match_all('/class=\"joke-main-img\" src=\"(.*?)\"/',$content,$matches);
//     foreach ($matches[1] as $url) {
//         $url = str_replace('small','big',$url);
//         $id++;
//         if(($id%10) == 0) $page++;
//         $query_inster = "INSERT INTO pictures (id, name, address) VALUES ($id, $page, '$url')";
//         $result_inster = mysqli_query($conn, $query_inster) or die('error');
//         echo '<br />';
//         $img = file_get_contents($url);
//         file_put_contents('./save/'.basename($url),$img);
//     }
// }

?>