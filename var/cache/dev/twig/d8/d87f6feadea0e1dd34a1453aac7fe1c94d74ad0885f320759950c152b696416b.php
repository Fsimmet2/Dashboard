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
        $__internal_1419d25015e1dfb108a86c082e08c04323df68681143ad9e9f6e7ab3876889fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1419d25015e1dfb108a86c082e08c04323df68681143ad9e9f6e7ab3876889fb->enter($__internal_1419d25015e1dfb108a86c082e08c04323df68681143ad9e9f6e7ab3876889fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_1419d25015e1dfb108a86c082e08c04323df68681143ad9e9f6e7ab3876889fb->leave($__internal_1419d25015e1dfb108a86c082e08c04323df68681143ad9e9f6e7ab3876889fb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f55aa6375b387a5d4b77c6c840941be4afc52e40f948af105bdd63e4917ed0a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f55aa6375b387a5d4b77c6c840941be4afc52e40f948af105bdd63e4917ed0a1->enter($__internal_f55aa6375b387a5d4b77c6c840941be4afc52e40f948af105bdd63e4917ed0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f55aa6375b387a5d4b77c6c840941be4afc52e40f948af105bdd63e4917ed0a1->leave($__internal_f55aa6375b387a5d4b77c6c840941be4afc52e40f948af105bdd63e4917ed0a1_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_66bcdf84c35b74073f2b8ad585999bfe2356bd166fb16e72bba0827ccf8c27e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66bcdf84c35b74073f2b8ad585999bfe2356bd166fb16e72bba0827ccf8c27e9->enter($__internal_66bcdf84c35b74073f2b8ad585999bfe2356bd166fb16e72bba0827ccf8c27e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_66bcdf84c35b74073f2b8ad585999bfe2356bd166fb16e72bba0827ccf8c27e9->leave($__internal_66bcdf84c35b74073f2b8ad585999bfe2356bd166fb16e72bba0827ccf8c27e9_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ece937ff7eefa17b2786fdc00ef3d37f400b815fec84c19c7e3744c28e91306a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ece937ff7eefa17b2786fdc00ef3d37f400b815fec84c19c7e3744c28e91306a->enter($__internal_ece937ff7eefa17b2786fdc00ef3d37f400b815fec84c19c7e3744c28e91306a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ece937ff7eefa17b2786fdc00ef3d37f400b815fec84c19c7e3744c28e91306a->leave($__internal_ece937ff7eefa17b2786fdc00ef3d37f400b815fec84c19c7e3744c28e91306a_prof);

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
", "@Twig/layout.html.twig", "/home/floriane/dashboard/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
