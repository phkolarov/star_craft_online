<?php

/* base.html.twig */
class __TwigTemplate_2f8ef663e418b810d5cf0ca84cecc9fdf902e1c332f66ef449fbe92ffd9a82b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_719fb8fb703eba62bec2396116994a84eca3b94429d08196bac2b3a36e4c2651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_719fb8fb703eba62bec2396116994a84eca3b94429d08196bac2b3a36e4c2651->enter($__internal_719fb8fb703eba62bec2396116994a84eca3b94429d08196bac2b3a36e4c2651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 9
        echo "    </head>
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/css.css"), "html", null, true);
        echo "\" />
    <script
            src=\"https://code.jquery.com/jquery-3.1.1.min.js\"
            integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
    <body>
        ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_719fb8fb703eba62bec2396116994a84eca3b94429d08196bac2b3a36e4c2651->leave($__internal_719fb8fb703eba62bec2396116994a84eca3b94429d08196bac2b3a36e4c2651_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_80784e037888298f47f3a22df6d86c0ecb3d311afaa61cb1355ee7e03e2a48ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80784e037888298f47f3a22df6d86c0ecb3d311afaa61cb1355ee7e03e2a48ad->enter($__internal_80784e037888298f47f3a22df6d86c0ecb3d311afaa61cb1355ee7e03e2a48ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_80784e037888298f47f3a22df6d86c0ecb3d311afaa61cb1355ee7e03e2a48ad->leave($__internal_80784e037888298f47f3a22df6d86c0ecb3d311afaa61cb1355ee7e03e2a48ad_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_deb4c6ef06799a747e4d9e730b4dd4a72da1b7c2998af4eceb2cc5b707c682ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deb4c6ef06799a747e4d9e730b4dd4a72da1b7c2998af4eceb2cc5b707c682ec->enter($__internal_deb4c6ef06799a747e4d9e730b4dd4a72da1b7c2998af4eceb2cc5b707c682ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_deb4c6ef06799a747e4d9e730b4dd4a72da1b7c2998af4eceb2cc5b707c682ec->leave($__internal_deb4c6ef06799a747e4d9e730b4dd4a72da1b7c2998af4eceb2cc5b707c682ec_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b7ebca76f7a6f6821da37c75315e4a45cb3451c29a19556efe7e0c3dc555362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b7ebca76f7a6f6821da37c75315e4a45cb3451c29a19556efe7e0c3dc555362->enter($__internal_1b7ebca76f7a6f6821da37c75315e4a45cb3451c29a19556efe7e0c3dc555362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_1b7ebca76f7a6f6821da37c75315e4a45cb3451c29a19556efe7e0c3dc555362->leave($__internal_1b7ebca76f7a6f6821da37c75315e4a45cb3451c29a19556efe7e0c3dc555362_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_305fa627fa1ea7fcdc72f0cb08d3f77181c04d813355df8db7721c1731f22772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_305fa627fa1ea7fcdc72f0cb08d3f77181c04d813355df8db7721c1731f22772->enter($__internal_305fa627fa1ea7fcdc72f0cb08d3f77181c04d813355df8db7721c1731f22772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_305fa627fa1ea7fcdc72f0cb08d3f77181c04d813355df8db7721c1731f22772->leave($__internal_305fa627fa1ea7fcdc72f0cb08d3f77181c04d813355df8db7721c1731f22772_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 19,  94 => 18,  83 => 6,  71 => 5,  62 => 20,  59 => 19,  57 => 18,  47 => 11,  43 => 9,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        {#<base href=\"localhost:8080/star_craft_online/web/\">#}
    </head>
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"{{ asset('/css/css.css') }}\" />
    <script
            src=\"https://code.jquery.com/jquery-3.1.1.min.js\"
            integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp_1\\htdocs\\star_craft_online\\app\\Resources\\views\\base.html.twig");
    }
}
