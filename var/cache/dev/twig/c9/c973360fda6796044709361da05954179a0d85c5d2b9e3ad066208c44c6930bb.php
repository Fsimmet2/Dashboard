<?php

/* login.html.twig */
class __TwigTemplate_01df62e508dff739947276e0babdf5e48f561c4d65d2c86989b9a3299f75fed7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8bdb772db07aefc838ff576b856d4f74bd8902c80fc14ca95e353690c05d76a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8bdb772db07aefc838ff576b856d4f74bd8902c80fc14ca95e353690c05d76a->enter($__internal_d8bdb772db07aefc838ff576b856d4f74bd8902c80fc14ca95e353690c05d76a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        // line 1
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 1, $this->getSourceContext()); })())) {
            // line 2
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 2, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 2, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 4
        echo "
<form action=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 7, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <button type=\"submit\">login</button>
 </form>
";
        
        $__internal_d8bdb772db07aefc838ff576b856d4f74bd8902c80fc14ca95e353690c05d76a->leave($__internal_d8bdb772db07aefc838ff576b856d4f74bd8902c80fc14ca95e353690c05d76a_prof);

    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  33 => 5,  30 => 4,  24 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path('login') }}\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <button type=\"submit\">login</button>
 </form>
", "login.html.twig", "/home/floriane/Dashboard/templates/login.html.twig");
    }
}
