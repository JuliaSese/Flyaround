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
        $__internal_a4dfd48eb5ef0950c2e3d928ed47413526f154bb6a4d3b94cd445bd36f59eb7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4dfd48eb5ef0950c2e3d928ed47413526f154bb6a4d3b94cd445bd36f59eb7e->enter($__internal_a4dfd48eb5ef0950c2e3d928ed47413526f154bb6a4d3b94cd445bd36f59eb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_88941729a3919fedf7e99a92d3aebebd3ed3355406dba5b9a17e1b5c4024ab0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88941729a3919fedf7e99a92d3aebebd3ed3355406dba5b9a17e1b5c4024ab0c->enter($__internal_88941729a3919fedf7e99a92d3aebebd3ed3355406dba5b9a17e1b5c4024ab0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a4dfd48eb5ef0950c2e3d928ed47413526f154bb6a4d3b94cd445bd36f59eb7e->leave($__internal_a4dfd48eb5ef0950c2e3d928ed47413526f154bb6a4d3b94cd445bd36f59eb7e_prof);

        
        $__internal_88941729a3919fedf7e99a92d3aebebd3ed3355406dba5b9a17e1b5c4024ab0c->leave($__internal_88941729a3919fedf7e99a92d3aebebd3ed3355406dba5b9a17e1b5c4024ab0c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d563ff51c7bea5fdd5a448aa3fcaa557d293b23cfcd180b9b83869f82391de2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d563ff51c7bea5fdd5a448aa3fcaa557d293b23cfcd180b9b83869f82391de2->enter($__internal_6d563ff51c7bea5fdd5a448aa3fcaa557d293b23cfcd180b9b83869f82391de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_10a7c7851e0d0eb6119f6ed79c06649f7f9c6b01f1058042e34692ca43259243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a7c7851e0d0eb6119f6ed79c06649f7f9c6b01f1058042e34692ca43259243->enter($__internal_10a7c7851e0d0eb6119f6ed79c06649f7f9c6b01f1058042e34692ca43259243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_10a7c7851e0d0eb6119f6ed79c06649f7f9c6b01f1058042e34692ca43259243->leave($__internal_10a7c7851e0d0eb6119f6ed79c06649f7f9c6b01f1058042e34692ca43259243_prof);

        
        $__internal_6d563ff51c7bea5fdd5a448aa3fcaa557d293b23cfcd180b9b83869f82391de2->leave($__internal_6d563ff51c7bea5fdd5a448aa3fcaa557d293b23cfcd180b9b83869f82391de2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_65220dba127029f931d4afe7d6c8e4556a13c59448379892dcf98780a9bbd0ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65220dba127029f931d4afe7d6c8e4556a13c59448379892dcf98780a9bbd0ed->enter($__internal_65220dba127029f931d4afe7d6c8e4556a13c59448379892dcf98780a9bbd0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_07e9d9e06713e169e74f12fcbe3a23f6e95c3f38dedfb836018125eb1eee78bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07e9d9e06713e169e74f12fcbe3a23f6e95c3f38dedfb836018125eb1eee78bf->enter($__internal_07e9d9e06713e169e74f12fcbe3a23f6e95c3f38dedfb836018125eb1eee78bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_07e9d9e06713e169e74f12fcbe3a23f6e95c3f38dedfb836018125eb1eee78bf->leave($__internal_07e9d9e06713e169e74f12fcbe3a23f6e95c3f38dedfb836018125eb1eee78bf_prof);

        
        $__internal_65220dba127029f931d4afe7d6c8e4556a13c59448379892dcf98780a9bbd0ed->leave($__internal_65220dba127029f931d4afe7d6c8e4556a13c59448379892dcf98780a9bbd0ed_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0df069ef1787dc578fb140da2670e625ebcf2bd0980dc0ad9f3cef1b825dc546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0df069ef1787dc578fb140da2670e625ebcf2bd0980dc0ad9f3cef1b825dc546->enter($__internal_0df069ef1787dc578fb140da2670e625ebcf2bd0980dc0ad9f3cef1b825dc546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d56dfe037a2cc9ffa6b4833fbfd4f39c4b82f8cd19df0bd1622d31bf06545816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d56dfe037a2cc9ffa6b4833fbfd4f39c4b82f8cd19df0bd1622d31bf06545816->enter($__internal_d56dfe037a2cc9ffa6b4833fbfd4f39c4b82f8cd19df0bd1622d31bf06545816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d56dfe037a2cc9ffa6b4833fbfd4f39c4b82f8cd19df0bd1622d31bf06545816->leave($__internal_d56dfe037a2cc9ffa6b4833fbfd4f39c4b82f8cd19df0bd1622d31bf06545816_prof);

        
        $__internal_0df069ef1787dc578fb140da2670e625ebcf2bd0980dc0ad9f3cef1b825dc546->leave($__internal_0df069ef1787dc578fb140da2670e625ebcf2bd0980dc0ad9f3cef1b825dc546_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_09a58927c1bb6ca286fd6ae838a5d2088914d328403d1d7944d8ffc3d56e1c8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09a58927c1bb6ca286fd6ae838a5d2088914d328403d1d7944d8ffc3d56e1c8c->enter($__internal_09a58927c1bb6ca286fd6ae838a5d2088914d328403d1d7944d8ffc3d56e1c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c3d301b218b1487d16f2364e428b2728bb304c50de43c2bfae1355235d43815e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d301b218b1487d16f2364e428b2728bb304c50de43c2bfae1355235d43815e->enter($__internal_c3d301b218b1487d16f2364e428b2728bb304c50de43c2bfae1355235d43815e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c3d301b218b1487d16f2364e428b2728bb304c50de43c2bfae1355235d43815e->leave($__internal_c3d301b218b1487d16f2364e428b2728bb304c50de43c2bfae1355235d43815e_prof);

        
        $__internal_09a58927c1bb6ca286fd6ae838a5d2088914d328403d1d7944d8ffc3d56e1c8c->leave($__internal_09a58927c1bb6ca286fd6ae838a5d2088914d328403d1d7944d8ffc3d56e1c8c_prof);

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
", "base.html.twig", "/var/www/html/flyaround/app/Resources/views/base.html.twig");
    }
}
