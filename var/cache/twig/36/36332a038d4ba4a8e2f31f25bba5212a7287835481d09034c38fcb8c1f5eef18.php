<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_a3c1028d366d55b1ce8ba7508e7992b8351760b70324f7e6dcb3a21bf9f00064 extends Twig_Template
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
        $__internal_3d959517cd06e3c62b64e147a4c32171994314c2a1ef33c4831207f3cbb25390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d959517cd06e3c62b64e147a4c32171994314c2a1ef33c4831207f3cbb25390->enter($__internal_3d959517cd06e3c62b64e147a4c32171994314c2a1ef33c4831207f3cbb25390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_3d959517cd06e3c62b64e147a4c32171994314c2a1ef33c4831207f3cbb25390->leave($__internal_3d959517cd06e3c62b64e147a4c32171994314c2a1ef33c4831207f3cbb25390_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c7817c8f63ce632ef0bd13da6d8b6b8f42d43d520ed31bdde4014301d387afa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c7817c8f63ce632ef0bd13da6d8b6b8f42d43d520ed31bdde4014301d387afa->enter($__internal_3c7817c8f63ce632ef0bd13da6d8b6b8f42d43d520ed31bdde4014301d387afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3c7817c8f63ce632ef0bd13da6d8b6b8f42d43d520ed31bdde4014301d387afa->leave($__internal_3c7817c8f63ce632ef0bd13da6d8b6b8f42d43d520ed31bdde4014301d387afa_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e1d1a1a82dee5bc93fc2aa4e60d71a489c90f99f05f07906301f72a737a12d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d1a1a82dee5bc93fc2aa4e60d71a489c90f99f05f07906301f72a737a12d3a->enter($__internal_e1d1a1a82dee5bc93fc2aa4e60d71a489c90f99f05f07906301f72a737a12d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e1d1a1a82dee5bc93fc2aa4e60d71a489c90f99f05f07906301f72a737a12d3a->leave($__internal_e1d1a1a82dee5bc93fc2aa4e60d71a489c90f99f05f07906301f72a737a12d3a_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b702c03ecbfe2728bd1bdabf7a4c3fc9cb0de17bc05ffda2081fdff96169c3b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b702c03ecbfe2728bd1bdabf7a4c3fc9cb0de17bc05ffda2081fdff96169c3b8->enter($__internal_b702c03ecbfe2728bd1bdabf7a4c3fc9cb0de17bc05ffda2081fdff96169c3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b702c03ecbfe2728bd1bdabf7a4c3fc9cb0de17bc05ffda2081fdff96169c3b8->leave($__internal_b702c03ecbfe2728bd1bdabf7a4c3fc9cb0de17bc05ffda2081fdff96169c3b8_prof);

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
