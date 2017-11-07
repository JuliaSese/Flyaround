<?php

/* user/new.html.twig */
class __TwigTemplate_51997e897d8f804ce2757fd0580b25d449357f78a32636e09cfaf67e19094ee4 extends Twig_Template
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
        $__internal_ca9cfcb3bcfbc06362649f70a0cb0b6a6496406e36f55d39008d0542cf1c7aef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca9cfcb3bcfbc06362649f70a0cb0b6a6496406e36f55d39008d0542cf1c7aef->enter($__internal_ca9cfcb3bcfbc06362649f70a0cb0b6a6496406e36f55d39008d0542cf1c7aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_67c6febfa8e5e96eb751e3f5ed0a6b18fdc1a850abe99f86537c599ff4e35a57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c6febfa8e5e96eb751e3f5ed0a6b18fdc1a850abe99f86537c599ff4e35a57->enter($__internal_67c6febfa8e5e96eb751e3f5ed0a6b18fdc1a850abe99f86537c599ff4e35a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca9cfcb3bcfbc06362649f70a0cb0b6a6496406e36f55d39008d0542cf1c7aef->leave($__internal_ca9cfcb3bcfbc06362649f70a0cb0b6a6496406e36f55d39008d0542cf1c7aef_prof);

        
        $__internal_67c6febfa8e5e96eb751e3f5ed0a6b18fdc1a850abe99f86537c599ff4e35a57->leave($__internal_67c6febfa8e5e96eb751e3f5ed0a6b18fdc1a850abe99f86537c599ff4e35a57_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7b1021dcfa985d164d3f7bdc9a14152ce5ffb3025c29d01a66b5ba520388279 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7b1021dcfa985d164d3f7bdc9a14152ce5ffb3025c29d01a66b5ba520388279->enter($__internal_c7b1021dcfa985d164d3f7bdc9a14152ce5ffb3025c29d01a66b5ba520388279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_82cb3eb929fa646acbf9c0ccfc8ae63f0ca505783b23648a98f8e458b3263ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82cb3eb929fa646acbf9c0ccfc8ae63f0ca505783b23648a98f8e458b3263ef3->enter($__internal_82cb3eb929fa646acbf9c0ccfc8ae63f0ca505783b23648a98f8e458b3263ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_82cb3eb929fa646acbf9c0ccfc8ae63f0ca505783b23648a98f8e458b3263ef3->leave($__internal_82cb3eb929fa646acbf9c0ccfc8ae63f0ca505783b23648a98f8e458b3263ef3_prof);

        
        $__internal_c7b1021dcfa985d164d3f7bdc9a14152ce5ffb3025c29d01a66b5ba520388279->leave($__internal_c7b1021dcfa985d164d3f7bdc9a14152ce5ffb3025c29d01a66b5ba520388279_prof);

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
", "user/new.html.twig", "/var/www/html/flyaround_seb/app/Resources/views/user/new.html.twig");
    }
}
