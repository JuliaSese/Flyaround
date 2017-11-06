<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_504b4c769556d0dec363c5a1ba46cd1ccd966e1af8d1a9aa5a5f438d60d29ae7 extends Twig_Template
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
        $__internal_e57aed1da794102b5e86bc4225f9730c31dcc168690e12ec72d44f57bdb3b63a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e57aed1da794102b5e86bc4225f9730c31dcc168690e12ec72d44f57bdb3b63a->enter($__internal_e57aed1da794102b5e86bc4225f9730c31dcc168690e12ec72d44f57bdb3b63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c3f01cfd2a9b1e4c55434e8641aa880c5958adcecfc8587c74aa374469eac40d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3f01cfd2a9b1e4c55434e8641aa880c5958adcecfc8587c74aa374469eac40d->enter($__internal_c3f01cfd2a9b1e4c55434e8641aa880c5958adcecfc8587c74aa374469eac40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e57aed1da794102b5e86bc4225f9730c31dcc168690e12ec72d44f57bdb3b63a->leave($__internal_e57aed1da794102b5e86bc4225f9730c31dcc168690e12ec72d44f57bdb3b63a_prof);

        
        $__internal_c3f01cfd2a9b1e4c55434e8641aa880c5958adcecfc8587c74aa374469eac40d->leave($__internal_c3f01cfd2a9b1e4c55434e8641aa880c5958adcecfc8587c74aa374469eac40d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c823efbf3773a44a35994df60486408e908ed93cd36bcd91e247cf08c89fdd2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c823efbf3773a44a35994df60486408e908ed93cd36bcd91e247cf08c89fdd2c->enter($__internal_c823efbf3773a44a35994df60486408e908ed93cd36bcd91e247cf08c89fdd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1279b8cb4e54b82c2e22626a8e6dfdb60b2aaf1b3d14f69316c63002b472c0e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1279b8cb4e54b82c2e22626a8e6dfdb60b2aaf1b3d14f69316c63002b472c0e8->enter($__internal_1279b8cb4e54b82c2e22626a8e6dfdb60b2aaf1b3d14f69316c63002b472c0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1279b8cb4e54b82c2e22626a8e6dfdb60b2aaf1b3d14f69316c63002b472c0e8->leave($__internal_1279b8cb4e54b82c2e22626a8e6dfdb60b2aaf1b3d14f69316c63002b472c0e8_prof);

        
        $__internal_c823efbf3773a44a35994df60486408e908ed93cd36bcd91e247cf08c89fdd2c->leave($__internal_c823efbf3773a44a35994df60486408e908ed93cd36bcd91e247cf08c89fdd2c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1e4e86db8629ba9694a4071e2dbde0e85b8183b50cf39f83c6bc33dcac84fb8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e4e86db8629ba9694a4071e2dbde0e85b8183b50cf39f83c6bc33dcac84fb8e->enter($__internal_1e4e86db8629ba9694a4071e2dbde0e85b8183b50cf39f83c6bc33dcac84fb8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_56029234307dea4b5389b56849e411e103cb8a41dd3e16eb94fd26d14bee08d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56029234307dea4b5389b56849e411e103cb8a41dd3e16eb94fd26d14bee08d9->enter($__internal_56029234307dea4b5389b56849e411e103cb8a41dd3e16eb94fd26d14bee08d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_56029234307dea4b5389b56849e411e103cb8a41dd3e16eb94fd26d14bee08d9->leave($__internal_56029234307dea4b5389b56849e411e103cb8a41dd3e16eb94fd26d14bee08d9_prof);

        
        $__internal_1e4e86db8629ba9694a4071e2dbde0e85b8183b50cf39f83c6bc33dcac84fb8e->leave($__internal_1e4e86db8629ba9694a4071e2dbde0e85b8183b50cf39f83c6bc33dcac84fb8e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_032e50c0518490bcb02abe96153470b9c86321f8d25346f49ba2fa18b97bcf5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_032e50c0518490bcb02abe96153470b9c86321f8d25346f49ba2fa18b97bcf5b->enter($__internal_032e50c0518490bcb02abe96153470b9c86321f8d25346f49ba2fa18b97bcf5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d6dcdfee15bdaba1f9f1ab345a8c57642d3a3dd1b9cbe55101e49a3f95163737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6dcdfee15bdaba1f9f1ab345a8c57642d3a3dd1b9cbe55101e49a3f95163737->enter($__internal_d6dcdfee15bdaba1f9f1ab345a8c57642d3a3dd1b9cbe55101e49a3f95163737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_d6dcdfee15bdaba1f9f1ab345a8c57642d3a3dd1b9cbe55101e49a3f95163737->leave($__internal_d6dcdfee15bdaba1f9f1ab345a8c57642d3a3dd1b9cbe55101e49a3f95163737_prof);

        
        $__internal_032e50c0518490bcb02abe96153470b9c86321f8d25346f49ba2fa18b97bcf5b->leave($__internal_032e50c0518490bcb02abe96153470b9c86321f8d25346f49ba2fa18b97bcf5b_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
