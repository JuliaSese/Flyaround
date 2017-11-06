<?php

/* flight/show.html.twig */
class __TwigTemplate_6d46f2f10f41ba95058a7af910ee1a6ac35e0f39fccf6a637e0e854dcc98b90b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "flight/show.html.twig", 2);
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
        $__internal_f9492ee7ab07250386e1dcd0936f81c254a7fdde35aab14af882d170d2cfdefd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9492ee7ab07250386e1dcd0936f81c254a7fdde35aab14af882d170d2cfdefd->enter($__internal_f9492ee7ab07250386e1dcd0936f81c254a7fdde35aab14af882d170d2cfdefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "flight/show.html.twig"));

        $__internal_9856ab22ec041981045ded650557406078db07022c5831362b1e7c50ace12d0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9856ab22ec041981045ded650557406078db07022c5831362b1e7c50ace12d0e->enter($__internal_9856ab22ec041981045ded650557406078db07022c5831362b1e7c50ace12d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "flight/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9492ee7ab07250386e1dcd0936f81c254a7fdde35aab14af882d170d2cfdefd->leave($__internal_f9492ee7ab07250386e1dcd0936f81c254a7fdde35aab14af882d170d2cfdefd_prof);

        
        $__internal_9856ab22ec041981045ded650557406078db07022c5831362b1e7c50ace12d0e->leave($__internal_9856ab22ec041981045ded650557406078db07022c5831362b1e7c50ace12d0e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d6eb87faa5454f3b1d593b1533b4428a49f41d7e6a7d75896a1a7ca8eed3cb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d6eb87faa5454f3b1d593b1533b4428a49f41d7e6a7d75896a1a7ca8eed3cb7->enter($__internal_8d6eb87faa5454f3b1d593b1533b4428a49f41d7e6a7d75896a1a7ca8eed3cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d090417615d631c0f4c34650c850bc3569dbdda8221c80b7329c2aa55d97a47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d090417615d631c0f4c34650c850bc3569dbdda8221c80b7329c2aa55d97a47->enter($__internal_1d090417615d631c0f4c34650c850bc3569dbdda8221c80b7329c2aa55d97a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Flight</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new Twig_Error_Runtime('Variable "flight" does not exist.', 11, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Departure</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new Twig_Error_Runtime('Variable "flight" does not exist.', 15, $this->getSourceContext()); })()), "departure", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Arrival</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new Twig_Error_Runtime('Variable "flight" does not exist.', 19, $this->getSourceContext()); })()), "arrival", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbfreeseats</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new Twig_Error_Runtime('Variable "flight" does not exist.', 23, $this->getSourceContext()); })()), "nbFreeSeats", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Seatprice</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new Twig_Error_Runtime('Variable "flight" does not exist.', 27, $this->getSourceContext()); })()), "seatPrice", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Takeofftime</th>
                <td>";
        // line 31
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new Twig_Error_Runtime('Variable "flight" does not exist.', 31, $this->getSourceContext()); })()), "takeOffTime", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new Twig_Error_Runtime('Variable "flight" does not exist.', 31, $this->getSourceContext()); })()), "takeOffTime", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Publicationdate</th>
                <td>";
        // line 35
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new Twig_Error_Runtime('Variable "flight" does not exist.', 35, $this->getSourceContext()); })()), "publicationDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new Twig_Error_Runtime('Variable "flight" does not exist.', 35, $this->getSourceContext()); })()), "publicationDate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new Twig_Error_Runtime('Variable "flight" does not exist.', 39, $this->getSourceContext()); })()), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pilot</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new Twig_Error_Runtime('Variable "flight" does not exist.', 43, $this->getSourceContext()); })()), "pilot", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Plane</th>
                <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new Twig_Error_Runtime('Variable "flight" does not exist.', 47, $this->getSourceContext()); })()), "plane", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Wasdone</th>
                <td>";
        // line 51
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new Twig_Error_Runtime('Variable "flight" does not exist.', 51, $this->getSourceContext()); })()), "wasDone", array())) {
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
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["flight"]) || array_key_exists("flight", $context) ? $context["flight"] : (function () { throw new Twig_Error_Runtime('Variable "flight" does not exist.', 61, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 64, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 66, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_1d090417615d631c0f4c34650c850bc3569dbdda8221c80b7329c2aa55d97a47->leave($__internal_1d090417615d631c0f4c34650c850bc3569dbdda8221c80b7329c2aa55d97a47_prof);

        
        $__internal_8d6eb87faa5454f3b1d593b1533b4428a49f41d7e6a7d75896a1a7ca8eed3cb7->leave($__internal_8d6eb87faa5454f3b1d593b1533b4428a49f41d7e6a7d75896a1a7ca8eed3cb7_prof);

    }

    public function getTemplateName()
    {
        return "flight/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 66,  157 => 64,  151 => 61,  145 => 58,  131 => 51,  124 => 47,  117 => 43,  110 => 39,  101 => 35,  92 => 31,  85 => 27,  78 => 23,  71 => 19,  64 => 15,  57 => 11,  49 => 5,  40 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

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
", "flight/show.html.twig", "/var/www/html/flyaround/app/Resources/views/flight/show.html.twig");
    }
}
