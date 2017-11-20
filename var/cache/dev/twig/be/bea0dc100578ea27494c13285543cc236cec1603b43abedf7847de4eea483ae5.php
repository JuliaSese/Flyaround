<?php

/* review/index.html.twig */
class __TwigTemplate_0868e8a4fc11d1a85e35f892a9d4863451ec9549972e17fd6007ade6049197ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "review/index.html.twig", 1);
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
        $__internal_70c2f4b7c861c56323e629d759065f081af21c9cfe3e74d53a9f24e4b05ea9fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70c2f4b7c861c56323e629d759065f081af21c9cfe3e74d53a9f24e4b05ea9fa->enter($__internal_70c2f4b7c861c56323e629d759065f081af21c9cfe3e74d53a9f24e4b05ea9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "review/index.html.twig"));

        $__internal_7b10f844dbfdc5d2c1d288ae2de955409a52982612ba0ec3d4c3c1c5d41a3ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b10f844dbfdc5d2c1d288ae2de955409a52982612ba0ec3d4c3c1c5d41a3ce0->enter($__internal_7b10f844dbfdc5d2c1d288ae2de955409a52982612ba0ec3d4c3c1c5d41a3ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "review/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70c2f4b7c861c56323e629d759065f081af21c9cfe3e74d53a9f24e4b05ea9fa->leave($__internal_70c2f4b7c861c56323e629d759065f081af21c9cfe3e74d53a9f24e4b05ea9fa_prof);

        
        $__internal_7b10f844dbfdc5d2c1d288ae2de955409a52982612ba0ec3d4c3c1c5d41a3ce0->leave($__internal_7b10f844dbfdc5d2c1d288ae2de955409a52982612ba0ec3d4c3c1c5d41a3ce0_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_62a294aed6594dd7ee6fa57eb1bfbe2fd32550217bf7af712a470b497396294e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62a294aed6594dd7ee6fa57eb1bfbe2fd32550217bf7af712a470b497396294e->enter($__internal_62a294aed6594dd7ee6fa57eb1bfbe2fd32550217bf7af712a470b497396294e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a0fe11e0a722f9bf72d7325c83aeeac8ff5c9f840b07fb8c03d6750269e3364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a0fe11e0a722f9bf72d7325c83aeeac8ff5c9f840b07fb8c03d6750269e3364->enter($__internal_6a0fe11e0a722f9bf72d7325c83aeeac8ff5c9f840b07fb8c03d6750269e3364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1>Welcome to the Review:index page</h1>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? $this->getContext($context, "reviews")));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 7
            echo "    <ul>
        <li>Review's id: ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "id", array()), "html", null, true);
            echo "</li>
        <li>Review's text: ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "text", array()), "html", null, true);
            echo "</li>
        <li>Review's user rated: ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "userRated", array()), "html", null, true);
            echo "</li>
        <li>Review's note: ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "note", array()), "html", null, true);
            echo "</li>
        <li>Review's author: ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "reviewAuthor", array()), "html", null, true);
            echo "</li>
        <li>Review's publicationDate: ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "publicationDate", array()), "html", null, true);
            echo "</li>
    </ul>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6a0fe11e0a722f9bf72d7325c83aeeac8ff5c9f840b07fb8c03d6750269e3364->leave($__internal_6a0fe11e0a722f9bf72d7325c83aeeac8ff5c9f840b07fb8c03d6750269e3364_prof);

        
        $__internal_62a294aed6594dd7ee6fa57eb1bfbe2fd32550217bf7af712a470b497396294e->leave($__internal_62a294aed6594dd7ee6fa57eb1bfbe2fd32550217bf7af712a470b497396294e_prof);

    }

    public function getTemplateName()
    {
        return "review/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 13,  75 => 12,  71 => 11,  67 => 10,  63 => 9,  59 => 8,  56 => 7,  52 => 6,  49 => 5,  40 => 4,  11 => 1,);
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
<h1>Welcome to the Review:index page</h1>
{% for review in reviews %}
    <ul>
        <li>Review's id: {{ review.id }}</li>
        <li>Review's text: {{ review.text }}</li>
        <li>Review's user rated: {{ review.userRated }}</li>
        <li>Review's note: {{ review.note }}</li>
        <li>Review's author: {{ review.reviewAuthor }}</li>
        <li>Review's publicationDate: {{ review.publicationDate }}</li>
    </ul>
{% endfor %}
{% endblock %}
", "review/index.html.twig", "/var/www/html/flyaround/app/Resources/views/review/index.html.twig");
    }
}
