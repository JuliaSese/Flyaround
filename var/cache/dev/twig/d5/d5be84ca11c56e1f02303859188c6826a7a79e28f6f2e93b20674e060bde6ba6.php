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
        $__internal_a7222270c025c37465e75ff46b7e179a5adc2d7c54caf2b867440b9e39492a81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7222270c025c37465e75ff46b7e179a5adc2d7c54caf2b867440b9e39492a81->enter($__internal_a7222270c025c37465e75ff46b7e179a5adc2d7c54caf2b867440b9e39492a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ebee4edff168c6698b842d28b7d2abc63fa3f9e631de7c7f691c7038e7c41a78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebee4edff168c6698b842d28b7d2abc63fa3f9e631de7c7f691c7038e7c41a78->enter($__internal_ebee4edff168c6698b842d28b7d2abc63fa3f9e631de7c7f691c7038e7c41a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7222270c025c37465e75ff46b7e179a5adc2d7c54caf2b867440b9e39492a81->leave($__internal_a7222270c025c37465e75ff46b7e179a5adc2d7c54caf2b867440b9e39492a81_prof);

        
        $__internal_ebee4edff168c6698b842d28b7d2abc63fa3f9e631de7c7f691c7038e7c41a78->leave($__internal_ebee4edff168c6698b842d28b7d2abc63fa3f9e631de7c7f691c7038e7c41a78_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4a15c90ed5fb9cbff702c0f6f8e2de465803a05f72919bccbdb6743c221bcea9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a15c90ed5fb9cbff702c0f6f8e2de465803a05f72919bccbdb6743c221bcea9->enter($__internal_4a15c90ed5fb9cbff702c0f6f8e2de465803a05f72919bccbdb6743c221bcea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_54140d1fc04e30cccebf4c0339d252a3d28278f8f36c5fe5a5564cff40f6003e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54140d1fc04e30cccebf4c0339d252a3d28278f8f36c5fe5a5564cff40f6003e->enter($__internal_54140d1fc04e30cccebf4c0339d252a3d28278f8f36c5fe5a5564cff40f6003e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_54140d1fc04e30cccebf4c0339d252a3d28278f8f36c5fe5a5564cff40f6003e->leave($__internal_54140d1fc04e30cccebf4c0339d252a3d28278f8f36c5fe5a5564cff40f6003e_prof);

        
        $__internal_4a15c90ed5fb9cbff702c0f6f8e2de465803a05f72919bccbdb6743c221bcea9->leave($__internal_4a15c90ed5fb9cbff702c0f6f8e2de465803a05f72919bccbdb6743c221bcea9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ad0a0f51f032d695b76831b532573234f2d98569be0fffb0dff9d8dd687886fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad0a0f51f032d695b76831b532573234f2d98569be0fffb0dff9d8dd687886fc->enter($__internal_ad0a0f51f032d695b76831b532573234f2d98569be0fffb0dff9d8dd687886fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fe796c940dcd603541fc234714a3df5a73f291b314a359ca0037b04d115cf8a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe796c940dcd603541fc234714a3df5a73f291b314a359ca0037b04d115cf8a6->enter($__internal_fe796c940dcd603541fc234714a3df5a73f291b314a359ca0037b04d115cf8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_fe796c940dcd603541fc234714a3df5a73f291b314a359ca0037b04d115cf8a6->leave($__internal_fe796c940dcd603541fc234714a3df5a73f291b314a359ca0037b04d115cf8a6_prof);

        
        $__internal_ad0a0f51f032d695b76831b532573234f2d98569be0fffb0dff9d8dd687886fc->leave($__internal_ad0a0f51f032d695b76831b532573234f2d98569be0fffb0dff9d8dd687886fc_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d10898d936ac9a1e2e51a05196370bbaa09ec6d619b2a010a9df505f1cea0632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d10898d936ac9a1e2e51a05196370bbaa09ec6d619b2a010a9df505f1cea0632->enter($__internal_d10898d936ac9a1e2e51a05196370bbaa09ec6d619b2a010a9df505f1cea0632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ed95f228e1213a663e43f7c3436ed5b8dd91d9a19a6d40079eed28a851c8c5ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed95f228e1213a663e43f7c3436ed5b8dd91d9a19a6d40079eed28a851c8c5ca->enter($__internal_ed95f228e1213a663e43f7c3436ed5b8dd91d9a19a6d40079eed28a851c8c5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ed95f228e1213a663e43f7c3436ed5b8dd91d9a19a6d40079eed28a851c8c5ca->leave($__internal_ed95f228e1213a663e43f7c3436ed5b8dd91d9a19a6d40079eed28a851c8c5ca_prof);

        
        $__internal_d10898d936ac9a1e2e51a05196370bbaa09ec6d619b2a010a9df505f1cea0632->leave($__internal_d10898d936ac9a1e2e51a05196370bbaa09ec6d619b2a010a9df505f1cea0632_prof);

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
