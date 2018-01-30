<?php

/* maps.html.twig */
class __TwigTemplate_8b100f49850cb4f0c0dd00b2263eb930067d2de32d2b02013c9a657ea9259637 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "maps.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78bb425aa8b8a5116204b959aaf6923024a52d4a2f6ca8a74bfd5837a711156a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78bb425aa8b8a5116204b959aaf6923024a52d4a2f6ca8a74bfd5837a711156a->enter($__internal_78bb425aa8b8a5116204b959aaf6923024a52d4a2f6ca8a74bfd5837a711156a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "maps.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78bb425aa8b8a5116204b959aaf6923024a52d4a2f6ca8a74bfd5837a711156a->leave($__internal_78bb425aa8b8a5116204b959aaf6923024a52d4a2f6ca8a74bfd5837a711156a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdd45cfb309c9385b44e7d0eb31c75dab67f46339d8e2e37820e70a07dd2aa67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdd45cfb309c9385b44e7d0eb31c75dab67f46339d8e2e37820e70a07dd2aa67->enter($__internal_cdd45cfb309c9385b44e7d0eb31c75dab67f46339d8e2e37820e70a07dd2aa67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<div class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"card card-map\">
      <div class=\"header\">
                    <h4 class=\"title\">Google Maps</h4>
                </div>
      <div class=\"map\">
        <div id=\"map\"></div>
      </div>
    </div>
  </div>
</div>

";
        
        $__internal_cdd45cfb309c9385b44e7d0eb31c75dab67f46339d8e2e37820e70a07dd2aa67->leave($__internal_cdd45cfb309c9385b44e7d0eb31c75dab67f46339d8e2e37820e70a07dd2aa67_prof);

    }

    public function getTemplateName()
    {
        return "maps.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}

<div class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"card card-map\">
      <div class=\"header\">
                    <h4 class=\"title\">Google Maps</h4>
                </div>
      <div class=\"map\">
        <div id=\"map\"></div>
      </div>
    </div>
  </div>
</div>

{% endblock %}
", "maps.html.twig", "/home/floriane/dashboard/templates/maps.html.twig");
    }
}
