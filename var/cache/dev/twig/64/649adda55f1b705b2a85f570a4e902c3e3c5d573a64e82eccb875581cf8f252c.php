<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
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
        $__internal_702aafa148a6ac3b3b0969f246c6d48dfc2511806dd6c380c5456f0e83fc6a53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_702aafa148a6ac3b3b0969f246c6d48dfc2511806dd6c380c5456f0e83fc6a53->enter($__internal_702aafa148a6ac3b3b0969f246c6d48dfc2511806dd6c380c5456f0e83fc6a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4622dc00b2926640d3659d030a53f0f7d840634d6713d15277c1232068471603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4622dc00b2926640d3659d030a53f0f7d840634d6713d15277c1232068471603->enter($__internal_4622dc00b2926640d3659d030a53f0f7d840634d6713d15277c1232068471603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_702aafa148a6ac3b3b0969f246c6d48dfc2511806dd6c380c5456f0e83fc6a53->leave($__internal_702aafa148a6ac3b3b0969f246c6d48dfc2511806dd6c380c5456f0e83fc6a53_prof);

        
        $__internal_4622dc00b2926640d3659d030a53f0f7d840634d6713d15277c1232068471603->leave($__internal_4622dc00b2926640d3659d030a53f0f7d840634d6713d15277c1232068471603_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0c2349f90f48cab6e70275916d51b52379420ca16d272fdafc3a42a50ce2a56d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c2349f90f48cab6e70275916d51b52379420ca16d272fdafc3a42a50ce2a56d->enter($__internal_0c2349f90f48cab6e70275916d51b52379420ca16d272fdafc3a42a50ce2a56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c7611c1380d7173e49e35f203cafe1dcd1e02db4c687f77e035175eddf06309c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7611c1380d7173e49e35f203cafe1dcd1e02db4c687f77e035175eddf06309c->enter($__internal_c7611c1380d7173e49e35f203cafe1dcd1e02db4c687f77e035175eddf06309c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c7611c1380d7173e49e35f203cafe1dcd1e02db4c687f77e035175eddf06309c->leave($__internal_c7611c1380d7173e49e35f203cafe1dcd1e02db4c687f77e035175eddf06309c_prof);

        
        $__internal_0c2349f90f48cab6e70275916d51b52379420ca16d272fdafc3a42a50ce2a56d->leave($__internal_0c2349f90f48cab6e70275916d51b52379420ca16d272fdafc3a42a50ce2a56d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c81a4be57d6ff2bfe5a46ff0b3572d0efa9378f535bae4780ef611c4ee91857d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c81a4be57d6ff2bfe5a46ff0b3572d0efa9378f535bae4780ef611c4ee91857d->enter($__internal_c81a4be57d6ff2bfe5a46ff0b3572d0efa9378f535bae4780ef611c4ee91857d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_166ef3baf85cc56ada7128eb82da76b1bc5ccbc7b31f499858eaf8f430af020b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_166ef3baf85cc56ada7128eb82da76b1bc5ccbc7b31f499858eaf8f430af020b->enter($__internal_166ef3baf85cc56ada7128eb82da76b1bc5ccbc7b31f499858eaf8f430af020b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_166ef3baf85cc56ada7128eb82da76b1bc5ccbc7b31f499858eaf8f430af020b->leave($__internal_166ef3baf85cc56ada7128eb82da76b1bc5ccbc7b31f499858eaf8f430af020b_prof);

        
        $__internal_c81a4be57d6ff2bfe5a46ff0b3572d0efa9378f535bae4780ef611c4ee91857d->leave($__internal_c81a4be57d6ff2bfe5a46ff0b3572d0efa9378f535bae4780ef611c4ee91857d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0808b9379542a5492d15345139ceeab6f13a43668be25267dabe2cc894e09afa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0808b9379542a5492d15345139ceeab6f13a43668be25267dabe2cc894e09afa->enter($__internal_0808b9379542a5492d15345139ceeab6f13a43668be25267dabe2cc894e09afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bb2e443d8c254433e4589c988fb8e10425d8df8b8ba7215e1af71d556508625c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb2e443d8c254433e4589c988fb8e10425d8df8b8ba7215e1af71d556508625c->enter($__internal_bb2e443d8c254433e4589c988fb8e10425d8df8b8ba7215e1af71d556508625c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bb2e443d8c254433e4589c988fb8e10425d8df8b8ba7215e1af71d556508625c->leave($__internal_bb2e443d8c254433e4589c988fb8e10425d8df8b8ba7215e1af71d556508625c_prof);

        
        $__internal_0808b9379542a5492d15345139ceeab6f13a43668be25267dabe2cc894e09afa->leave($__internal_0808b9379542a5492d15345139ceeab6f13a43668be25267dabe2cc894e09afa_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
