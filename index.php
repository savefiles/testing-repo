<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Hello World</title>
<script>
    let header = "<?php 
        $headers = apache_request_headers();
        foreach($headers as $header => $value) {
            echo "$header: $value\n";
        }
    ?>";

    document.querySelector("#headers").innerHTML = header; 


</script>
</head>
<body>
	<p id="headers">Ur info is mine :)</p>
</body>
</html>