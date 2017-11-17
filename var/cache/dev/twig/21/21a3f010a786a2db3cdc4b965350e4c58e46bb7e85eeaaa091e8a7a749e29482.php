<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_f4b9826d8531c0d53aa596655d08ab2e86e5436aa6bf7e0958e632203dd7971b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40675a9506818d688528981e55eb6b4fc3b8d58cd5247ed75b592e00e6e58bc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40675a9506818d688528981e55eb6b4fc3b8d58cd5247ed75b592e00e6e58bc7->enter($__internal_40675a9506818d688528981e55eb6b4fc3b8d58cd5247ed75b592e00e6e58bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_d9cb4684f798cfd2617bb636fa6767a49634ac66ef67678bff40e7dbb287de23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9cb4684f798cfd2617bb636fa6767a49634ac66ef67678bff40e7dbb287de23->enter($__internal_d9cb4684f798cfd2617bb636fa6767a49634ac66ef67678bff40e7dbb287de23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40675a9506818d688528981e55eb6b4fc3b8d58cd5247ed75b592e00e6e58bc7->leave($__internal_40675a9506818d688528981e55eb6b4fc3b8d58cd5247ed75b592e00e6e58bc7_prof);

        
        $__internal_d9cb4684f798cfd2617bb636fa6767a49634ac66ef67678bff40e7dbb287de23->leave($__internal_d9cb4684f798cfd2617bb636fa6767a49634ac66ef67678bff40e7dbb287de23_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_770e40968620e70a32fcabca8b586a869045981e4a25a5dcf6fdcef7d4634163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_770e40968620e70a32fcabca8b586a869045981e4a25a5dcf6fdcef7d4634163->enter($__internal_770e40968620e70a32fcabca8b586a869045981e4a25a5dcf6fdcef7d4634163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_86808248f0b97a56f78f62d2641907af4538f9735cf32b65ca48fd5ab3c14424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86808248f0b97a56f78f62d2641907af4538f9735cf32b65ca48fd5ab3c14424->enter($__internal_86808248f0b97a56f78f62d2641907af4538f9735cf32b65ca48fd5ab3c14424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_86808248f0b97a56f78f62d2641907af4538f9735cf32b65ca48fd5ab3c14424->leave($__internal_86808248f0b97a56f78f62d2641907af4538f9735cf32b65ca48fd5ab3c14424_prof);

        
        $__internal_770e40968620e70a32fcabca8b586a869045981e4a25a5dcf6fdcef7d4634163->leave($__internal_770e40968620e70a32fcabca8b586a869045981e4a25a5dcf6fdcef7d4634163_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8152bd80ff1a7bc66c391b49ff1df55782b08c2eb40ca5542d157f33ff1cb25d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8152bd80ff1a7bc66c391b49ff1df55782b08c2eb40ca5542d157f33ff1cb25d->enter($__internal_8152bd80ff1a7bc66c391b49ff1df55782b08c2eb40ca5542d157f33ff1cb25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc2f4c5f9ca83ad013c279d62147e4eeba8c36f07522b3b7b2c8d7bf6021a099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc2f4c5f9ca83ad013c279d62147e4eeba8c36f07522b3b7b2c8d7bf6021a099->enter($__internal_cc2f4c5f9ca83ad013c279d62147e4eeba8c36f07522b3b7b2c8d7bf6021a099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_cc2f4c5f9ca83ad013c279d62147e4eeba8c36f07522b3b7b2c8d7bf6021a099->leave($__internal_cc2f4c5f9ca83ad013c279d62147e4eeba8c36f07522b3b7b2c8d7bf6021a099_prof);

        
        $__internal_8152bd80ff1a7bc66c391b49ff1df55782b08c2eb40ca5542d157f33ff1cb25d->leave($__internal_8152bd80ff1a7bc66c391b49ff1df55782b08c2eb40ca5542d157f33ff1cb25d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
