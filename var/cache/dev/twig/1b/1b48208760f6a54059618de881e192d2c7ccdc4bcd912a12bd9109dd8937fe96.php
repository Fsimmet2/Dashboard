<?php

/* typo.html.twig */
class __TwigTemplate_8869b4398c2cb491d0ed7c9fd17eda961c7ff8edd9cb6f9c16a7d5e90a5cf462 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "typo.html.twig", 1);
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
        $__internal_64efde8008626a12a1a520ebd0f19ca7620c1449dd22b311b3562e2aec4dc3ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64efde8008626a12a1a520ebd0f19ca7620c1449dd22b311b3562e2aec4dc3ce->enter($__internal_64efde8008626a12a1a520ebd0f19ca7620c1449dd22b311b3562e2aec4dc3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "typo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64efde8008626a12a1a520ebd0f19ca7620c1449dd22b311b3562e2aec4dc3ce->leave($__internal_64efde8008626a12a1a520ebd0f19ca7620c1449dd22b311b3562e2aec4dc3ce_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4dcb027bc27624d1c6dc6333c488d494335bd520ed18e94dca53c8d68d97a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4dcb027bc27624d1c6dc6333c488d494335bd520ed18e94dca53c8d68d97a58->enter($__internal_a4dcb027bc27624d1c6dc6333c488d494335bd520ed18e94dca53c8d68d97a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Paper Dashboard by Creative Tim";
        
        $__internal_a4dcb027bc27624d1c6dc6333c488d494335bd520ed18e94dca53c8d68d97a58->leave($__internal_a4dcb027bc27624d1c6dc6333c488d494335bd520ed18e94dca53c8d68d97a58_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fc86a8c8c9e84a3085228cf8b2202a42f10315ba40d7777b229155a0e294eef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fc86a8c8c9e84a3085228cf8b2202a42f10315ba40d7777b229155a0e294eef->enter($__internal_5fc86a8c8c9e84a3085228cf8b2202a42f10315ba40d7777b229155a0e294eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\"content\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <div class=\"header\">
                        <h4 class=\"title\">Paper Dashboard Headings</h4>
                        <p class=\"category\">Created using <a href=\"https://www.google.com/fonts/specimen/Muli\">Muli</a> Font Family</p>
                    </div>
                    <div class=\"content\">

                        <div class=\"typo-line\">
                            <h1><p class=\"category\">Header 1</p>Paper Dashboard Heading </h1>
                        </div>

                            <div class=\"typo-line\">
                            <h2><p class=\"category\">Header 2</p>Paper Dashboard Heading </h2>
                        </div>
                        <div class=\"typo-line\">
                            <h3><p class=\"category\">Header 3</p>Paper Dashboard Heading </h3>
                        </div>
                        <div class=\"typo-line\">
                            <h4><p class=\"category\">Header 4</p>Paper Dashboard Heading </h4>
                        </div>
                        <div class=\"typo-line\">
                            <h5><p class=\"category\">Header 5</p>Paper Dashboard Heading </h5>
                        </div>
                         <div class=\"typo-line\">
                            <h6><p class=\"category\">Header 6</p>Paper Dashboard Heading </h6>
                        </div>
                        <div class=\"typo-line\">
                            <p><span class=\"category\">Paragraph</span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
                        </div>
                        <div class=\"typo-line\">
                            <p class=\"category\">Quote</p>
                            <blockquote>
                             <p>
                             Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
                             </p>
                             <small>
                             Steve Jobs, CEO Apple
                             </small>
                            </blockquote>
                        </div>

                        <div class=\"typo-line\">
                            <p class=\"category\">Muted Text</p>
                            <p class=\"text-muted\">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.
                            </p>
                        </div>
                        <div class=\"typo-line\">
                            <!--
                             there are also \"text-info\", \"text-success\", \"text-warning\", \"text-danger\" clases for the text
                             -->
                            <p class=\"category\">Coloured Text</p>
                            <p class=\"text-primary\">
                                Text Primary - Light Bootstrap Table Heading and complex bootstrap dashboard you've ever seen on the internet.
                            </p>
                            <p class=\"text-info\">
                                Text Info - Light Bootstrap Table Heading and complex bootstrap dashboard you've ever seen on the internet.
                            </p>
                            <p class=\"text-success\">
                                Text Success - Light Bootstrap Table Heading and complex bootstrap dashboard you've ever seen on the internet.
                            </p>
                            <p class=\"text-warning\">
                                Text Warning - Light Bootstrap Table Heading and complex bootstrap dashboard you've ever seen on the internet.
                            </p>
                            <p class=\"text-danger\">
                                Text Danger - Light Bootstrap Table Heading and complex bootstrap dashboard you've ever seen on the internet.
                            </p>
                        </div>

                        <div class=\"typo-line\">
                            <h2><p class=\"category\">Small Tag</p>Header with small subtitle <br><small>\".small\" is a tag for the headers</small> </h2>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

";
        
        $__internal_5fc86a8c8c9e84a3085228cf8b2202a42f10315ba40d7777b229155a0e294eef->leave($__internal_5fc86a8c8c9e84a3085228cf8b2202a42f10315ba40d7777b229155a0e294eef_prof);

    }

    public function getTemplateName()
    {
        return "typo.html.twig";
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

<div class=\"content\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <div class=\"header\">
                        <h4 class=\"title\">Paper Dashboard Headings</h4>
                        <p class=\"category\">Created using <a href=\"https://www.google.com/fonts/specimen/Muli\">Muli</a> Font Family</p>
                    </div>
                    <div class=\"content\">

                        <div class=\"typo-line\">
                            <h1><p class=\"category\">Header 1</p>Paper Dashboard Heading </h1>
                        </div>

                            <div class=\"typo-line\">
                            <h2><p class=\"category\">Header 2</p>Paper Dashboard Heading </h2>
                        </div>
                        <div class=\"typo-line\">
                            <h3><p class=\"category\">Header 3</p>Paper Dashboard Heading </h3>
                        </div>
                        <div class=\"typo-line\">
                            <h4><p class=\"category\">Header 4</p>Paper Dashboard Heading </h4>
                        </div>
                        <div class=\"typo-line\">
                            <h5><p class=\"category\">Header 5</p>Paper Dashboard Heading </h5>
                        </div>
                         <div class=\"typo-line\">
                            <h6><p class=\"category\">Header 6</p>Paper Dashboard Heading </h6>
                        </div>
                        <div class=\"typo-line\">
                            <p><span class=\"category\">Paragraph</span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
                        </div>
                        <div class=\"typo-line\">
                            <p class=\"category\">Quote</p>
                            <blockquote>
                             <p>
                             Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
                             </p>
                             <small>
                             Steve Jobs, CEO Apple
                             </small>
                            </blockquote>
                        </div>

                        <div class=\"typo-line\">
                            <p class=\"category\">Muted Text</p>
                            <p class=\"text-muted\">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.
                            </p>
                        </div>
                        <div class=\"typo-line\">
                            <!--
                             there are also \"text-info\", \"text-success\", \"text-warning\", \"text-danger\" clases for the text
                             -->
                            <p class=\"category\">Coloured Text</p>
                            <p class=\"text-primary\">
                                Text Primary - Light Bootstrap Table Heading and complex bootstrap dashboard you've ever seen on the internet.
                            </p>
                            <p class=\"text-info\">
                                Text Info - Light Bootstrap Table Heading and complex bootstrap dashboard you've ever seen on the internet.
                            </p>
                            <p class=\"text-success\">
                                Text Success - Light Bootstrap Table Heading and complex bootstrap dashboard you've ever seen on the internet.
                            </p>
                            <p class=\"text-warning\">
                                Text Warning - Light Bootstrap Table Heading and complex bootstrap dashboard you've ever seen on the internet.
                            </p>
                            <p class=\"text-danger\">
                                Text Danger - Light Bootstrap Table Heading and complex bootstrap dashboard you've ever seen on the internet.
                            </p>
                        </div>

                        <div class=\"typo-line\">
                            <h2><p class=\"category\">Small Tag</p>Header with small subtitle <br><small>\".small\" is a tag for the headers</small> </h2>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

{% endblock %}
", "typo.html.twig", "/home/floriane/Dashboard/templates/typo.html.twig");
    }
}
