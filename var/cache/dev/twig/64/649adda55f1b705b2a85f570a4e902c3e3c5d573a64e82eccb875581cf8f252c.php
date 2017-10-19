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
        $__internal_2d852d7cff3315ecc30e4bef73a148b263c2f9523bd7a76d2513fb120d310419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d852d7cff3315ecc30e4bef73a148b263c2f9523bd7a76d2513fb120d310419->enter($__internal_2d852d7cff3315ecc30e4bef73a148b263c2f9523bd7a76d2513fb120d310419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f031bc36df4cafbfbb5097d346c91ce5adeb78e19405effaba994310e2d7e9d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f031bc36df4cafbfbb5097d346c91ce5adeb78e19405effaba994310e2d7e9d6->enter($__internal_f031bc36df4cafbfbb5097d346c91ce5adeb78e19405effaba994310e2d7e9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d852d7cff3315ecc30e4bef73a148b263c2f9523bd7a76d2513fb120d310419->leave($__internal_2d852d7cff3315ecc30e4bef73a148b263c2f9523bd7a76d2513fb120d310419_prof);

        
        $__internal_f031bc36df4cafbfbb5097d346c91ce5adeb78e19405effaba994310e2d7e9d6->leave($__internal_f031bc36df4cafbfbb5097d346c91ce5adeb78e19405effaba994310e2d7e9d6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9f78d81f61e4b1d5b9f1f4058a98966faf717b8c57a5a55b4e87bbbd39436057 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f78d81f61e4b1d5b9f1f4058a98966faf717b8c57a5a55b4e87bbbd39436057->enter($__internal_9f78d81f61e4b1d5b9f1f4058a98966faf717b8c57a5a55b4e87bbbd39436057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_993d32741f65a625164cb6d5fa6a80a0794fd87e2ecc573dba68ed966d633c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_993d32741f65a625164cb6d5fa6a80a0794fd87e2ecc573dba68ed966d633c21->enter($__internal_993d32741f65a625164cb6d5fa6a80a0794fd87e2ecc573dba68ed966d633c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_993d32741f65a625164cb6d5fa6a80a0794fd87e2ecc573dba68ed966d633c21->leave($__internal_993d32741f65a625164cb6d5fa6a80a0794fd87e2ecc573dba68ed966d633c21_prof);

        
        $__internal_9f78d81f61e4b1d5b9f1f4058a98966faf717b8c57a5a55b4e87bbbd39436057->leave($__internal_9f78d81f61e4b1d5b9f1f4058a98966faf717b8c57a5a55b4e87bbbd39436057_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4bf7245674a8ca981fa7ab6dac659497091e29cfabb0224ea99497e499eb9b5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bf7245674a8ca981fa7ab6dac659497091e29cfabb0224ea99497e499eb9b5a->enter($__internal_4bf7245674a8ca981fa7ab6dac659497091e29cfabb0224ea99497e499eb9b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_18a131f43d84b14eb53c68dcc7fe751d12b192a0e2b6b2d8f6873b673b156438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a131f43d84b14eb53c68dcc7fe751d12b192a0e2b6b2d8f6873b673b156438->enter($__internal_18a131f43d84b14eb53c68dcc7fe751d12b192a0e2b6b2d8f6873b673b156438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_18a131f43d84b14eb53c68dcc7fe751d12b192a0e2b6b2d8f6873b673b156438->leave($__internal_18a131f43d84b14eb53c68dcc7fe751d12b192a0e2b6b2d8f6873b673b156438_prof);

        
        $__internal_4bf7245674a8ca981fa7ab6dac659497091e29cfabb0224ea99497e499eb9b5a->leave($__internal_4bf7245674a8ca981fa7ab6dac659497091e29cfabb0224ea99497e499eb9b5a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bbcbd975e095beb99d07e31379b05852afb627783d70b941b2542a458f58dc18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbcbd975e095beb99d07e31379b05852afb627783d70b941b2542a458f58dc18->enter($__internal_bbcbd975e095beb99d07e31379b05852afb627783d70b941b2542a458f58dc18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_430600c448d43962ec10a11170be9d8612b8dd32f512929e86557142110ccea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_430600c448d43962ec10a11170be9d8612b8dd32f512929e86557142110ccea5->enter($__internal_430600c448d43962ec10a11170be9d8612b8dd32f512929e86557142110ccea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_430600c448d43962ec10a11170be9d8612b8dd32f512929e86557142110ccea5->leave($__internal_430600c448d43962ec10a11170be9d8612b8dd32f512929e86557142110ccea5_prof);

        
        $__internal_bbcbd975e095beb99d07e31379b05852afb627783d70b941b2542a458f58dc18->leave($__internal_bbcbd975e095beb99d07e31379b05852afb627783d70b941b2542a458f58dc18_prof);

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
