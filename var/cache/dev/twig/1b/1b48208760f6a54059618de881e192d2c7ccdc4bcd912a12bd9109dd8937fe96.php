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
        $__internal_d28cd8cd67f5e0bd8e9f2d88269902c2d80b4d72a0cb003f4910bdc61494dda9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d28cd8cd67f5e0bd8e9f2d88269902c2d80b4d72a0cb003f4910bdc61494dda9->enter($__internal_d28cd8cd67f5e0bd8e9f2d88269902c2d80b4d72a0cb003f4910bdc61494dda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "typo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d28cd8cd67f5e0bd8e9f2d88269902c2d80b4d72a0cb003f4910bdc61494dda9->leave($__internal_d28cd8cd67f5e0bd8e9f2d88269902c2d80b4d72a0cb003f4910bdc61494dda9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ffc9913cc16c2ebb3e038037e8389e9c6703a9108d44dfa77ef794a367aeaf39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc9913cc16c2ebb3e038037e8389e9c6703a9108d44dfa77ef794a367aeaf39->enter($__internal_ffc9913cc16c2ebb3e038037e8389e9c6703a9108d44dfa77ef794a367aeaf39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Paper Dashboard by Creative Tim";
        
        $__internal_ffc9913cc16c2ebb3e038037e8389e9c6703a9108d44dfa77ef794a367aeaf39->leave($__internal_ffc9913cc16c2ebb3e038037e8389e9c6703a9108d44dfa77ef794a367aeaf39_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_54fb4d529c62950617d667f10ef1f044d1ea239ef3173c0fc82524ea373128d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54fb4d529c62950617d667f10ef1f044d1ea239ef3173c0fc82524ea373128d0->enter($__internal_54fb4d529c62950617d667f10ef1f044d1ea239ef3173c0fc82524ea373128d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_54fb4d529c62950617d667f10ef1f044d1ea239ef3173c0fc82524ea373128d0->leave($__internal_54fb4d529c62950617d667f10ef1f044d1ea239ef3173c0fc82524ea373128d0_prof);

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
", "typo.html.twig", "/home/floriane/dashboard/templates/typo.html.twig");
    }
}
