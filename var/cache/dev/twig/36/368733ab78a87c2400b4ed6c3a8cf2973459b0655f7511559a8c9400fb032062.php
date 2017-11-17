<?php

/* :flight:show.html.twig */
class __TwigTemplate_3bcf34a9389e707d515bb23c81d8a407544e0c7b9c0e7587fbd0a0f726e36f4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":flight:show.html.twig", 1);
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
        $__internal_3d0ae0f06209c3893868401d2d6c89ce8af5a30123bbe4d2cc273f53060bad88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d0ae0f06209c3893868401d2d6c89ce8af5a30123bbe4d2cc273f53060bad88->enter($__internal_3d0ae0f06209c3893868401d2d6c89ce8af5a30123bbe4d2cc273f53060bad88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":flight:show.html.twig"));

        $__internal_969a5eacdeb3af3094ec5288cc6658c5326c8633cda2beba34d368da4cda44c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_969a5eacdeb3af3094ec5288cc6658c5326c8633cda2beba34d368da4cda44c7->enter($__internal_969a5eacdeb3af3094ec5288cc6658c5326c8633cda2beba34d368da4cda44c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":flight:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d0ae0f06209c3893868401d2d6c89ce8af5a30123bbe4d2cc273f53060bad88->leave($__internal_3d0ae0f06209c3893868401d2d6c89ce8af5a30123bbe4d2cc273f53060bad88_prof);

        
        $__internal_969a5eacdeb3af3094ec5288cc6658c5326c8633cda2beba34d368da4cda44c7->leave($__internal_969a5eacdeb3af3094ec5288cc6658c5326c8633cda2beba34d368da4cda44c7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_85fe25f1ce79735bd4760a7d59bc4551e7099a97688f6198a2ac4c07ac87cea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85fe25f1ce79735bd4760a7d59bc4551e7099a97688f6198a2ac4c07ac87cea6->enter($__internal_85fe25f1ce79735bd4760a7d59bc4551e7099a97688f6198a2ac4c07ac87cea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_99929020231537d2db777f1a589f6ab8bf3335e0d18a13b6905ba25114932bb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99929020231537d2db777f1a589f6ab8bf3335e0d18a13b6905ba25114932bb2->enter($__internal_99929020231537d2db777f1a589f6ab8bf3335e0d18a13b6905ba25114932bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Flight</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Departure</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "departure", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Arrival</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "arrival", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbfreeseats</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "nbFreeSeats", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Seatprice</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "seatPrice", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Takeofftime</th>
                <td>";
        // line 30
        if ($this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "takeOffTime", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "takeOffTime", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Publicationdate</th>
                <td>";
        // line 34
        if ($this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "publicationDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "publicationDate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pilot</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "pilot", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Plane</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "plane", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Wasdone</th>
                <td>";
        // line 50
        if ($this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "wasDone", array())) {
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
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_edit", array("id" => $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_99929020231537d2db777f1a589f6ab8bf3335e0d18a13b6905ba25114932bb2->leave($__internal_99929020231537d2db777f1a589f6ab8bf3335e0d18a13b6905ba25114932bb2_prof);

        
        $__internal_85fe25f1ce79735bd4760a7d59bc4551e7099a97688f6198a2ac4c07ac87cea6->leave($__internal_85fe25f1ce79735bd4760a7d59bc4551e7099a97688f6198a2ac4c07ac87cea6_prof);

    }

    public function getTemplateName()
    {
        return ":flight:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 65,  157 => 63,  151 => 60,  145 => 57,  131 => 50,  124 => 46,  117 => 42,  110 => 38,  101 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Flight</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ flight.id }}</td>
            </tr>
            <tr>
                <th>Departure</th>
                <td>{{ flight.departure }}</td>
            </tr>
            <tr>
                <th>Arrival</th>
                <td>{{ flight.arrival }}</td>
            </tr>
            <tr>
                <th>Nbfreeseats</th>
                <td>{{ flight.nbFreeSeats }}</td>
            </tr>
            <tr>
                <th>Seatprice</th>
                <td>{{ flight.seatPrice }}</td>
            </tr>
            <tr>
                <th>Takeofftime</th>
                <td>{% if flight.takeOffTime %}{{ flight.takeOffTime|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Publicationdate</th>
                <td>{% if flight.publicationDate %}{{ flight.publicationDate|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ flight.description }}</td>
            </tr>
            <tr>
                <th>Pilot</th>
                <td>{{ flight.pilot }}</td>
            </tr>
            <tr>
                <th>Plane</th>
                <td>{{ flight.plane }}</td>
            </tr>
            <tr>
                <th>Wasdone</th>
                <td>{% if flight.wasDone %}Yes{% else %}No{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('flight_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('flight_edit', { 'id': flight.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":flight:show.html.twig", "/var/www/html/flyaround/app/Resources/views/flight/show.html.twig");
    }
}
