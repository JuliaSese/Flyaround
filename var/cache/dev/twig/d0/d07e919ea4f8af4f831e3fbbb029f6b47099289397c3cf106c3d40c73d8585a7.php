<?php

/* planemodel/edit.html.twig */
class __TwigTemplate_f34dbe825df4689d4e8c5accbd8158a2cfbba4fcbe0ded02578871fee92a4b0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "planemodel/edit.html.twig", 1);
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
        $__internal_d90bd912b74d2f3b61e5f399d2f357b08c3abb21105a794aae87c4bcfb83cab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d90bd912b74d2f3b61e5f399d2f357b08c3abb21105a794aae87c4bcfb83cab8->enter($__internal_d90bd912b74d2f3b61e5f399d2f357b08c3abb21105a794aae87c4bcfb83cab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "planemodel/edit.html.twig"));

        $__internal_6794eb7a4b6e63fd5705993d4af66c6a9548f1f320a29e14f5a08974207f8fff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6794eb7a4b6e63fd5705993d4af66c6a9548f1f320a29e14f5a08974207f8fff->enter($__internal_6794eb7a4b6e63fd5705993d4af66c6a9548f1f320a29e14f5a08974207f8fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "planemodel/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d90bd912b74d2f3b61e5f399d2f357b08c3abb21105a794aae87c4bcfb83cab8->leave($__internal_d90bd912b74d2f3b61e5f399d2f357b08c3abb21105a794aae87c4bcfb83cab8_prof);

        
        $__internal_6794eb7a4b6e63fd5705993d4af66c6a9548f1f320a29e14f5a08974207f8fff->leave($__internal_6794eb7a4b6e63fd5705993d4af66c6a9548f1f320a29e14f5a08974207f8fff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_49a718cbfb33c957f36a8ca69b4533f871a40b87ca02d9179b1edb9882e57b68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49a718cbfb33c957f36a8ca69b4533f871a40b87ca02d9179b1edb9882e57b68->enter($__internal_49a718cbfb33c957f36a8ca69b4533f871a40b87ca02d9179b1edb9882e57b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a956678c1228d6c3bf27ea5107cbae88a93dfb47aa2a55cfe4e03df02020488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a956678c1228d6c3bf27ea5107cbae88a93dfb47aa2a55cfe4e03df02020488->enter($__internal_5a956678c1228d6c3bf27ea5107cbae88a93dfb47aa2a55cfe4e03df02020488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Planemodel edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 16, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 18, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_5a956678c1228d6c3bf27ea5107cbae88a93dfb47aa2a55cfe4e03df02020488->leave($__internal_5a956678c1228d6c3bf27ea5107cbae88a93dfb47aa2a55cfe4e03df02020488_prof);

        
        $__internal_49a718cbfb33c957f36a8ca69b4533f871a40b87ca02d9179b1edb9882e57b68->leave($__internal_49a718cbfb33c957f36a8ca69b4533f871a40b87ca02d9179b1edb9882e57b68_prof);

    }

    public function getTemplateName()
    {
        return "planemodel/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
", "planemodel/edit.html.twig", "/var/www/html/flyaround/app/Resources/views/planemodel/edit.html.twig");
    }
}
