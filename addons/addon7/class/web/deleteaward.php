<?php
 $requestcount = mysqld_selectcolumn("select count(id) FROM " . table('addon7_request')." where award_id=:id",array(":id"=>intval($_GP['id'])));
		 if(empty($requestcount))
		 {
		   mysqld_delete('addon7_award',array("id"=>intval($_GP['id'])));
		  }else
		  {
		  	   mysqld_update('addon7_award',array("deleted"=>1),array("id"=>intval($_GP['id'])));
		  }
			        message('删除成功！', 'refresh', 'success');
