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
        $__internal_a263b40a13ea631c35b5fd4bc67862be642ef7482ad2a7114978986bcb67463a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a263b40a13ea631c35b5fd4bc67862be642ef7482ad2a7114978986bcb67463a->enter($__internal_a263b40a13ea631c35b5fd4bc67862be642ef7482ad2a7114978986bcb67463a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_331cd07d9b8a664fc6fffb8d4324a0a40b66c93c5da71d1318d95dcc04b876da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_331cd07d9b8a664fc6fffb8d4324a0a40b66c93c5da71d1318d95dcc04b876da->enter($__internal_331cd07d9b8a664fc6fffb8d4324a0a40b66c93c5da71d1318d95dcc04b876da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a263b40a13ea631c35b5fd4bc67862be642ef7482ad2a7114978986bcb67463a->leave($__internal_a263b40a13ea631c35b5fd4bc67862be642ef7482ad2a7114978986bcb67463a_prof);

        
        $__internal_331cd07d9b8a664fc6fffb8d4324a0a40b66c93c5da71d1318d95dcc04b876da->leave($__internal_331cd07d9b8a664fc6fffb8d4324a0a40b66c93c5da71d1318d95dcc04b876da_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2d9bec83d5f966d8ffd7d1bebdaa7ca5bdf3dfa2f9310c87f15d28502dc522df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d9bec83d5f966d8ffd7d1bebdaa7ca5bdf3dfa2f9310c87f15d28502dc522df->enter($__internal_2d9bec83d5f966d8ffd7d1bebdaa7ca5bdf3dfa2f9310c87f15d28502dc522df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_85ad8e04d6d436dabc05a1b3ef91a043993326f8aa5ca3e1b171b9e256ec2030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ad8e04d6d436dabc05a1b3ef91a043993326f8aa5ca3e1b171b9e256ec2030->enter($__internal_85ad8e04d6d436dabc05a1b3ef91a043993326f8aa5ca3e1b171b9e256ec2030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_85ad8e04d6d436dabc05a1b3ef91a043993326f8aa5ca3e1b171b9e256ec2030->leave($__internal_85ad8e04d6d436dabc05a1b3ef91a043993326f8aa5ca3e1b171b9e256ec2030_prof);

        
        $__internal_2d9bec83d5f966d8ffd7d1bebdaa7ca5bdf3dfa2f9310c87f15d28502dc522df->leave($__internal_2d9bec83d5f966d8ffd7d1bebdaa7ca5bdf3dfa2f9310c87f15d28502dc522df_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_01e97902145247720ac1def075ee06284bf4d39e5731f1092593690aaa46680e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01e97902145247720ac1def075ee06284bf4d39e5731f1092593690aaa46680e->enter($__internal_01e97902145247720ac1def075ee06284bf4d39e5731f1092593690aaa46680e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c5df9f913266228152643a7a1e32eb75ea80c98ad0d73daee593cbfbf6a7555c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5df9f913266228152643a7a1e32eb75ea80c98ad0d73daee593cbfbf6a7555c->enter($__internal_c5df9f913266228152643a7a1e32eb75ea80c98ad0d73daee593cbfbf6a7555c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c5df9f913266228152643a7a1e32eb75ea80c98ad0d73daee593cbfbf6a7555c->leave($__internal_c5df9f913266228152643a7a1e32eb75ea80c98ad0d73daee593cbfbf6a7555c_prof);

        
        $__internal_01e97902145247720ac1def075ee06284bf4d39e5731f1092593690aaa46680e->leave($__internal_01e97902145247720ac1def075ee06284bf4d39e5731f1092593690aaa46680e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8919f3fc1858f4721db6e49c30e760d66da856dbb7acbabd2a957213d8c8ac39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8919f3fc1858f4721db6e49c30e760d66da856dbb7acbabd2a957213d8c8ac39->enter($__internal_8919f3fc1858f4721db6e49c30e760d66da856dbb7acbabd2a957213d8c8ac39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4cdcdc701a175f49ae2f7583b7977b6066357dfa939f1ee5ea348c18f03c404c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cdcdc701a175f49ae2f7583b7977b6066357dfa939f1ee5ea348c18f03c404c->enter($__internal_4cdcdc701a175f49ae2f7583b7977b6066357dfa939f1ee5ea348c18f03c404c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4cdcdc701a175f49ae2f7583b7977b6066357dfa939f1ee5ea348c18f03c404c->leave($__internal_4cdcdc701a175f49ae2f7583b7977b6066357dfa939f1ee5ea348c18f03c404c_prof);

        
        $__internal_8919f3fc1858f4721db6e49c30e760d66da856dbb7acbabd2a957213d8c8ac39->leave($__internal_8919f3fc1858f4721db6e49c30e760d66da856dbb7acbabd2a957213d8c8ac39_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/flyaround_seb/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
