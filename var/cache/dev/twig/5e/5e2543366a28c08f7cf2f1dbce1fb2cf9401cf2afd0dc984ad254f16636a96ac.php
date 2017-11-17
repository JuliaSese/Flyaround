<?php

/* :review:new.html.twig */
class __TwigTemplate_81ad724ed85d2188e2f9b15fe0386ee1266549f6a3babd97aba6ca8d9627e62c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":review:new.html.twig", 1);
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
        $__internal_ddda907702f10c5be9fe1492bd364f245d791344ce03d74fe461495a132868a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddda907702f10c5be9fe1492bd364f245d791344ce03d74fe461495a132868a8->enter($__internal_ddda907702f10c5be9fe1492bd364f245d791344ce03d74fe461495a132868a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":review:new.html.twig"));

        $__internal_30f07f745f8d232d56b17d45c53d292b43eed014ff38b97897b512342e318182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30f07f745f8d232d56b17d45c53d292b43eed014ff38b97897b512342e318182->enter($__internal_30f07f745f8d232d56b17d45c53d292b43eed014ff38b97897b512342e318182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":review:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddda907702f10c5be9fe1492bd364f245d791344ce03d74fe461495a132868a8->leave($__internal_ddda907702f10c5be9fe1492bd364f245d791344ce03d74fe461495a132868a8_prof);

        
        $__internal_30f07f745f8d232d56b17d45c53d292b43eed014ff38b97897b512342e318182->leave($__internal_30f07f745f8d232d56b17d45c53d292b43eed014ff38b97897b512342e318182_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_59e1f58851610d0ee441a9eb7d97a5b030a4c74d0c1522fe046455bec0b5f493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59e1f58851610d0ee441a9eb7d97a5b030a4c74d0c1522fe046455bec0b5f493->enter($__internal_59e1f58851610d0ee441a9eb7d97a5b030a4c74d0c1522fe046455bec0b5f493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8cd30449bd0bead490b9bd87b2e2c65d39326ea0df9508488ba05940321f2a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd30449bd0bead490b9bd87b2e2c65d39326ea0df9508488ba05940321f2a5a->enter($__internal_8cd30449bd0bead490b9bd87b2e2c65d39326ea0df9508488ba05940321f2a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Review creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("review_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_8cd30449bd0bead490b9bd87b2e2c65d39326ea0df9508488ba05940321f2a5a->leave($__internal_8cd30449bd0bead490b9bd87b2e2c65d39326ea0df9508488ba05940321f2a5a_prof);

        
        $__internal_59e1f58851610d0ee441a9eb7d97a5b030a4c74d0c1522fe046455bec0b5f493->leave($__internal_59e1f58851610d0ee441a9eb7d97a5b030a4c74d0c1522fe046455bec0b5f493_prof);

    }

    public function getTemplateName()
    {
        return ":review:new.html.twig";
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
    <h1>Review creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('review_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":review:new.html.twig", "/var/www/html/flyaround/app/Resources/views/review/new.html.twig");
    }
}
