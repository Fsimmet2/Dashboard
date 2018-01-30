<?php

/* notifications.html.twig */
class __TwigTemplate_04d61ae80fccb93a819269e529c2dbf7e04e8e40076e995dc9e9a5d7c52e6bbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "notifications.html.twig", 1);
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
        $__internal_26d0f4868f96c21fba34df3aa7aa0201a1bbb49b575fc9d877a9a4839485a8d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d0f4868f96c21fba34df3aa7aa0201a1bbb49b575fc9d877a9a4839485a8d8->enter($__internal_26d0f4868f96c21fba34df3aa7aa0201a1bbb49b575fc9d877a9a4839485a8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "notifications.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26d0f4868f96c21fba34df3aa7aa0201a1bbb49b575fc9d877a9a4839485a8d8->leave($__internal_26d0f4868f96c21fba34df3aa7aa0201a1bbb49b575fc9d877a9a4839485a8d8_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_669fd2181842fc947172bc50fa4cae8191ff6dd9829fdaf1af94655dd50fea24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_669fd2181842fc947172bc50fa4cae8191ff6dd9829fdaf1af94655dd50fea24->enter($__internal_669fd2181842fc947172bc50fa4cae8191ff6dd9829fdaf1af94655dd50fea24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<div class=\"content\">
    <div class=\"container-fluid\">
        <div class=\"card\">
            <div class=\"header\">
                <h4 class=\"title\">Notifications</h4>
                <p class=\"category\">Handcrafted by our friend <a target=\"_blank\" href=\"https://github.com/mouse0270\">Robert McIntosh</a>. Please checkout the <a href=\"http://bootstrap-notify.remabledesigns.com/\" target=\"_blank\">full documentation.</a></p>

            </div>
            <div class=\"content\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <h5>Notifications Style</h5>
                        <div class=\"alert alert-info\">
                            <span>This is a plain notification</span>
                        </div>
                        <div class=\"alert alert-info\">
                            <button type=\"button\" aria-hidden=\"true\" class=\"close\">×</button>
                            <span>This is a notification with close button.</span>
                        </div>
                        <div class=\"alert alert-info alert-with-icon\" data-notify=\"container\">
                            <button type=\"button\" aria-hidden=\"true\" class=\"close\">×</button>
                            <span data-notify=\"icon\" class=\"ti-bell\"></span>
                            <span data-notify=\"message\">This is a notification with close button and icon.</span>
                        </div>
                        <div class=\"alert alert-info alert-with-icon\" data-notify=\"container\">
                            <button type=\"button\" aria-hidden=\"true\" class=\"close\">×</button>
                            <span data-notify=\"icon\" class=\"ti-pie-chart\"></span>
                            <span data-notify=\"message\">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</span>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <h5>Notification states</h5>
                        <div class=\"alert alert-info\">
                            <button type=\"button\" aria-hidden=\"true\" class=\"close\">×</button>
                            <span><b> Info - </b> This is a regular notification made with \".alert-info\"</span>
                        </div>
                        <div class=\"alert alert-success\">
                            <button type=\"button\" aria-hidden=\"true\" class=\"close\">×</button>
                            <span><b> Success - </b> This is a regular notification made with \".alert-success\"</span>
                        </div>
                        <div class=\"alert alert-warning\">
                            <button type=\"button\" aria-hidden=\"true\" class=\"close\">×</button>
                            <span><b> Warning - </b> This is a regular notification made with \".alert-warning\"</span>
                        </div>
                        <div class=\"alert alert-danger\">
                            <button type=\"button\" aria-hidden=\"true\" class=\"close\">×</button>
                            <span><b> Danger - </b> This is a regular notification made with \".alert-danger\"</span>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class=\"places-buttons\">
                    <div class=\"row\">
                        <div class=\"col-md-9\">
                            <h5>Notifications Places
                                <p class=\"category\">Click to view notifications</p>
                            </h5>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <button class=\"btn btn-default btn-block\" onclick=\"demo.showNotification('top','left')\">Top Left</button>
                        </div>
                        <div class=\"col-md-3\">
                            <button class=\"btn btn-default btn-block\" onclick=\"demo.showNotification('top','center')\">Top Center</button>
                        </div>
                        <div class=\"col-md-3\">
                            <button class=\"btn btn-default btn-block\" onclick=\"demo.showNotification('top','right')\">Top Right</button>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <button class=\"btn btn-default btn-block\" onclick=\"demo.showNotification('bottom','left')\">Bottom Left</button>
                        </div>
                        <div class=\"col-md-3\">
                            <button class=\"btn btn-default btn-block\" onclick=\"demo.showNotification('bottom','center')\">Bottom Center</button>
                        </div>
                        <div class=\"col-md-3\">
                            <button class=\"btn btn-default btn-block\" onclick=\"demo.showNotification('bottom','right')\">Bottom Right</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_669fd2181842fc947172bc50fa4cae8191ff6dd9829fdaf1af94655dd50fea24->leave($__internal_669fd2181842fc947172bc50fa4cae8191ff6dd9829fdaf1af94655dd50fea24_prof);

    }

    public function getTemplateName()
    {
        return "notifications.html.twig";
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
        <div class=\"card\">
            <div class=\"header\">
                <h4 class=\"title\">Notifications</h4>
                <p class=\"category\">Handcrafted by our friend <a target=\"_blank\" href=\"https://github.com/mouse0270\">Robert McIntosh</a>. Please checkout the <a href=\"http://bootstrap-notify.remabledesigns.com/\" target=\"_blank\">full documentation.</a></p>

            </div>
            <div class=\"content\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <h5>Notifications Style</h5>
                        <div class=\"alert alert-info\">
                            <span>This is a plain notification</span>
                        </div>
                        <div class=\"alert alert-info\">
                            <button type=\"button\" aria-hidden=\"true\" class=\"close\">×</button>
                            <span>This is a notification with close button.</span>
                        </div>
                        <div class=\"alert alert-info alert-with-icon\" data-notify=\"container\">
                            <button type=\"button\" aria-hidden=\"true\" class=\"close\">×</button>
                            <span data-notify=\"icon\" class=\"ti-bell\"></span>
                            <span data-notify=\"message\">This is a notification with close button and icon.</span>
                        </div>
                        <div class=\"alert alert-info alert-with-icon\" data-notify=\"container\">
                            <button type=\"button\" aria-hidden=\"true\" class=\"close\">×</button>
                            <span data-notify=\"icon\" class=\"ti-pie-chart\"></span>
                            <span data-notify=\"message\">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</span>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <h5>Notification states</h5>
                        <div class=\"alert alert-info\">
                            <button type=\"button\" aria-hidden=\"true\" class=\"close\">×</button>
                            <span><b> Info - </b> This is a regular notification made with \".alert-info\"</span>
                        </div>
                        <div class=\"alert alert-success\">
                            <button type=\"button\" aria-hidden=\"true\" class=\"close\">×</button>
                            <span><b> Success - </b> This is a regular notification made with \".alert-success\"</span>
                        </div>
                        <div class=\"alert alert-warning\">
                            <button type=\"button\" aria-hidden=\"true\" class=\"close\">×</button>
                            <span><b> Warning - </b> This is a regular notification made with \".alert-warning\"</span>
                        </div>
                        <div class=\"alert alert-danger\">
                            <button type=\"button\" aria-hidden=\"true\" class=\"close\">×</button>
                            <span><b> Danger - </b> This is a regular notification made with \".alert-danger\"</span>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class=\"places-buttons\">
                    <div class=\"row\">
                        <div class=\"col-md-9\">
                            <h5>Notifications Places
                                <p class=\"category\">Click to view notifications</p>
                            </h5>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <button class=\"btn btn-default btn-block\" onclick=\"demo.showNotification('top','left')\">Top Left</button>
                        </div>
                        <div class=\"col-md-3\">
                            <button class=\"btn btn-default btn-block\" onclick=\"demo.showNotification('top','center')\">Top Center</button>
                        </div>
                        <div class=\"col-md-3\">
                            <button class=\"btn btn-default btn-block\" onclick=\"demo.showNotification('top','right')\">Top Right</button>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <button class=\"btn btn-default btn-block\" onclick=\"demo.showNotification('bottom','left')\">Bottom Left</button>
                        </div>
                        <div class=\"col-md-3\">
                            <button class=\"btn btn-default btn-block\" onclick=\"demo.showNotification('bottom','center')\">Bottom Center</button>
                        </div>
                        <div class=\"col-md-3\">
                            <button class=\"btn btn-default btn-block\" onclick=\"demo.showNotification('bottom','right')\">Bottom Right</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}
", "notifications.html.twig", "/home/floriane/dashboard/templates/notifications.html.twig");
    }
}
