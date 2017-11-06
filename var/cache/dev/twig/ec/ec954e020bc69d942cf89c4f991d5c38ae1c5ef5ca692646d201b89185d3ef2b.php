<?php

/* flight/index.html.twig */
class __TwigTemplate_7550ebff38a89f0bdfbbd5aa7a3cc914fce64e21894c33753eade8a9344b05f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "flight/index.html.twig", 2);
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
        $__internal_9b4a5d4ccf18fcdc70126055ef314bbed606b324d9c4572dd10c744d28505dd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b4a5d4ccf18fcdc70126055ef314bbed606b324d9c4572dd10c744d28505dd3->enter($__internal_9b4a5d4ccf18fcdc70126055ef314bbed606b324d9c4572dd10c744d28505dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "flight/index.html.twig"));

        $__internal_6b26188cdf5ec21f91a2c5f675132f5789ea602126bdf2fbf23ddb36a5da64d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b26188cdf5ec21f91a2c5f675132f5789ea602126bdf2fbf23ddb36a5da64d4->enter($__internal_6b26188cdf5ec21f91a2c5f675132f5789ea602126bdf2fbf23ddb36a5da64d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "flight/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b4a5d4ccf18fcdc70126055ef314bbed606b324d9c4572dd10c744d28505dd3->leave($__internal_9b4a5d4ccf18fcdc70126055ef314bbed606b324d9c4572dd10c744d28505dd3_prof);

        
        $__internal_6b26188cdf5ec21f91a2c5f675132f5789ea602126bdf2fbf23ddb36a5da64d4->leave($__internal_6b26188cdf5ec21f91a2c5f675132f5789ea602126bdf2fbf23ddb36a5da64d4_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f814381c101a22fc417c55050684f6dbcd2aff05dc0e37c81bf8bde2102d2db0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f814381c101a22fc417c55050684f6dbcd2aff05dc0e37c81bf8bde2102d2db0->enter($__internal_f814381c101a22fc417c55050684f6dbcd2aff05dc0e37c81bf8bde2102d2db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7b0e6436e65959157e97e700be56eba8362eee960073c7b4827697b825401537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b0e6436e65959157e97e700be56eba8362eee960073c7b4827697b825401537->enter($__internal_7b0e6436e65959157e97e700be56eba8362eee960073c7b4827697b825401537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Flights list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Departure</th>
                <th>Arrival</th>
                <th>Nbfreeseats</th>
                <th>Seatprice</th>
                <th>Takeofftime</th>
                <th>Publicationdate</th>
                <th>Description</th>
                <th>Pilot</th>
                <th>Plane</th>
                <th>Wasdone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["flights"]) || array_key_exists("flights", $context) ? $context["flights"] : (function () { throw new Twig_Error_Runtime('Variable "flights" does not exist.', 25, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["flight"]) {
            // line 26
            echo "            <tr>
                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["flight"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["flight"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["flight"], "departure", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["flight"], "arrival", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["flight"], "nbFreeSeats", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["flight"], "seatPrice", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["flight"], "takeOffTime", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["flight"], "takeOffTime", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 33
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["flight"], "publicationDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["flight"], "publicationDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["flight"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["flight"], "pilot", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["flight"], "plane", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["flight"], "wasDone", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["flight"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["flight"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flight'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_new");
        echo "\">Create a new flight</a>
        </li>
    </ul>
";
        
        $__internal_7b0e6436e65959157e97e700be56eba8362eee960073c7b4827697b825401537->leave($__internal_7b0e6436e65959157e97e700be56eba8362eee960073c7b4827697b825401537_prof);

        
        $__internal_f814381c101a22fc417c55050684f6dbcd2aff05dc0e37c81bf8bde2102d2db0->leave($__internal_f814381c101a22fc417c55050684f6dbcd2aff05dc0e37c81bf8bde2102d2db0_prof);

    }

    public function getTemplateName()
    {
        return "flight/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 55,  153 => 50,  141 => 44,  135 => 41,  124 => 37,  120 => 36,  116 => 35,  112 => 34,  106 => 33,  100 => 32,  96 => 31,  92 => 30,  88 => 29,  84 => 28,  78 => 27,  75 => 26,  71 => 25,  49 => 5,  40 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

{% block body %}
    <h1>Flights list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Departure</th>
                <th>Arrival</th>
                <th>Nbfreeseats</th>
                <th>Seatprice</th>
                <th>Takeofftime</th>
                <th>Publicationdate</th>
                <th>Description</th>
                <th>Pilot</th>
                <th>Plane</th>
                <th>Wasdone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for flight in flights %}
            <tr>
                <td><a href=\"{{ path('flight_show', { 'id': flight.id }) }}\">{{ flight.id }}</a></td>
                <td>{{ flight.departure }}</td>
                <td>{{ flight.arrival }}</td>
                <td>{{ flight.nbFreeSeats }}</td>
                <td>{{ flight.seatPrice }}</td>
                <td>{% if flight.takeOffTime %}{{ flight.takeOffTime|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if flight.publicationDate %}{{ flight.publicationDate|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ flight.description }}</td>
                <td>{{ flight.pilot }}</td>
                <td>{{ flight.plane }}</td>
                <td>{% if flight.wasDone %}Yes{% else %}No{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('flight_show', { 'id': flight.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('flight_edit', { 'id': flight.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('flight_new') }}\">Create a new flight</a>
        </li>
    </ul>
{% endblock %}
", "flight/index.html.twig", "/var/www/html/flyaround/app/Resources/views/flight/index.html.twig");
    }
}
