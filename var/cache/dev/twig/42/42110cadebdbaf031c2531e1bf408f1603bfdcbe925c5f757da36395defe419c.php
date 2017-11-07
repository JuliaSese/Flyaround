<?php

/* flight/new.html.twig */
class __TwigTemplate_98bbd91fa891a71de965b679b57a4c8a4851188e3fcb13f209a3e92a497146ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "flight/new.html.twig", 1);
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
        $__internal_dd203e5abbd9d2eab1a472795761f6ddc555f9ee00b2bf2f86d4fbd9110f0641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd203e5abbd9d2eab1a472795761f6ddc555f9ee00b2bf2f86d4fbd9110f0641->enter($__internal_dd203e5abbd9d2eab1a472795761f6ddc555f9ee00b2bf2f86d4fbd9110f0641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "flight/new.html.twig"));

        $__internal_564e4fd9b42a3ab70e12ebe22c234fe9520eebc35dcb3d10f37bcddd4fc1a4eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_564e4fd9b42a3ab70e12ebe22c234fe9520eebc35dcb3d10f37bcddd4fc1a4eb->enter($__internal_564e4fd9b42a3ab70e12ebe22c234fe9520eebc35dcb3d10f37bcddd4fc1a4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "flight/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd203e5abbd9d2eab1a472795761f6ddc555f9ee00b2bf2f86d4fbd9110f0641->leave($__internal_dd203e5abbd9d2eab1a472795761f6ddc555f9ee00b2bf2f86d4fbd9110f0641_prof);

        
        $__internal_564e4fd9b42a3ab70e12ebe22c234fe9520eebc35dcb3d10f37bcddd4fc1a4eb->leave($__internal_564e4fd9b42a3ab70e12ebe22c234fe9520eebc35dcb3d10f37bcddd4fc1a4eb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b36b3497d0c5fcd5938b156ddf2d73a678cbb13b102ebf94cb4873e5b9bc197 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b36b3497d0c5fcd5938b156ddf2d73a678cbb13b102ebf94cb4873e5b9bc197->enter($__internal_1b36b3497d0c5fcd5938b156ddf2d73a678cbb13b102ebf94cb4873e5b9bc197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_086fe2448015b0f7ba4f4b0ed8f90799ee072d7947f70c720ed1d80ad4f46854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_086fe2448015b0f7ba4f4b0ed8f90799ee072d7947f70c720ed1d80ad4f46854->enter($__internal_086fe2448015b0f7ba4f4b0ed8f90799ee072d7947f70c720ed1d80ad4f46854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Flight creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_086fe2448015b0f7ba4f4b0ed8f90799ee072d7947f70c720ed1d80ad4f46854->leave($__internal_086fe2448015b0f7ba4f4b0ed8f90799ee072d7947f70c720ed1d80ad4f46854_prof);

        
        $__internal_1b36b3497d0c5fcd5938b156ddf2d73a678cbb13b102ebf94cb4873e5b9bc197->leave($__internal_1b36b3497d0c5fcd5938b156ddf2d73a678cbb13b102ebf94cb4873e5b9bc197_prof);

    }

    public function getTemplateName()
    {
        return "flight/new.html.twig";
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
    <h1>Flight creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('flight_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "flight/new.html.twig", "/var/www/html/flyaround_seb/app/Resources/views/flight/new.html.twig");
    }
}
