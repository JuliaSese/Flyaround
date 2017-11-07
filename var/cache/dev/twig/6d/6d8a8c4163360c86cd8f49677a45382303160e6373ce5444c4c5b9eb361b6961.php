<?php

/* base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7278d0e8c79f8dd0d9a9b3ff020e3b2b1b44dfa84974ad7e8b7e07f543b4e10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7278d0e8c79f8dd0d9a9b3ff020e3b2b1b44dfa84974ad7e8b7e07f543b4e10->enter($__internal_f7278d0e8c79f8dd0d9a9b3ff020e3b2b1b44dfa84974ad7e8b7e07f543b4e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_cb046316324b4eb7aa3aefbf9ea1ee29e345d823d33c7899029b457314c18c6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb046316324b4eb7aa3aefbf9ea1ee29e345d823d33c7899029b457314c18c6a->enter($__internal_cb046316324b4eb7aa3aefbf9ea1ee29e345d823d33c7899029b457314c18c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_f7278d0e8c79f8dd0d9a9b3ff020e3b2b1b44dfa84974ad7e8b7e07f543b4e10->leave($__internal_f7278d0e8c79f8dd0d9a9b3ff020e3b2b1b44dfa84974ad7e8b7e07f543b4e10_prof);

        
        $__internal_cb046316324b4eb7aa3aefbf9ea1ee29e345d823d33c7899029b457314c18c6a->leave($__internal_cb046316324b4eb7aa3aefbf9ea1ee29e345d823d33c7899029b457314c18c6a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_041325e87d2b406dbf813f43bdafcc2bac65063262ca75ddff476ad05a2b510e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_041325e87d2b406dbf813f43bdafcc2bac65063262ca75ddff476ad05a2b510e->enter($__internal_041325e87d2b406dbf813f43bdafcc2bac65063262ca75ddff476ad05a2b510e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_81cb2ab9827c7fe61c59a2ca26bfd3220b2b6ab4a4b84caa6bb0ac5dcff69589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81cb2ab9827c7fe61c59a2ca26bfd3220b2b6ab4a4b84caa6bb0ac5dcff69589->enter($__internal_81cb2ab9827c7fe61c59a2ca26bfd3220b2b6ab4a4b84caa6bb0ac5dcff69589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_81cb2ab9827c7fe61c59a2ca26bfd3220b2b6ab4a4b84caa6bb0ac5dcff69589->leave($__internal_81cb2ab9827c7fe61c59a2ca26bfd3220b2b6ab4a4b84caa6bb0ac5dcff69589_prof);

        
        $__internal_041325e87d2b406dbf813f43bdafcc2bac65063262ca75ddff476ad05a2b510e->leave($__internal_041325e87d2b406dbf813f43bdafcc2bac65063262ca75ddff476ad05a2b510e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b50d1c203d3af23364c5981c11b72afb229e9efd1893d5d6156a86a1e30bc9d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b50d1c203d3af23364c5981c11b72afb229e9efd1893d5d6156a86a1e30bc9d7->enter($__internal_b50d1c203d3af23364c5981c11b72afb229e9efd1893d5d6156a86a1e30bc9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bec85e9416cbcb6db0bb8a7330b9b59fe25205579d01dea7e942a61261dabc78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bec85e9416cbcb6db0bb8a7330b9b59fe25205579d01dea7e942a61261dabc78->enter($__internal_bec85e9416cbcb6db0bb8a7330b9b59fe25205579d01dea7e942a61261dabc78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bec85e9416cbcb6db0bb8a7330b9b59fe25205579d01dea7e942a61261dabc78->leave($__internal_bec85e9416cbcb6db0bb8a7330b9b59fe25205579d01dea7e942a61261dabc78_prof);

        
        $__internal_b50d1c203d3af23364c5981c11b72afb229e9efd1893d5d6156a86a1e30bc9d7->leave($__internal_b50d1c203d3af23364c5981c11b72afb229e9efd1893d5d6156a86a1e30bc9d7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e8befe9d659cb1b3b4228ecadcb859a8f6b9a743daaeab935940af4c4c9f766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e8befe9d659cb1b3b4228ecadcb859a8f6b9a743daaeab935940af4c4c9f766->enter($__internal_8e8befe9d659cb1b3b4228ecadcb859a8f6b9a743daaeab935940af4c4c9f766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_81be92858bb607718f9f27f544fb0bbfc4c228d7940cd1c9f81b8619fc131e9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81be92858bb607718f9f27f544fb0bbfc4c228d7940cd1c9f81b8619fc131e9e->enter($__internal_81be92858bb607718f9f27f544fb0bbfc4c228d7940cd1c9f81b8619fc131e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_81be92858bb607718f9f27f544fb0bbfc4c228d7940cd1c9f81b8619fc131e9e->leave($__internal_81be92858bb607718f9f27f544fb0bbfc4c228d7940cd1c9f81b8619fc131e9e_prof);

        
        $__internal_8e8befe9d659cb1b3b4228ecadcb859a8f6b9a743daaeab935940af4c4c9f766->leave($__internal_8e8befe9d659cb1b3b4228ecadcb859a8f6b9a743daaeab935940af4c4c9f766_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_48fdafaf6a9c22e9e200aaf4c52d4967af799b8e91d1dee6497857dab3113745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48fdafaf6a9c22e9e200aaf4c52d4967af799b8e91d1dee6497857dab3113745->enter($__internal_48fdafaf6a9c22e9e200aaf4c52d4967af799b8e91d1dee6497857dab3113745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_524f0f3b76e50575345b0026253ef94d1e29f23c2f1faf343902684d221f7b84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_524f0f3b76e50575345b0026253ef94d1e29f23c2f1faf343902684d221f7b84->enter($__internal_524f0f3b76e50575345b0026253ef94d1e29f23c2f1faf343902684d221f7b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_524f0f3b76e50575345b0026253ef94d1e29f23c2f1faf343902684d221f7b84->leave($__internal_524f0f3b76e50575345b0026253ef94d1e29f23c2f1faf343902684d221f7b84_prof);

        
        $__internal_48fdafaf6a9c22e9e200aaf4c52d4967af799b8e91d1dee6497857dab3113745->leave($__internal_48fdafaf6a9c22e9e200aaf4c52d4967af799b8e91d1dee6497857dab3113745_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/flyaround_seb/app/Resources/views/base.html.twig");
    }
}
