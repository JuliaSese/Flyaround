<?php

/* reservation/new.html.twig */
class __TwigTemplate_83fb3bab2fbc4e88b6d30bacb9ce5e72578e903dd8d8e3e4d0b9669b35f3ed0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservation/new.html.twig", 1);
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
        $__internal_cbde3a9e6a905a6285cf001a269ebb7f48ff10d7ef2d6f71ec50503de4241bcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbde3a9e6a905a6285cf001a269ebb7f48ff10d7ef2d6f71ec50503de4241bcf->enter($__internal_cbde3a9e6a905a6285cf001a269ebb7f48ff10d7ef2d6f71ec50503de4241bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/new.html.twig"));

        $__internal_e5ed63a2b4b9114d2c3b7fd63b832b2c89310e5ff48632f862c2dffcfb7a38d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5ed63a2b4b9114d2c3b7fd63b832b2c89310e5ff48632f862c2dffcfb7a38d0->enter($__internal_e5ed63a2b4b9114d2c3b7fd63b832b2c89310e5ff48632f862c2dffcfb7a38d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbde3a9e6a905a6285cf001a269ebb7f48ff10d7ef2d6f71ec50503de4241bcf->leave($__internal_cbde3a9e6a905a6285cf001a269ebb7f48ff10d7ef2d6f71ec50503de4241bcf_prof);

        
        $__internal_e5ed63a2b4b9114d2c3b7fd63b832b2c89310e5ff48632f862c2dffcfb7a38d0->leave($__internal_e5ed63a2b4b9114d2c3b7fd63b832b2c89310e5ff48632f862c2dffcfb7a38d0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f144ea0d318c52a30e7fa79def01a1349539fbf964d0d31b2d6890170358a26a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f144ea0d318c52a30e7fa79def01a1349539fbf964d0d31b2d6890170358a26a->enter($__internal_f144ea0d318c52a30e7fa79def01a1349539fbf964d0d31b2d6890170358a26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27be01f6184078df661e8e974f261d1f22092af7655c3e23b908616c1155b377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27be01f6184078df661e8e974f261d1f22092af7655c3e23b908616c1155b377->enter($__internal_27be01f6184078df661e8e974f261d1f22092af7655c3e23b908616c1155b377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservation creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_27be01f6184078df661e8e974f261d1f22092af7655c3e23b908616c1155b377->leave($__internal_27be01f6184078df661e8e974f261d1f22092af7655c3e23b908616c1155b377_prof);

        
        $__internal_f144ea0d318c52a30e7fa79def01a1349539fbf964d0d31b2d6890170358a26a->leave($__internal_f144ea0d318c52a30e7fa79def01a1349539fbf964d0d31b2d6890170358a26a_prof);

    }

    public function getTemplateName()
    {
        return "reservation/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Reservation creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('reservation_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "reservation/new.html.twig", "/var/www/html/flyaround/app/Resources/views/reservation/new.html.twig");
    }
}
