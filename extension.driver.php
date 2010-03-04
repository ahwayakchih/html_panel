<?php

	Class extension_html_panel extends Extension{
	
		public function about(){
			return array(
						'name' => 'Field: HTML Panel',
						'version' => '0.1',
						'release-date' => '2010-03-04',
						'author' => array(
							'name' => 'Nick Dunn',
							'website' => 'http://nick-dunn.co.uk'
						)
					);
		}
		
		public function install() {
			return $this->_Parent->Database->query("
				CREATE TABLE `tbl_fields_html_panel` (
				`id` int(11) unsigned NOT NULL auto_increment,
				`field_id` int(11) unsigned NOT NULL,
				`url_expression` varchar(255) default NULL,
				PRIMARY KEY (`id`),
				UNIQUE KEY `field_id` (`field_id`)
				) TYPE=MyISAM
			");
		}
		
		public function uninstall(){
			$this->_Parent->Database->query("DROP TABLE `tbl_fields_html_panel`");
		}
	
	}