<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_001ec319e56b05cdf9c9542561587dc367de6b139dec9406243e318a64bdc777 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3275bf440cee82b6c2d97b27514dc7ababae597931f39221b4fb99aa9eed9114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3275bf440cee82b6c2d97b27514dc7ababae597931f39221b4fb99aa9eed9114->enter($__internal_3275bf440cee82b6c2d97b27514dc7ababae597931f39221b4fb99aa9eed9114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_07a74fa630562da4c603997ac688cf93bd69c753c62f93a2e69902955a84ad33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07a74fa630562da4c603997ac688cf93bd69c753c62f93a2e69902955a84ad33->enter($__internal_07a74fa630562da4c603997ac688cf93bd69c753c62f93a2e69902955a84ad33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3275bf440cee82b6c2d97b27514dc7ababae597931f39221b4fb99aa9eed9114->leave($__internal_3275bf440cee82b6c2d97b27514dc7ababae597931f39221b4fb99aa9eed9114_prof);

        
        $__internal_07a74fa630562da4c603997ac688cf93bd69c753c62f93a2e69902955a84ad33->leave($__internal_07a74fa630562da4c603997ac688cf93bd69c753c62f93a2e69902955a84ad33_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fcc967fadaa05b4e1a7c054baacf6a0c243243c38e47a100a4192cde16104910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcc967fadaa05b4e1a7c054baacf6a0c243243c38e47a100a4192cde16104910->enter($__internal_fcc967fadaa05b4e1a7c054baacf6a0c243243c38e47a100a4192cde16104910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b914b0146b19c78053c211e6a3d8959ac2444bb2360e00b2b75286351a99f8d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b914b0146b19c78053c211e6a3d8959ac2444bb2360e00b2b75286351a99f8d5->enter($__internal_b914b0146b19c78053c211e6a3d8959ac2444bb2360e00b2b75286351a99f8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_b914b0146b19c78053c211e6a3d8959ac2444bb2360e00b2b75286351a99f8d5->leave($__internal_b914b0146b19c78053c211e6a3d8959ac2444bb2360e00b2b75286351a99f8d5_prof);

        
        $__internal_fcc967fadaa05b4e1a7c054baacf6a0c243243c38e47a100a4192cde16104910->leave($__internal_fcc967fadaa05b4e1a7c054baacf6a0c243243c38e47a100a4192cde16104910_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/flyaround/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
