<?php

/* script.html.twig */
class __TwigTemplate_4841619075d0dbecf1dc975e03adb054632616ce9c07e6b75c82e4afc42da848 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_caf5b5900d594fbe6e3bc75514812ba6ce9a1f6141ddff6830b9176c25d579c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf5b5900d594fbe6e3bc75514812ba6ce9a1f6141ddff6830b9176c25d579c4->enter($__internal_caf5b5900d594fbe6e3bc75514812ba6ce9a1f6141ddff6830b9176c25d579c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "script.html.twig"));

        // line 1
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_caf5b5900d594fbe6e3bc75514812ba6ce9a1f6141ddff6830b9176c25d579c4->leave($__internal_caf5b5900d594fbe6e3bc75514812ba6ce9a1f6141ddff6830b9176c25d579c4_prof);

    }

    public function block_javascript($context, array $blocks = array())
    {
        $__internal_61f9be2fcbe5b5035980d96001f068769521ab2c717e55e8618ec901aa9c4299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61f9be2fcbe5b5035980d96001f068769521ab2c717e55e8618ec901aa9c4299->enter($__internal_61f9be2fcbe5b5035980d96001f068769521ab2c717e55e8618ec901aa9c4299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 2
        echo "<!--   Core JS Files   -->
<script src=\"assets/js/jquery-1.10.2.js\" type=\"text/javascript\"></script>
<script src=\"assets/js/bootstrap.min.js\" type=\"text/javascript\"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src=\"assets/js/bootstrap-checkbox-radio.js\"></script>

<!--  Charts Plugin -->
<script src=\"assets/js/chartist.min.js\"></script>

<!--  Notifications Plugin    -->
<script src=\"assets/js/bootstrap-notify.js\"></script>

<!--  Google Maps Plugin    -->
<script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js\"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src=\"assets/js/paper-dashboard.js\"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src=\"assets/js/demo.js\"></script>

<script type=\"text/javascript\">
  \$(document).ready(function(){

      demo.initChartist();

      \$.notify({
          icon: 'ti-gift',
          message: \"Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project.\"

        },{
            type: 'success',
            timer: 4000
        });

  });
</script>
";
        
        $__internal_61f9be2fcbe5b5035980d96001f068769521ab2c717e55e8618ec901aa9c4299->leave($__internal_61f9be2fcbe5b5035980d96001f068769521ab2c717e55e8618ec901aa9c4299_prof);

    }

    public function getTemplateName()
    {
        return "script.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block javascript %}
<!--   Core JS Files   -->
<script src=\"assets/js/jquery-1.10.2.js\" type=\"text/javascript\"></script>
<script src=\"assets/js/bootstrap.min.js\" type=\"text/javascript\"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src=\"assets/js/bootstrap-checkbox-radio.js\"></script>

<!--  Charts Plugin -->
<script src=\"assets/js/chartist.min.js\"></script>

<!--  Notifications Plugin    -->
<script src=\"assets/js/bootstrap-notify.js\"></script>

<!--  Google Maps Plugin    -->
<script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js\"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src=\"assets/js/paper-dashboard.js\"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src=\"assets/js/demo.js\"></script>

<script type=\"text/javascript\">
  \$(document).ready(function(){

      demo.initChartist();

      \$.notify({
          icon: 'ti-gift',
          message: \"Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project.\"

        },{
            type: 'success',
            timer: 4000
        });

  });
</script>
{% endblock %}
", "script.html.twig", "/home/floriane/dashboard/templates/script.html.twig");
    }
}
