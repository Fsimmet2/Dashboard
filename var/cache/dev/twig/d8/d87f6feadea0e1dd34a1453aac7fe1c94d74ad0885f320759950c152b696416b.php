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
        $__internal_0156fb17177a99d366878537a239973ca95f281b33fffcf6175d2ed0a04a928d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0156fb17177a99d366878537a239973ca95f281b33fffcf6175d2ed0a04a928d->enter($__internal_0156fb17177a99d366878537a239973ca95f281b33fffcf6175d2ed0a04a928d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_0156fb17177a99d366878537a239973ca95f281b33fffcf6175d2ed0a04a928d->leave($__internal_0156fb17177a99d366878537a239973ca95f281b33fffcf6175d2ed0a04a928d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_92da12d1e7fbf8aa999afdc071ce845b27d97e8a1484df00ff57dba1ab69095b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92da12d1e7fbf8aa999afdc071ce845b27d97e8a1484df00ff57dba1ab69095b->enter($__internal_92da12d1e7fbf8aa999afdc071ce845b27d97e8a1484df00ff57dba1ab69095b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_92da12d1e7fbf8aa999afdc071ce845b27d97e8a1484df00ff57dba1ab69095b->leave($__internal_92da12d1e7fbf8aa999afdc071ce845b27d97e8a1484df00ff57dba1ab69095b_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_0cf5a0f24bdbaea308f066639a5ee437a26e86fa049c5df7660fddcb2477b1e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf5a0f24bdbaea308f066639a5ee437a26e86fa049c5df7660fddcb2477b1e1->enter($__internal_0cf5a0f24bdbaea308f066639a5ee437a26e86fa049c5df7660fddcb2477b1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_0cf5a0f24bdbaea308f066639a5ee437a26e86fa049c5df7660fddcb2477b1e1->leave($__internal_0cf5a0f24bdbaea308f066639a5ee437a26e86fa049c5df7660fddcb2477b1e1_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1c2fd64b4e9bcdd27a6af6a84dd0f00f5276aa51836b829feab5dd6fba51f20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c2fd64b4e9bcdd27a6af6a84dd0f00f5276aa51836b829feab5dd6fba51f20->enter($__internal_f1c2fd64b4e9bcdd27a6af6a84dd0f00f5276aa51836b829feab5dd6fba51f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f1c2fd64b4e9bcdd27a6af6a84dd0f00f5276aa51836b829feab5dd6fba51f20->leave($__internal_f1c2fd64b4e9bcdd27a6af6a84dd0f00f5276aa51836b829feab5dd6fba51f20_prof);

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
