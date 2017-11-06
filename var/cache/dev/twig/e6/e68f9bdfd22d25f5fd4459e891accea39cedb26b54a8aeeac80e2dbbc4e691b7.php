<?php

/* base.html.twig */
class __TwigTemplate_3698a5049a95d96cd35abee4dbe42043aec1c3ce4b593cfad74f69e93521450f extends Twig_Template
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
        $__internal_a24923f270aafe3b66c2c98294986c68c3821ebee30054253e9cd9f3ac633d5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a24923f270aafe3b66c2c98294986c68c3821ebee30054253e9cd9f3ac633d5c->enter($__internal_a24923f270aafe3b66c2c98294986c68c3821ebee30054253e9cd9f3ac633d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_0ae004e1b23afe04944feaf763b396935c6867449ef7e9944125cdd4571604a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ae004e1b23afe04944feaf763b396935c6867449ef7e9944125cdd4571604a1->enter($__internal_0ae004e1b23afe04944feaf763b396935c6867449ef7e9944125cdd4571604a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a24923f270aafe3b66c2c98294986c68c3821ebee30054253e9cd9f3ac633d5c->leave($__internal_a24923f270aafe3b66c2c98294986c68c3821ebee30054253e9cd9f3ac633d5c_prof);

        
        $__internal_0ae004e1b23afe04944feaf763b396935c6867449ef7e9944125cdd4571604a1->leave($__internal_0ae004e1b23afe04944feaf763b396935c6867449ef7e9944125cdd4571604a1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_78d6ff6866388c0300fb45ab2e184d139edd28f1ea0929709ba5838c86090a6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78d6ff6866388c0300fb45ab2e184d139edd28f1ea0929709ba5838c86090a6d->enter($__internal_78d6ff6866388c0300fb45ab2e184d139edd28f1ea0929709ba5838c86090a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3ecc116716eaf0dab25e4edf694c70aa930feb3ec9310149cd0103efbce94d8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ecc116716eaf0dab25e4edf694c70aa930feb3ec9310149cd0103efbce94d8e->enter($__internal_3ecc116716eaf0dab25e4edf694c70aa930feb3ec9310149cd0103efbce94d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3ecc116716eaf0dab25e4edf694c70aa930feb3ec9310149cd0103efbce94d8e->leave($__internal_3ecc116716eaf0dab25e4edf694c70aa930feb3ec9310149cd0103efbce94d8e_prof);

        
        $__internal_78d6ff6866388c0300fb45ab2e184d139edd28f1ea0929709ba5838c86090a6d->leave($__internal_78d6ff6866388c0300fb45ab2e184d139edd28f1ea0929709ba5838c86090a6d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_070840b2e2d076ae5d0514f61704a0ddcae82eaa6caef1fb0585bf1407ad08d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_070840b2e2d076ae5d0514f61704a0ddcae82eaa6caef1fb0585bf1407ad08d0->enter($__internal_070840b2e2d076ae5d0514f61704a0ddcae82eaa6caef1fb0585bf1407ad08d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4dfc49cf846b1f5ce679678fe32a94b306c2b0de721916424b92f1c27898ad93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dfc49cf846b1f5ce679678fe32a94b306c2b0de721916424b92f1c27898ad93->enter($__internal_4dfc49cf846b1f5ce679678fe32a94b306c2b0de721916424b92f1c27898ad93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4dfc49cf846b1f5ce679678fe32a94b306c2b0de721916424b92f1c27898ad93->leave($__internal_4dfc49cf846b1f5ce679678fe32a94b306c2b0de721916424b92f1c27898ad93_prof);

        
        $__internal_070840b2e2d076ae5d0514f61704a0ddcae82eaa6caef1fb0585bf1407ad08d0->leave($__internal_070840b2e2d076ae5d0514f61704a0ddcae82eaa6caef1fb0585bf1407ad08d0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8df3d1e3f0c34664dd98c35ed08f61803e7c6080714e3bd090585c869af1a26c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8df3d1e3f0c34664dd98c35ed08f61803e7c6080714e3bd090585c869af1a26c->enter($__internal_8df3d1e3f0c34664dd98c35ed08f61803e7c6080714e3bd090585c869af1a26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23b20e8203ba73884d217329896e02ae2cb4f1fb0d3fa71c4f8e4b10561cbadf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23b20e8203ba73884d217329896e02ae2cb4f1fb0d3fa71c4f8e4b10561cbadf->enter($__internal_23b20e8203ba73884d217329896e02ae2cb4f1fb0d3fa71c4f8e4b10561cbadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_23b20e8203ba73884d217329896e02ae2cb4f1fb0d3fa71c4f8e4b10561cbadf->leave($__internal_23b20e8203ba73884d217329896e02ae2cb4f1fb0d3fa71c4f8e4b10561cbadf_prof);

        
        $__internal_8df3d1e3f0c34664dd98c35ed08f61803e7c6080714e3bd090585c869af1a26c->leave($__internal_8df3d1e3f0c34664dd98c35ed08f61803e7c6080714e3bd090585c869af1a26c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_70c4374d505d915bce2c309c3c0afd4413af24abea946d4112feb5cd7d244f4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70c4374d505d915bce2c309c3c0afd4413af24abea946d4112feb5cd7d244f4b->enter($__internal_70c4374d505d915bce2c309c3c0afd4413af24abea946d4112feb5cd7d244f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cf2431e1a57ad61fab56c1b0a8f27e08b20cefb63167a7a271b69d037045b48c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf2431e1a57ad61fab56c1b0a8f27e08b20cefb63167a7a271b69d037045b48c->enter($__internal_cf2431e1a57ad61fab56c1b0a8f27e08b20cefb63167a7a271b69d037045b48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cf2431e1a57ad61fab56c1b0a8f27e08b20cefb63167a7a271b69d037045b48c->leave($__internal_cf2431e1a57ad61fab56c1b0a8f27e08b20cefb63167a7a271b69d037045b48c_prof);

        
        $__internal_70c4374d505d915bce2c309c3c0afd4413af24abea946d4112feb5cd7d244f4b->leave($__internal_70c4374d505d915bce2c309c3c0afd4413af24abea946d4112feb5cd7d244f4b_prof);

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
