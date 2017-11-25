<?php

/* review/show.html.twig */
class __TwigTemplate_e860dc028a1383bb8e80c51a0e0f75eea6b98067c1e6f5f9b1b5d230d171a5b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "review/show.html.twig", 1);
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
        $__internal_98844bcf4f00e0d386c531fbb10cad56f3f464f290f4cb835203fa324c99f13e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98844bcf4f00e0d386c531fbb10cad56f3f464f290f4cb835203fa324c99f13e->enter($__internal_98844bcf4f00e0d386c531fbb10cad56f3f464f290f4cb835203fa324c99f13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "review/show.html.twig"));

        $__internal_d47f7b84c49dcfaf8aa0e1663427edf785a29b65471f86239e610d62835ee90a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d47f7b84c49dcfaf8aa0e1663427edf785a29b65471f86239e610d62835ee90a->enter($__internal_d47f7b84c49dcfaf8aa0e1663427edf785a29b65471f86239e610d62835ee90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "review/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98844bcf4f00e0d386c531fbb10cad56f3f464f290f4cb835203fa324c99f13e->leave($__internal_98844bcf4f00e0d386c531fbb10cad56f3f464f290f4cb835203fa324c99f13e_prof);

        
        $__internal_d47f7b84c49dcfaf8aa0e1663427edf785a29b65471f86239e610d62835ee90a->leave($__internal_d47f7b84c49dcfaf8aa0e1663427edf785a29b65471f86239e610d62835ee90a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4d9fea2f195c827310a02754368ed452680e5be4cb97a2059122c5f51f531d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4d9fea2f195c827310a02754368ed452680e5be4cb97a2059122c5f51f531d3->enter($__internal_b4d9fea2f195c827310a02754368ed452680e5be4cb97a2059122c5f51f531d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_75b85dc1729e06ad0bf4c20f6065306af40715e44bf69829e9121cb445307572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75b85dc1729e06ad0bf4c20f6065306af40715e44bf69829e9121cb445307572->enter($__internal_75b85dc1729e06ad0bf4c20f6065306af40715e44bf69829e9121cb445307572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Review</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["review"] ?? $this->getContext($context, "review")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Text</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["review"] ?? $this->getContext($context, "review")), "text", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Publicationdate</th>
                <td>";
        // line 18
        if ($this->getAttribute(($context["review"] ?? $this->getContext($context, "review")), "publicationDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["review"] ?? $this->getContext($context, "review")), "publicationDate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Note</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["review"] ?? $this->getContext($context, "review")), "note", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
            ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Supprimer\">
            ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </ul>
";
        
        $__internal_75b85dc1729e06ad0bf4c20f6065306af40715e44bf69829e9121cb445307572->leave($__internal_75b85dc1729e06ad0bf4c20f6065306af40715e44bf69829e9121cb445307572_prof);

        
        $__internal_b4d9fea2f195c827310a02754368ed452680e5be4cb97a2059122c5f51f531d3->leave($__internal_b4d9fea2f195c827310a02754368ed452680e5be4cb97a2059122c5f51f531d3_prof);

    }

    public function getTemplateName()
    {
        return "review/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 30,  89 => 28,  80 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Review</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ review.id }}</td>
            </tr>
            <tr>
                <th>Text</th>
                <td>{{ review.text }}</td>
            </tr>
            <tr>
                <th>Publicationdate</th>
                <td>{% if review.publicationDate %}{{ review.publicationDate|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Note</th>
                <td>{{ review.note }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Supprimer\">
            {{ form_end(delete_form) }}
    </ul>
{% endblock %}
", "review/show.html.twig", "/var/www/html/flyaround/app/Resources/views/review/show.html.twig");
    }
}
