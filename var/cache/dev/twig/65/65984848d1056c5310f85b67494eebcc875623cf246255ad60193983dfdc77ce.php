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
        $__internal_c1bbe3d92c8844b9f7ed5a20163da9b2f412593a59148a3fcbc01156ed4349be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1bbe3d92c8844b9f7ed5a20163da9b2f412593a59148a3fcbc01156ed4349be->enter($__internal_c1bbe3d92c8844b9f7ed5a20163da9b2f412593a59148a3fcbc01156ed4349be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "table.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1bbe3d92c8844b9f7ed5a20163da9b2f412593a59148a3fcbc01156ed4349be->leave($__internal_c1bbe3d92c8844b9f7ed5a20163da9b2f412593a59148a3fcbc01156ed4349be_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3eef116a05f123eee2d237f3f7c8486e684270fd5e8972134a61b8127e7c170a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eef116a05f123eee2d237f3f7c8486e684270fd5e8972134a61b8127e7c170a->enter($__internal_3eef116a05f123eee2d237f3f7c8486e684270fd5e8972134a61b8127e7c170a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3eef116a05f123eee2d237f3f7c8486e684270fd5e8972134a61b8127e7c170a->leave($__internal_3eef116a05f123eee2d237f3f7c8486e684270fd5e8972134a61b8127e7c170a_prof);

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
", "table.html.twig", "/home/floriane/dashboard/templates/table.html.twig");
    }
}
