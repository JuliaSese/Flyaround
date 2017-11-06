<?php

/* user/new.html.twig */
class __TwigTemplate_469d5c26a0c0eff2f6c68a02ef237eced6d891b44d1b409c386b0cef153c5298 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
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
        $__internal_be46b8f4017d863a1561402956111768265431b9c2cedb7408fb133cbe45f31a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be46b8f4017d863a1561402956111768265431b9c2cedb7408fb133cbe45f31a->enter($__internal_be46b8f4017d863a1561402956111768265431b9c2cedb7408fb133cbe45f31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_ab89f7dd10a0e6397642df3f1f33d3dc616c1714422daa11d412c0796c9481ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab89f7dd10a0e6397642df3f1f33d3dc616c1714422daa11d412c0796c9481ea->enter($__internal_ab89f7dd10a0e6397642df3f1f33d3dc616c1714422daa11d412c0796c9481ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be46b8f4017d863a1561402956111768265431b9c2cedb7408fb133cbe45f31a->leave($__internal_be46b8f4017d863a1561402956111768265431b9c2cedb7408fb133cbe45f31a_prof);

        
        $__internal_ab89f7dd10a0e6397642df3f1f33d3dc616c1714422daa11d412c0796c9481ea->leave($__internal_ab89f7dd10a0e6397642df3f1f33d3dc616c1714422daa11d412c0796c9481ea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_73627f620b84d0815c93326a06159252724490f3a222582f8fed4b4b54134527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73627f620b84d0815c93326a06159252724490f3a222582f8fed4b4b54134527->enter($__internal_73627f620b84d0815c93326a06159252724490f3a222582f8fed4b4b54134527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e745683bf29fe33feb1612a152804ca5b925e2422d74c844bba8655ea5c50205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e745683bf29fe33feb1612a152804ca5b925e2422d74c844bba8655ea5c50205->enter($__internal_e745683bf29fe33feb1612a152804ca5b925e2422d74c844bba8655ea5c50205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_e745683bf29fe33feb1612a152804ca5b925e2422d74c844bba8655ea5c50205->leave($__internal_e745683bf29fe33feb1612a152804ca5b925e2422d74c844bba8655ea5c50205_prof);

        
        $__internal_73627f620b84d0815c93326a06159252724490f3a222582f8fed4b4b54134527->leave($__internal_73627f620b84d0815c93326a06159252724490f3a222582f8fed4b4b54134527_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
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
    <h1>User creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "user/new.html.twig", "/var/www/html/flyaround/app/Resources/views/user/new.html.twig");
    }
}
