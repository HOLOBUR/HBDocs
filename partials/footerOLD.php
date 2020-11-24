<?php
	session_start();
	if (!$_SESSION['login']) {
		$dirname = $_SERVER['REQUEST_URI'];

		if (substr($dirname, -1) != '/') {
			$dirname=dirname($dirname).'/';
		} else {
			$dirname = preg_replace('~/+~', '/', $dirname);
		}

		header("Location: ".$dirname."../login.php?redirect=overrides\partials\footerOLD.php");
	}
?>
{#-
  This file was automatically generated - do not edit
-#}
{% import "partials/language.php" as lang with context %}
<footer class="md-footer">
  {% if page.previous_page or page.next_page %}
    <div class="md-footer-nav">
      <nav class="md-footer-nav__inner md-grid" aria-label="{{ lang.t('footer.title') }}">
        {% if page.previous_page %}
          <a href="{{ page.previous_page.url | url }}" class="md-footer-nav__link md-footer-nav__link--prev" rel="prev">
            <div class="md-footer-nav__button md-icon">
              {% include ".icons/material/arrow-left.svg" %}
            </div>
            <div class="md-footer-nav__title">
              <div class="md-ellipsis">
                <span class="md-footer-nav__direction">
                  {{ lang.t("footer.previous") }}
                </span>
                {{ page.previous_page.title }}
              </div>
            </div>
          </a>
        {% endif %}
        {% if page.next_page %}
          <a href="{{ page.next_page.url | url }}" class="md-footer-nav__link md-footer-nav__link--next" rel="next">
            <div class="md-footer-nav__title">
              <div class="md-ellipsis">
                <span class="md-footer-nav__direction">
                  {{ lang.t("footer.next") }}
                </span>
                {{ page.next_page.title }}
              </div>
            </div>
            <div class="md-footer-nav__button md-icon">
              {% include ".icons/material/arrow-right.svg" %}
            </div>
          </a>
        {% endif %}
      </nav>
    </div>
  {% endif %}
  <div class="md-footer-meta md-typeset">
    <div class="md-footer-meta__inner md-grid">
      <div class="md-footer-copyright">
        {% if config.copyright %}
          <div class="md-footer-copyright__highlight">
            {{ config.copyright }}
          </div>
        {% endif %}

        <div class="md-footer-social">
          {% include "partials/social.php" %}  
        </div>

        <div class="poweredby">
          <div class="column">
            <a href="https://www.holobur.com/" target="_blank">
              <img src="../img/PoweredByHB.png"
                 width="20%"
              ></img>
              </a>
          </div>
        </div>
       
      </div>
    </div>
  </div>

</footer>


