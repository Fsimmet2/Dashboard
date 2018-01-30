<?php

/* sidebar.html.twig */
class __TwigTemplate_1de5094b1b6f53af0d2896c2a52d4a8d6cbccb66bcc1fc2a74f7a48a576df23e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6afa9840fe7d034c0f28226b8a76eba53163ac43747c9ff99f1b4fda2bb792c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6afa9840fe7d034c0f28226b8a76eba53163ac43747c9ff99f1b4fda2bb792c1->enter($__internal_6afa9840fe7d034c0f28226b8a76eba53163ac43747c9ff99f1b4fda2bb792c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sidebar.html.twig"));

        // line 1
        $this->displayBlock('sidebar', $context, $blocks);
        
        $__internal_6afa9840fe7d034c0f28226b8a76eba53163ac43747c9ff99f1b4fda2bb792c1->leave($__internal_6afa9840fe7d034c0f28226b8a76eba53163ac43747c9ff99f1b4fda2bb792c1_prof);

    }

    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7e637dc41930fdd6d0c2c216e263b194498e83770ad5c4f11ebdff338d46dce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e637dc41930fdd6d0c2c216e263b194498e83770ad5c4f11ebdff338d46dce6->enter($__internal_7e637dc41930fdd6d0c2c216e263b194498e83770ad5c4f11ebdff338d46dce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 2
        echo "<div class=\"wrapper\">
  <div class=\"sidebar\" data-background-color=\"white\" data-active-color=\"danger\">
<div class=\"sidebar-wrapper\">
      <div class=\"logo\">
          <a href=\"http://www.creative-tim.com\" class=\"simple-text\">
          ";
        // line 7
        if ((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "              Bienvenue ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 8, $this->getSourceContext()); })()), "username", array()), "html", null, true);
            echo " !
          ";
        } else {
            // line 10
            echo "            Bienvenue !
          ";
        }
        // line 12
        echo "          </a>
      </div>

      <ul class=\"nav\">
        ";
        // line 16
        if (((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 16, $this->getSourceContext()); })()) == "Dashboard")) {
            // line 17
            echo "          <li class=\"active\">
        ";
        } else {
            // line 19
            echo "          <li>
        ";
        }
        // line 21
        echo "
              <a href=\"/dashboard\">
                  <i class=\"ti-panel\"></i>
                  <p>Dashboard</p>
              </a>
          </li >
          ";
        // line 27
        if (((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 27, $this->getSourceContext()); })()) == "User Profile")) {
            // line 28
            echo "            <li class=\"active\">
          ";
        } else {
            // line 30
            echo "            <li>
          ";
        }
        // line 32
        echo "
              <a href=\"/user\">
                  <i class=\"ti-user\"></i>
                  <p>User Profile</p>
              </a>
          </li>
          ";
        // line 38
        if (((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 38, $this->getSourceContext()); })()) == "Table List")) {
            // line 39
            echo "            <li class=\"active\">
          ";
        } else {
            // line 41
            echo "            <li>
          ";
        }
        // line 43
        echo "
              <a href=\"/table\">
                  <i class=\"ti-view-list-alt\"></i>
                  <p>Table List</p>
              </a>
          </li>
          ";
        // line 49
        if (((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 49, $this->getSourceContext()); })()) == "Typography")) {
            // line 50
            echo "            <li class=\"active\">
          ";
        } else {
            // line 52
            echo "            <li>
          ";
        }
        // line 54
        echo "
              <a href=\"/typography\">
                  <i class=\"ti-text\"></i>
                  <p>Typography</p>
              </a>
          </li>
          ";
        // line 60
        if (((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 60, $this->getSourceContext()); })()) == "Icons")) {
            // line 61
            echo "            <li class=\"active\">
          ";
        } else {
            // line 63
            echo "            <li>
          ";
        }
        // line 65
        echo "
              <a href=\"/icons\">
                  <i class=\"ti-pencil-alt2\"></i>
                  <p>Icons</p>
              </a>
          </li>
          ";
        // line 71
        if (((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 71, $this->getSourceContext()); })()) == "Maps")) {
            // line 72
            echo "            <li class=\"active\">
          ";
        } else {
            // line 74
            echo "            <li>
          ";
        }
        // line 76
        echo "
              <a href=\"/maps\">
                  <i class=\"ti-map\"></i>
                  <p>Maps</p>
              </a>
          </li>
          ";
        // line 82
        if (((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 82, $this->getSourceContext()); })()) == "Notifications")) {
            // line 83
            echo "            <li class=\"active\">
          ";
        } else {
            // line 85
            echo "            <li>
          ";
        }
        // line 87
        echo "
              <a href=\"/notifications\">
                  <i class=\"ti-bell\"></i>
                  <p>Notifications</p>
              </a>
          </li>
  <li class=\"active-pro\">
              <a href=\"/upgrade\">
                  <i class=\"ti-export\"></i>
                  <p>Upgrade to PRO</p>
              </a>
          </li>
      </ul>
