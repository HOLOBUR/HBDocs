<?php
	session_start();
	if (!$_SESSION['login']) {
		$dirname = $_SERVER['REQUEST_URI'];

		if (substr($dirname, -1) != '/') {
			$dirname=dirname($dirname).'/';
		} else {
			$dirname = preg_replace('~/+~', '/', $dirname);
		}

		header("Location: ".$dirname."../login.php?redirect=overrides\partials\logo.php");
	}
?>
{#-
  This file was automatically generated - do not edit
-#}
{% if config.theme.logo %}
  <img src="{{ config.theme.logo | url }}" alt="logo">
{% else %}
  {% set icon = config.theme.icon.logo or "material/library" %}
  {% include ".icons/" ~ icon ~ ".svg" %}
{% endif %}
