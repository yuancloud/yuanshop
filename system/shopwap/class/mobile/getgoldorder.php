<?php
        $orderid = intval($_GP['id']);
        $orders = mysqld_select("SELECT * FROM " . table('gold_order') . " WHERE id = :id", array(':id' => $orderid));
        	
        	
	echo json_encode($orders);