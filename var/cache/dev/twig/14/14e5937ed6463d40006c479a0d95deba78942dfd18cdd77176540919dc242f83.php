<?php

/* :user:new.html.twig */
class __TwigTemplate_51997e897d8f804ce2757fd0580b25d449357f78a32636e09cfaf67e19094ee4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:new.html.twig", 1);
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
        $__internal_24029045064d6ea6c8e7ef5fe886539e7a2a0c03f08229dd653811bfdb36e035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24029045064d6ea6c8e7ef5fe886539e7a2a0c03f08229dd653811bfdb36e035->enter($__internal_24029045064d6ea6c8e7ef5fe886539e7a2a0c03f08229dd653811bfdb36e035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $__internal_bd56654d05c28ab49d5188c8732c1941901eca83ff76c391de2b6bf6d095fe90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd56654d05c28ab49d5188c8732c1941901eca83ff76c391de2b6bf6d095fe90->enter($__internal_bd56654d05c28ab49d5188c8732c1941901eca83ff76c391de2b6bf6d095fe90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24029045064d6ea6c8e7ef5fe886539e7a2a0c03f08229dd653811bfdb36e035->leave($__internal_24029045064d6ea6c8e7ef5fe886539e7a2a0c03f08229dd653811bfdb36e035_prof);

        
        $__internal_bd56654d05c28ab49d5188c8732c1941901eca83ff76c391de2b6bf6d095fe90->leave($__internal_bd56654d05c28ab49d5188c8732c1941901eca83ff76c391de2b6bf6d095fe90_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f073fe7d50c582f0136a0b9d2ace3f56a78c1ae3b0806fce00ef4d3cf2dcf30c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f073fe7d50c582f0136a0b9d2ace3f56a78c1ae3b0806fce00ef4d3cf2dcf30c->enter($__internal_f073fe7d50c582f0136a0b9d2ace3f56a78c1ae3b0806fce00ef4d3cf2dcf30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d78dd277c59905b21fcf46afadce1a85bd3ff7e952497b9b2722478908175b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d78dd277c59905b21fcf46afadce1a85bd3ff7e952497b9b2722478908175b9->enter($__internal_3d78dd277c59905b21fcf46afadce1a85bd3ff7e952497b9b2722478908175b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_3d78dd277c59905b21fcf46afadce1a85bd3ff7e952497b9b2722478908175b9->leave($__internal_3d78dd277c59905b21fcf46afadce1a85bd3ff7e952497b9b2722478908175b9_prof);

        
        $__internal_f073fe7d50c582f0136a0b9d2ace3f56a78c1ae3b0806fce00ef4d3cf2dcf30c->leave($__internal_f073fe7d50c582f0136a0b9d2ace3f56a78c1ae3b0806fce00ef4d3cf2dcf30c_prof);

    }

    public function getTemplateName()
    {
        return ":user:new.html.twig";
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
", ":user:new.html.twig", "/var/www/html/flyaround/app/Resources/views/user/new.html.twig");
    }
}