</div>
</div>
";
        
        $__internal_7e637dc41930fdd6d0c2c216e263b194498e83770ad5c4f11ebdff338d46dce6->leave($__internal_7e637dc41930fdd6d0c2c216e263b194498e83770ad5c4f11ebdff338d46dce6_prof);

    }

    public function getTemplateName()
    {
        return "sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  178 => 87,  174 => 85,  170 => 83,  168 => 82,  160 => 76,  156 => 74,  152 => 72,  150 => 71,  142 => 65,  138 => 63,  134 => 61,  132 => 60,  124 => 54,  120 => 52,  116 => 50,  114 => 49,  106 => 43,  102 => 41,  98 => 39,  96 => 38,  88 => 32,  84 => 30,  80 => 28,  78 => 27,  70 => 21,  66 => 19,  62 => 17,  60 => 16,  54 => 12,  50 => 10,  44 => 8,  42 => 7,  35 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block sidebar %}
<div class=\"wrapper\">
  <div class=\"sidebar\" data-background-color=\"white\" data-active-color=\"danger\">
<div class=\"sidebar-wrapper\">
      <div class=\"logo\">
          <a href=\"http://www.creative-tim.com\" class=\"simple-text\">
          {% if user%}
              Bienvenue {{user.username}} !
          {% else %}
            Bienvenue !
          {% endif %}
          </a>
      </div>

      <ul class=\"nav\">
        {% if path == 'Dashboard' %}
          <li class=\"active\">
        {% else %}
          <li>
        {% endif %}

              <a href=\"/dashboard\">
                  <i class=\"ti-panel\"></i>
                  <p>Dashboard</p>
              </a>
          </li >
          {% if path == 'User Profile' %}
            <li class=\"active\">
          {% else %}
            <li>
          {% endif %}

              <a href=\"/user\">
                  <i class=\"ti-user\"></i>
                  <p>User Profile</p>
              </a>
          </li>
          {% if path == 'Table List' %}
            <li class=\"active\">
          {% else %}
            <li>
          {% endif %}

              <a href=\"/table\">
                  <i class=\"ti-view-list-alt\"></i>
                  <p>Table List</p>
              </a>
          </li>
          {% if path == 'Typography' %}
            <li class=\"active\">
          {% else %}
            <li>
          {% endif %}

              <a href=\"/typography\">
                  <i class=\"ti-text\"></i>
                  <p>Typography</p>
              </a>
          </li>
          {% if path == 'Icons' %}
            <li class=\"active\">
          {% else %}
            <li>
          {% endif %}

              <a href=\"/icons\">
                  <i class=\"ti-pencil-alt2\"></i>
                  <p>Icons</p>
              </a>
          </li>
          {% if path == 'Maps' %}
            <li class=\"active\">
          {% else %}
            <li>
          {% endif %}

              <a href=\"/maps\">
                  <i class=\"ti-map\"></i>
                  <p>Maps</p>
              </a>
          </li>
          {% if path == 'Notifications' %}
            <li class=\"active\">
          {% else %}
            <li>
          {% endif %}

              <a href=\"/notifications\">
                  <i class=\"ti-bell\"></i>
                  <p>Notifications</p>
              </a>
          </li>
  <li class=\"active-pro\">
              <a href=\"/upgrade\">
                  <i class=\"ti-export\"></i>
                  <p>Upgrade to PRO</p>
              </a>
          </li>
      </ul>
</div>
</div>
{% endblock %}
", "sidebar.html.twig", "/home/floriane/Dashboard/templates/sidebar.html.twig");
    }
}
