<?php

/* dashboard.html.twig */
class __TwigTemplate_f7bf8e970d9676c634b8abd88a3e24ada1bf6c56583b241e3518b5087b119555 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "dashboard.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3d75a53e952c64f41b3ecac6f102541e511015466b1c08fef5f2a57ec8228c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3d75a53e952c64f41b3ecac6f102541e511015466b1c08fef5f2a57ec8228c9->enter($__internal_f3d75a53e952c64f41b3ecac6f102541e511015466b1c08fef5f2a57ec8228c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3d75a53e952c64f41b3ecac6f102541e511015466b1c08fef5f2a57ec8228c9->leave($__internal_f3d75a53e952c64f41b3ecac6f102541e511015466b1c08fef5f2a57ec8228c9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7bf9666d433d75389e9c0ce067981476c8b042e57ffaad625f0fe0373807dbde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf9666d433d75389e9c0ce067981476c8b042e57ffaad625f0fe0373807dbde->enter($__internal_7bf9666d433d75389e9c0ce067981476c8b042e57ffaad625f0fe0373807dbde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Paper Dashboard by Creative Tim";
        
        $__internal_7bf9666d433d75389e9c0ce067981476c8b042e57ffaad625f0fe0373807dbde->leave($__internal_7bf9666d433d75389e9c0ce067981476c8b042e57ffaad625f0fe0373807dbde_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_636668b09e040a1e80985c3250525d027d048eb06a086c42f9bcba481fc29187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_636668b09e040a1e80985c3250525d027d048eb06a086c42f9bcba481fc29187->enter($__internal_636668b09e040a1e80985c3250525d027d048eb06a086c42f9bcba481fc29187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "



    <!--
\t\tTip 1: you can change the color of the sidebar's background using: data-background-color=\"white | black\"
\t\tTip 2: you can change the color of the active button using the data-active-color=\"primary | info | success | warning | danger\"
\t-->



        <div class=\"content\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"content\">
                                <div class=\"row\">
                                    <div class=\"col-xs-5\">
                                        <div class=\"icon-big icon-warning text-center\">
                                            <i class=\"ti-server\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-7\">
                                        <div class=\"numbers\">
                                            <p>Capacity</p>
                                            105GB
                                        </div>
                                    </div>
                                </div>
                                <div class=\"footer\">
                                    <hr />
                                    <div class=\"stats\">
                                        <i class=\"ti-reload\"></i> Updated now
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"content\">
                                <div class=\"row\">
                                    <div class=\"col-xs-5\">
                                        <div class=\"icon-big icon-success text-center\">
                                            <i class=\"ti-wallet\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-7\">
                                        <div class=\"numbers\">
                                            <p>Revenue</p>
                                            \$1,345
                                        </div>
                                    </div>
                                </div>
                                <div class=\"footer\">
                                    <hr />
                                    <div class=\"stats\">
                                        <i class=\"ti-calendar\"></i> Last day
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"content\">
                                <div class=\"row\">
                                    <div class=\"col-xs-5\">
                                        <div class=\"icon-big icon-danger text-center\">
                                            <i class=\"ti-pulse\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-7\">
                                        <div class=\"numbers\">
                                            <p>Errors</p>
                                            23
                                        </div>
                                    </div>
                                </div>
                                <div class=\"footer\">
                                    <hr />
                                    <div class=\"stats\">
                                        <i class=\"ti-timer\"></i> In the last hour
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"content\">
                                <div class=\"row\">
                                    <div class=\"col-xs-5\">
                                        <div class=\"icon-big icon-info text-center\">
                                            <i class=\"ti-twitter-alt\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-7\">
                                        <div class=\"numbers\">
                                            <p>Followers</p>
                                            +45
                                        </div>
                                    </div>
                                </div>
                                <div class=\"footer\">
                                    <hr />
                                    <div class=\"stats\">
                                        <i class=\"ti-reload\"></i> Updated now
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">

                    <div class=\"col-md-12\">
                        <div class=\"card\">
                            <div class=\"header\">
                                <h4 class=\"title\">Users Behavior</h4>
                                <p class=\"category\">24 Hours performance</p>
                            </div>
                            <div class=\"content\">
                                <div id=\"chartHours\" class=\"ct-chart\"></div>
                                <div class=\"footer\">
                                    <div class=\"chart-legend\">
                                        <i class=\"fa fa-circle text-info\"></i> Open
                                        <i class=\"fa fa-circle text-danger\"></i> Click
                                        <i class=\"fa fa-circle text-warning\"></i> Click Second Time
                                    </div>
                                    <hr>
                                    <div class=\"stats\">
                                        <i class=\"ti-reload\"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"card\">
                            <div class=\"header\">
                                <h4 class=\"title\">Email Statistics</h4>
                                <p class=\"category\">Last Campaign Performance</p>
                            </div>
                            <div class=\"content\">
                                <div id=\"chartPreferences\" class=\"ct-chart ct-perfect-fourth\"></div>

                                <div class=\"footer\">
                                    <div class=\"chart-legend\">
                                        <i class=\"fa fa-circle text-info\"></i> Open
                                        <i class=\"fa fa-circle text-danger\"></i> Bounce
                                        <i class=\"fa fa-circle text-warning\"></i> Unsubscribe
                                    </div>
                                    <hr>
                                    <div class=\"stats\">
                                        <i class=\"ti-timer\"></i> Campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"card \">
                            <div class=\"header\">
                                <h4 class=\"title\">2015 Sales</h4>
                                <p class=\"category\">All products including Taxes</p>
                            </div>
                            <div class=\"content\">
                                <div id=\"chartActivity\" class=\"ct-chart\"></div>

                                <div class=\"footer\">
                                    <div class=\"chart-legend\">
                                        <i class=\"fa fa-circle text-info\"></i> Tesla Model S
                                        <i class=\"fa fa-circle text-warning\"></i> BMW 5 Series
                                    </div>
                                    <hr>
                                    <div class=\"stats\">
                                        <i class=\"ti-check\"></i> Data information certified
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

";
        
        $__internal_636668b09e040a1e80985c3250525d027d048eb06a086c42f9bcba481fc29187->leave($__internal_636668b09e040a1e80985c3250525d027d048eb06a086c42f9bcba481fc29187_prof);

    }

    public function getTemplateName()
    {
        return "dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Paper Dashboard by Creative Tim{% endblock %}
{% block body %}




    <!--
\t\tTip 1: you can change the color of the sidebar's background using: data-background-color=\"white | black\"
\t\tTip 2: you can change the color of the active button using the data-active-color=\"primary | info | success | warning | danger\"
\t-->



        <div class=\"content\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"content\">
                                <div class=\"row\">
                                    <div class=\"col-xs-5\">
                                        <div class=\"icon-big icon-warning text-center\">
                                            <i class=\"ti-server\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-7\">
                                        <div class=\"numbers\">
                                            <p>Capacity</p>
                                            105GB
                                        </div>
                                    </div>
                                </div>
                                <div class=\"footer\">
                                    <hr />
                                    <div class=\"stats\">
                                        <i class=\"ti-reload\"></i> Updated now
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"content\">
                                <div class=\"row\">
                                    <div class=\"col-xs-5\">
                                        <div class=\"icon-big icon-success text-center\">
                                            <i class=\"ti-wallet\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-7\">
                                        <div class=\"numbers\">
                                            <p>Revenue</p>
                                            \$1,345
                                        </div>
                                    </div>
                                </div>
                                <div class=\"footer\">
                                    <hr />
                                    <div class=\"stats\">
                                        <i class=\"ti-calendar\"></i> Last day
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"content\">
                                <div class=\"row\">
                                    <div class=\"col-xs-5\">
                                        <div class=\"icon-big icon-danger text-center\">
                                            <i class=\"ti-pulse\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-7\">
                                        <div class=\"numbers\">
                                            <p>Errors</p>
                                            23
                                        </div>
                                    </div>
                                </div>
                                <div class=\"footer\">
                                    <hr />
                                    <div class=\"stats\">
                                        <i class=\"ti-timer\"></i> In the last hour
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"content\">
                                <div class=\"row\">
                                    <div class=\"col-xs-5\">
                                        <div class=\"icon-big icon-info text-center\">
                                            <i class=\"ti-twitter-alt\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-7\">
                                        <div class=\"numbers\">
                                            <p>Followers</p>
                                            +45
                                        </div>
                                    </div>
                                </div>
                                <div class=\"footer\">
                                    <hr />
                                    <div class=\"stats\">
                                        <i class=\"ti-reload\"></i> Updated now
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">

                    <div class=\"col-md-12\">
                        <div class=\"card\">
                            <div class=\"header\">
                                <h4 class=\"title\">Users Behavior</h4>
                                <p class=\"category\">24 Hours performance</p>
                            </div>
                            <div class=\"content\">
                                <div id=\"chartHours\" class=\"ct-chart\"></div>
                                <div class=\"footer\">
                                    <div class=\"chart-legend\">
                                        <i class=\"fa fa-circle text-info\"></i> Open
                                        <i class=\"fa fa-circle text-danger\"></i> Click
                                        <i class=\"fa fa-circle text-warning\"></i> Click Second Time
                                    </div>
                                    <hr>
                                    <div class=\"stats\">
                                        <i class=\"ti-reload\"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"card\">
                            <div class=\"header\">
                                <h4 class=\"title\">Email Statistics</h4>
                                <p class=\"category\">Last Campaign Performance</p>
                            </div>
                            <div class=\"content\">
                                <div id=\"chartPreferences\" class=\"ct-chart ct-perfect-fourth\"></div>

                                <div class=\"footer\">
                                    <div class=\"chart-legend\">
                                        <i class=\"fa fa-circle text-info\"></i> Open
                                        <i class=\"fa fa-circle text-danger\"></i> Bounce
                                        <i class=\"fa fa-circle text-warning\"></i> Unsubscribe
                                    </div>
                                    <hr>
                                    <div class=\"stats\">
                                        <i class=\"ti-timer\"></i> Campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"card \">
                            <div class=\"header\">
                                <h4 class=\"title\">2015 Sales</h4>
                                <p class=\"category\">All products including Taxes</p>
                            </div>
                            <div class=\"content\">
                                <div id=\"chartActivity\" class=\"ct-chart\"></div>

                                <div class=\"footer\">
                                    <div class=\"chart-legend\">
                                        <i class=\"fa fa-circle text-info\"></i> Tesla Model S
                                        <i class=\"fa fa-circle text-warning\"></i> BMW 5 Series
                                    </div>
                                    <hr>
                                    <div class=\"stats\">
                                        <i class=\"ti-check\"></i> Data information certified
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

{% endblock %}
", "dashboard.html.twig", "/home/floriane/Dashboard/templates/dashboard.html.twig");
    }
}
