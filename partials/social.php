<?php
	session_start();
	if (!$_SESSION['login']) {
		$dirname = $_SERVER['REQUEST_URI'];

		if (substr($dirname, -1) != '/') {
			$dirname=dirname($dirname).'/';
		} else {
			$dirname = preg_replace('~/+~', '/', $dirname);
		}

		header("Location: ".$dirname."../login.php?redirect=overrides\partials\social.php");
	}
?>
{#-
  This file was automatically generated - do not edit
-#}
{% if config.extra.social %}
  <div class="md-footer-social">
    {% for social in config.extra.social %}
      {% set title = social.name %}
      {% if not title and "//" in social.link %}
        {% set _,url = social.link.split("//") %}
        {% set title = url.split("/")[0] %}
      {% endif %}
      <a href="{{ social.link }}" target="_blank" rel="noopener" title="{{ title | e }}" class="md-footer-social__link">
        {% include ".icons/" ~ social.icon ~ ".svg" %}
      </a>
    {% endfor %}
  </div>
{% endif %}
