<?php

/* head.html.twig */
class __TwigTemplate_5c1b4b6f6f69344baed5dbf8c1c3c05b06a92e253933ba3000b4de0dad719eec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89332e768d422e35988f422034c9b6357b6d0a1d207598e1be673547e9f80cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89332e768d422e35988f422034c9b6357b6d0a1d207598e1be673547e9f80cf8->enter($__internal_89332e768d422e35988f422034c9b6357b6d0a1d207598e1be673547e9f80cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "head.html.twig"));

        // line 1
        $this->displayBlock('stylesheet', $context, $blocks);
        
        $__internal_89332e768d422e35988f422034c9b6357b6d0a1d207598e1be673547e9f80cf8->leave($__internal_89332e768d422e35988f422034c9b6357b6d0a1d207598e1be673547e9f80cf8_prof);

    }

    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_78192ce92440ad58433f22ba275950f648f2a7c246249af4cd37018ec093e8bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78192ce92440ad58433f22ba275950f648f2a7c246249af4cd37018ec093e8bd->enter($__internal_78192ce92440ad58433f22ba275950f648f2a7c246249af4cd37018ec093e8bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 2
        echo "<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"assets/img/apple-icon.png\">
<link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"assets/img/favicon.png\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />



<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name=\"viewport\" content=\"width=device-width\" />


  <!-- Bootstrap core CSS     -->
  <link href=\"assets/css/bootstrap.min.css\" rel=\"stylesheet\" />

  <!-- Animation library for notifications   -->
  <link href=\"assets/css/animate.min.css\" rel=\"stylesheet\"/>

  <!--  Paper Dashboard core CSS    -->
  <link href=\"assets/css/paper-dashboard.css\" rel=\"stylesheet\"/>


  <!--  CSS for Demo Purpose, don't include it in your project     -->
  <link href=\"assets/css/demo.css\" rel=\"stylesheet\" />


  <!--  Fonts and icons     -->
  <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" rel=\"stylesheet\">
  <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
  <link href=\"assets/css/themify-icons.css\" rel=\"stylesheet\">
";
        
        $__internal_78192ce92440ad58433f22ba275950f648f2a7c246249af4cd37018ec093e8bd->leave($__internal_78192ce92440ad58433f22ba275950f648f2a7c246249af4cd37018ec093e8bd_prof);

    }

    public function getTemplateName()
    {
        return "head.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block stylesheet %}
<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"assets/img/apple-icon.png\">
<link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"assets/img/favicon.png\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />



<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name=\"viewport\" content=\"width=device-width\" />


  <!-- Bootstrap core CSS     -->
  <link href=\"assets/css/bootstrap.min.css\" rel=\"stylesheet\" />

  <!-- Animation library for notifications   -->
  <link href=\"assets/css/animate.min.css\" rel=\"stylesheet\"/>

  <!--  Paper Dashboard core CSS    -->
  <link href=\"assets/css/paper-dashboard.css\" rel=\"stylesheet\"/>


  <!--  CSS for Demo Purpose, don't include it in your project     -->
  <link href=\"assets/css/demo.css\" rel=\"stylesheet\" />


  <!--  Fonts and icons     -->
  <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" rel=\"stylesheet\">
  <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
  <link href=\"assets/css/themify-icons.css\" rel=\"stylesheet\">
{% endblock %}
", "head.html.twig", "/home/floriane/Dashboard/templates/head.html.twig");
    }
}
