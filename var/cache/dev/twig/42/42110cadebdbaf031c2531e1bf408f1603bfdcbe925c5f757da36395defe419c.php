<?php

/* :flight:new.html.twig */
class __TwigTemplate_98bbd91fa891a71de965b679b57a4c8a4851188e3fcb13f209a3e92a497146ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":flight:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a22406e91b305acf3658d557e524508156e9f12c7bcce52f7e0702f8a41f51a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a22406e91b305acf3658d557e524508156e9f12c7bcce52f7e0702f8a41f51a6->enter($__internal_a22406e91b305acf3658d557e524508156e9f12c7bcce52f7e0702f8a41f51a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":flight:new.html.twig"));

        $__internal_16bdd9f015d96ea3f7c8b2d996db2c90ae1c3d6e9c938d1bb47771365be2ee40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16bdd9f015d96ea3f7c8b2d996db2c90ae1c3d6e9c938d1bb47771365be2ee40->enter($__internal_16bdd9f015d96ea3f7c8b2d996db2c90ae1c3d6e9c938d1bb47771365be2ee40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":flight:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a22406e91b305acf3658d557e524508156e9f12c7bcce52f7e0702f8a41f51a6->leave($__internal_a22406e91b305acf3658d557e524508156e9f12c7bcce52f7e0702f8a41f51a6_prof);

        
        $__internal_16bdd9f015d96ea3f7c8b2d996db2c90ae1c3d6e9c938d1bb47771365be2ee40->leave($__internal_16bdd9f015d96ea3f7c8b2d996db2c90ae1c3d6e9c938d1bb47771365be2ee40_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_36f812f26f7eabb08f7052b096443ec3e91d503eab54bd555aed373ff5a07fe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36f812f26f7eabb08f7052b096443ec3e91d503eab54bd555aed373ff5a07fe9->enter($__internal_36f812f26f7eabb08f7052b096443ec3e91d503eab54bd555aed373ff5a07fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e93c0ea29b3d204b1071869e9e51d7f64fa3c77d634e3d9cdd9599d62c8c4bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e93c0ea29b3d204b1071869e9e51d7f64fa3c77d634e3d9cdd9599d62c8c4bf->enter($__internal_9e93c0ea29b3d204b1071869e9e51d7f64fa3c77d634e3d9cdd9599d62c8c4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Flight creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_9e93c0ea29b3d204b1071869e9e51d7f64fa3c77d634e3d9cdd9599d62c8c4bf->leave($__internal_9e93c0ea29b3d204b1071869e9e51d7f64fa3c77d634e3d9cdd9599d62c8c4bf_prof);

        
        $__internal_36f812f26f7eabb08f7052b096443ec3e91d503eab54bd555aed373ff5a07fe9->leave($__internal_36f812f26f7eabb08f7052b096443ec3e91d503eab54bd555aed373ff5a07fe9_prof);

    }

    public function getTemplateName()
    {
        return ":flight:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Flight creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('flight_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":flight:new.html.twig", "/var/www/html/flyaround/app/Resources/views/flight/new.html.twig");
    }
}
