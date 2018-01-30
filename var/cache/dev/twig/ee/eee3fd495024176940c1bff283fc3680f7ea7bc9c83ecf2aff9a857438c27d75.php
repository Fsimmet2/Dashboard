<?php

/* user.html.twig */
class __TwigTemplate_7a63cf987cb54a92c6040b1c729973f45d334ca12db848c39e84234a035fac29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user.html.twig", 1);
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
        $__internal_385481e25f57ad62cff100e11b8f8cd1ceaf548a99f16aa0f681f89835b773f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_385481e25f57ad62cff100e11b8f8cd1ceaf548a99f16aa0f681f89835b773f8->enter($__internal_385481e25f57ad62cff100e11b8f8cd1ceaf548a99f16aa0f681f89835b773f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_385481e25f57ad62cff100e11b8f8cd1ceaf548a99f16aa0f681f89835b773f8->leave($__internal_385481e25f57ad62cff100e11b8f8cd1ceaf548a99f16aa0f681f89835b773f8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_78c6c5ffda4385d4aab3c1f17cf0c3ed3d8cc3a22d410291d376fad2e70e3c82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78c6c5ffda4385d4aab3c1f17cf0c3ed3d8cc3a22d410291d376fad2e70e3c82->enter($__internal_78c6c5ffda4385d4aab3c1f17cf0c3ed3d8cc3a22d410291d376fad2e70e3c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Paper Dashboard by Creative Tim";
        
        $__internal_78c6c5ffda4385d4aab3c1f17cf0c3ed3d8cc3a22d410291d376fad2e70e3c82->leave($__internal_78c6c5ffda4385d4aab3c1f17cf0c3ed3d8cc3a22d410291d376fad2e70e3c82_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_7524b719ec843f81a3171522b9ceec7d37ed4cab248eff600ee4fa9ff4b39e67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7524b719ec843f81a3171522b9ceec7d37ed4cab248eff600ee4fa9ff4b39e67->enter($__internal_7524b719ec843f81a3171522b9ceec7d37ed4cab248eff600ee4fa9ff4b39e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

        <div class=\"content\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-5\">
                        <div class=\"card card-user\">
                            <div class=\"image\">
                                <img src=\"assets/img/background.jpg\" alt=\"...\"/>
                            </div>
                            <div class=\"content\">
                                <div class=\"author\">
                                  <img class=\"avatar border-white\" src=\"assets/img/faces/face-2.jpg\" alt=\"...\"/>
                                  <h4 class=\"title\">Chet Faker<br />
                                     <a href=\"#\"><small>@chetfaker</small></a>
                                  </h4>
                                </div>
                                <p class=\"description text-center\">
                                    \"I like the way you work it <br>
                                    No diggity <br>
                                    I wanna bag it up\"
                                </p>
                            </div>
                            <hr>
                            <div class=\"text-center\">
                                <div class=\"row\">
                                    <div class=\"col-md-3 col-md-offset-1\">
                                        <h5>12<br /><small>Files</small></h5>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <h5>2GB<br /><small>Used</small></h5>
                                    </div>
                                    <div class=\"col-md-3\">
                                        <h5>24,6\$<br /><small>Spent</small></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card\">
                            <div class=\"header\">
                                <h4 class=\"title\">Team Members</h4>
                            </div>
                            <div class=\"content\">
                                <ul class=\"list-unstyled team-members\">
                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-xs-3\">
                                                        <div class=\"avatar\">
                                                            <img src=\"assets/img/faces/face-0.jpg\" alt=\"Circle Image\" class=\"img-circle img-no-padding img-responsive\">
                                                        </div>
                                                    </div>
                                                    <div class=\"col-xs-6\">
                                                        DJ Khaled
                                                        <br />
                                                        <span class=\"text-muted\"><small>Offline</small></span>
                                                    </div>

                                                    <div class=\"col-xs-3 text-right\">
                                                        <btn class=\"btn btn-sm btn-success btn-icon\"><i class=\"fa fa-envelope\"></i></btn>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-xs-3\">
                                                        <div class=\"avatar\">
                                                            <img src=\"assets/img/faces/face-1.jpg\" alt=\"Circle Image\" class=\"img-circle img-no-padding img-responsive\">
                                                        </div>
                                                    </div>
                                                    <div class=\"col-xs-6\">
                                                        Creative Tim
                                                        <br />
                                                        <span class=\"text-success\"><small>Available</small></span>
                                                    </div>

                                                    <div class=\"col-xs-3 text-right\">
                                                        <btn class=\"btn btn-sm btn-success btn-icon\"><i class=\"fa fa-envelope\"></i></btn>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-xs-3\">
                                                        <div class=\"avatar\">
                                                            <img src=\"assets/img/faces/face-3.jpg\" alt=\"Circle Image\" class=\"img-circle img-no-padding img-responsive\">
                                                        </div>
                                                    </div>
                                                    <div class=\"col-xs-6\">
                                                        Flume
                                                        <br />
                                                        <span class=\"text-danger\"><small>Busy</small></span>
                                                    </div>

                                                    <div class=\"col-xs-3 text-right\">
                                                        <btn class=\"btn btn-sm btn-success btn-icon\"><i class=\"fa fa-envelope\"></i></btn>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-8 col-md-7\">
                        <div class=\"card\">
                            <div class=\"header\">
                                <h4 class=\"title\">Edit Profile</h4>
                            </div>
                            <div class=\"content\">
                                <form>
                                    <div class=\"row\">
                                        <div class=\"col-md-5\">
                                            <div class=\"form-group\">
                                                <label>Company</label>
                                                <input type=\"text\" class=\"form-control border-input\" disabled placeholder=\"Company\" value=\"Creative Code Inc.\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-3\">
                                            <div class=\"form-group\">
                                                <label>Username</label>
                                                <input type=\"text\" class=\"form-control border-input\" placeholder=\"Username\" value=\"michael23\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <div class=\"form-group\">
                                                <label for=\"exampleInputEmail1\">Email address</label>
                                                <input type=\"email\" class=\"form-control border-input\" placeholder=\"Email\">
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label>First Name</label>
                                                <input type=\"text\" class=\"form-control border-input\" placeholder=\"Company\" value=\"Chet\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label>Last Name</label>
                                                <input type=\"text\" class=\"form-control border-input\" placeholder=\"Last Name\" value=\"Faker\">
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            <div class=\"form-group\">
                                                <label>Address</label>
                                                <input type=\"text\" class=\"form-control border-input\" placeholder=\"Home Address\" value=\"Melbourne, Australia\">
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-md-4\">
                                            <div class=\"form-group\">
                                                <label>City</label>
                                                <input type=\"text\" class=\"form-control border-input\" placeholder=\"City\" value=\"Melbourne\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <div class=\"form-group\">
                                                <label>Country</label>
                                                <input type=\"text\" class=\"form-control border-input\" placeholder=\"Country\" value=\"Australia\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <div class=\"form-group\">
                                                <label>Postal Code</label>
                                                <input type=\"number\" class=\"form-control border-input\" placeholder=\"ZIP Code\">
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            <div class=\"form-group\">
                                                <label>About Me</label>
                                                <textarea rows=\"5\" class=\"form-control border-input\" placeholder=\"Here can be your description\" value=\"Mike\">Oh so, your weak rhyme
You doubt I'll bother, reading into it
I'll probably won't, left to my own devices
But that's the difference in our opinions.</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"text-center\">
                                        <button type=\"submit\" class=\"btn btn-info btn-fill btn-wd\">Update Profile</button>
                                    </div>
                                    <div class=\"clearfix\"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>




";
        
        $__internal_7524b719ec843f81a3171522b9ceec7d37ed4cab248eff600ee4fa9ff4b39e67->leave($__internal_7524b719ec843f81a3171522b9ceec7d37ed4cab248eff600ee4fa9ff4b39e67_prof);

    }

    public function getTemplateName()
    {
        return "user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  47 => 4,  35 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Paper Dashboard by Creative Tim{% endblock %}

{% block body %}


        <div class=\"content\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-5\">
                        <div class=\"card card-user\">
                            <div class=\"image\">
                                <img src=\"assets/img/background.jpg\" alt=\"...\"/>
                            </div>
                            <div class=\"content\">
                                <div class=\"author\">
                                  <img class=\"avatar border-white\" src=\"assets/img/faces/face-2.jpg\" alt=\"...\"/>
                                  <h4 class=\"title\">Chet Faker<br />
                                     <a href=\"#\"><small>@chetfaker</small></a>
                                  </h4>
                                </div>
                                <p class=\"description text-center\">
                                    \"I like the way you work it <br>
                                    No diggity <br>
                                    I wanna bag it up\"
                                </p>
                            </div>
                            <hr>
                            <div class=\"text-center\">
                                <div class=\"row\">
                                    <div class=\"col-md-3 col-md-offset-1\">
                                        <h5>12<br /><small>Files</small></h5>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <h5>2GB<br /><small>Used</small></h5>
                                    </div>
                                    <div class=\"col-md-3\">
                                        <h5>24,6\$<br /><small>Spent</small></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card\">
                            <div class=\"header\">
                                <h4 class=\"title\">Team Members</h4>
                            </div>
                            <div class=\"content\">
                                <ul class=\"list-unstyled team-members\">
                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-xs-3\">
                                                        <div class=\"avatar\">
                                                            <img src=\"assets/img/faces/face-0.jpg\" alt=\"Circle Image\" class=\"img-circle img-no-padding img-responsive\">
                                                        </div>
                                                    </div>
                                                    <div class=\"col-xs-6\">
                                                        DJ Khaled
                                                        <br />
                                                        <span class=\"text-muted\"><small>Offline</small></span>
                                                    </div>

                                                    <div class=\"col-xs-3 text-right\">
                                                        <btn class=\"btn btn-sm btn-success btn-icon\"><i class=\"fa fa-envelope\"></i></btn>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-xs-3\">
                                                        <div class=\"avatar\">
                                                            <img src=\"assets/img/faces/face-1.jpg\" alt=\"Circle Image\" class=\"img-circle img-no-padding img-responsive\">
                                                        </div>
                                                    </div>
                                                    <div class=\"col-xs-6\">
                                                        Creative Tim
                                                        <br />
                                                        <span class=\"text-success\"><small>Available</small></span>
                                                    </div>

                                                    <div class=\"col-xs-3 text-right\">
                                                        <btn class=\"btn btn-sm btn-success btn-icon\"><i class=\"fa fa-envelope\"></i></btn>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-xs-3\">
                                                        <div class=\"avatar\">
                                                            <img src=\"assets/img/faces/face-3.jpg\" alt=\"Circle Image\" class=\"img-circle img-no-padding img-responsive\">
                                                        </div>
                                                    </div>
                                                    <div class=\"col-xs-6\">
                                                        Flume
                                                        <br />
                                                        <span class=\"text-danger\"><small>Busy</small></span>
                                                    </div>

                                                    <div class=\"col-xs-3 text-right\">
                                                        <btn class=\"btn btn-sm btn-success btn-icon\"><i class=\"fa fa-envelope\"></i></btn>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-8 col-md-7\">
                        <div class=\"card\">
                            <div class=\"header\">
                                <h4 class=\"title\">Edit Profile</h4>
                            </div>
                            <div class=\"content\">
                                <form>
                                    <div class=\"row\">
                                        <div class=\"col-md-5\">
                                            <div class=\"form-group\">
                                                <label>Company</label>
                                                <input type=\"text\" class=\"form-control border-input\" disabled placeholder=\"Company\" value=\"Creative Code Inc.\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-3\">
                                            <div class=\"form-group\">
                                                <label>Username</label>
                                                <input type=\"text\" class=\"form-control border-input\" placeholder=\"Username\" value=\"michael23\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <div class=\"form-group\">
                                                <label for=\"exampleInputEmail1\">Email address</label>
                                                <input type=\"email\" class=\"form-control border-input\" placeholder=\"Email\">
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label>First Name</label>
                                                <input type=\"text\" class=\"form-control border-input\" placeholder=\"Company\" value=\"Chet\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label>Last Name</label>
                                                <input type=\"text\" class=\"form-control border-input\" placeholder=\"Last Name\" value=\"Faker\">
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            <div class=\"form-group\">
                                                <label>Address</label>
                                                <input type=\"text\" class=\"form-control border-input\" placeholder=\"Home Address\" value=\"Melbourne, Australia\">
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-md-4\">
                                            <div class=\"form-group\">
                                                <label>City</label>
                                                <input type=\"text\" class=\"form-control border-input\" placeholder=\"City\" value=\"Melbourne\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <div class=\"form-group\">
                                                <label>Country</label>
                                                <input type=\"text\" class=\"form-control border-input\" placeholder=\"Country\" value=\"Australia\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-4\">
                                            <div class=\"form-group\">
                                                <label>Postal Code</label>
                                                <input type=\"number\" class=\"form-control border-input\" placeholder=\"ZIP Code\">
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            <div class=\"form-group\">
                                                <label>About Me</label>
                                                <textarea rows=\"5\" class=\"form-control border-input\" placeholder=\"Here can be your description\" value=\"Mike\">Oh so, your weak rhyme
You doubt I'll bother, reading into it
I'll probably won't, left to my own devices
But that's the difference in our opinions.</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"text-center\">
                                        <button type=\"submit\" class=\"btn btn-info btn-fill btn-wd\">Update Profile</button>
                                    </div>
                                    <div class=\"clearfix\"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>




{% endblock %}
", "user.html.twig", "/home/floriane/dashboard/templates/user.html.twig");
    }
}
