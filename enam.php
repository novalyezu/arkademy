<?php

$query = "SELECT categories.id, categories.name as category_name, 
          GROUP_CONCAT(products.name) as products FROM products JOIN categories 
          ON products.category_id=categories.id GROUP BY categories.name ORDER BY categories.id";

?>