<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_54003b2616e35565cf4c373fece25fad16b55441151134f69941970bae9d0d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54003b2616e35565cf4c373fece25fad16b55441151134f69941970bae9d0d4a->enter($__internal_54003b2616e35565cf4c373fece25fad16b55441151134f69941970bae9d0d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_a0318e51145d4e80e315c564858c6a7bcb20ff2a6a81b6f51a01828007d822f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0318e51145d4e80e315c564858c6a7bcb20ff2a6a81b6f51a01828007d822f4->enter($__internal_a0318e51145d4e80e315c564858c6a7bcb20ff2a6a81b6f51a01828007d822f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54003b2616e35565cf4c373fece25fad16b55441151134f69941970bae9d0d4a->leave($__internal_54003b2616e35565cf4c373fece25fad16b55441151134f69941970bae9d0d4a_prof);

        
        $__internal_a0318e51145d4e80e315c564858c6a7bcb20ff2a6a81b6f51a01828007d822f4->leave($__internal_a0318e51145d4e80e315c564858c6a7bcb20ff2a6a81b6f51a01828007d822f4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_da20115320b5ecc5c55ebb7ee67414d6364a98d59d65bd3ae39a7e7bdabffb40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da20115320b5ecc5c55ebb7ee67414d6364a98d59d65bd3ae39a7e7bdabffb40->enter($__internal_da20115320b5ecc5c55ebb7ee67414d6364a98d59d65bd3ae39a7e7bdabffb40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2cfd60386013bc230b1aad3a26f1be89b71ca96450f8bf8398495f50525e0463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cfd60386013bc230b1aad3a26f1be89b71ca96450f8bf8398495f50525e0463->enter($__internal_2cfd60386013bc230b1aad3a26f1be89b71ca96450f8bf8398495f50525e0463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2cfd60386013bc230b1aad3a26f1be89b71ca96450f8bf8398495f50525e0463->leave($__internal_2cfd60386013bc230b1aad3a26f1be89b71ca96450f8bf8398495f50525e0463_prof);

        
        $__internal_da20115320b5ecc5c55ebb7ee67414d6364a98d59d65bd3ae39a7e7bdabffb40->leave($__internal_da20115320b5ecc5c55ebb7ee67414d6364a98d59d65bd3ae39a7e7bdabffb40_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b3b2d1aded8c8d60128e35d81d4822edbefd00025dc5922c56704ba6eac7d02f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3b2d1aded8c8d60128e35d81d4822edbefd00025dc5922c56704ba6eac7d02f->enter($__internal_b3b2d1aded8c8d60128e35d81d4822edbefd00025dc5922c56704ba6eac7d02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_df71cfa77becf52ae93fa6cd6ba43e676618b9acfbd759baa235354a5149a6f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df71cfa77becf52ae93fa6cd6ba43e676618b9acfbd759baa235354a5149a6f9->enter($__internal_df71cfa77becf52ae93fa6cd6ba43e676618b9acfbd759baa235354a5149a6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_df71cfa77becf52ae93fa6cd6ba43e676618b9acfbd759baa235354a5149a6f9->leave($__internal_df71cfa77becf52ae93fa6cd6ba43e676618b9acfbd759baa235354a5149a6f9_prof);

        
        $__internal_b3b2d1aded8c8d60128e35d81d4822edbefd00025dc5922c56704ba6eac7d02f->leave($__internal_b3b2d1aded8c8d60128e35d81d4822edbefd00025dc5922c56704ba6eac7d02f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_164c05075f1412454dacd4a7836e1fea3b7111531e23ae474f15591db727a6aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_164c05075f1412454dacd4a7836e1fea3b7111531e23ae474f15591db727a6aa->enter($__internal_164c05075f1412454dacd4a7836e1fea3b7111531e23ae474f15591db727a6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a2206a61400dfc8e3bb808c223cc23090a0de7785f1cade8fb32888b73d4852e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2206a61400dfc8e3bb808c223cc23090a0de7785f1cade8fb32888b73d4852e->enter($__internal_a2206a61400dfc8e3bb808c223cc23090a0de7785f1cade8fb32888b73d4852e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a2206a61400dfc8e3bb808c223cc23090a0de7785f1cade8fb32888b73d4852e->leave($__internal_a2206a61400dfc8e3bb808c223cc23090a0de7785f1cade8fb32888b73d4852e_prof);

        
        $__internal_164c05075f1412454dacd4a7836e1fea3b7111531e23ae474f15591db727a6aa->leave($__internal_164c05075f1412454dacd4a7836e1fea3b7111531e23ae474f15591db727a6aa_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
