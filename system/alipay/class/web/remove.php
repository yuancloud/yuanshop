<?php
defined('SYSTEM_IN') or exit('Access Denied');
		hasrule('alipay','alipay');
			$ret = $this->menuDelete();
		if(is_error($ret)) {
			message($ret['message'], 'refresh');
		} else {
			message('�Ѿ��ɹ�ɾ���˵��������´�����', 'refresh');
		}