<?php

/* review/new.html.twig */
class __TwigTemplate_81ad724ed85d2188e2f9b15fe0386ee1266549f6a3babd97aba6ca8d9627e62c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "review/new.html.twig", 1);
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
        $__internal_4eac2b8d00aad8a8e52b1797a71253de60f5fc188f74371cd9844f4ca4a245cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eac2b8d00aad8a8e52b1797a71253de60f5fc188f74371cd9844f4ca4a245cf->enter($__internal_4eac2b8d00aad8a8e52b1797a71253de60f5fc188f74371cd9844f4ca4a245cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "review/new.html.twig"));

        $__internal_709c936c13e494bd12abe3b866c07e1d605f20cce702f7a25777a29b61fe1f0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_709c936c13e494bd12abe3b866c07e1d605f20cce702f7a25777a29b61fe1f0a->enter($__internal_709c936c13e494bd12abe3b866c07e1d605f20cce702f7a25777a29b61fe1f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "review/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4eac2b8d00aad8a8e52b1797a71253de60f5fc188f74371cd9844f4ca4a245cf->leave($__internal_4eac2b8d00aad8a8e52b1797a71253de60f5fc188f74371cd9844f4ca4a245cf_prof);

        
        $__internal_709c936c13e494bd12abe3b866c07e1d605f20cce702f7a25777a29b61fe1f0a->leave($__internal_709c936c13e494bd12abe3b866c07e1d605f20cce702f7a25777a29b61fe1f0a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd15e1aa56beb3f628e1f4acc4e1c53ca19c69b1991e9c116166d9ae6cf1e887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd15e1aa56beb3f628e1f4acc4e1c53ca19c69b1991e9c116166d9ae6cf1e887->enter($__internal_bd15e1aa56beb3f628e1f4acc4e1c53ca19c69b1991e9c116166d9ae6cf1e887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_267f365f275f2f364081459b87dd25cba9a18d16795c92d64ed3ac17c069220b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_267f365f275f2f364081459b87dd25cba9a18d16795c92d64ed3ac17c069220b->enter($__internal_267f365f275f2f364081459b87dd25cba9a18d16795c92d64ed3ac17c069220b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_267f365f275f2f364081459b87dd25cba9a18d16795c92d64ed3ac17c069220b->leave($__internal_267f365f275f2f364081459b87dd25cba9a18d16795c92d64ed3ac17c069220b_prof);

        
        $__internal_bd15e1aa56beb3f628e1f4acc4e1c53ca19c69b1991e9c116166d9ae6cf1e887->leave($__internal_bd15e1aa56beb3f628e1f4acc4e1c53ca19c69b1991e9c116166d9ae6cf1e887_prof);

    }

    public function getTemplateName()
    {
        return "review/new.html.twig";
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
", "review/new.html.twig", "/var/www/html/flyaround_seb/app/Resources/views/review/new.html.twig");
    }
}
