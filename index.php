<?php
require('./scripts/phpquery/phpQuery/phpQuery.php');
$dom = phpQuery::newDocumentFileHTML('index.html');
print $dom->htmlOuter();

pq('h1')->bind('click', function(){
    echo ":v";
});

?>