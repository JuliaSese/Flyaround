<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8006b7f8fc2624f01b3de6d52decc5ff3e8fa8050fc8435cce232d4e154540ee extends Twig_Template
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
        $__internal_e794c86c92e61144df77c0ac42836a749eb9e43a2cce35e7ca073f8a2272e626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e794c86c92e61144df77c0ac42836a749eb9e43a2cce35e7ca073f8a2272e626->enter($__internal_e794c86c92e61144df77c0ac42836a749eb9e43a2cce35e7ca073f8a2272e626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7990a656a5203fc2f67ad6768ae97707dc156fd4f7dc9389f8649c7f352a33e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7990a656a5203fc2f67ad6768ae97707dc156fd4f7dc9389f8649c7f352a33e0->enter($__internal_7990a656a5203fc2f67ad6768ae97707dc156fd4f7dc9389f8649c7f352a33e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e794c86c92e61144df77c0ac42836a749eb9e43a2cce35e7ca073f8a2272e626->leave($__internal_e794c86c92e61144df77c0ac42836a749eb9e43a2cce35e7ca073f8a2272e626_prof);

        
        $__internal_7990a656a5203fc2f67ad6768ae97707dc156fd4f7dc9389f8649c7f352a33e0->leave($__internal_7990a656a5203fc2f67ad6768ae97707dc156fd4f7dc9389f8649c7f352a33e0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bebbb7a438df55cfe204b215d45573355d8f43aaabb68e86dc5aa0cb5ea8662f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bebbb7a438df55cfe204b215d45573355d8f43aaabb68e86dc5aa0cb5ea8662f->enter($__internal_bebbb7a438df55cfe204b215d45573355d8f43aaabb68e86dc5aa0cb5ea8662f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6d66043711e3a7f7932904995024ce533e5e288267e2666152e10b25fc62857c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d66043711e3a7f7932904995024ce533e5e288267e2666152e10b25fc62857c->enter($__internal_6d66043711e3a7f7932904995024ce533e5e288267e2666152e10b25fc62857c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6d66043711e3a7f7932904995024ce533e5e288267e2666152e10b25fc62857c->leave($__internal_6d66043711e3a7f7932904995024ce533e5e288267e2666152e10b25fc62857c_prof);

        
        $__internal_bebbb7a438df55cfe204b215d45573355d8f43aaabb68e86dc5aa0cb5ea8662f->leave($__internal_bebbb7a438df55cfe204b215d45573355d8f43aaabb68e86dc5aa0cb5ea8662f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ac52caa88da0043409260836a9a1b13a2d97ff00a2631a3311d054d7da61b821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac52caa88da0043409260836a9a1b13a2d97ff00a2631a3311d054d7da61b821->enter($__internal_ac52caa88da0043409260836a9a1b13a2d97ff00a2631a3311d054d7da61b821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_af03704ba2e6359bda412ab164896f7692df6b469376eb0ae53475356268bb86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af03704ba2e6359bda412ab164896f7692df6b469376eb0ae53475356268bb86->enter($__internal_af03704ba2e6359bda412ab164896f7692df6b469376eb0ae53475356268bb86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_af03704ba2e6359bda412ab164896f7692df6b469376eb0ae53475356268bb86->leave($__internal_af03704ba2e6359bda412ab164896f7692df6b469376eb0ae53475356268bb86_prof);

        
        $__internal_ac52caa88da0043409260836a9a1b13a2d97ff00a2631a3311d054d7da61b821->leave($__internal_ac52caa88da0043409260836a9a1b13a2d97ff00a2631a3311d054d7da61b821_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_18e0fe1865f9735fe41c16da7bee27e869314774cc0adc3024cf2db11de601b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18e0fe1865f9735fe41c16da7bee27e869314774cc0adc3024cf2db11de601b4->enter($__internal_18e0fe1865f9735fe41c16da7bee27e869314774cc0adc3024cf2db11de601b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2c0b03e79395b39706ccbeade2b96b960b187448b112208bbd37233a1d38aaef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0b03e79395b39706ccbeade2b96b960b187448b112208bbd37233a1d38aaef->enter($__internal_2c0b03e79395b39706ccbeade2b96b960b187448b112208bbd37233a1d38aaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_2c0b03e79395b39706ccbeade2b96b960b187448b112208bbd37233a1d38aaef->leave($__internal_2c0b03e79395b39706ccbeade2b96b960b187448b112208bbd37233a1d38aaef_prof);

        
        $__internal_18e0fe1865f9735fe41c16da7bee27e869314774cc0adc3024cf2db11de601b4->leave($__internal_18e0fe1865f9735fe41c16da7bee27e869314774cc0adc3024cf2db11de601b4_prof);

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
