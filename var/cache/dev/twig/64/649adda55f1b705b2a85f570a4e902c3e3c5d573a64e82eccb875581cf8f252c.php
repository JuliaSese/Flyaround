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
        $__internal_7ae317f92ad73ba4d2cba2b063322bc15e572b17396307a68093757458ef1098 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ae317f92ad73ba4d2cba2b063322bc15e572b17396307a68093757458ef1098->enter($__internal_7ae317f92ad73ba4d2cba2b063322bc15e572b17396307a68093757458ef1098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_7339cc10ac56be303720503b83840e9cd91ba7e8774e7d066c5fe4e8a44176e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7339cc10ac56be303720503b83840e9cd91ba7e8774e7d066c5fe4e8a44176e7->enter($__internal_7339cc10ac56be303720503b83840e9cd91ba7e8774e7d066c5fe4e8a44176e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ae317f92ad73ba4d2cba2b063322bc15e572b17396307a68093757458ef1098->leave($__internal_7ae317f92ad73ba4d2cba2b063322bc15e572b17396307a68093757458ef1098_prof);

        
        $__internal_7339cc10ac56be303720503b83840e9cd91ba7e8774e7d066c5fe4e8a44176e7->leave($__internal_7339cc10ac56be303720503b83840e9cd91ba7e8774e7d066c5fe4e8a44176e7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6ce616554da9bca553b6c0d85ee458a46bdbfbee781ca65e982d0d08c22fb596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ce616554da9bca553b6c0d85ee458a46bdbfbee781ca65e982d0d08c22fb596->enter($__internal_6ce616554da9bca553b6c0d85ee458a46bdbfbee781ca65e982d0d08c22fb596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dab4656315fa978b6c68aac14535231b3674d890c0cacda7298d1c81efe14af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dab4656315fa978b6c68aac14535231b3674d890c0cacda7298d1c81efe14af4->enter($__internal_dab4656315fa978b6c68aac14535231b3674d890c0cacda7298d1c81efe14af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dab4656315fa978b6c68aac14535231b3674d890c0cacda7298d1c81efe14af4->leave($__internal_dab4656315fa978b6c68aac14535231b3674d890c0cacda7298d1c81efe14af4_prof);

        
        $__internal_6ce616554da9bca553b6c0d85ee458a46bdbfbee781ca65e982d0d08c22fb596->leave($__internal_6ce616554da9bca553b6c0d85ee458a46bdbfbee781ca65e982d0d08c22fb596_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d261d2d6626b21c67ed29980e982fe53ae09e24245d608af698512daa7647f82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d261d2d6626b21c67ed29980e982fe53ae09e24245d608af698512daa7647f82->enter($__internal_d261d2d6626b21c67ed29980e982fe53ae09e24245d608af698512daa7647f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ac84dbb8e88eee78f1ccc8c58adca3774be5961dda69850d46948466ca7357df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac84dbb8e88eee78f1ccc8c58adca3774be5961dda69850d46948466ca7357df->enter($__internal_ac84dbb8e88eee78f1ccc8c58adca3774be5961dda69850d46948466ca7357df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ac84dbb8e88eee78f1ccc8c58adca3774be5961dda69850d46948466ca7357df->leave($__internal_ac84dbb8e88eee78f1ccc8c58adca3774be5961dda69850d46948466ca7357df_prof);

        
        $__internal_d261d2d6626b21c67ed29980e982fe53ae09e24245d608af698512daa7647f82->leave($__internal_d261d2d6626b21c67ed29980e982fe53ae09e24245d608af698512daa7647f82_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_931cef905a3ddafb0bd2e497f2dde6dfe34c5117de27b4c538b1c9339c17b805 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_931cef905a3ddafb0bd2e497f2dde6dfe34c5117de27b4c538b1c9339c17b805->enter($__internal_931cef905a3ddafb0bd2e497f2dde6dfe34c5117de27b4c538b1c9339c17b805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_63ee4d230a1e5c8afd804721045489728f9dcb685345ae8db768d92adb7250c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63ee4d230a1e5c8afd804721045489728f9dcb685345ae8db768d92adb7250c3->enter($__internal_63ee4d230a1e5c8afd804721045489728f9dcb685345ae8db768d92adb7250c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_63ee4d230a1e5c8afd804721045489728f9dcb685345ae8db768d92adb7250c3->leave($__internal_63ee4d230a1e5c8afd804721045489728f9dcb685345ae8db768d92adb7250c3_prof);

        
        $__internal_931cef905a3ddafb0bd2e497f2dde6dfe34c5117de27b4c538b1c9339c17b805->leave($__internal_931cef905a3ddafb0bd2e497f2dde6dfe34c5117de27b4c538b1c9339c17b805_prof);

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
