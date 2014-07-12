<?php

	class extension_whitelabel extends Extension {

		public function getSubscribedDelegates() {
			return array(
				array(
					'page'		=> '/backend/',
					'delegate'	=> 'InitaliseAdminPageHead',
					'callback'	=> 'initializeAdmin'
				),
			);
		}

		public function initializeAdmin($context) {
			$page = Administration::instance()->Page;
			$context = $page->getContext();

			$callback = Administration::instance()->getPageCallback();
				$page->addStylesheetToHead(URL . '/workspace/css/whitelabel.main.css', 'screen', 9001);
		}

	}
