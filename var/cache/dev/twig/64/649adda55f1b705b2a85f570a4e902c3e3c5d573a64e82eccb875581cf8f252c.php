<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_c777cef8cbf8d42ab09d943670b9c37b810710f99856c8d21c02379af5b3b3de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c777cef8cbf8d42ab09d943670b9c37b810710f99856c8d21c02379af5b3b3de->enter($__internal_c777cef8cbf8d42ab09d943670b9c37b810710f99856c8d21c02379af5b3b3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_9ac893b5e6943d74d0a75f275edc94fab34aafb3ec203c4a7e595025f024885f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ac893b5e6943d74d0a75f275edc94fab34aafb3ec203c4a7e595025f024885f->enter($__internal_9ac893b5e6943d74d0a75f275edc94fab34aafb3ec203c4a7e595025f024885f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c777cef8cbf8d42ab09d943670b9c37b810710f99856c8d21c02379af5b3b3de->leave($__internal_c777cef8cbf8d42ab09d943670b9c37b810710f99856c8d21c02379af5b3b3de_prof);

        
        $__internal_9ac893b5e6943d74d0a75f275edc94fab34aafb3ec203c4a7e595025f024885f->leave($__internal_9ac893b5e6943d74d0a75f275edc94fab34aafb3ec203c4a7e595025f024885f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_145bc721e67a0363613202b571a928c0e07ab89ab519264f90c924b633bc7055 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_145bc721e67a0363613202b571a928c0e07ab89ab519264f90c924b633bc7055->enter($__internal_145bc721e67a0363613202b571a928c0e07ab89ab519264f90c924b633bc7055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_67c62059b0d60b30099c2abd12ef17638e61ad2dbf80d8dd98b28f870b19f91e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c62059b0d60b30099c2abd12ef17638e61ad2dbf80d8dd98b28f870b19f91e->enter($__internal_67c62059b0d60b30099c2abd12ef17638e61ad2dbf80d8dd98b28f870b19f91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_67c62059b0d60b30099c2abd12ef17638e61ad2dbf80d8dd98b28f870b19f91e->leave($__internal_67c62059b0d60b30099c2abd12ef17638e61ad2dbf80d8dd98b28f870b19f91e_prof);

        
        $__internal_145bc721e67a0363613202b571a928c0e07ab89ab519264f90c924b633bc7055->leave($__internal_145bc721e67a0363613202b571a928c0e07ab89ab519264f90c924b633bc7055_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f60e3f7a2497c1b639425ef08be68e636d3f7d53724a8bd61496606a2023bbe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f60e3f7a2497c1b639425ef08be68e636d3f7d53724a8bd61496606a2023bbe5->enter($__internal_f60e3f7a2497c1b639425ef08be68e636d3f7d53724a8bd61496606a2023bbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3932687761e0c54b4ff5d8d4ceb16bb1364a95543592fbb3d8270025dcce1aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3932687761e0c54b4ff5d8d4ceb16bb1364a95543592fbb3d8270025dcce1aab->enter($__internal_3932687761e0c54b4ff5d8d4ceb16bb1364a95543592fbb3d8270025dcce1aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3932687761e0c54b4ff5d8d4ceb16bb1364a95543592fbb3d8270025dcce1aab->leave($__internal_3932687761e0c54b4ff5d8d4ceb16bb1364a95543592fbb3d8270025dcce1aab_prof);

        
        $__internal_f60e3f7a2497c1b639425ef08be68e636d3f7d53724a8bd61496606a2023bbe5->leave($__internal_f60e3f7a2497c1b639425ef08be68e636d3f7d53724a8bd61496606a2023bbe5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3e0330af19796df6d0f3733aa69ae035932d5765d6cb4a66ed64f9cff41e992e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e0330af19796df6d0f3733aa69ae035932d5765d6cb4a66ed64f9cff41e992e->enter($__internal_3e0330af19796df6d0f3733aa69ae035932d5765d6cb4a66ed64f9cff41e992e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bd37991361837cf10f60fd0991a6274c8c8e8d37d1462e3aba24a6b537b3ebe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd37991361837cf10f60fd0991a6274c8c8e8d37d1462e3aba24a6b537b3ebe6->enter($__internal_bd37991361837cf10f60fd0991a6274c8c8e8d37d1462e3aba24a6b537b3ebe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bd37991361837cf10f60fd0991a6274c8c8e8d37d1462e3aba24a6b537b3ebe6->leave($__internal_bd37991361837cf10f60fd0991a6274c8c8e8d37d1462e3aba24a6b537b3ebe6_prof);

        
        $__internal_3e0330af19796df6d0f3733aa69ae035932d5765d6cb4a66ed64f9cff41e992e->leave($__internal_3e0330af19796df6d0f3733aa69ae035932d5765d6cb4a66ed64f9cff41e992e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
