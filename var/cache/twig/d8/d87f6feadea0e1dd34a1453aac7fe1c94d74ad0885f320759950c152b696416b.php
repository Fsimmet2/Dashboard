<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_694c543077d352e7764daa0397e6287ef823c5d87febf53a8f7d0f4c4c7dc7e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1ea4b329c25549540948e79affa45ea4f53d40b23c9839a5eee9ba3a176b2ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1ea4b329c25549540948e79affa45ea4f53d40b23c9839a5eee9ba3a176b2ad->enter($__internal_a1ea4b329c25549540948e79affa45ea4f53d40b23c9839a5eee9ba3a176b2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_a1ea4b329c25549540948e79affa45ea4f53d40b23c9839a5eee9ba3a176b2ad->leave($__internal_a1ea4b329c25549540948e79affa45ea4f53d40b23c9839a5eee9ba3a176b2ad_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0c52846ab138671d47881656fc3cd9febb83f5415583408554460afba28cc7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c52846ab138671d47881656fc3cd9febb83f5415583408554460afba28cc7d->enter($__internal_f0c52846ab138671d47881656fc3cd9febb83f5415583408554460afba28cc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f0c52846ab138671d47881656fc3cd9febb83f5415583408554460afba28cc7d->leave($__internal_f0c52846ab138671d47881656fc3cd9febb83f5415583408554460afba28cc7d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7d9b3e188e9fc446d2fecd264badc59f38146633dad91cec2f7ddddfdafecbe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9b3e188e9fc446d2fecd264badc59f38146633dad91cec2f7ddddfdafecbe9->enter($__internal_7d9b3e188e9fc446d2fecd264badc59f38146633dad91cec2f7ddddfdafecbe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_7d9b3e188e9fc446d2fecd264badc59f38146633dad91cec2f7ddddfdafecbe9->leave($__internal_7d9b3e188e9fc446d2fecd264badc59f38146633dad91cec2f7ddddfdafecbe9_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_970dd8913b10dfc40896b4f3f1a036b4cae94ee03f67eafc38abf239e76bd5a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_970dd8913b10dfc40896b4f3f1a036b4cae94ee03f67eafc38abf239e76bd5a7->enter($__internal_970dd8913b10dfc40896b4f3f1a036b4cae94ee03f67eafc38abf239e76bd5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_970dd8913b10dfc40896b4f3f1a036b4cae94ee03f67eafc38abf239e76bd5a7->leave($__internal_970dd8913b10dfc40896b4f3f1a036b4cae94ee03f67eafc38abf239e76bd5a7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 33,  108 => 10,  97 => 7,  85 => 34,  83 => 33,  73 => 26,  63 => 19,  56 => 15,  50 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/floriane/Dashboard/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
