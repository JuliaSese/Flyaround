<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_643bba5d89ca44059d47ce3f38fcf43da437e11388430e35d17fe28010f9b6d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_643bba5d89ca44059d47ce3f38fcf43da437e11388430e35d17fe28010f9b6d2->enter($__internal_643bba5d89ca44059d47ce3f38fcf43da437e11388430e35d17fe28010f9b6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_362f8ed46af37eb2b91f46b1b7b23d8cf1528841c11070affc57ffafe9a89ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_362f8ed46af37eb2b91f46b1b7b23d8cf1528841c11070affc57ffafe9a89ccb->enter($__internal_362f8ed46af37eb2b91f46b1b7b23d8cf1528841c11070affc57ffafe9a89ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_643bba5d89ca44059d47ce3f38fcf43da437e11388430e35d17fe28010f9b6d2->leave($__internal_643bba5d89ca44059d47ce3f38fcf43da437e11388430e35d17fe28010f9b6d2_prof);

        
        $__internal_362f8ed46af37eb2b91f46b1b7b23d8cf1528841c11070affc57ffafe9a89ccb->leave($__internal_362f8ed46af37eb2b91f46b1b7b23d8cf1528841c11070affc57ffafe9a89ccb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5774ef3b4d404c483f7f4f13abf2fdadfd8a2bae73c0a38a5c49b67901d00881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5774ef3b4d404c483f7f4f13abf2fdadfd8a2bae73c0a38a5c49b67901d00881->enter($__internal_5774ef3b4d404c483f7f4f13abf2fdadfd8a2bae73c0a38a5c49b67901d00881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c547f91cd7a770e8259c236f51a3ff4f67676aec87b3a1f286bc0740080b36c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c547f91cd7a770e8259c236f51a3ff4f67676aec87b3a1f286bc0740080b36c3->enter($__internal_c547f91cd7a770e8259c236f51a3ff4f67676aec87b3a1f286bc0740080b36c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c547f91cd7a770e8259c236f51a3ff4f67676aec87b3a1f286bc0740080b36c3->leave($__internal_c547f91cd7a770e8259c236f51a3ff4f67676aec87b3a1f286bc0740080b36c3_prof);

        
        $__internal_5774ef3b4d404c483f7f4f13abf2fdadfd8a2bae73c0a38a5c49b67901d00881->leave($__internal_5774ef3b4d404c483f7f4f13abf2fdadfd8a2bae73c0a38a5c49b67901d00881_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_13f52f912c8a44a7247140ff524b6ba6bd48e02aad56617194bc5002c09fc9d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13f52f912c8a44a7247140ff524b6ba6bd48e02aad56617194bc5002c09fc9d9->enter($__internal_13f52f912c8a44a7247140ff524b6ba6bd48e02aad56617194bc5002c09fc9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bfb8f9d52be93c17ec25213f4f8f6eb902460da7a134160b0f7ea27f7942e87e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfb8f9d52be93c17ec25213f4f8f6eb902460da7a134160b0f7ea27f7942e87e->enter($__internal_bfb8f9d52be93c17ec25213f4f8f6eb902460da7a134160b0f7ea27f7942e87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_bfb8f9d52be93c17ec25213f4f8f6eb902460da7a134160b0f7ea27f7942e87e->leave($__internal_bfb8f9d52be93c17ec25213f4f8f6eb902460da7a134160b0f7ea27f7942e87e_prof);

        
        $__internal_13f52f912c8a44a7247140ff524b6ba6bd48e02aad56617194bc5002c09fc9d9->leave($__internal_13f52f912c8a44a7247140ff524b6ba6bd48e02aad56617194bc5002c09fc9d9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ec93e6177386000367572aa6fa57c89a12f4a4157c5d5b92720f0b55e8f416a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ec93e6177386000367572aa6fa57c89a12f4a4157c5d5b92720f0b55e8f416a->enter($__internal_9ec93e6177386000367572aa6fa57c89a12f4a4157c5d5b92720f0b55e8f416a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0ed893b01840c51321140b1a5fae9b72ee372b42a47e38e3c75e53709c328593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed893b01840c51321140b1a5fae9b72ee372b42a47e38e3c75e53709c328593->enter($__internal_0ed893b01840c51321140b1a5fae9b72ee372b42a47e38e3c75e53709c328593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0ed893b01840c51321140b1a5fae9b72ee372b42a47e38e3c75e53709c328593->leave($__internal_0ed893b01840c51321140b1a5fae9b72ee372b42a47e38e3c75e53709c328593_prof);

        
        $__internal_9ec93e6177386000367572aa6fa57c89a12f4a4157c5d5b92720f0b55e8f416a->leave($__internal_9ec93e6177386000367572aa6fa57c89a12f4a4157c5d5b92720f0b55e8f416a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
