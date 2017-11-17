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
        $__internal_e632d0fe755dfeea36549c394e265687b1c67a6c2959d1cf8ed996b0ff9ea7cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e632d0fe755dfeea36549c394e265687b1c67a6c2959d1cf8ed996b0ff9ea7cb->enter($__internal_e632d0fe755dfeea36549c394e265687b1c67a6c2959d1cf8ed996b0ff9ea7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_329bc9ef71d3676c9aadac820248ecf9806065d33f2888279b19192c3762ad7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_329bc9ef71d3676c9aadac820248ecf9806065d33f2888279b19192c3762ad7e->enter($__internal_329bc9ef71d3676c9aadac820248ecf9806065d33f2888279b19192c3762ad7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e632d0fe755dfeea36549c394e265687b1c67a6c2959d1cf8ed996b0ff9ea7cb->leave($__internal_e632d0fe755dfeea36549c394e265687b1c67a6c2959d1cf8ed996b0ff9ea7cb_prof);

        
        $__internal_329bc9ef71d3676c9aadac820248ecf9806065d33f2888279b19192c3762ad7e->leave($__internal_329bc9ef71d3676c9aadac820248ecf9806065d33f2888279b19192c3762ad7e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3778d4c48d5e93cacef5804532305d8c0cb2d2b9546da32e272da91dfbb4fb45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3778d4c48d5e93cacef5804532305d8c0cb2d2b9546da32e272da91dfbb4fb45->enter($__internal_3778d4c48d5e93cacef5804532305d8c0cb2d2b9546da32e272da91dfbb4fb45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_82cf65a98ecf83d067d6cfe5c233bc8a4c2ad7548c0716272fd503ecc56fcfc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82cf65a98ecf83d067d6cfe5c233bc8a4c2ad7548c0716272fd503ecc56fcfc3->enter($__internal_82cf65a98ecf83d067d6cfe5c233bc8a4c2ad7548c0716272fd503ecc56fcfc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_82cf65a98ecf83d067d6cfe5c233bc8a4c2ad7548c0716272fd503ecc56fcfc3->leave($__internal_82cf65a98ecf83d067d6cfe5c233bc8a4c2ad7548c0716272fd503ecc56fcfc3_prof);

        
        $__internal_3778d4c48d5e93cacef5804532305d8c0cb2d2b9546da32e272da91dfbb4fb45->leave($__internal_3778d4c48d5e93cacef5804532305d8c0cb2d2b9546da32e272da91dfbb4fb45_prof);

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
", "user/new.html.twig", "/var/www/html/flyaround/app/Resources/views/user/new.html.twig");
    }
}
