<?php

/* reservation/show.html.twig */
class __TwigTemplate_35d6f4bf570cfc198db0644c120d603f1759ecaa634a968664aa9b7f28ba4b9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservation/show.html.twig", 1);
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
        $__internal_9f9524ba9a92c919a96cd1763f069ab5dceae98ca885c67358ab0b14b1ccd09f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f9524ba9a92c919a96cd1763f069ab5dceae98ca885c67358ab0b14b1ccd09f->enter($__internal_9f9524ba9a92c919a96cd1763f069ab5dceae98ca885c67358ab0b14b1ccd09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/show.html.twig"));

        $__internal_d1bc55bb4b69f1f541d04937eae98854ab61f9868ee60e049372ea430ae87d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1bc55bb4b69f1f541d04937eae98854ab61f9868ee60e049372ea430ae87d3e->enter($__internal_d1bc55bb4b69f1f541d04937eae98854ab61f9868ee60e049372ea430ae87d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f9524ba9a92c919a96cd1763f069ab5dceae98ca885c67358ab0b14b1ccd09f->leave($__internal_9f9524ba9a92c919a96cd1763f069ab5dceae98ca885c67358ab0b14b1ccd09f_prof);

        
        $__internal_d1bc55bb4b69f1f541d04937eae98854ab61f9868ee60e049372ea430ae87d3e->leave($__internal_d1bc55bb4b69f1f541d04937eae98854ab61f9868ee60e049372ea430ae87d3e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c44058b40ff7c08e4fe11f838efda2abb82a432adbbd8749f25b478c3ad2203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c44058b40ff7c08e4fe11f838efda2abb82a432adbbd8749f25b478c3ad2203->enter($__internal_8c44058b40ff7c08e4fe11f838efda2abb82a432adbbd8749f25b478c3ad2203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1b3a38cff13a9125d3cff05f9073ee14c0b4fb2b473d313910feb917e99e4930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b3a38cff13a9125d3cff05f9073ee14c0b4fb2b473d313910feb917e99e4930->enter($__internal_1b3a38cff13a9125d3cff05f9073ee14c0b4fb2b473d313910feb917e99e4930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservation</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbreservedseats</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "nbReservedSeats", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Publicationdate</th>
                <td>";
        // line 18
        if ($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "publicationDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "publicationDate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Wasdone</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "wasDone", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_edit", array("id" => $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_1b3a38cff13a9125d3cff05f9073ee14c0b4fb2b473d313910feb917e99e4930->leave($__internal_1b3a38cff13a9125d3cff05f9073ee14c0b4fb2b473d313910feb917e99e4930_prof);

        
        $__internal_8c44058b40ff7c08e4fe11f838efda2abb82a432adbbd8749f25b478c3ad2203->leave($__internal_8c44058b40ff7c08e4fe11f838efda2abb82a432adbbd8749f25b478c3ad2203_prof);

    }

    public function getTemplateName()
    {
        return "reservation/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 37,  106 => 35,  100 => 32,  94 => 29,  80 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Reservation</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ reservation.id }}</td>
            </tr>
            <tr>
                <th>Nbreservedseats</th>
                <td>{{ reservation.nbReservedSeats }}</td>
            </tr>
            <tr>
                <th>Publicationdate</th>
                <td>{% if reservation.publicationDate %}{{ reservation.publicationDate|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Wasdone</th>
                <td>{% if reservation.wasDone %}Yes{% else %}No{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('reservation_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('reservation_edit', { 'id': reservation.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "reservation/show.html.twig", "/var/www/html/flyaround/app/Resources/views/reservation/show.html.twig");
    }
}
