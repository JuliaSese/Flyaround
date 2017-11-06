<?php

/* flight/new.html.twig */
class __TwigTemplate_a4275a0d50104feee268733edf2f3f198480e0d24192900a0e490679f2a93a15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "flight/new.html.twig", 1);
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
        $__internal_d6b1736dde63d5bba2f8dfd122d12c387f35e5673f1205ba84eda10cda9abcb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6b1736dde63d5bba2f8dfd122d12c387f35e5673f1205ba84eda10cda9abcb3->enter($__internal_d6b1736dde63d5bba2f8dfd122d12c387f35e5673f1205ba84eda10cda9abcb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "flight/new.html.twig"));

        $__internal_8ddcfb60de4a55770d5600e57a1c6b6e981a4d07f0c2de74ce766d2afb14898c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ddcfb60de4a55770d5600e57a1c6b6e981a4d07f0c2de74ce766d2afb14898c->enter($__internal_8ddcfb60de4a55770d5600e57a1c6b6e981a4d07f0c2de74ce766d2afb14898c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "flight/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6b1736dde63d5bba2f8dfd122d12c387f35e5673f1205ba84eda10cda9abcb3->leave($__internal_d6b1736dde63d5bba2f8dfd122d12c387f35e5673f1205ba84eda10cda9abcb3_prof);

        
        $__internal_8ddcfb60de4a55770d5600e57a1c6b6e981a4d07f0c2de74ce766d2afb14898c->leave($__internal_8ddcfb60de4a55770d5600e57a1c6b6e981a4d07f0c2de74ce766d2afb14898c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dff31617da968cdb32504fbf4613effeeeeaba49fca8d560eb12ae65c665f547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dff31617da968cdb32504fbf4613effeeeeaba49fca8d560eb12ae65c665f547->enter($__internal_dff31617da968cdb32504fbf4613effeeeeaba49fca8d560eb12ae65c665f547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_137343b77d6d426f3a25e214dd0827c9f29ebba8220d8f82886e22b356812f5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_137343b77d6d426f3a25e214dd0827c9f29ebba8220d8f82886e22b356812f5e->enter($__internal_137343b77d6d426f3a25e214dd0827c9f29ebba8220d8f82886e22b356812f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Flight creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_137343b77d6d426f3a25e214dd0827c9f29ebba8220d8f82886e22b356812f5e->leave($__internal_137343b77d6d426f3a25e214dd0827c9f29ebba8220d8f82886e22b356812f5e_prof);

        
        $__internal_dff31617da968cdb32504fbf4613effeeeeaba49fca8d560eb12ae65c665f547->leave($__internal_dff31617da968cdb32504fbf4613effeeeeaba49fca8d560eb12ae65c665f547_prof);

    }

    public function getTemplateName()
    {
        return "flight/new.html.twig";
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
", "flight/new.html.twig", "/var/www/html/flyaround/app/Resources/views/flight/new.html.twig");
    }
}
