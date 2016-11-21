<?php

/* default/login.html.twig */
class __TwigTemplate_e5b8c7e8239b1b02bea64fae688e06f52036db3d6ed6a162b409558c3eef2ae4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/login.html.twig", 1);
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
        $__internal_50aba38539da319a1e4d08af0e77db063f4402705955717db5e0ec972931c494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50aba38539da319a1e4d08af0e77db063f4402705955717db5e0ec972931c494->enter($__internal_50aba38539da319a1e4d08af0e77db063f4402705955717db5e0ec972931c494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50aba38539da319a1e4d08af0e77db063f4402705955717db5e0ec972931c494->leave($__internal_50aba38539da319a1e4d08af0e77db063f4402705955717db5e0ec972931c494_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_af8547c65d8834d2b790a565087d9153475ebd3dcec11843b9733375c6668cdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af8547c65d8834d2b790a565087d9153475ebd3dcec11843b9733375c6668cdb->enter($__internal_af8547c65d8834d2b790a565087d9153475ebd3dcec11843b9733375c6668cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "default/login.html.twig"));

        // line 4
        echo "<div class=\"container\">
    <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
        <div class=\"panel\" >
            <div class=\"panel-heading\">
                ";
        // line 9
        echo "            </div>

            <div style=\"padding-top:30px\" class=\"panel-body\" >

                <div style=\"display:none\" id=\"login-alert\" class=\"alert alert-danger col-sm-12\"></div>

                <form id=\"loginform\" class=\"form-horizontal\" role=\"form\">

                    <div style=\"margin-bottom: 25px\" class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                        <input id=\"login-username\" type=\"text\" class=\"form-control\" name=\"username\" value=\"\" placeholder=\"потребител\">
                    </div>

                    <div style=\"margin-bottom: 25px\" class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                        <input id=\"login-password\" type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"парола\">
                    </div>



                    <!--    <div class=\"input-group\">
                                <!--  <div class=\"checkbox\">
                                    <label>
                                      <input id=\"login-remember\" type=\"checkbox\" name=\"remember\" value=\"1\"> Remember me
                                    </label>
                                  </div>
                                </div> -->


                    <div style=\"margin-top:10px\" class=\"form-group\">
                        <!-- Button -->

                        <div class=\"col-sm-12 controls\">
                            <button type=\"submit\" id=\"btn-login\" href=\"#\" class=\"btn btn-success\">Вход  </button>
                            <!--<a id=\"btn-fblogin\" href=\"#\" class=\"btn btn-primary\">Login with Facebook</a>-->

                        </div>
                    </div>


                    <div class=\"form-group\">
                        <div class=\"col-md-12 control\">
                            <div style=\"border-top: 1px solid#888; padding-top:15px; font-size:85%\" >

                                <a href=\"#\" onClick=\"\$('#loginbox').hide(); \$('#signupbox').show()\">
                                    Регистрация
                                </a>
                                ";
        // line 57
        echo "                                ";
        // line 58
        echo "
                            </div>
                        </div>
                    </div>
                </form>



            </div>
        </div>
    </div>
    <div id=\"signupbox\" style=\"display:none; margin-top:50px\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
        <div class=\"panel panel-info\">
            <div class=\"panel-heading\">
                <div class=\"panel-title\">Регистрация</div>
                <div style=\"float:right; font-size: 85%; position: relative; top:-10px\"><a id=\"signinlink\" href=\"#\" onclick=\"\$('#signupbox').hide(); \$('#loginbox').show()\">Sign In</a></div>
            </div>
            <div class=\"panel-body\" >
                <form id=\"signupform\" class=\"form-horizontal\" role=\"form\">

                    <div id=\"signupalert\" style=\"display:none\" class=\"alert alert-danger\">
                        <p>Error:</p>
                        <span></span>
                    </div>



                    <div class=\"form-group\">
                        <label for=\"email\" class=\"col-md-3 control-label\">Email</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" name=\"email\" placeholder=\"Email Address\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"firstname\" class=\"col-md-3 control-label\">Потребителско име</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" name=\"firstname\" placeholder=\"First Name\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"lastname\" class=\"col-md-3 control-label\">Фамилия</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" name=\"lastname\" placeholder=\"Last Name\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"password\" class=\"col-md-3 control-label\">Парола</label>
                        <div class=\"col-md-9\">
                            <input type=\"password\" class=\"form-control\" name=\"passwd\" placeholder=\"Password\">
                        </div>
                    </div>

                    <div style=\"margin-top:10px\" class=\"form-group\">
                        <!-- Button -->

                        <div class=\"col-sm-12 controls\">
                            <button type=\"submit\" id=\"btn-login\" href=\"#\" class=\"btn btn-success\">Регистрация  </button>
                            <!--<a id=\"btn-fblogin\" href=\"#\" class=\"btn btn-primary\">Login with Facebook</a>-->

                        </div>
                    </div>







                </form>
            </div>
        </div>




    </div>
</div>

";
        
        $__internal_af8547c65d8834d2b790a565087d9153475ebd3dcec11843b9733375c6668cdb->leave($__internal_af8547c65d8834d2b790a565087d9153475ebd3dcec11843b9733375c6668cdb_prof);

    }

    public function getTemplateName()
    {
        return "default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 58,  95 => 57,  46 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
    <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
        <div class=\"panel\" >
            <div class=\"panel-heading\">
                {#<div class=\"panel-title\">Login</div>#}
            </div>

            <div style=\"padding-top:30px\" class=\"panel-body\" >

                <div style=\"display:none\" id=\"login-alert\" class=\"alert alert-danger col-sm-12\"></div>

                <form id=\"loginform\" class=\"form-horizontal\" role=\"form\">

                    <div style=\"margin-bottom: 25px\" class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                        <input id=\"login-username\" type=\"text\" class=\"form-control\" name=\"username\" value=\"\" placeholder=\"потребител\">
                    </div>

                    <div style=\"margin-bottom: 25px\" class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                        <input id=\"login-password\" type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"парола\">
                    </div>



                    <!--    <div class=\"input-group\">
                                <!--  <div class=\"checkbox\">
                                    <label>
                                      <input id=\"login-remember\" type=\"checkbox\" name=\"remember\" value=\"1\"> Remember me
                                    </label>
                                  </div>
                                </div> -->


                    <div style=\"margin-top:10px\" class=\"form-group\">
                        <!-- Button -->

                        <div class=\"col-sm-12 controls\">
                            <button type=\"submit\" id=\"btn-login\" href=\"#\" class=\"btn btn-success\">Вход  </button>
                            <!--<a id=\"btn-fblogin\" href=\"#\" class=\"btn btn-primary\">Login with Facebook</a>-->

                        </div>
                    </div>


                    <div class=\"form-group\">
                        <div class=\"col-md-12 control\">
                            <div style=\"border-top: 1px solid#888; padding-top:15px; font-size:85%\" >

                                <a href=\"#\" onClick=\"\$('#loginbox').hide(); \$('#signupbox').show()\">
                                    Регистрация
                                </a>
                                {#<a href=\"#\">Забравена парола?</a>#}
                                {#<div style=\"float:right; font-size: 80%; position: relative; top:-10px\"></div>#}

                            </div>
                        </div>
                    </div>
                </form>



            </div>
        </div>
    </div>
    <div id=\"signupbox\" style=\"display:none; margin-top:50px\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
        <div class=\"panel panel-info\">
            <div class=\"panel-heading\">
                <div class=\"panel-title\">Регистрация</div>
                <div style=\"float:right; font-size: 85%; position: relative; top:-10px\"><a id=\"signinlink\" href=\"#\" onclick=\"\$('#signupbox').hide(); \$('#loginbox').show()\">Sign In</a></div>
            </div>
            <div class=\"panel-body\" >
                <form id=\"signupform\" class=\"form-horizontal\" role=\"form\">

                    <div id=\"signupalert\" style=\"display:none\" class=\"alert alert-danger\">
                        <p>Error:</p>
                        <span></span>
                    </div>



                    <div class=\"form-group\">
                        <label for=\"email\" class=\"col-md-3 control-label\">Email</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" name=\"email\" placeholder=\"Email Address\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"firstname\" class=\"col-md-3 control-label\">Потребителско име</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" name=\"firstname\" placeholder=\"First Name\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"lastname\" class=\"col-md-3 control-label\">Фамилия</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" name=\"lastname\" placeholder=\"Last Name\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"password\" class=\"col-md-3 control-label\">Парола</label>
                        <div class=\"col-md-9\">
                            <input type=\"password\" class=\"form-control\" name=\"passwd\" placeholder=\"Password\">
                        </div>
                    </div>

                    <div style=\"margin-top:10px\" class=\"form-group\">
                        <!-- Button -->

                        <div class=\"col-sm-12 controls\">
                            <button type=\"submit\" id=\"btn-login\" href=\"#\" class=\"btn btn-success\">Регистрация  </button>
                            <!--<a id=\"btn-fblogin\" href=\"#\" class=\"btn btn-primary\">Login with Facebook</a>-->

                        </div>
                    </div>







                </form>
            </div>
        </div>




    </div>
</div>

{% endblock %}", "default/login.html.twig", "C:\\xampp_1\\htdocs\\star_craft_online\\app\\Resources\\views\\default\\login.html.twig");
    }
}
