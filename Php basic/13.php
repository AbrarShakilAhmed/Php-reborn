<?php
$user = "abrar shakil";
$demo = <<<Html

<div>
<h1 style='color:skyblue;'>
This is the heading from heredoc and user is $user
</h1>
</div>

Html;

echo $demo;