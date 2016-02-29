<?php
// Copyright (c) 2016 nogginfuel, http://nogginfuel.com
// This file may be used and distributed under the terms of the public license.

// Maintenance status plugin
class YellowMaintenance
{
	const Version = "0.6.2";
	var $yellow;			//access to API
	
	// Handle initialisation
	function onLoad($yellow)
	{
		$this->yellow = $yellow;
		$this->yellow->config->setDefault("maintenanceStatusCode", "500");
	}
	
	// Handle page meta data parsing
	function onParseMeta($page)
	{
		if($page->get("status") == "maintenance") $page->visible = false;
	}
	
	// Handle page parsing
	function onParsePage()
	{
		if($this->yellow->page->get("status")=="maintenance" && $this->yellow->getRequestHandler()=="core")
		{
			$this->yellow->page->error($this->yellow->config->get("maintenanceStatusCode"), "This page is temporarily down for maintenance. Stay tuned for something great!");
		}
	}
}

$yellow->plugins->register("maintenance", "YellowMaintenance", YellowMaintenance::Version);
?>