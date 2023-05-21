<?php
	$data = '[
		{"id":"1","name":"Choldcroft","email":"dcroft0@hibu.com"},
		{"id":"2","name":"Levi","email":"wlevi1@blogger.com"},
		{"id":"3","name":"Axcell","email":"laxcellc@ebay.co.uk"}
	]';

    # 이후에 작성할 HTML에서 get 방식으로 전송한 데이터를 받을 매개변수
	echo $_GET["callback"]."(".$data.")";
?>