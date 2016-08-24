<?php
// Copyright (c) 2016 nogginfuel, http://nogginfuel.com
// This file may be used and distributed under the terms of the public license.

// Maintenance status plugin
class YellowMaintenance
{
	const VERSION = "0.6.3";
	var $yellow;			//access to API
	
	// Handle initialisation
	function onLoad($yellow)
	{
		$this->yellow = $yellow;
		$this->yellow->config->setDefault("maintenanceStatusCode", "503");
	}
	
	// Handle page parsing
	function onParsePage()
	{
		$maintenance = $this->yellow->config->get("status")=="maintenance" || $this->yellow->page->get("status")=="maintenance";
		if($maintenance && $this->yellow->getRequestHandler()=="core")
		{
			$this->yellow->page->error($this->yellow->config->get("maintenanceStatusCode"));
		}
	}
}

$yellow->plugins->register("maintenance", "YellowMaintenance", YellowMaintenance::VERSION);
?>