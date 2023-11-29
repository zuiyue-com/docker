<?php

$query = "?".http_build_query(array_merge($_GET,$_POST));

$url = "https://".$_SERVER['HTTP_HOST'];

$url = $query == "?" ? $url : $url.$query;

header("HTTP/1.1 301 Moved Permanently");
header("location:".$url);
echo '
<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
<title>301 Moved Permanently</title>
</head><body>
<h1>Moved Permanently</h1>
<p>The document has moved <a href="'.$url.'">here</a>.</p>
</body></html>';
exit;
?>
