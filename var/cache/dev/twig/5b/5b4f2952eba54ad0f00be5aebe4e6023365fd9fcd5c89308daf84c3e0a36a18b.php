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
        $__internal_b5379481f61e8a2d6e84694cad54ede2c504c4a26839c7413e2dd18e0f88e2e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5379481f61e8a2d6e84694cad54ede2c504c4a26839c7413e2dd18e0f88e2e0->enter($__internal_b5379481f61e8a2d6e84694cad54ede2c504c4a26839c7413e2dd18e0f88e2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "maps.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5379481f61e8a2d6e84694cad54ede2c504c4a26839c7413e2dd18e0f88e2e0->leave($__internal_b5379481f61e8a2d6e84694cad54ede2c504c4a26839c7413e2dd18e0f88e2e0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1fc43244ec5ef6e5569dc913fefc4b89e1d5c7b82d15cd3ec61e47e39d65bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1fc43244ec5ef6e5569dc913fefc4b89e1d5c7b82d15cd3ec61e47e39d65bd2->enter($__internal_d1fc43244ec5ef6e5569dc913fefc4b89e1d5c7b82d15cd3ec61e47e39d65bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d1fc43244ec5ef6e5569dc913fefc4b89e1d5c7b82d15cd3ec61e47e39d65bd2->leave($__internal_d1fc43244ec5ef6e5569dc913fefc4b89e1d5c7b82d15cd3ec61e47e39d65bd2_prof);

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
", "maps.html.twig", "/home/floriane/Dashboard/templates/maps.html.twig");
    }
}
