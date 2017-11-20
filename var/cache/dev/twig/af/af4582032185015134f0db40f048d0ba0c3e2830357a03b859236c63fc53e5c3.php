<?php

/* listing/index.html.twig */
class __TwigTemplate_992725fd05fdefb34388a37444a66a57526adf6ff08c685a62f17c58003f404b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "listing/index.html.twig", 1);
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
        $__internal_156b462823d2e6ddd55d75ef7b13cad25e2aabfa8aec20432e4f3e018bf8b098 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_156b462823d2e6ddd55d75ef7b13cad25e2aabfa8aec20432e4f3e018bf8b098->enter($__internal_156b462823d2e6ddd55d75ef7b13cad25e2aabfa8aec20432e4f3e018bf8b098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listing/index.html.twig"));

        $__internal_1f829d7a63e1b5e8670f52d670c89e2760a0107e7ad98a7577226f233eeabd78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f829d7a63e1b5e8670f52d670c89e2760a0107e7ad98a7577226f233eeabd78->enter($__internal_1f829d7a63e1b5e8670f52d670c89e2760a0107e7ad98a7577226f233eeabd78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listing/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_156b462823d2e6ddd55d75ef7b13cad25e2aabfa8aec20432e4f3e018bf8b098->leave($__internal_156b462823d2e6ddd55d75ef7b13cad25e2aabfa8aec20432e4f3e018bf8b098_prof);

        
        $__internal_1f829d7a63e1b5e8670f52d670c89e2760a0107e7ad98a7577226f233eeabd78->leave($__internal_1f829d7a63e1b5e8670f52d670c89e2760a0107e7ad98a7577226f233eeabd78_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7dad072c2a59d0e95fa39a8b8d3b0ed5746d1e3a4a8d704fc5fc74ba747a1218 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dad072c2a59d0e95fa39a8b8d3b0ed5746d1e3a4a8d704fc5fc74ba747a1218->enter($__internal_7dad072c2a59d0e95fa39a8b8d3b0ed5746d1e3a4a8d704fc5fc74ba747a1218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9d42c535cde60b01a99da7fd46e1655551bef11045670769e12b46a41bfe9b56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d42c535cde60b01a99da7fd46e1655551bef11045670769e12b46a41bfe9b56->enter($__internal_9d42c535cde60b01a99da7fd46e1655551bef11045670769e12b46a41bfe9b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>List</h1>

    <table>
        <tbody>
            <tr>
                <th>N° Réservation (id)</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>N° Flight (id)</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Reservation's Seat</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "NbReservedSeats", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Flight's departure</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "departure", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Flight's arrival</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "arrival", array()), "html", null, true);
        echo "</td>
            </tr>
            ";
        // line 28
        if (($this->getAttribute($this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "pilot", array()), "role", array()) == "Pilot")) {
            // line 29
            echo "            <tr>
                <th>Pilot</th>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "pilot", array()), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        // line 34
        echo "            <tr>
                <th>Plane model</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["planemodel"] ?? $this->getContext($context, "planemodel")), "model", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cruise Speed</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["planemodel"] ?? $this->getContext($context, "planemodel")), "cruiseSpeed", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Flight's description</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    <ul>
        <li><a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wcs_coav_homepage");
        echo "\">Return to homepage</a></li>
    </ul>
";
        
        $__internal_9d42c535cde60b01a99da7fd46e1655551bef11045670769e12b46a41bfe9b56->leave($__internal_9d42c535cde60b01a99da7fd46e1655551bef11045670769e12b46a41bfe9b56_prof);

        
        $__internal_7dad072c2a59d0e95fa39a8b8d3b0ed5746d1e3a4a8d704fc5fc74ba747a1218->leave($__internal_7dad072c2a59d0e95fa39a8b8d3b0ed5746d1e3a4a8d704fc5fc74ba747a1218_prof);

    }

    public function getTemplateName()
    {
        return "listing/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 49,  120 => 44,  113 => 40,  106 => 36,  102 => 34,  96 => 31,  92 => 29,  90 => 28,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>List</h1>

    <table>
        <tbody>
            <tr>
                <th>N° Réservation (id)</th>
                <td>{{ reservation.id }}</td>
            </tr>
            <tr>
                <th>N° Flight (id)</th>
                <td>{{ flight.id }}</td>
            </tr>
            <tr>
                <th>Reservation's Seat</th>
                <td>{{ reservation.NbReservedSeats }}</td>
            </tr>
            <tr>
                <th>Flight's departure</th>
                <td>{{ flight.departure }}</td>
            </tr>
            <tr>
                <th>Flight's arrival</th>
                <td>{{ flight.arrival }}</td>
            </tr>
            {% if flight.pilot.role  == 'Pilot' %}
            <tr>
                <th>Pilot</th>
                <td>{{ flight.pilot }}</td>
            </tr>
            {% endif %}
            <tr>
                <th>Plane model</th>
                <td>{{ planemodel.model }}</td>
            </tr>
            <tr>
                <th>Cruise Speed</th>
                <td>{{ planemodel.cruiseSpeed }}</td>
            </tr>
            <tr>
                <th>Flight's description</th>
                <td>{{ flight.description }}</td>
            </tr>
        </tbody>
    </table>
    <ul>
        <li><a href=\"{{ path('wcs_coav_homepage') }}\">Return to homepage</a></li>
    </ul>
{% endblock %}
", "listing/index.html.twig", "/var/www/html/flyaround/app/Resources/views/listing/index.html.twig");
    }
}
