<?php

/* :planemodel:edit.html.twig */
class __TwigTemplate_ca70b1e51646be8860dc77544377704f29bc54e358ed06d697c486d9373da30d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":planemodel:edit.html.twig", 1);
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
        $__internal_05497b1964b27904cd8635e5a66c01a6e56c8f2c6c43246e1c23377525769b37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05497b1964b27904cd8635e5a66c01a6e56c8f2c6c43246e1c23377525769b37->enter($__internal_05497b1964b27904cd8635e5a66c01a6e56c8f2c6c43246e1c23377525769b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":planemodel:edit.html.twig"));

        $__internal_906973ec3e905676ea6949396c55ec9fb4a17bda6235dc26a287dc3082e126e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_906973ec3e905676ea6949396c55ec9fb4a17bda6235dc26a287dc3082e126e7->enter($__internal_906973ec3e905676ea6949396c55ec9fb4a17bda6235dc26a287dc3082e126e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":planemodel:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05497b1964b27904cd8635e5a66c01a6e56c8f2c6c43246e1c23377525769b37->leave($__internal_05497b1964b27904cd8635e5a66c01a6e56c8f2c6c43246e1c23377525769b37_prof);

        
        $__internal_906973ec3e905676ea6949396c55ec9fb4a17bda6235dc26a287dc3082e126e7->leave($__internal_906973ec3e905676ea6949396c55ec9fb4a17bda6235dc26a287dc3082e126e7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3f84bdf7614ade79d117e90ac2d17d61b21194d9260a051b33d66541a7b6f01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3f84bdf7614ade79d117e90ac2d17d61b21194d9260a051b33d66541a7b6f01->enter($__internal_d3f84bdf7614ade79d117e90ac2d17d61b21194d9260a051b33d66541a7b6f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3e98f6b9ccb2ca368eea288b282a8b65bb64b71a353fe888f803bf35a975d9fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e98f6b9ccb2ca368eea288b282a8b65bb64b71a353fe888f803bf35a975d9fe->enter($__internal_3e98f6b9ccb2ca368eea288b282a8b65bb64b71a353fe888f803bf35a975d9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Planemodel edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planemodel_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_3e98f6b9ccb2ca368eea288b282a8b65bb64b71a353fe888f803bf35a975d9fe->leave($__internal_3e98f6b9ccb2ca368eea288b282a8b65bb64b71a353fe888f803bf35a975d9fe_prof);

        
        $__internal_d3f84bdf7614ade79d117e90ac2d17d61b21194d9260a051b33d66541a7b6f01->leave($__internal_d3f84bdf7614ade79d117e90ac2d17d61b21194d9260a051b33d66541a7b6f01_prof);

    }

    public function getTemplateName()
    {
        return ":planemodel:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Planemodel edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('planemodel_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":planemodel:edit.html.twig", "/var/www/html/flyaround/app/Resources/views/planemodel/edit.html.twig");
    }
}
