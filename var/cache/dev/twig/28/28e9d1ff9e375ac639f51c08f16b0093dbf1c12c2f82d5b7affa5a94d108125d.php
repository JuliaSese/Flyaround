<?php

/* :flight:edit.html.twig */
class __TwigTemplate_89b0ebb49772c6cf7ab5ae911cce47d71bcb3b28321281cf0e0183b644ee3545 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":flight:edit.html.twig", 1);
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
        $__internal_b4882834ef2bfccb5df361efe161486c17ddb9c3abd252124d11c08cdc5f230e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4882834ef2bfccb5df361efe161486c17ddb9c3abd252124d11c08cdc5f230e->enter($__internal_b4882834ef2bfccb5df361efe161486c17ddb9c3abd252124d11c08cdc5f230e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":flight:edit.html.twig"));

        $__internal_07f61b9418e6dd526fd6fee0938501317d5f1d8c848ff9ea2358c467d0094494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f61b9418e6dd526fd6fee0938501317d5f1d8c848ff9ea2358c467d0094494->enter($__internal_07f61b9418e6dd526fd6fee0938501317d5f1d8c848ff9ea2358c467d0094494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":flight:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4882834ef2bfccb5df361efe161486c17ddb9c3abd252124d11c08cdc5f230e->leave($__internal_b4882834ef2bfccb5df361efe161486c17ddb9c3abd252124d11c08cdc5f230e_prof);

        
        $__internal_07f61b9418e6dd526fd6fee0938501317d5f1d8c848ff9ea2358c467d0094494->leave($__internal_07f61b9418e6dd526fd6fee0938501317d5f1d8c848ff9ea2358c467d0094494_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_05281ff8609a4dc70dc38d5f4ebcda0801110a4d90a995568618820c09ee6b18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05281ff8609a4dc70dc38d5f4ebcda0801110a4d90a995568618820c09ee6b18->enter($__internal_05281ff8609a4dc70dc38d5f4ebcda0801110a4d90a995568618820c09ee6b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ff2ba8782d1654dd131104ab4388e80fd187b4520da7bbca1388240534df295e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff2ba8782d1654dd131104ab4388e80fd187b4520da7bbca1388240534df295e->enter($__internal_ff2ba8782d1654dd131104ab4388e80fd187b4520da7bbca1388240534df295e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Flight edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_index");
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
        
        $__internal_ff2ba8782d1654dd131104ab4388e80fd187b4520da7bbca1388240534df295e->leave($__internal_ff2ba8782d1654dd131104ab4388e80fd187b4520da7bbca1388240534df295e_prof);

        
        $__internal_05281ff8609a4dc70dc38d5f4ebcda0801110a4d90a995568618820c09ee6b18->leave($__internal_05281ff8609a4dc70dc38d5f4ebcda0801110a4d90a995568618820c09ee6b18_prof);

    }

    public function getTemplateName()
    {
        return ":flight:edit.html.twig";
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
    <h1>Flight edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('flight_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":flight:edit.html.twig", "/var/www/html/flyaround/app/Resources/views/flight/edit.html.twig");
    }
}
