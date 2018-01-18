<?php

/* :review:edit.html.twig */
class __TwigTemplate_0a8df088ae7e1822970c3cf2aec363f0b9e0bfe91f2e68052608a5a3a0745b05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":review:edit.html.twig", 1);
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
        $__internal_5cf331e606564b5af8248ad4625f933dbcc452e9b8e4dc5126befb9cebe6e2b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cf331e606564b5af8248ad4625f933dbcc452e9b8e4dc5126befb9cebe6e2b9->enter($__internal_5cf331e606564b5af8248ad4625f933dbcc452e9b8e4dc5126befb9cebe6e2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":review:edit.html.twig"));

        $__internal_123720ebb793aed09eb0eee8de85fd060f1cee2057fc47f387673177f13c1722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_123720ebb793aed09eb0eee8de85fd060f1cee2057fc47f387673177f13c1722->enter($__internal_123720ebb793aed09eb0eee8de85fd060f1cee2057fc47f387673177f13c1722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":review:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cf331e606564b5af8248ad4625f933dbcc452e9b8e4dc5126befb9cebe6e2b9->leave($__internal_5cf331e606564b5af8248ad4625f933dbcc452e9b8e4dc5126befb9cebe6e2b9_prof);

        
        $__internal_123720ebb793aed09eb0eee8de85fd060f1cee2057fc47f387673177f13c1722->leave($__internal_123720ebb793aed09eb0eee8de85fd060f1cee2057fc47f387673177f13c1722_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c35ca5a3b0adddf9a32008b5e5d4ca1b92237a9ed83e9f4ed55068b5bd996bdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c35ca5a3b0adddf9a32008b5e5d4ca1b92237a9ed83e9f4ed55068b5bd996bdf->enter($__internal_c35ca5a3b0adddf9a32008b5e5d4ca1b92237a9ed83e9f4ed55068b5bd996bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_19b67a5704eb66732747ef64ec7711e7fd3389abfafa13dfd782ae84687dad28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19b67a5704eb66732747ef64ec7711e7fd3389abfafa13dfd782ae84687dad28->enter($__internal_19b67a5704eb66732747ef64ec7711e7fd3389abfafa13dfd782ae84687dad28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Review edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("review_index");
        echo "\">Retourner à la liste</a>
        </li>
        <li>
                ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    <input type=\"submit\" value=\"Supprimer\">
                ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_19b67a5704eb66732747ef64ec7711e7fd3389abfafa13dfd782ae84687dad28->leave($__internal_19b67a5704eb66732747ef64ec7711e7fd3389abfafa13dfd782ae84687dad28_prof);

        
        $__internal_c35ca5a3b0adddf9a32008b5e5d4ca1b92237a9ed83e9f4ed55068b5bd996bdf->leave($__internal_c35ca5a3b0adddf9a32008b5e5d4ca1b92237a9ed83e9f4ed55068b5bd996bdf_prof);

    }

    public function getTemplateName()
    {
        return ":review:edit.html.twig";
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
    <h1>Review edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('review_index') }}\">Retourner à la liste</a>
        </li>
        <li>
                {{ form_start(delete_form) }}
                    <input type=\"submit\" value=\"Supprimer\">
                {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":review:edit.html.twig", "/var/www/html/flyaround/app/Resources/views/review/edit.html.twig");
    }
}
