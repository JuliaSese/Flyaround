<?php

/* reservation/new.html.twig */
class __TwigTemplate_b3dce310b24d800a70047da77c489fead04050bdd60761e7ee9ab72f3fe4f956 extends Twig_Template
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
        $__internal_5367564938fe17ee94a12df52abb409a7d06ac9a709170cf0cabea4e2dfefa2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5367564938fe17ee94a12df52abb409a7d06ac9a709170cf0cabea4e2dfefa2d->enter($__internal_5367564938fe17ee94a12df52abb409a7d06ac9a709170cf0cabea4e2dfefa2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/new.html.twig"));

        $__internal_c85d9b28a4e678642932f779317de2061d9368ac3d87a288725ad33e75482c4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c85d9b28a4e678642932f779317de2061d9368ac3d87a288725ad33e75482c4f->enter($__internal_c85d9b28a4e678642932f779317de2061d9368ac3d87a288725ad33e75482c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5367564938fe17ee94a12df52abb409a7d06ac9a709170cf0cabea4e2dfefa2d->leave($__internal_5367564938fe17ee94a12df52abb409a7d06ac9a709170cf0cabea4e2dfefa2d_prof);

        
        $__internal_c85d9b28a4e678642932f779317de2061d9368ac3d87a288725ad33e75482c4f->leave($__internal_c85d9b28a4e678642932f779317de2061d9368ac3d87a288725ad33e75482c4f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e05d3110ee524d53ce1e09811cd87ab6afbbeb53ef52c9644af3ab1ade1ab84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e05d3110ee524d53ce1e09811cd87ab6afbbeb53ef52c9644af3ab1ade1ab84->enter($__internal_0e05d3110ee524d53ce1e09811cd87ab6afbbeb53ef52c9644af3ab1ade1ab84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d190300de1e0892d45b334c7f498c85fe2542cb676a30cfd438765b998aa2af6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d190300de1e0892d45b334c7f498c85fe2542cb676a30cfd438765b998aa2af6->enter($__internal_d190300de1e0892d45b334c7f498c85fe2542cb676a30cfd438765b998aa2af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservation creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_d190300de1e0892d45b334c7f498c85fe2542cb676a30cfd438765b998aa2af6->leave($__internal_d190300de1e0892d45b334c7f498c85fe2542cb676a30cfd438765b998aa2af6_prof);

        
        $__internal_0e05d3110ee524d53ce1e09811cd87ab6afbbeb53ef52c9644af3ab1ade1ab84->leave($__internal_0e05d3110ee524d53ce1e09811cd87ab6afbbeb53ef52c9644af3ab1ade1ab84_prof);

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
