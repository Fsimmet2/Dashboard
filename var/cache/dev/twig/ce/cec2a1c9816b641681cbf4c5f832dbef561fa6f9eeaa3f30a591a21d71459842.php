<?php

/* footer.html.twig */
class __TwigTemplate_4f70c5b2293e82867473712fe34a44d19cb56dabe31e1239e513b0f517f55ff3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc1a06ceeee1906b1f7f481306b80ad6ddf839bed927c575bc5d6f1eec932524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc1a06ceeee1906b1f7f481306b80ad6ddf839bed927c575bc5d6f1eec932524->enter($__internal_cc1a06ceeee1906b1f7f481306b80ad6ddf839bed927c575bc5d6f1eec932524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_cc1a06ceeee1906b1f7f481306b80ad6ddf839bed927c575bc5d6f1eec932524->leave($__internal_cc1a06ceeee1906b1f7f481306b80ad6ddf839bed927c575bc5d6f1eec932524_prof);

    }

    public function block_footer($context, array $blocks = array())
    {
        $__internal_e81a4bb74815006fac96ca185f8a9d69dfe8d2780cc5c7314570c4704ba27172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e81a4bb74815006fac96ca185f8a9d69dfe8d2780cc5c7314570c4704ba27172->enter($__internal_e81a4bb74815006fac96ca185f8a9d69dfe8d2780cc5c7314570c4704ba27172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 2
        echo "<footer class=\"footer\">
    <div class=\"container-fluid\">
        <nav class=\"pull-left\">
            <ul>

                <li>
                    <a href=\"http://www.creative-tim.com\">
                        Creative Tim
                    </a>
                </li>
                <li>
                    <a href=\"http://blog.creative-tim.com\">
                       Blog
                    </a>
                </li>
                <li>
                    <a href=\"http://www.creative-tim.com/license\">
                        Licenses
                    </a>
                </li>
            </ul>
        </nav>
        <div class=\"copyright pull-right\">
            &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class=\"fa fa-heart heart\"></i> by <a href=\"http://www.creative-tim.com\">Creative Tim</a>
        </div>
    </div>
</footer>
</div>
</div>
";
        
        $__internal_e81a4bb74815006fac96ca185f8a9d69dfe8d2780cc5c7314570c4704ba27172->leave($__internal_e81a4bb74815006fac96ca185f8a9d69dfe8d2780cc5c7314570c4704ba27172_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block footer %}
<footer class=\"footer\">
    <div class=\"container-fluid\">
        <nav class=\"pull-left\">
            <ul>

                <li>
                    <a href=\"http://www.creative-tim.com\">
                        Creative Tim
                    </a>
                </li>
                <li>
                    <a href=\"http://blog.creative-tim.com\">
                       Blog
                    </a>
                </li>
                <li>
                    <a href=\"http://www.creative-tim.com/license\">
                        Licenses
                    </a>
                </li>
            </ul>
        </nav>
        <div class=\"copyright pull-right\">
            &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class=\"fa fa-heart heart\"></i> by <a href=\"http://www.creative-tim.com\">Creative Tim</a>
        </div>
    </div>
</footer>
</div>
</div>
{% endblock %}
", "footer.html.twig", "/home/floriane/Dashboard/templates/footer.html.twig");
    }
}
