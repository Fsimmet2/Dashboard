<?php

/* nav.html.twig */
class __TwigTemplate_de18dbc47c131b424a0205e445017787cd2699e2e0b0ccf05c114444d6c7c320 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06c3d648a43f39da6257d553224749282b7c4771a85f1ce9c2f7892054b81e49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c3d648a43f39da6257d553224749282b7c4771a85f1ce9c2f7892054b81e49->enter($__internal_06c3d648a43f39da6257d553224749282b7c4771a85f1ce9c2f7892054b81e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nav.html.twig"));

        // line 1
        $this->displayBlock('nav', $context, $blocks);
        
        $__internal_06c3d648a43f39da6257d553224749282b7c4771a85f1ce9c2f7892054b81e49->leave($__internal_06c3d648a43f39da6257d553224749282b7c4771a85f1ce9c2f7892054b81e49_prof);

    }

    public function block_nav($context, array $blocks = array())
    {
        $__internal_0e9efd70391d7313ecbcaad81c30f16db735f01c9fca51fc8a658e4761d7563e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e9efd70391d7313ecbcaad81c30f16db735f01c9fca51fc8a658e4761d7563e->enter($__internal_0e9efd70391d7313ecbcaad81c30f16db735f01c9fca51fc8a658e4761d7563e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 2
        echo "<div class=\"main-panel\">
<nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar bar1\"></span>
                <span class=\"icon-bar bar2\"></span>
                <span class=\"icon-bar bar3\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>
        </div>
        <div class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
            <li>
              <a href=\"logout\">
              <i class=\"ti-close\"></i>
              <p>Logout</p>
              </a>
              </li>
                <li>
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"ti-panel\"></i>
        <p>Stats</p>
                    </a>
                </li>
                <li class=\"dropdown\">
                      <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"ti-bell\"></i>
                            <p class=\"notification\">5</p>
          <p>Notifications</p>
          <b class=\"caret\"></b>
                      </a>
                      <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Notification 1</a></li>
                        <li><a href=\"#\">Notification 2</a></li>
                        <li><a href=\"#\">Notification 3</a></li>
                        <li><a href=\"#\">Notification 4</a></li>
                        <li><a href=\"#\">Another notification</a></li>
                      </ul>
                </li>
    <li>
                    <a href=\"#\">
        <i class=\"ti-settings\"></i>
        <p>Settings</p>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>
";
        
        $__internal_0e9efd70391d7313ecbcaad81c30f16db735f01c9fca51fc8a658e4761d7563e->leave($__internal_0e9efd70391d7313ecbcaad81c30f16db735f01c9fca51fc8a658e4761d7563e_prof);

    }

    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  35 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block nav %}
<div class=\"main-panel\">
<nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar bar1\"></span>
                <span class=\"icon-bar bar2\"></span>
                <span class=\"icon-bar bar3\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">{{path}}</a>
        </div>
        <div class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
            <li>
              <a href=\"logout\">
              <i class=\"ti-close\"></i>
              <p>Logout</p>
              </a>
              </li>
                <li>
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"ti-panel\"></i>
        <p>Stats</p>
                    </a>
                </li>
                <li class=\"dropdown\">
                      <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"ti-bell\"></i>
                            <p class=\"notification\">5</p>
          <p>Notifications</p>
          <b class=\"caret\"></b>
                      </a>
                      <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Notification 1</a></li>
                        <li><a href=\"#\">Notification 2</a></li>
                        <li><a href=\"#\">Notification 3</a></li>
                        <li><a href=\"#\">Notification 4</a></li>
                        <li><a href=\"#\">Another notification</a></li>
                      </ul>
                </li>
    <li>
                    <a href=\"#\">
        <i class=\"ti-settings\"></i>
        <p>Settings</p>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>
{% endblock %}
", "nav.html.twig", "/home/floriane/Dashboard/templates/nav.html.twig");
    }
}
