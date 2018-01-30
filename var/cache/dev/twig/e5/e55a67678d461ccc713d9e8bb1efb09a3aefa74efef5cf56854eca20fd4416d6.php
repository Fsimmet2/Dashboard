<?php

/* base.html.twig */
class __TwigTemplate_4e99732ea5d056d8400b92ba55322c7e4c778627ace8a77f6e0c67b4a8a53f36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'sidebar' => array($this, 'block_sidebar'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_156ff0fb3423a20520a5de3b03bd76e122898aea8046d8838734c91f348b4211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156ff0fb3423a20520a5de3b03bd76e122898aea8046d8838734c91f348b4211->enter($__internal_156ff0fb3423a20520a5de3b03bd76e122898aea8046d8838734c91f348b4211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->loadTemplate("head.html.twig", "base.html.twig", 6)->display($context);
        // line 7
        echo "      ";
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 8
        echo "
    </head>
    <body>
        ";
        // line 11
        $this->loadTemplate("sidebar.html.twig", "base.html.twig", 11)->display($context);
        // line 12
        echo "        ";
        $this->displayBlock('sidebar', $context, $blocks);
        // line 13
        echo "        ";
        $this->loadTemplate("nav.html.twig", "base.html.twig", 13)->display($context);
        // line 14
        echo "        ";
        $this->displayBlock('nav', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->loadTemplate("footer.html.twig", "base.html.twig", 16)->display($context);
        // line 17
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 18
        echo "        ";
        $this->loadTemplate("script.html.twig", "base.html.twig", 18)->display($context);
        // line 19
        echo "        ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_156ff0fb3423a20520a5de3b03bd76e122898aea8046d8838734c91f348b4211->leave($__internal_156ff0fb3423a20520a5de3b03bd76e122898aea8046d8838734c91f348b4211_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d23b208dbf5dc9a9646545c5ba9b419e8f05db98740ba5b6c183e9f349b690d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d23b208dbf5dc9a9646545c5ba9b419e8f05db98740ba5b6c183e9f349b690d->enter($__internal_2d23b208dbf5dc9a9646545c5ba9b419e8f05db98740ba5b6c183e9f349b690d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2d23b208dbf5dc9a9646545c5ba9b419e8f05db98740ba5b6c183e9f349b690d->leave($__internal_2d23b208dbf5dc9a9646545c5ba9b419e8f05db98740ba5b6c183e9f349b690d_prof);

    }

    // line 7
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_1f88007ec82907c32f56746f91bf540ca414a00aca1dbaef494508cbcef2a92a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f88007ec82907c32f56746f91bf540ca414a00aca1dbaef494508cbcef2a92a->enter($__internal_1f88007ec82907c32f56746f91bf540ca414a00aca1dbaef494508cbcef2a92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_1f88007ec82907c32f56746f91bf540ca414a00aca1dbaef494508cbcef2a92a->leave($__internal_1f88007ec82907c32f56746f91bf540ca414a00aca1dbaef494508cbcef2a92a_prof);

    }

    // line 12
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_dd08e4a15dccf8674029735cc6e61e853f16b639a723ade2d9fb5004dac1471e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd08e4a15dccf8674029735cc6e61e853f16b639a723ade2d9fb5004dac1471e->enter($__internal_dd08e4a15dccf8674029735cc6e61e853f16b639a723ade2d9fb5004dac1471e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_dd08e4a15dccf8674029735cc6e61e853f16b639a723ade2d9fb5004dac1471e->leave($__internal_dd08e4a15dccf8674029735cc6e61e853f16b639a723ade2d9fb5004dac1471e_prof);

    }

    // line 14
    public function block_nav($context, array $blocks = array())
    {
        $__internal_f084596ea112660042b084e334018b5ce23b5bbd6f2c70646ec7d7123b55f8fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f084596ea112660042b084e334018b5ce23b5bbd6f2c70646ec7d7123b55f8fc->enter($__internal_f084596ea112660042b084e334018b5ce23b5bbd6f2c70646ec7d7123b55f8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_f084596ea112660042b084e334018b5ce23b5bbd6f2c70646ec7d7123b55f8fc->leave($__internal_f084596ea112660042b084e334018b5ce23b5bbd6f2c70646ec7d7123b55f8fc_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e205cfd4bed0a127bccd027e273d5f0d9a6feaf4902a738667268dd1fb49796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e205cfd4bed0a127bccd027e273d5f0d9a6feaf4902a738667268dd1fb49796->enter($__internal_3e205cfd4bed0a127bccd027e273d5f0d9a6feaf4902a738667268dd1fb49796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3e205cfd4bed0a127bccd027e273d5f0d9a6feaf4902a738667268dd1fb49796->leave($__internal_3e205cfd4bed0a127bccd027e273d5f0d9a6feaf4902a738667268dd1fb49796_prof);

    }

    // line 17
    public function block_footer($context, array $blocks = array())
    {
        $__internal_18238b0a1055a7860f9edbbd1bc72147efb230ff2aae17237d1e7d8bb3b76162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18238b0a1055a7860f9edbbd1bc72147efb230ff2aae17237d1e7d8bb3b76162->enter($__internal_18238b0a1055a7860f9edbbd1bc72147efb230ff2aae17237d1e7d8bb3b76162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_18238b0a1055a7860f9edbbd1bc72147efb230ff2aae17237d1e7d8bb3b76162->leave($__internal_18238b0a1055a7860f9edbbd1bc72147efb230ff2aae17237d1e7d8bb3b76162_prof);

    }

    // line 19
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_9f89181f7eda3c3c832dc1981ba49acf0defee3494cd4bf88b8c31448f2cc1c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f89181f7eda3c3c832dc1981ba49acf0defee3494cd4bf88b8c31448f2cc1c7->enter($__internal_9f89181f7eda3c3c832dc1981ba49acf0defee3494cd4bf88b8c31448f2cc1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_9f89181f7eda3c3c832dc1981ba49acf0defee3494cd4bf88b8c31448f2cc1c7->leave($__internal_9f89181f7eda3c3c832dc1981ba49acf0defee3494cd4bf88b8c31448f2cc1c7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 19,  140 => 17,  129 => 15,  118 => 14,  107 => 12,  96 => 7,  84 => 5,  75 => 20,  72 => 19,  69 => 18,  66 => 17,  63 => 16,  60 => 15,  57 => 14,  54 => 13,  51 => 12,  49 => 11,  44 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% include 'head.html.twig' %}
      {% block stylesheet %}{% endblock%}

    </head>
    <body>
        {% include 'sidebar.html.twig' %}
        {% block sidebar %}{% endblock %}
        {% include 'nav.html.twig' %}
        {% block nav %}{% endblock %}
        {% block body %}{% endblock %}
        {% include 'footer.html.twig' %}
        {% block footer %}{% endblock %}
        {% include 'script.html.twig' %}
        {% block javascript %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/floriane/Dashboard/templates/base.html.twig");
    }
}
