<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_d063aa8a2cb55541c9f28c714a3206e681af99d9d202ec9c5fb957abf248f7cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1827076ce4e16157945a5a5c01bd96c0218997268bbb081140b25191f7ad045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1827076ce4e16157945a5a5c01bd96c0218997268bbb081140b25191f7ad045->enter($__internal_e1827076ce4e16157945a5a5c01bd96c0218997268bbb081140b25191f7ad045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_fed4921d10613d3836aa86ff96fc011ee3e5110d31404f57482d33cb946e9e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed4921d10613d3836aa86ff96fc011ee3e5110d31404f57482d33cb946e9e6b->enter($__internal_fed4921d10613d3836aa86ff96fc011ee3e5110d31404f57482d33cb946e9e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1827076ce4e16157945a5a5c01bd96c0218997268bbb081140b25191f7ad045->leave($__internal_e1827076ce4e16157945a5a5c01bd96c0218997268bbb081140b25191f7ad045_prof);

        
        $__internal_fed4921d10613d3836aa86ff96fc011ee3e5110d31404f57482d33cb946e9e6b->leave($__internal_fed4921d10613d3836aa86ff96fc011ee3e5110d31404f57482d33cb946e9e6b_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_3a9ae06ce874c019dd152f9f5e9822af6f22a37043c84fce5a55b2e108babbdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a9ae06ce874c019dd152f9f5e9822af6f22a37043c84fce5a55b2e108babbdc->enter($__internal_3a9ae06ce874c019dd152f9f5e9822af6f22a37043c84fce5a55b2e108babbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_23c6c624db2016769ffe958311af14058c5a96a9a629e2c1e057dbaf167f5b08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c6c624db2016769ffe958311af14058c5a96a9a629e2c1e057dbaf167f5b08->enter($__internal_23c6c624db2016769ffe958311af14058c5a96a9a629e2c1e057dbaf167f5b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_23c6c624db2016769ffe958311af14058c5a96a9a629e2c1e057dbaf167f5b08->leave($__internal_23c6c624db2016769ffe958311af14058c5a96a9a629e2c1e057dbaf167f5b08_prof);

        
        $__internal_3a9ae06ce874c019dd152f9f5e9822af6f22a37043c84fce5a55b2e108babbdc->leave($__internal_3a9ae06ce874c019dd152f9f5e9822af6f22a37043c84fce5a55b2e108babbdc_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cd15ec192fb383fd634bb956798181d63f5df284744fe8dd70870f225de22d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd15ec192fb383fd634bb956798181d63f5df284744fe8dd70870f225de22d44->enter($__internal_cd15ec192fb383fd634bb956798181d63f5df284744fe8dd70870f225de22d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a84183226251442aa713ad75915388e0e1ee9fe8206fbf38d7c871a139f31de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a84183226251442aa713ad75915388e0e1ee9fe8206fbf38d7c871a139f31de9->enter($__internal_a84183226251442aa713ad75915388e0e1ee9fe8206fbf38d7c871a139f31de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a84183226251442aa713ad75915388e0e1ee9fe8206fbf38d7c871a139f31de9->leave($__internal_a84183226251442aa713ad75915388e0e1ee9fe8206fbf38d7c871a139f31de9_prof);

        
        $__internal_cd15ec192fb383fd634bb956798181d63f5df284744fe8dd70870f225de22d44->leave($__internal_cd15ec192fb383fd634bb956798181d63f5df284744fe8dd70870f225de22d44_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
