<?php

/* table.html.twig */
class __TwigTemplate_dbf595f4fb7c003aa96807becb3877a3ef1f801a060388a41c48a95268d51f75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "table.html.twig", 1);
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
        $__internal_f9fb7c79f557f128b8facbd3cf6d8346fe5ecc7ca9d85508d3b89ed4553bff90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9fb7c79f557f128b8facbd3cf6d8346fe5ecc7ca9d85508d3b89ed4553bff90->enter($__internal_f9fb7c79f557f128b8facbd3cf6d8346fe5ecc7ca9d85508d3b89ed4553bff90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "table.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9fb7c79f557f128b8facbd3cf6d8346fe5ecc7ca9d85508d3b89ed4553bff90->leave($__internal_f9fb7c79f557f128b8facbd3cf6d8346fe5ecc7ca9d85508d3b89ed4553bff90_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad63b1158f18282cad0186ca822d2676e1cbcdfec4e134e01d709f7d570e93ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad63b1158f18282cad0186ca822d2676e1cbcdfec4e134e01d709f7d570e93ff->enter($__internal_ad63b1158f18282cad0186ca822d2676e1cbcdfec4e134e01d709f7d570e93ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<div class=\"content\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <div class=\"header\">
                        <h4 class=\"title\">Striped Table</h4>
                        <p class=\"category\">Here is a subtitle for this table</p>
                    </div>
                    <div class=\"content table-responsive table-full-width\">
                        <table class=\"table table-striped\">
                            <thead>
                                <th>ID</th>
                              <th>Name</th>
                              <th>Salary</th>
                              <th>Country</th>
                              <th>City</th>
                            </thead>
                            <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>Dakota Rice</td>
                                  <td>\$36,738</td>
                                  <td>Niger</td>
                                  <td>Oud-Turnhout</td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td>Minerva Hooper</td>
                                  <td>\$23,789</td>
                                  <td>Curaçao</td>
                                  <td>Sinaai-Waas</td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td>Sage Rodriguez</td>
                                  <td>\$56,142</td>
                                  <td>Netherlands</td>
                                  <td>Baileux</td>
                                </tr>
                                <tr>
                                  <td>4</td>
                                  <td>Philip Chaney</td>
                                  <td>\$38,735</td>
                                  <td>Korea, South</td>
                                  <td>Overland Park</td>
                                </tr>
                                <tr>
                                  <td>5</td>
                                  <td>Doris Greene</td>
                                  <td>\$63,542</td>
                                  <td>Malawi</td>
                                  <td>Feldkirchen in Kärnten</td>
                                </tr>
                                <tr>
                                  <td>6</td>
                                  <td>Mason Porter</td>
                                  <td>\$78,615</td>
                                  <td>Chile</td>
                                  <td>Gloucester</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>


            <div class=\"col-md-12\">
                <div class=\"card card-plain\">
                    <div class=\"header\">
                        <h4 class=\"title\">Table on Plain Background</h4>
                        <p class=\"category\">Here is a subtitle for this table</p>
                    </div>
                    <div class=\"content table-responsive table-full-width\">
                        <table class=\"table table-hover\">
                            <thead>
                                <th>ID</th>
                              <th>Name</th>
                              <th>Salary</th>
                              <th>Country</th>
                              <th>City</th>
                            </thead>
                            <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>Dakota Rice</td>
                                  <td>\$36,738</td>
                                  <td>Niger</td>
                                  <td>Oud-Turnhout</td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td>Minerva Hooper</td>
                                  <td>\$23,789</td>
                                  <td>Curaçao</td>
                                  <td>Sinaai-Waas</td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td>Sage Rodriguez</td>
                                  <td>\$56,142</td>
                                  <td>Netherlands</td>
                                  <td>Baileux</td>
                                </tr>
                                <tr>
                                  <td>4</td>
                                  <td>Philip Chaney</td>
                                  <td>\$38,735</td>
                                  <td>Korea, South</td>
                                  <td>Overland Park</td>
                                </tr>
                                <tr>
                                  <td>5</td>
                                  <td>Doris Greene</td>
                                  <td>\$63,542</td>
                                  <td>Malawi</td>
                                  <td>Feldkirchen in Kärnten</td>
                                </tr>
                                <tr>
                                  <td>6</td>
                                  <td>Mason Porter</td>
                                  <td>\$78,615</td>
                                  <td>Chile</td>
                                  <td>Gloucester</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

";
        
        $__internal_ad63b1158f18282cad0186ca822d2676e1cbcdfec4e134e01d709f7d570e93ff->leave($__internal_ad63b1158f18282cad0186ca822d2676e1cbcdfec4e134e01d709f7d570e93ff_prof);

    }

    public function getTemplateName()
    {
        return "table.html.twig";
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
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <div class=\"header\">
                        <h4 class=\"title\">Striped Table</h4>
                        <p class=\"category\">Here is a subtitle for this table</p>
                    </div>
                    <div class=\"content table-responsive table-full-width\">
                        <table class=\"table table-striped\">
                            <thead>
                                <th>ID</th>
                              <th>Name</th>
                              <th>Salary</th>
                              <th>Country</th>
                              <th>City</th>
                            </thead>
                            <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>Dakota Rice</td>
                                  <td>\$36,738</td>
                                  <td>Niger</td>
                                  <td>Oud-Turnhout</td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td>Minerva Hooper</td>
                                  <td>\$23,789</td>
                                  <td>Curaçao</td>
                                  <td>Sinaai-Waas</td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td>Sage Rodriguez</td>
                                  <td>\$56,142</td>
                                  <td>Netherlands</td>
                                  <td>Baileux</td>
                                </tr>
                                <tr>
                                  <td>4</td>
                                  <td>Philip Chaney</td>
                                  <td>\$38,735</td>
                                  <td>Korea, South</td>
                                  <td>Overland Park</td>
                                </tr>
                                <tr>
                                  <td>5</td>
                                  <td>Doris Greene</td>
                                  <td>\$63,542</td>
                                  <td>Malawi</td>
                                  <td>Feldkirchen in Kärnten</td>
                                </tr>
                                <tr>
                                  <td>6</td>
                                  <td>Mason Porter</td>
                                  <td>\$78,615</td>
                                  <td>Chile</td>
                                  <td>Gloucester</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>


            <div class=\"col-md-12\">
                <div class=\"card card-plain\">
                    <div class=\"header\">
                        <h4 class=\"title\">Table on Plain Background</h4>
                        <p class=\"category\">Here is a subtitle for this table</p>
                    </div>
                    <div class=\"content table-responsive table-full-width\">
                        <table class=\"table table-hover\">
                            <thead>
                                <th>ID</th>
                              <th>Name</th>
                              <th>Salary</th>
                              <th>Country</th>
                              <th>City</th>
                            </thead>
                            <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>Dakota Rice</td>
                                  <td>\$36,738</td>
                                  <td>Niger</td>
                                  <td>Oud-Turnhout</td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td>Minerva Hooper</td>
                                  <td>\$23,789</td>
                                  <td>Curaçao</td>
                                  <td>Sinaai-Waas</td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td>Sage Rodriguez</td>
                                  <td>\$56,142</td>
                                  <td>Netherlands</td>
                                  <td>Baileux</td>
                                </tr>
                                <tr>
                                  <td>4</td>
                                  <td>Philip Chaney</td>
                                  <td>\$38,735</td>
                                  <td>Korea, South</td>
                                  <td>Overland Park</td>
                                </tr>
                                <tr>
                                  <td>5</td>
                                  <td>Doris Greene</td>
                                  <td>\$63,542</td>
                                  <td>Malawi</td>
                                  <td>Feldkirchen in Kärnten</td>
                                </tr>
                                <tr>
                                  <td>6</td>
                                  <td>Mason Porter</td>
                                  <td>\$78,615</td>
                                  <td>Chile</td>
                                  <td>Gloucester</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

{% endblock %}
", "table.html.twig", "/home/floriane/Dashboard/templates/table.html.twig");
    }
}
