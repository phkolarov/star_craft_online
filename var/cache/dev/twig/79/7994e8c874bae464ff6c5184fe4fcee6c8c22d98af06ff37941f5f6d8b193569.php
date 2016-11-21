<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_99658b76a48b12d6825d3363b7314f9cea425eb886c81ef0fba211f0dddd1815 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cea9c22bff36b826333e0e54e7336d37645ffd06ad13bdc98e733b8de27b64c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea9c22bff36b826333e0e54e7336d37645ffd06ad13bdc98e733b8de27b64c0->enter($__internal_cea9c22bff36b826333e0e54e7336d37645ffd06ad13bdc98e733b8de27b64c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cea9c22bff36b826333e0e54e7336d37645ffd06ad13bdc98e733b8de27b64c0->leave($__internal_cea9c22bff36b826333e0e54e7336d37645ffd06ad13bdc98e733b8de27b64c0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5d3f537f6863a02c00102e61512d1730574a58ba913ab03576f2269b17aa547e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d3f537f6863a02c00102e61512d1730574a58ba913ab03576f2269b17aa547e->enter($__internal_5d3f537f6863a02c00102e61512d1730574a58ba913ab03576f2269b17aa547e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_5d3f537f6863a02c00102e61512d1730574a58ba913ab03576f2269b17aa547e->leave($__internal_5d3f537f6863a02c00102e61512d1730574a58ba913ab03576f2269b17aa547e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cb49c610cc2df08482dbe1b5a5ed2ca5d9df9d8f95993ad9a6d264d2a2ed7d3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb49c610cc2df08482dbe1b5a5ed2ca5d9df9d8f95993ad9a6d264d2a2ed7d3d->enter($__internal_cb49c610cc2df08482dbe1b5a5ed2ca5d9df9d8f95993ad9a6d264d2a2ed7d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cb49c610cc2df08482dbe1b5a5ed2ca5d9df9d8f95993ad9a6d264d2a2ed7d3d->leave($__internal_cb49c610cc2df08482dbe1b5a5ed2ca5d9df9d8f95993ad9a6d264d2a2ed7d3d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3a09eaa22722238d6fc9cc543ac139ae286ae61a3a85cb660cd6f45a613138e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a09eaa22722238d6fc9cc543ac139ae286ae61a3a85cb660cd6f45a613138e6->enter($__internal_3a09eaa22722238d6fc9cc543ac139ae286ae61a3a85cb660cd6f45a613138e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3a09eaa22722238d6fc9cc543ac139ae286ae61a3a85cb660cd6f45a613138e6->leave($__internal_3a09eaa22722238d6fc9cc543ac139ae286ae61a3a85cb660cd6f45a613138e6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp_1\\htdocs\\star_craft_online\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
