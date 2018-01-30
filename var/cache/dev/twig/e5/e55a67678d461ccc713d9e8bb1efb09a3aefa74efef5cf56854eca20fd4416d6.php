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
        $__internal_99e57eea16e642b082569841784600ee0d1d92513d3fc90facfe6f9e1ff2e6e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99e57eea16e642b082569841784600ee0d1d92513d3fc90facfe6f9e1ff2e6e6->enter($__internal_99e57eea16e642b082569841784600ee0d1d92513d3fc90facfe6f9e1ff2e6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_99e57eea16e642b082569841784600ee0d1d92513d3fc90facfe6f9e1ff2e6e6->leave($__internal_99e57eea16e642b082569841784600ee0d1d92513d3fc90facfe6f9e1ff2e6e6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_89ee6303d888230eacd3161f41b3759397c93683263e623d59082c99fafaa814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ee6303d888230eacd3161f41b3759397c93683263e623d59082c99fafaa814->enter($__internal_89ee6303d888230eacd3161f41b3759397c93683263e623d59082c99fafaa814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_89ee6303d888230eacd3161f41b3759397c93683263e623d59082c99fafaa814->leave($__internal_89ee6303d888230eacd3161f41b3759397c93683263e623d59082c99fafaa814_prof);

    }

    // line 7
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_4b617c534948eb1c42120a6ed95b363928271bf5c428ea386e8916a89056c309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b617c534948eb1c42120a6ed95b363928271bf5c428ea386e8916a89056c309->enter($__internal_4b617c534948eb1c42120a6ed95b363928271bf5c428ea386e8916a89056c309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_4b617c534948eb1c42120a6ed95b363928271bf5c428ea386e8916a89056c309->leave($__internal_4b617c534948eb1c42120a6ed95b363928271bf5c428ea386e8916a89056c309_prof);

    }

    // line 12
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a96a7b4decb6a23658808bce7429efe7541cbd2e67e87bc495281c517e7a296d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a96a7b4decb6a23658808bce7429efe7541cbd2e67e87bc495281c517e7a296d->enter($__internal_a96a7b4decb6a23658808bce7429efe7541cbd2e67e87bc495281c517e7a296d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_a96a7b4decb6a23658808bce7429efe7541cbd2e67e87bc495281c517e7a296d->leave($__internal_a96a7b4decb6a23658808bce7429efe7541cbd2e67e87bc495281c517e7a296d_prof);

    }

    // line 14
    public function block_nav($context, array $blocks = array())
    {
        $__internal_ad594c285897d1dab44c923520428cc39c4d9175feb965036694b302fdbf16da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad594c285897d1dab44c923520428cc39c4d9175feb965036694b302fdbf16da->enter($__internal_ad594c285897d1dab44c923520428cc39c4d9175feb965036694b302fdbf16da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_ad594c285897d1dab44c923520428cc39c4d9175feb965036694b302fdbf16da->leave($__internal_ad594c285897d1dab44c923520428cc39c4d9175feb965036694b302fdbf16da_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fff744c8248e0a1951c0d41755ce7416dee99b72f19ba9bd47f1ac9a562a53a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fff744c8248e0a1951c0d41755ce7416dee99b72f19ba9bd47f1ac9a562a53a->enter($__internal_1fff744c8248e0a1951c0d41755ce7416dee99b72f19ba9bd47f1ac9a562a53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1fff744c8248e0a1951c0d41755ce7416dee99b72f19ba9bd47f1ac9a562a53a->leave($__internal_1fff744c8248e0a1951c0d41755ce7416dee99b72f19ba9bd47f1ac9a562a53a_prof);

    }

    // line 17
    public function block_footer($context, array $blocks = array())
    {
        $__internal_88a5bb83ce014e36a2de99d30632dfdb97b153de965432528e0f1b8b3a283845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88a5bb83ce014e36a2de99d30632dfdb97b153de965432528e0f1b8b3a283845->enter($__internal_88a5bb83ce014e36a2de99d30632dfdb97b153de965432528e0f1b8b3a283845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_88a5bb83ce014e36a2de99d30632dfdb97b153de965432528e0f1b8b3a283845->leave($__internal_88a5bb83ce014e36a2de99d30632dfdb97b153de965432528e0f1b8b3a283845_prof);

    }

    // line 19
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_d13a13fd4cf23af6bf7e62f5b3d20176dcae2191fa0006e744e9ca516fde2f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d13a13fd4cf23af6bf7e62f5b3d20176dcae2191fa0006e744e9ca516fde2f38->enter($__internal_d13a13fd4cf23af6bf7e62f5b3d20176dcae2191fa0006e744e9ca516fde2f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_d13a13fd4cf23af6bf7e62f5b3d20176dcae2191fa0006e744e9ca516fde2f38->leave($__internal_d13a13fd4cf23af6bf7e62f5b3d20176dcae2191fa0006e744e9ca516fde2f38_prof);

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
", "base.html.twig", "/home/floriane/dashboard/templates/base.html.twig");
    }
}
