<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_092f4026fe590e2e462dfc4251c9f4caa065f5c4e2c53e9e00bbc24ef87a5f6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcc1c1dccc8361682e3166e339c6af6e03d8d74339de3debdbdd42b55cf8a609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc1c1dccc8361682e3166e339c6af6e03d8d74339de3debdbdd42b55cf8a609->enter($__internal_fcc1c1dccc8361682e3166e339c6af6e03d8d74339de3debdbdd42b55cf8a609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcc1c1dccc8361682e3166e339c6af6e03d8d74339de3debdbdd42b55cf8a609->leave($__internal_fcc1c1dccc8361682e3166e339c6af6e03d8d74339de3debdbdd42b55cf8a609_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3e34766d03542ee1ad7894cbf17ec4300ad814814813ea7a381d3748cdbed952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e34766d03542ee1ad7894cbf17ec4300ad814814813ea7a381d3748cdbed952->enter($__internal_3e34766d03542ee1ad7894cbf17ec4300ad814814813ea7a381d3748cdbed952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3e34766d03542ee1ad7894cbf17ec4300ad814814813ea7a381d3748cdbed952->leave($__internal_3e34766d03542ee1ad7894cbf17ec4300ad814814813ea7a381d3748cdbed952_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_606363015048bb6cba1a415fdf8f92feb27fd7dacaedd2143c27f4f63dcf82d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_606363015048bb6cba1a415fdf8f92feb27fd7dacaedd2143c27f4f63dcf82d2->enter($__internal_606363015048bb6cba1a415fdf8f92feb27fd7dacaedd2143c27f4f63dcf82d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_606363015048bb6cba1a415fdf8f92feb27fd7dacaedd2143c27f4f63dcf82d2->leave($__internal_606363015048bb6cba1a415fdf8f92feb27fd7dacaedd2143c27f4f63dcf82d2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3da55eabd518df45841e5e865ff771c6a8d6191bfb9db6aea4850381b046e8f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da55eabd518df45841e5e865ff771c6a8d6191bfb9db6aea4850381b046e8f1->enter($__internal_3da55eabd518df45841e5e865ff771c6a8d6191bfb9db6aea4850381b046e8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3da55eabd518df45841e5e865ff771c6a8d6191bfb9db6aea4850381b046e8f1->leave($__internal_3da55eabd518df45841e5e865ff771c6a8d6191bfb9db6aea4850381b046e8f1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp_1\\htdocs\\star_craft_online\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
